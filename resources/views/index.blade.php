<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ isset( $page_title) ?  $page_title .' |  '.config('app.name') : 'The Luxury Sale' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ isset($page_meta_description) ? $page_meta_description : $system_settings->meta_description }}">
    <meta name="keywords" content="{{ isset($system_settings->meta_tag_keywords) ? $system_settings->meta_tag_keywords : 'cleanse,detox,flattummy,flattummy tea ng,slimming tea' }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="{{ Config('app.url') }}">

    <!-- Favicone Icon -->
    
       <!-- Favicone Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" href="/img/favicon-96x96.png">
    <link rel="apple-touch-icon" href="/img/favicon-96x96.png">

   

    <!-- CSS -->
    <link rel="stylesheet" href="/f/css/bootstrap.min.css">
	<!-- Main CSS File -->
	<link rel="stylesheet" href="/f/css/style.min.css?version={{ str_random(6) }}">
	<link rel="stylesheet" type="text/css" href="/f/vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="/f/css/skins/skin-default.css">
    @yield('page-css')
    <link href="/f/css/custom.css?version={{ str_random(6) }}" rel="stylesheet" type="text/css" />
    <meta property="og:site_name" content="Ohram Co">
    <meta property="og:url" content="https://theluxurysale.com/">
    <meta property="og:title" content=" theluxurysale">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Online sales of your best brands,buy gucci,versace. etc">
    <meta property="og:image:alt" content="">
    <meta name="twitter:site" content="@theluxurysale">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="theluxurysale - Online sales of your best brands,buy gucci,versace. ">
    <meta name="twitter:description" content="Online sales of your best brands,buy gucci,versace. ">
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-J67D2PM4C7"></script>
	
    <script>
	    window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-J67D2PM4C7');
		Window.user = {
			user: {!! auth()->check() ? auth()->user() : 0000 !!},
			loggedIn: {!! auth()->check() ? 1 : 0 !!},
			settings: {!! isset($system_settings) ? $system_settings : '' !!},
			token: '{!! csrf_token() !!}'
		}
	</script>
</head>
<body class="">
    
	<div id="app" class="page-wrapper">
		

		<header class="header  fixed-top">
			<div class="header-middle ">
				<div class="container">
					<div class="header-left w-lg-max ml-auto ml-lg-0">
						<div class="header-icon header-search header-search-inline header-search-category">
							<a href="#" class="search-toggle mr-1" role="button"><i class="icon-search-3 "></i></a>
							<form action="/search" method="get">
								<div class="header-search-wrapper">
									<input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
									<button class="btn icon-search-3 p-0" type="submit"></button>
								</div><!-- End .header-search-wrapper -->
							</form>
						</div><!-- End .header-search -->
					</div><!-- End .header-left -->

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
					<nav class="main-nav d-flex w-lg-max justify-content-center">
						<ul class="menu">
							
                            @foreach( $global_categories   as  $category)

                                <li>
                                   <a href="{{ $category->link() }}">{{ $category->name }}</a>
                                   @if ($category->isCategoryHaveMultipleChildren())

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
												@if ($category->image)
													<div class="col-lg-12 p-0">
														<img src="{{ $category->image }}" alt="{{ $category->name }}" class="product-promo">
													</div><!-- End .col-lg-4 -->
												@endif
		                                   </div>
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu -->
                                    @elseif ( !$category->isCategoryHaveMultipleChildren() && $category->children->count() )
                                        <ul>
                                            @foreach (  $category->children as $children)
                                               <li><a href="/products/{{ $children->slug }}">{{ $children->name }}</a></li>
                                            @endforeach 
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
						</ul>
					</nav>
				</div><!-- End .container -->
			</div><!-- End .header-bottom -->
		</header><!-- End .header -->
        <main class="main main-page">
          @yield('content')
        </main> 

		<footer class="footer">
				
          <div class="footer-bottom text-center">
            <div class="container d-flex justify-content-center align-items-center flex-wrap">
              <p class="footer-copyright py-3 pr-4 mb-0">©.AvenueMontaigne {{ date('Y') }}. All Rights Reserved</p>
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
						<a href="{{ $category->link() }}">{{ $category->name }}</a>
						@if ($category->isCategoryHaveMultipleChildren())
							<ul>
							    @foreach (  $category->children as $children)

								<li>
								   <a href="{{ $children->link() }}" class="category-heading">{{ str_contains($children->name,'No') ? '' :  $children->name}} </a>
								   @if ($children->children->count())
										<ul>
										    @foreach (  $children->children as $children)
                                                <li><a href="{{ $children->link() }}">{{ $children->name }}</a></li>
                                            @endforeach
										</ul>
									@endif
								</li>
								@endforeach
							</ul>
						@elseif ( !$category->isCategoryHaveMultipleChildren() && $category->children->count() )
							<ul>
								@foreach (  $category->children as $children)
									<li><a class="category-heading" href="/products/{{ $category->slug }}">{{ $children->name }}</a></li>
								@endforeach 
							</ul>
						@endif
					</li>
					
				@endforeach
				</ul>
			</nav><!-- End .mobile-nav -->

		</div><!-- End .mobile-menu-wrapper -->
	</div><!-- End .mobile-menu-container -->

	

	<!-- Add Cart Modal -->
	
    <div class="watsapp pt-3">
		<a class="chat-on-watsapp" target="_blank" href="https://wa.me/2349043111111">
		<i class="fab fa-whatsapp fa-2x float-right mr-2"></i></a>
	</div>


	<!-- Plugins JS File -->
	<script src="/js/app.js?version={{ str_random(6) }}" type="text/javascript"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
	<!-- Main JS File -->
	<script src="/js/main.min.js?version={{ str_random(6) }}"></script>
	<script src="{{ asset('js/loadProducts.jquery.js') }}"></script> 

    @yield('page-scripts')
    <script type="text/javascript">
        @yield('inline-scripts')
    </script>
</body>
</html>










