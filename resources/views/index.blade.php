<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ isset( $page_title) ?  $page_title .' |  '.config('app.name') :  $system_settings->meta_title  }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ isset($page_meta_description) ? $page_meta_description : $system_settings->meta_description }}">
    <meta name="keywords" content="{{ isset($system_settings->meta_tag_keywords) ? $system_settings->meta_tag_keywords : '' }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="{{ Config('app.url') }}">

     <!-- Favicone Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
	<link rel="icon" href="/img/favicon.ico" type="image/x-icon">
	<link rel="icon" type="image/png" href="/img/favicon-96x96.png">
	<link rel="apple-touch-icon" href="/img/favicon-96x96.png">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
	<!-- Main CSS File -->

    @yield('page-css')
    <meta property="og:site_name" content="avenuemontaigne Co">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:title" content="avenuemontaigne">
    <meta property="og:type" content="website">
    <meta property="og:description" content="{{ isset($page_meta_description) ? $page_meta_description : $system_settings->meta_description }}">
    <meta property="og:image:alt" content="">
    <meta name="twitter:site" content="@avenuemontaigne">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ isset($page_meta_description) ? $page_meta_description : $system_settings->meta_description }}">
    <meta name="twitter:description" content="{{ isset($page_meta_description) ? $page_meta_description : $system_settings->meta_description }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/min/tiny-slider.helper.ie8.js"></script><![endif]-->
    <style>
        html, body{
            background: #6f4e37;
        }


        .banner{height: 350px; overflow: hidden;}
        
    </style>
    

</head>
    <body>
        <div class="content">
            <div class="container-fluid -2s">
                <div class="row">
                    <div class="col-12">
                        <div class="logo text-center">
                            <img class="img-fluid" src="https://avenuemontaigne.ng/uploads/m/7CeOwKKZQ0qrIEiUpcMeV7i4EG2K2RBpovPWKgW6.png" />
                        </div>
                    </div>
                    <div class="col-6  animate__animated animate__fadeInRight">
                        <div class="banner fashion-slider">
                            <div>
                                <a href="/fashion"><img class="img-fluid" src="https://avenuemontaigne.ng/uploads/1GtkyaWILrf2zsJMW9I3SoYEFqlYJrhzveZm18eg.jpg" /></a>
                                <div class="image-content">
                                    <div class="text">
                                        Fashion
                                    </div>
                                    <div class="cta">Shop Now</div>

                                </div>
                            </div> 
                            <div>
                                <a href="/fashion"><img class="img-fluid"  src="https://avenuemontaigne.ng/uploads/hI7I3bONTGD0L6p6yViEKrOsAxkuWnaPKcfiRPxs.webp" /></a>
                                <div class="image-content">
                                    <div class="text">
                                        Art
                                    </div>
                                    <div class="cta">Shop Now</div>

                                </div>
                            </div> 
                        </div>
                           
                    </div>
                    <div class="col-6  animate__animated animate__fadeInLeft">
                        <div class="banner services-slider">
                           <div>
                                <a href="#"><img class="img-fluid" src="https://avenuemontaigne.ng/uploads/7gk3dB6sc1T1joovkGcWZ5NzmUAOfOK4GjLLBBeF.jpg" /></a>
                           </div> 
                           <div>
                              <img class="img-fluid" src="https://avenuemontaigne.ng/uploads/eR6I0yzb6DtHAyF7A6ZvqATwF9AMnvoAYIRdqPS0.jpg" />
                           </div> 
                           <div> 
                              <img  class="img-fluid" src="https://avenuemontaigne.ng/uploads/IdysQzOEpBY3KfHYP9n1Gxn3ESZazA0SI9YfSxip.jpg" />
                           </div>
                        </div> 
                    </div>


                    <div class="col-12 text-center mt-5">
                        <p>© Copyright 2021 Avenue Montaigne International. All rights reserved. </p>
                    </div>

                </div>
            </div>
        
        </div>
        <script src="/js/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

        <script type="module">
            var slider = tns({
                container: '.services-slider',
                items: 1,
                slideBy: 'page',
                autoplay: true,
                nav: false,    
                speed: 800,
                autoplayButtonOutput: false,
                mouseDrag: true,
                //controlsContainer: "#customize-controls",
            });

            var slider = tns({
                container: '.fashion-slider',
                items: 1,
                slideBy: 'page',
                nav: false,    
                autoplay: true,
                speed: 700,
                autoplayButtonOutput: false,
                mouseDrag: true,
                //controlsContainer: "#customize-controls",
            });

        </script>



    </body>
</html>
