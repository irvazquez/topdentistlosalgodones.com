<section class="{{ $content->class }}">
  <div class="container">
      <div class="row">
        @foreach($content->videos as $video)
          <div class="col-sm-6 text-center">
            @if(!is_null($video->title))
              <h4 class="uppercase mb16">{{ $video->title }}</h4>
            @endif
            @if(!is_null($video->content))
              <p class="lead mb64">
                  {!! $video->content !!}
              </p>
            @endif
            <div class="embed-video-container embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{ $video->src }}" allowfullscreen="allowfullscreen"></iframe>
            </div>
            <!--end of embed video container-->
          </div>
        @endforeach
      </div>
      <!--end of row-->
  </div>
  <!--end of container-->
</section>