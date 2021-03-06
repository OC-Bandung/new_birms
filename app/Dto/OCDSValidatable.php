<?php

namespace App\Dto;

use Dto\Dto;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Dto\JsonSchemaRegulator;


/**
 * Created by PhpStorm.
 * User: mihai
 * Date: 8/14/18
 * Time: 10:11 AM
 */


class OCDSValidatable extends Dto
{
    /**
     * Receives a response factory from laravel and returns this object as json.
     * We do not use the response()->json here since the Dto knows how to print itself as json and converts
     * structures stored internally to json compliant (scalars as 1 index arrays).
     * @param $response
     * @return mixed
     */
    function getJsonResponse(ResponseFactory $response)
    {
        return $response->make($this->toJson(true))->header('Content-Type', 'application/json');
    }

    function getJsonpResponse(ResponseFactory $response, Request $request)
    {
        $callback=$request->get("callback");
        return $response->make($callback.'('.$this->toJson(true).')')
            ->header('Content-Type', 'application/javascript');
    }

    /**
     * We override the getDefaultRegulator to provide a different service provider
     * @param mixed $regulator
     * @return JsonSchemaRegulator|\Dto\RegulatorInterface|mixed
     */
    protected function getDefaultRegulator($regulator)
    {
        if (is_null($regulator)) {
            return new JsonSchemaRegulator(new CustomDtoServiceContainer(), get_called_class());
        }
        return $regulator;
    }

    /**
     * @param bool $pretty
     *
     * @return string
     */
    public function toJson($pretty = false)
    {
        // JSON can represent scalars!
        if ($this->storage_type === 'scalar') {
            return json_encode(parent::offsetGet(0), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        }

        $data = $this->toArray();

        // Disambiguate between empty arrays [] and empty objects {}
        if (empty($data)) {
            if ($this->regulator->isArray()) {
                return '[]';
            }
            return '{}';
        }

        return ($pretty) ? json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) :
            json_encode($data, JSON_UNESCAPED_SLASHES);
    }
}
