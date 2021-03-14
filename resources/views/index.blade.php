@include('fashion._partials.header_styles')
<body class="">
	<div id="app" class="page-wrapper">
     	
        
		<header class="header fixed-top">
		    
			<div class="header-middle">
				<div class="container">
					<div class="header-center order-first order-lg-0 ml-0 ml-lg-auto">
						<button class="mobile-menu-toggler" type="button">
							<i class="icon-menu"></i>
						</button>
						<a href="/" class="logo">
							<img src="{{ $system_settings->logo_path() }}" alt="{{ Config('app.name') }} Logo">
						</a>
					</div><!-- End .header-center -->
				</div><!-- End .container -->
			</div><!-- End .header-middle -->

			<div class="header-bottom sticky-header d-none d-lg-block">
				<div class="container">
					<nav class="main-nav d-flex w-lg-max ">
						<ul class="menu">
                            <li  class="d-down ">
                                <a  target="_blank" href="/fashion/">Fashion</a>
                            </li>
                            <li  class="d-down">
                                <a  target="_blank" href="/fashion/">Apartments</a>
                            </li>
						</ul>
					</nav>
					
				</div><!-- End .container -->
				
			</div><!-- End .header-bottom -->

			
			
		</header><!-- End .header -->

		
        <main class="main main-page">
            <div class="container-fliud mt-3">
                <div  class="row align-items-start ">
                    <div data-title="" class="">
                        <div class="banner-box">
                            <a class="portfolio-thumb" href="">
                                <img src="" alt="" />
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
        </main> 

		

		<footer class="footer">
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
			<span class="mobile-menu-close"><i class="icon-cancel"></i></span>
			<nav class="mobile-nav">
				<ul class="mobile-menu">
				@foreach( $global_categories   as  $category)
				    <li>
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
				</ul>
			</nav><!-- End .mobile-nav -->

			
		</div><!-- End .mobile-menu-wrapper -->
	</div><!-- End .mobile-menu-container -->



	<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>
	<!-- Plugins JS File -->
	<script src="/f/js/app.js?version={{ str_random(6) }}" type="text/javascript"></script>
    @yield('page-scripts')
    <script type="text/javascript">
        @yield('inline-scripts')
    </script>
</body>
</html>





















