<?php echo $__env->make('_partials.header_styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
									<?php $__currentLoopData = $global_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k =>  $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li id="<?php echo e($category->name); ?>" class="p-d-down    <?php echo e($category->name); ?>">
											<a class="<?php echo e($category->name); ?>   
											<?php echo e(session('gender') == strtolower($category->name)  ? 'active-nav-parent' : ''); ?>

											 " style="color: <?php echo e($category->text_color); ?> !important" href="/products/<?php echo e($category->slug); ?>"><?php echo e($category->name); ?> </a>
										</li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</nav>
						</div>
					
					<div class="header-center order-first order-lg-0 ml-0 ml-lg-auto">
						<button class="mobile-menu-toggler" type="button">
							<i class="icon-menu"></i>
						</button>
						<a href="/" class="logo">
							<img src="<?php echo e($system_settings->logo_path()); ?>" alt="<?php echo e(Config('app.name')); ?> Logo">
						</a>
					</div><!-- End .header-center -->
                    <nav-icon    />

				</div><!-- End .container -->
			</div><!-- End .header-middle -->

			<div class="header-bottom sticky-header d-none d-lg-block">
				<div class="container">
					<nav class="main-nav d-flex w-lg-max ">
						<ul class="menu">
							
                            <?php $__currentLoopData = $global_categories[0]->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li  class="d-down <?php echo e($category->parent->name); ?>  <?php echo e(strtolower($category->parent->name) == session('gender') ? '' : 'd-none'); ?>">
                                   <a style="color: <?php echo e($category->text_color); ?> !important" href="/products/<?php echo e($category->slug); ?>"><?php echo e($category->name); ?></a>
								   <?php if($category->children->count()): ?>
										<div class="megamenu megamenu-fixed-width">
											<div class="row">
												<div class="col-lg-9">
													<div class="row">
													<?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

															<div class="col-lg-2">
																<a href="<?php echo e($childs->link()); ?>" class="category-heading"><?php echo e(str_contains($childs->name,'No') ? '' :  $childs->name); ?> </a>
																<?php if($childs->children->count()): ?>
																	<ul class="submenu">
																		<?php if($childs->children->count() > 12): ?>
																			<?php $__currentLoopData = $childs->children->take(12); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																				<li><a href="<?php echo e($children->link()); ?>"><?php echo e($children->name); ?> </a></li>
																			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																			<li ><a  class="bold text-danger" href="/view/<?php echo e($childs->slug); ?>">View All</a></li>
																		<?php else: ?>
																			<?php $__currentLoopData = $childs->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																			<li><a href="<?php echo e($children->link()); ?>"><?php echo e($children->name); ?> </a></li>
																			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																		<?php endif; ?>
																		
																	</ul>
																<?php endif; ?>
															</div><!-- End .col-lg-4 -->
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													</div>
												</div>
												
												<div class="col-lg-3">
													<div class="col-lg-12 p-0">
													<a href="<?php echo e($category->image_custom_link); ?>"><img src="<?php echo e($category->image); ?>" alt="<?php echo e($category->image); ?>" class="product-promo" ></a>
													</div><!-- End .col-lg-4 -->
												</div>
											</div><!-- End .row -->
										</div><!-- End .megamenu -->
									<?php endif; ?>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
                            <?php $__currentLoopData = $global_categories->slice(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							   <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <li class="d-down <?php echo e(strtolower($category->parent->name) == session('gender') ? '' : 'd-none'); ?> show-d  <?php echo e($category->parent->name); ?>">
                                   <a style="color: <?php echo e($category->text_color); ?> !important" href="/products/<?php echo e($category->slug); ?>"><?php echo e($category->name); ?></a>

                                    <div class="megamenu megamenu-fixed-width">
                                        <div class="row">
										    <div class="col-lg-9">
											    <div class="row">
												    <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<div class="col-lg-2">
														<a href="<?php echo e($childs->link()); ?>" class="category-heading"><?php echo e(str_contains($childs->name,'No') ? '' :  $childs->name); ?> </a>
														<?php if($childs->children->count()): ?>
															<ul class="submenu">
															    <?php if($childs->children->count() > 12): ?>
																	<?php $__currentLoopData = $childs->children->take(12); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																		<li><a href="<?php echo e($children->link()); ?>"><?php echo e($children->name); ?> </a></li>
																	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																	<li ><a  class="bold text-danger" href="/view/<?php echo e($childs->slug); ?>">View All</a></li>
																<?php else: ?>
																    <?php $__currentLoopData = $childs->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																	   <li><a href="<?php echo e($children->link()); ?>"><?php echo e($children->name); ?> </a></li>
															      	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																<?php endif; ?>
																
															</ul>
														<?php endif; ?>
													</div><!-- End .col-lg-4 -->
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                                        </div>
											</div>
											
											<div class="col-lg-3">
												<div class="col-lg-12 p-0">
												   <a href="<?php echo e($category->image_custom_link); ?>"><img src="<?php echo e($category->image); ?>" alt="<?php echo e($category->image); ?>" class="product-promo" ></a>
												</div><!-- End .col-lg-4 -->
											</div>
										   

                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu -->
                                </li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
          <?php echo $__env->yieldContent('content'); ?>
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
									<?php $__currentLoopData = $footer_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<div class="col-sm-6 col-6 col-lg-6">
											<div class="widget">
												<h2 class="widget-title"><?php echo e(title_case($info->title)); ?></h2>
												<?php if($info->children->count()): ?>
												<ul class="">
														<?php $__currentLoopData = $info->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<li>
																<a href="<?php echo e($info->link); ?>">
																	<?php echo e($info->title); ?>

																</a>
															</li>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													</ul>
												<?php endif; ?>
												
											</div><!-- End .widget -->
										</div><!-- End .col-sm-6 -->
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
							</div>

							
					</div><!-- End .row -->
				</div><!-- End .container -->
			</div><!-- End .footer-middle -->

			<div class="footer-bottom">
				<div class="container d-flex justify-content-center align-items-center flex-wrap">
					<p class="footer-copyright py-3 pr-4 mb-0">© <?php echo e(config('app.name')); ?>. 2020. All Rights Reserved</p>
					<?php if( auth()->check() && auth()->user()->isAdmin() ): ?>
					  <p class="footer-copyright py-3 pr-4 mb-0"><a target="_blank" href="/admin" >Go to Admin</a></p>
					<?php endif; ?>
				</div><!-- End .container -->
			</div><!-- End .footer-bottom -->
        </footer>

			
    </div><!-- End .page-wrapper -->

	<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

	<div class="mobile-menu-container">
		<div class="mobile-menu-wrapper">
		    <div class="mobile-menu-parent border-bottom mb-3 mt-3">
			   <?php $__currentLoopData = $global_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k =>   $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<a id="<?php echo e(strtolower($category->name)); ?>" class="mr-5 mobile-menu-parent-a <?php echo e($category->name); ?> <?php echo e($k == 0 ? 'mobile-menu-parent-active': ''); ?>" href="#"><?php echo e($category->name); ?></a>
			    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
			<span class="mobile-menu-close">
			   <svg  class="close-icon"><use xlink:href="#close-icon"></use></svg>
            </span>
			<nav class="mobile-nav">
				<ul class="mobile-menu">
				<?php $__currentLoopData = $global_categories[0]->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				    <li class="<?php echo e(strtolower($category->parent->name)); ?> m-d-show"> 
						<a href="/products/<?php echo e($category->slug); ?>"><?php echo e($category->name); ?></a>
						<?php if($category->isCategoryHaveMultipleChildren()): ?>
							<ul>
							    <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li>
								<a href="/products/<?php echo e($children->slug); ?>" class="category-heading"><?php echo e($children->name); ?> </a>
								   <?php if($children->children->count()): ?>
										<ul>
										    <?php $__currentLoopData = $children->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="/products/<?php echo e($children->slug); ?>"><?php echo e($children->name); ?></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</ul>
									<?php endif; ?>
								</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						<?php elseif( !$category->isCategoryHaveMultipleChildren() && $category->children->count() ): ?>
							<ul>
								<?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li><a class="category-heading" href="/products/<?php echo e($children->slug); ?>"><?php echo e($children->name); ?></a></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
							</ul>
						<?php endif; ?>
					</li>
					
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


				<?php $__currentLoopData = $global_categories->slice(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>				    
					<li class="d-none   <?php echo e(strtolower($category->parent->name)); ?> m-d-show">
						<a href="/products/<?php echo e($category->slug); ?>"><?php echo e($category->name); ?></a>
						<?php if($category->isCategoryHaveMultipleChildren()): ?>
							<ul>
							    <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li>
								<a href="/products/<?php echo e($children->slug); ?>" class="category-heading"><?php echo e($children->name); ?> </a>
								   <?php if($children->children->count()): ?>
										<ul>
										    <?php $__currentLoopData = $children->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="/products/<?php echo e($children->slug); ?>"><?php echo e($children->name); ?></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</ul>
									<?php endif; ?>
								</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						<?php elseif( !$category->isCategoryHaveMultipleChildren() && $category->children->count() ): ?>
							<ul>
								<?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li><a class="category-heading" href="/products/<?php echo e($children->slug); ?>"><?php echo e($children->name); ?></a></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
							</ul>
						<?php endif; ?>
					</li>
					
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				

				
				</ul>
			</nav><!-- End .mobile-nav -->

			<div class="mt-1">
		    	<?php if( auth()->check() ): ?>
					<div class="pr-4 pl-4">
						<a  href="/account" type="button"  class="btn btn--primary l-f1 mb-1   btn-lg btn-block"> Account</a>
					</div>
				<?php else: ?>
					<div class="pr-4 pl-4">
						<a  href="/login" type="button"  class="btn btn--primary l-f1 mb-1   btn-lg btn-block"> Login/Register</a>
					</div>
				<?php endif; ?>
			</div>

			
		</div><!-- End .mobile-menu-wrapper -->
	</div><!-- End .mobile-menu-container -->



	<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>
	<!-- Plugins JS File -->
	<script src="/f/js/app.js?version=<?php echo e(str_random(6)); ?>" ></script>
    <?php echo $__env->yieldContent('page-scripts'); ?>
    <script type="text/javascript">
        <?php echo $__env->yieldContent('inline-scripts'); ?>

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





















<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/avenuemontaigne.ng/resources/views/layouts/app.blade.php ENDPATH**/ ?>