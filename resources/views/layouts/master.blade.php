<!DOCTYPE html>
<html>
<head>

    <!-- Title
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Matchio' --}}
        @yield('title','Matchio')
    </title>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- Google Fonts
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <!-- Bootstrap CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Font Awesome CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Custom CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href='/css/matchio.css' rel='stylesheet'>

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="/images/briefcase.png">

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <!-- Start of Nav
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <nav class="navbar navbar-default">
      <div class="container">
        
        <!-- Brand and toggle get grouped for better mobile display
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Matchio</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
          <ul class="nav navbar-nav">
            @yield('navbar')
          </ul>
          <form class="navbar-form navbar-right">
            <button type="submit" class="btn btn-default">Sign In</button>
            <button type="submit" class="btn btn-default">Sign Up</button>
          </form>
        </div>

      </div>
    </nav>
    <!-- End of Nav
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!-- Start of Container
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="container">
        
        {{-- Main page content will be yielded here --}}
        @yield('content')
    


        <!-- Start of Footer
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <footer>
            <hr>
            &copy; Christian {{ date('Y') }}
        </footer>
        <!-- End of Footer
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    </div>
    <!-- End of Container
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!-- Bootstrap JS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>