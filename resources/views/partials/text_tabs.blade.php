<section class="{{ $content->class }}">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
				@if(!is_null($content->title))
					<h4 class="uppercase mb80" spellcheck="false" data-ms-editor="true">{{ $content->title }}</h4>
				@endif
				<div class="tabbed-content text-tabs">
					<ul class="tabs">
						@foreach ($content->tabs as $item)		
							<li class="{{ $item->class }}">
								<div class="tab-title">
									<span spellcheck="false" data-ms-editor="true">{{ $item->title }}</span>
								</div>
								<div class="tab-content">
									{!! $item->content !!}
								</div>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
