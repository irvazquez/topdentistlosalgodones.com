@extends('layouts/mainLayout')

@section('content')
  <section class="cover fullscreen image-slider slider-all-controls controls-inside parallax">
    <ul class="slides">
      <li class="overlay image-bg">
        <div class="background-image-holder">
          <img alt="image" class="background-image" src="{{ asset('img/sliders/asiento.jpg') }}">
        </div>
        <div class="container v-align-transform">
          <div class="row">
            <div class="col-md-6 col-sm-8">
              <h1
                class="mb40 mb-xs-16 large animate__animated animate__fadeInLeft"
                spellcheck="false"
                data-ms-editor="true"
                >
                  SAVE UP TO 70% COMPARE TO USA PRICES!!!
                </h1>
              {{-- <h6 class="uppercase mb16" spellcheck="false" data-ms-editor="true">A complete block-based solution</h6>
              <p class="lead mb40" spellcheck="false" data-ms-editor="true">
                  Build beautiful, contemporary sites in just moments
                  <br />
                  with Foundry and Variant Page Builder.
              </p>
              <a class="btn btn-lg" href="#" spellcheck="false" data-ms-editor="true">Start Exploring</a> --}}
              <a
                class="btn btn-lg animate__animated animate__fadeInLeft"
                href="#getEstimate"
                spellcheck="false"
                data-ms-editor="true"
                >
                  Get a Free Estimate
                </a>
            </div>
          </div>
        </div>
      </li>
      <li class="overlay image-bg">
        <div class="background-image-holder">
          <img alt="image" class="background-image" src="{{ asset('img/sliders/instrumentos.jpg') }}">
        </div>
        <div class="container v-align-transform">
          <div class="row">
            <div class="col-md-6 col-sm-8">
              <h1
                class="mb40 mb-xs-16 large animate__animated animate__fadeInLeft"
                spellcheck="false"
                data-ms-editor="true"
              >
                No other company backs you up like us, even after your dental care
              </h1>
              {{-- <h6 class="uppercase mb16" spellcheck="false" data-ms-editor="true">A complete block-based solution</h6>
              <p class="lead mb40" spellcheck="false" data-ms-editor="true">
                  No other company backs you up like<br />
                  us, even after your dental<br />
                  care.
              </p>
              <a class="btn btn-lg" href="#" spellcheck="false" data-ms-editor="true">Start Exploring</a> --}}
              <a
                class="btn btn-lg animate__animated animate__fadeInLeft"
                href="#getEstimate"
                spellcheck="false"
                data-ms-editor="true"
              >
                Get a Free Estimate
              </a>
            </div>
          </div>
        </div>
      </li>
      <li class="overlay image-bg">
        <div class="background-image-holder">
          <img alt="image" class="background-image" src="{{ asset('img/sliders/protesis.jpg') }}">
        </div>
        <div class="container v-align-transform">
          <div class="row">
            <div class="col-md-6 col-sm-8">
              <h1
                class="mb40 mb-xs-16 large animate__animated animate__fadeInLeft"
                spellcheck="false"
                data-ms-editor="true"
              >
                Dental tourism made simple
              </h1>
              {{-- <h6 class="uppercase mb16" spellcheck="false" data-ms-editor="true">A complete block-based solution</h6>
              <p class="lead mb40" spellcheck="false" data-ms-editor="true">
                  Build beautiful, contemporary sites in just moments
                  <br />
                  with Foundry and Variant Page Builder.
              </p>
              <a class="btn btn-lg" href="#" spellcheck="false" data-ms-editor="true">Start Exploring</a> --}}
              <a
                class="btn btn-lg animate__animated animate__fadeInLeft"
                href="#getEstimate"
                spellcheck="false"
                data-ms-editor="true"
              >
                Get a Free Estimate
              </a>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>

  @include('partials/text_center', ['content' => $text_center[0]])

  @include('partials/expertise', ['expertise' => $expertise])

  @include('partials/text_center', ['content' => $text_center[1]])

  @include('forms/estimate')
@endsection