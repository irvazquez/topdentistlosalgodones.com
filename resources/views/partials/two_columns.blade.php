<section class="{{ $content->class }}">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        {!! $content->column1 !!}
      </div>
      <div class="col-sm-6">
        {!! $content->column2 !!}
      </div>
      @if(!is_null($content->center))
        <div class="col-sm-12">
          {!! $content->center !!}
        </div>
      @endif
    </div>
  </div>
</section>