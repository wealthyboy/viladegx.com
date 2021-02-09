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
    <!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/min/tiny-slider.helper.ie8.js"></script><![endif]-->
    <style>
        html, body{
            background: #6f4e37;
        }
    </style>
    

</head>
    <body>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="logo">
                            <img src="https://avenuemontaigne.ng/uploads/m/7CeOwKKZQ0qrIEiUpcMeV7i4EG2K2RBpovPWKgW6.png" />
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="banner">
                            <img src="https://avenuemontaigne.ng/uploads/7gk3dB6sc1T1joovkGcWZ5NzmUAOfOK4GjLLBBeF.jpg" />
                        </div> 
                    </div>
                    <div class="col-6">
                        <div class="banner services-slider">
                           <div>
                              <img src="https://avenuemontaigne.ng/uploads/7gk3dB6sc1T1joovkGcWZ5NzmUAOfOK4GjLLBBeF.jpg" />
                           </div> 
                           <div>
                              <img src="https://avenuemontaigne.ng/uploads/7gk3dB6sc1T1joovkGcWZ5NzmUAOfOK4GjLLBBeF.jpg" />
                           </div> 
                           <div> 
                              <img src="https://avenuemontaigne.ng/uploads/7gk3dB6sc1T1joovkGcWZ5NzmUAOfOK4GjLLBBeF.jpg" />
                           </div>
                        </div> 
                    </div>
                </div>
            </div>
        
        </div>
        <script src="/js/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

        <script type="module">
            var slider = tns({
                container: '.services-slider',
                items: 3,
                slideBy: 'page',

                autoplay: true
            });
        </script>



    </body>
</html>
