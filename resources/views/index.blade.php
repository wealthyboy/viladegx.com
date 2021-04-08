<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Jumbotron Template · Bootstrap</title>


    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">
     <img src="{{ $system_settings->logo_path() }}" width="150" alt="{{ Config('app.name') }} Logo">

  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Fashion <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Apartments</a>
      </li>
      
    </ul>
    
  </div>
</nav>

<main role="main">
  
  <div class="container">
    <!-- Example row of columns -->
    <div class="row">     
        <div data-title="" class="col-6  p-1 text-center">
            <div class="banner-box">
                <a class="portfolio-thumb" href="">
                    <img src="https://avenuemontaigne.ng/uploads/LbTofMzhmOJE9MkpDGTba2uCmB7Y2yYtGew0uZPJ.jpg" alt="" />
                </a>
            </div>
        </div> 

        <div data-title="" class="col-6  p-1 text-center">
            <div class="banner-box">
                <a class="portfolio-thumb" href="">
                    <img src="https://avenuemontaigne.ng/uploads/3ljHDEzjFhTKex6vIwz7B404M0Xxu1SvW024cDEt.jpg" alt="" />
                </a>
            </div>
        </div>
    </div>


  </div> <!-- /container -->

</main>

<footer class="container">
  <p>&copy; Company 2017-2019</p>
</footer>


</html>





















