<section class="image-bg bg-dark parallax overlay pt120 pb120">
  <div class="background-image-holder">
    <img alt="Background Image" class="background-image" src="{{ $content->image }}">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="uppercase mb8" spellcheck="false" data-ms-editor="true">{{ $content->title }}</h2>
        @if(!is_null($content->content))
          {!! $content->content !!}
        @endif
        {{-- <p class="lead mb40" spellcheck="false" data-ms-editor="true">A brief description of the project.</p>
        <a class="btn btn-lg btn-white mb0" href="#" spellcheck="false" data-ms-editor="true">Open Project</a> --}}
      </div>
    </div>
  </div>        
</section>