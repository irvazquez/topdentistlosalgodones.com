<section class="image-square left {{ $content->class }}">
    <div class="col-md-6 image">
      <div class="background-image-holder">
        <img alt="image" class="background-image" src="{{ $content->image }}">
      </div>
    </div>
    <div class="col-md-6 col-md-offset-1 content">
      {!! $content->content !!}
    </div>
  </section>