@extends('frontend.layouts.main')

@section('header')
    @extends('frontend.layouts.nav')
@endsection

@section('content')
<div class="mdc-card">
  <section class="mdc-card__media" style="background-image: url(http://localhost/birms2017/assets/media/{{ $article[0]->filename}});background-size: cover; background-repeat: no-repeat;height: 30.313rem;"></section>	
  <section class="mdc-card__primary">
    <h1 class="mdc-card__title mdc-card__title--large">{{ $article[0]->title }}</h1>
    <h2 class="mdc-card__subtitle"><i class="material-icons md-10">date_range</i> {{ MyGlobals::indo_date($article[0]->created) }} <i class="material-icons md-10">domain</i>
    	Sumber: {{ $article[0]->source }} <i class="material-icons md-10">bookmark</i> Dibaca: {{ $article[0]->hits }} </h2>
  </section>
  <section class="mdc-card__supporting-text">
    {!! $article[0]->content !!}
  </section>
</div>
@endsection