<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/theme-red.css') }}" rel="stylesheet" type="text/css" media="all" />
		{{-- <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" media="all" /> --}}
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
		@yield('addCss')
  </head>
  <body class="scroll-assist btn-rounded">
		@yield('flash_message')
		<div class="nav-container">
			<nav>
				<div class="nav-bar">
					<div class="module left">
							<a href="{{ route('home') }}">
									<img class="logo logo-light" alt="Foundry" src="{{ asset('img/logo_top_light.png') }}">
									<img class="logo logo-dark" alt="Foundry" src="{{ asset('img/logo_top_dark.png') }}">
							</a>
					</div>
					<div class="module widget-handle mobile-toggle right visible-sm visible-xs">
							<i class="ti-menu"></i>
					</div>
					<div class="module-group right">
						<div class="module left">
							<ul class="menu">
								<li>
									<a href="{{ route('whatIsLosAlgodones') }}" spellcheck="false" data-ms-editor="true">What Is Los Algodones?</a>
								</li>
								<li>
									<a href="{{ route('choosingTheClinic') }}" spellcheck="false" data-ms-editor="true">Choosing the Correct Clinic For Your Needs</a>
								</li>
								<li>
									<a href="{{ route('samplePrice') }}" spellcheck="false" data-ms-editor="true">Sample Price</a>
								</li>
								<li>
									<a href="{{ route('gallery') }}" spellcheck="false" data-ms-editor="true">Our Gallery</a>
								</li>
								<li>
									<a href="{{ route('testimonials') }}" spellcheck="false" data-ms-editor="true">Testimonials</a>
								</li>
								<li class="has-dropdown">
										<a href="#" spellcheck="false" data-ms-editor="true">
												Treatments
										</a>
										<ul>
												<li>
													<a href="{{ route('treatments', ['treatment' => 'teeth_withening']) }}" spellcheck="false" data-ms-editor="true">
														Teeth Withening
													</a>
												</li>
												<li>
													<a href="{{ route('treatments', ['treatment' => 'dental_implants']) }}" spellcheck="false" data-ms-editor="true">
														Dental Implants
													</a>
												</li>
												<li>
													<a href="{{ route('treatments', ['treatment' => 'dental_veneers']) }}" spellcheck="false" data-ms-editor="true">
														Dental Veneers
													</a>
												</li>
												<li>
													<a href="{{ route('treatments', ['treatment' => 'dental_crowns']) }}" spellcheck="false" data-ms-editor="true">
														Dental Crowns
													</a>
												</li>
												<li>
													<a href="{{ route('treatments', ['treatment' => 'root_canals']) }}" spellcheck="false" data-ms-editor="true">
														Root Canals
													</a>
												</li>
												<li>
													<a href="{{ route('treatments', ['treatment' => 'dentures']) }}" spellcheck="false" data-ms-editor="true">
														Dentures
													</a>
												</li>
												<li>
													<a href="{{ route('treatments', ['treatment' => 'full_mouth_reconstruction']) }}" spellcheck="false" data-ms-editor="true">
														Full mouth reconstruction
													</a>
												</li>
												<li>
													<a href="{{ route('treatments', ['treatment' => 'periodontal_disease']) }}" spellcheck="false" data-ms-editor="true">
														Periodontal Disease
													</a>
												</li>
												{{-- <li>
													<a href="{{ route('treatments', ['treatment' => 'dental_veneers']) }}" spellcheck="false" data-ms-editor="true">
														Dental Veneers
													</a>
												</li> --}}
										</ul>
								</li>
								{{-- <li class="has-dropdown">
										<a href="#" spellcheck="false" data-ms-editor="true">
												Mega Menu
										</a>
										<ul class="mega-menu">
												<li>
														<ul>
																<li>
																		<span class="title" spellcheck="false" data-ms-editor="true">Column 1</span>
																</li>
																<li>
																		<a href="#" spellcheck="false" data-ms-editor="true">Single</a>
																</li>
														</ul>
												</li>
												<li>
														<ul>
																<li>
																		<span class="title" spellcheck="false" data-ms-editor="true">Column 2</span>
																</li>
																<li>
																		<a href="#" spellcheck="false" data-ms-editor="true">Single</a>
																</li>
														</ul>
												</li>
										</ul>
								</li>
								<li class="has-dropdown">
										<a href="#" spellcheck="false" data-ms-editor="true">
												Single Dropdown
										</a>
										<ul>
												<li class="has-dropdown">
														<a href="#" spellcheck="false" data-ms-editor="true">
																Second Level
														</a>
														<ul>
																<li>
																		<a href="#" spellcheck="false" data-ms-editor="true">
																				Single
																		</a>
																</li>
														</ul>
												</li>
										</ul>
								</li> --}}
							</ul>
						</div>
							
						{{-- <div class="module widget-handle language left">
								<ul class="menu">
										<li class="has-dropdown">
												<a href="#" spellcheck="false" data-ms-editor="true">ENG</a>
												<ul>
														<li>
																<a href="#" spellcheck="false" data-ms-editor="true">French</a>
														</li>
														<li>
																<a href="#" spellcheck="false" data-ms-editor="true">Deutsch</a>
														</li>
												</ul>
										</li>
								</ul>
						</div> --}}
					</div>
						
				</div>
			</nav>
		</div>

		<div class="main-container">
      @yield('content')
			<footer class="footer-2 bg-dark text-center-xs">
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							<a href="/">
                <img class="image-xxs fade-half" alt="Pic" src="{{ asset('img/logo_top_light.png') }}">
              </a>
						</div>
					
						<div class="col-sm-6 text-center">
							<span class="fade-half" spellcheck="false" data-ms-editor="true">
								© Copyright {{ now()->year }} Top Dentist - All Rights Reserved
							</span>
						</div>
					
						<div class="col-sm-3 text-right text-center-xs">
							<ul class="list-inline social-list">
								<li><a href="#"><i class="ti-twitter-alt"></i></a></li>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-dribbble"></i></a></li>
								<li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<a target="_blank" href="https://api.whatsapp.com/send?phone=526861517039" class="whatsappFloat">
    	<i class="fa fa-whatsapp"></i>
		</a>
		
				
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/flexslider.min.js') }}"></script>
    <script src="{{ asset('js/parallax.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
		<script src="{{ asset('js/custom.js') }}"></script>
		@yield('addJs')
  </body>
</html>
