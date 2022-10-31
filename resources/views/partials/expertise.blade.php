<section class="bg-dark">
  <div class="container">
    <div class="row mb64 mb-xs-24">
      <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
        <h3 spellcheck="false" data-ms-editor="true">{{ $expertise->heading }}</h3>
      </div>
    </div>
    <div class="row">

      @foreach ($expertise->items as $item)    
        <div class="col-md-5 col-md-offset-1 col-sm-6 mb40 mb-xs-24 text-center">
          <i class="icon inline-block mb16 fade-3-4 {{ $item->icon }}"></i>
          <h4 spellcheck="false" data-ms-editor="true">{{ $item->title}}</h4>
          <p spellcheck="false" data-ms-editor="true">
            {!! $item->text !!}
          </p>
        </div>
      @endforeach

    </div>		            
  </div>
</section>