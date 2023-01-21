@section('addCss')
<link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

<section class="{{ $content->class }}">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h4 class="uppercase mb16">{{ $content->title}}</h4>
        {{-- <p class="lead mb64">
            
        </p> --}}
        {!! $content->content !!}
      </div>
    </div>
    <!--end of row-->
    <div class="row">
      <div class="col-sm-12">
        <div class="lightbox-grid square-thumbs" data-gallery-title="Gallery">
          <ul>
            @foreach($content->images as $image)
              <li>
                <a href="{{ $image->large }}" data-lightbox="true">
                  <div class="background-image-holder">
                    <img alt="{{ $image->alt }}" class="background-image" src="{{ $image->thumbnail }}" />
                  </div>
                </a>
              </li>
            @endforeach
          </ul>
        </div>
        <!--end of lightbox gallery-->
      </div>
    </div>
    <!--end of row-->
  </div>
  <!--end of container-->
</section>

@section('addJs')
  <script src="{{ asset('js/lightbox.min.js') }}"></script>
@endsection