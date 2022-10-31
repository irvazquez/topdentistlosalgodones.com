<section class="{{ $content->class }}">
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1 text-center">
          @if(!is_null($content->title))
            <h3 class="uppercase color-primary mb40 mb-xs-24" spellcheck="false" data-ms-editor="true">{{ $content->title }}</h3>
          @endif
          {!! $content->content !!}
        </div>
      </div>      
    </div>
  </section>