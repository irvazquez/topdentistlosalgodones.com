<section class="{{ $content->class }}">
  <div class="container">
    <div class="row v-align-children">
      <div class="col-md-7 col-md-offset-1 col-sm-6 col-sm-offset-1 text-center">
        <img class="cast-shadow" alt="Screenshot" src="{{ $content->image }}">
      </div>
      <div class="col-md-4 col-sm-5 mb-xs-24">
        {!! $content->content !!}
      </div>
    </div>
  </div>
</section>