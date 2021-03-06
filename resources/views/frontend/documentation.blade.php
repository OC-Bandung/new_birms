@extends('frontend.layouts.main')

@section('header')
    @include('frontend.layouts.nav')
@endsection

@section('content')

<section class="bg-primary inner-image-banner">
    <div class="container">
      <div class="row  pt-3 pb-5">
        <div class="col">
          <div class="h3 text-white">
            Developer Documentation
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container-fluid p-0 ">
        <div class="row no-gutters">
            <div class="col-3 bg-dark h6">
              <div class="h4 p-2 text-light">Table of Contents</div>
              <div class="list-group text-light list-group-flush list-group-dark">
                  <a class="list-group-item active" id="list-summary-list"  doc="{{ url('documentation-files/1-summary.md') }}">Summary</a>
                  <a class="list-group-item" id="list-basic-list"           doc="{{ url('documentation-files/2-basic.md') }}">Basic and advanced API queries</a>
                  <a class="list-group-item" id="list-understand-list"      doc="{{ url('documentation-files/3-understand.md') }}">Understand the data</a>
                  <a class="list-group-item" id="list-download-list"        doc="{{ url('documentation-files/4-download.md') }}">Download the data</a>
                  <a class="list-group-item" id="list-endless-list"         doc="{{ url('documentation-files/5-endless.md') }}">Endless possibilities</a>
              </div>
            </div>

            <div id="documentation-content" class="col p-3">

            </div>
          </div>
    </div>
  </section>

@endsection

@section('footer')
  <script type="text/javascript" src="{{ url('js/documentation/markdown-it.min.js') }}"> </script>
  <script type="text/javascript" src="{{ url('js/documentation/ui.js') }}"> </script>
@endsection