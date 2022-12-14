@include('_partials.header_styles')
<body class="">
	<div id="app" class="page-wrapper">
     	<div class="top-notice bg--primary text-white">
            <div class="container text-center">
                <h5 class="d-inline-block">Get Up to <b>40% OFF</b> New-Season Styles</h5>
                <a href="/" class="category">MEN</a>
                <a href="/" class="category ml-2 mr-3">WOMEN</a>
                <small>* Limited time only.</small>
            </div>
            <!-- End .container -->
        </div>

		<header class="header">
			<div class="header-middle">
				<div class="container">
						<div class="header-left w-lg-max ml-auto ml-lg-0">
							<div class="header-dropdown mt-1  d-none d-lg-block">
								<a href="#" class="pl-0">
									<img src="/f/img/ng.png" alt="Ng">₦
								</a>
								<div class="header-menu">
									<ul>
										<li><a href="#"><img src="/f/img/en.png" alt="England flag">£</a></li>
										<li><a href="#"><img src="/f/img/us.png" alt="France flag">€</a></li>
										<li><a href="#"><img src="/f/img/ng.png" alt="Ng">₦</a></li>
									</ul>
								</div><!-- End .header-menu -->
							</div>
							<nav class="main-nav d-lg-flex d-xl-flex  d-md-flex w-lg-max d-none d-lg-block">
								<ul class="menu mt-1 ml-5">
									@foreach( $global_categories   as $k =>  $category)
										<li id="{{ $category->name }}" class="p-d-down    {{ $category->name }}">
											<a class="{{ $category->name }}   
											{{ session('gender') == strtolower($category->name)  ? 'active-nav-parent' : '' }}
											 " style="color: {{  $category->text_color }} !important" href="/products/{{ $category->slug }}">{{ $category->name }} </a>
										</li>
									@endforeach
								</ul>
							</nav>
						</div>
					
					<div class="header-center order-first order-lg-0 ml-0 ml-lg-auto">
						<button class="mobile-menu-toggler" type="button">
							<i class="icon-menu"></i>
						</button>
						<a href="/" class="logo">
							<img src="{{ $system_settings->logo_path() }}" alt="{{ Config('app.name') }} Logo">
						</a>
					</div><!-- End .header-center -->
                    <nav-icon    />

				</div><!-- End .container -->
			</div><!-- End .header-middle -->

			<div class="header-bottom sticky-header d-none d-lg-block">
				<div class="container">
					<nav class="main-nav d-flex w-lg-max ">
						<ul class="menu">
							
                            @foreach( $global_categories[0]->children   as  $category)
                                <li  class="d-down {{ $category->parent->name }}  {{ strtolower($category->parent->name) == session('gender') ? '' : 'd-none' }}">
                                   <a style="color: {{  $category->text_color }} !important" href="/products/{{ $category->slug }}">{{ $category->name }}</a>
								   @if ($category->children->count())
										<div class="megamenu megamenu-fixed-width">
											<div class="row">
												<div class="col-lg-9">
													<div class="row">
													@foreach (  $category->children as $childs)

															<div class="col-lg-2">
																<a href="{{ $childs->link() }}" class="category-heading">{{ str_contains($childs->name,'No') ? '' :  $childs->name}} </a>
																@if ($childs->children->count())
																	<ul class="submenu">
																		@if ($childs->children->count() > 12)
																			@foreach (  $childs->children->take(12) as $children)
																				<li><a href="{{ $children->link() }}">{{ $children->name }} </a></li>
																			@endforeach
																			<li ><a  class="bold text-danger" href="/view/{{ $childs->slug }}">View All</a></li>
																		@else
																			@foreach (  $childs->children as $children)
																			<li><a href="{{ $children->link() }}">{{ $children->name }} </a></li>
																			@endforeach
																		@endif
																		
																	</ul>
																@endif
															</div><!-- End .col-lg-4 -->
														@endforeach
													</div>
												</div>
												
												<div class="col-lg-3">
													<div class="col-lg-12 p-0">
													<a href="{{ $category->image_custom_link }}"><img src="{{ $category->image }}" alt="{{ $category->image }}" class="product-promo" ></a>
													</div><!-- End .col-lg-4 -->
												</div>
											</div><!-- End .row -->
										</div><!-- End .megamenu -->
									@endif
                                </li>
                            @endforeach
 
                            @foreach( $global_categories->slice(1)   as  $category)
							   @foreach( $category->children   as  $category)

                                <li class="d-down {{ strtolower($category->parent->name) == session('gender') ? '' : 'd-none' }} show-d  {{ $category->parent->name  }}">
                                   <a style="color: {{  $category->text_color }} !important" href="/products/{{ $category->slug }}">{{ $category->name }}</a>

                                    <div class="megamenu megamenu-fixed-width">
                                        <div class="row">
										    <div class="col-lg-9">
											    <div class="row">
												    @foreach (  $category->children as $childs)
													<div class="col-lg-2">
														<a href="{{ $childs->link() }}" class="category-heading">{{ str_contains($childs->name,'No') ? '' :  $childs->name}} </a>
														@if ($childs->children->count())
															<ul class="submenu">
															    @if ($childs->children->count() > 12)
																	@foreach (  $childs->children->take(12) as $children)
																		<li><a href="{{ $children->link() }}">{{ $children->name }} </a></li>
																	@endforeach
																	<li ><a  class="bold text-danger" href="/view/{{ $childs->slug }}">View All</a></li>
																@else
																    @foreach (  $childs->children as $children)
																	   <li><a href="{{ $children->link() }}">{{ $children->name }} </a></li>
															      	@endforeach
																@endif
																
															</ul>
														@endif
													</div><!-- End .col-lg-4 -->
													@endforeach
		                                        </div>
											</div>
											
											<div class="col-lg-3">
												<div class="col-lg-12 p-0">
												   <a href="{{ $category->image_custom_link }}"><img src="{{ $category->image }}" alt="{{ $category->image }}" class="product-promo" ></a>
												</div><!-- End .col-lg-4 -->
											</div>
										   

                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu -->
                                </li>
								@endforeach

                            @endforeach
						</ul>
					</nav>
					<div class="search-bar float-right mt-2">
					   <form  action="/search" method="get">
							<div class="input-group mb-2">
								<input type="text" name="q" class="form-control search-input" placeholder="Search">
								<div class="input-group-append">
									<button class="btn search-btn" type="submit">
										<svg data-icon-id="magnifierSmall"  id="iconLoaded-magnifierSmall">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M11 5a6 6 0 103.476 10.89l3.01 3.01 1.413-1.415-3.008-3.008A6 6 0 0011 5zm-4 6a4 4 0 118 0 4 4 0 01-8 0z"></path></svg>
										</svg>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div><!-- End .container -->
				
			</div><!-- End .header-bottom -->

			
			
		</header><!-- End .header -->

		
        <main class="main main-page">
          @yield('content')
        </main> 

		

		<footer class="footer">
			<div class="footer-middle">
				<div class="container-fluid">
					<div class="row">
							
							<div class="col-sm-6 col-xl-6">
								<div class="widget widget-newsletter">
									<h4 class="widget-title">Subscribe to our newsletter.</h4>
									<p>Sign up for exclusive early Sale access and tailored new arrivals..</p>
									<news-letter />

								</div>
								<p>
									<div class="contact-widget follow">
										<div class="social-icons">
											<a href="" class="social-icon" target="_blank"><i class="fab fa-facebook-f"></i></a>
											<a href="" class="social-icon" target="_blank"><i class="fab fa-instagram"></i></a>
											<a href="" class="social-icon" target="_blank"><i class="fab fa-whatsapp"></i></a>
										</div><!-- End .social-icons -->
									</div>
								</p>
							</div>

							<div class="col-lg-6 col-md-6">
							   <div class="row ">
									@foreach($footer_info as $info)
										<div class="col-sm-6 col-6 col-lg-6">
											<div class="widget">
												<h2 class="widget-title">{{ title_case($info->title) }}</h2>
												@if($info->children->count())
												<ul class="">
														@foreach($info->children as $info)
															<li>
																<a href="{{ $info->link }}">
																	{{ $info->title }}
																</a>
															</li>
														@endforeach
													</ul>
												@endif
												
											</div><!-- End .widget -->
										</div><!-- End .col-sm-6 -->
									@endforeach
								</div>
							</div>

							
					</div><!-- End .row -->
				</div><!-- End .container -->
			</div><!-- End .footer-middle -->

			<div class="footer-bottom">
				<div class="container d-flex justify-content-center align-items-center flex-wrap">
					<p class="footer-copyright py-3 pr-4 mb-0">© {{ config('app.name') }}. 2020. All Rights Reserved</p>
					@if ( auth()->check() && auth()->user()->isAdmin() )
					  <p class="footer-copyright py-3 pr-4 mb-0"><a target="_blank" href="/admin" >Go to Admin</a></p>
					@endif
				</div><!-- End .container -->
			</div><!-- End .footer-bottom -->
        </footer>

			
    </div><!-- End .page-wrapper -->

	<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

	<div class="mobile-menu-container">
		<div class="mobile-menu-wrapper">
		    <div class="mobile-menu-parent border-bottom mb-3 mt-3">
			   @foreach( $global_categories   as $k =>   $category)
					<a id="{{ strtolower($category->name) }}" class="mr-5 mobile-menu-parent-a {{  $category->name }} {{ $k == 0 ? 'mobile-menu-parent-active': '' }}" href="#">{{ $category->name }}</a>
			    @endforeach
			</div>
			<span class="mobile-menu-close">
			   <svg  class="close-icon"><use xlink:href="#close-icon"></use></svg>
            </span>
			<nav class="mobile-nav">
				<ul class="mobile-menu">
				@foreach( $global_categories[0]->children   as  $category)
				    <li class="{{ strtolower($category->parent->name) }} m-d-show"> 
						<a href="/products/{{ $category->slug }}">{{ $category->name }}</a>
						@if ($category->isCategoryHaveMultipleChildren())
							<ul>
							    @foreach (  $category->children as $children)
								<li>
								<a href="/products/{{ $children->slug }}" class="category-heading">{{ $children->name }} </a>
								   @if ($children->children->count())
										<ul>
										    @foreach (  $children->children as $children)
                                                <li><a href="/products/{{ $children->slug }}">{{ $children->name }}</a></li>
                                            @endforeach
										</ul>
									@endif
								</li>
								@endforeach
							</ul>
						@elseif ( !$category->isCategoryHaveMultipleChildren() && $category->children->count() )
							<ul>
								@foreach (  $category->children as $children)
									<li><a class="category-heading" href="/products/{{ $children->slug }}">{{ $children->name }}</a></li>
								@endforeach 
							</ul>
						@endif
					</li>
					
				@endforeach


				@foreach( $global_categories->slice(1)   as  $category)
					@foreach( $category->children   as  $category)				    
					<li class="d-none   {{ strtolower($category->parent->name)  }} m-d-show">
						<a href="/products/{{ $category->slug }}">{{ $category->name }}</a>
						@if ($category->isCategoryHaveMultipleChildren())
							<ul>
							    @foreach (  $category->children as $children)
								<li>
								<a href="/products/{{ $children->slug }}" class="category-heading">{{ $children->name }} </a>
								   @if ($children->children->count())
										<ul>
										    @foreach (  $children->children as $children)
                                                <li><a href="/products/{{ $children->slug }}">{{ $children->name }}</a></li>
                                            @endforeach
										</ul>
									@endif
								</li>
								@endforeach
							</ul>
						@elseif ( !$category->isCategoryHaveMultipleChildren() && $category->children->count() )
							<ul>
								@foreach (  $category->children as $children)
									<li><a class="category-heading" href="/products/{{ $children->slug }}">{{ $children->name }}</a></li>
								@endforeach 
							</ul>
						@endif
					</li>
					
				@endforeach
				@endforeach

				

				
				</ul>
			</nav><!-- End .mobile-nav -->

			<div class="mt-1">
		    	@if ( auth()->check() )
					<div class="pr-4 pl-4">
						<a  href="/account" type="button"  class="btn btn--primary l-f1 mb-1   btn-lg btn-block"> Account</a>
					</div>
				@else
					<div class="pr-4 pl-4">
						<a  href="/login" type="button"  class="btn btn--primary l-f1 mb-1   btn-lg btn-block"> Login/Register</a>
					</div>
				@endif
			</div>

			
		</div><!-- End .mobile-menu-wrapper -->
	</div><!-- End .mobile-menu-container -->



	<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>
	<!-- Plugins JS File -->
	<script src="/f/js/app.js?version={{ str_random(6) }}" ></script>
    @yield('page-scripts')
    <script type="text/javascript">
        @yield('inline-scripts')

		$('.mobile-menu-parent-a').on('click', function(e){
            e.preventDefault()
			let self = $(this);
			$('.mobile-menu-parent-a').css('border', "none");
			let id = self.attr('id')
			$('.m-d-show').addClass('d-none')
			$('.' + id).removeClass('d-none')
			$('#' + id).css('border-bottom', "2px solid #ccc");

		})

		//this is for the navigation
		var n = 0;
		$( ".show-d" ).mouseenter(function() {
		   let t = $(this).offset().left
		   $(this).find(".megamenu-fixed-width").css("left", "-" + t + "px")
		})
		let nav = document.querySelectorAll('li.p-d-down')
		let child_nav = document.querySelectorAll('li.d-down')
		    nav.forEach(function(elm,key){
				const cl = elm.getAttribute('id')
                elm.addEventListener('mouseenter', function(e){
					child_nav.forEach(function(el,i){
						el.classList.add('d-none')
						if (!el.classList.contains('d-none')){
                            el.classList.add('d-none')
						}
						if (el.classList.contains(cl)){
                            el.classList.remove('d-none')
							el.classList.remove('dont-show')
						}
					})
				})
            })


			//Mobile nav
    </script>
</body>
</html>





















