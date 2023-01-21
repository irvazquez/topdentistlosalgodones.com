<section class="image-square right {{ $content->class }}">
  <div class="col-md-6 image">
    <div class="background-image-holder">
      <img alt="image" class="background-image" src="{{ $content->image }}">
    </div>
  </div>
  <div class="col-md-6 content">
    {!! $content->content !!}
  </div>
</section>