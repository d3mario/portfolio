<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'DeMario | Portfolio')</title>
        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
    </head>
    <body>
    <header>
    <nav class="text-right flex items-center justify-between flex-wrap bg-header p-6">
  <div class="flex items-center flex-no-shrink text-white mr-6">
      <a href="/"><img src="../images/d3mario-logo.png" class="pl-32"/></a>
    {{--<span class="font-semibold text-xl tracking-tight">deMario</span>--}}
  </div>
  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-grey-lighter border-grey-light hover:text-white hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto pr-32">
    <div class="text-xl lg:flex-grow">
      <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-grey-lighter hover:text-white mr-4 no-underline">
        home
      </a>
      <a href="/about" class="block mt-4 lg:inline-block lg:mt-0 text-grey-lighter hover:text-white mr-4 no-underline">
        about
      </a>
      <a href="/clients" class="block mt-4 lg:inline-block lg:mt-0 text-grey-lighter hover:text-white no-underline">
        portfolio
      </a>
      <a href="/contact" class="block mt-4 lg:inline-block lg:mt-0 text-grey-lighter hover:text-white no-underline">
        contact
      </a>
    </div>
  </div>
        <!-- <div class="center">
            <a href="http://www.d3mario.com"><img src="images/d3mario-logo.png" id ="main-logo" alt="DeMario Windom | Online Portfolio" /></a>
            <button class="hamburger" rel="js-mobile-navigation-toggle" >☰</button>
            <nav id="nav">
                <ul>
                    <li ><a href="index">Home</a></li>
                    <li> <a href="portfolio">Portfolio </a></li>
                    <li> <a href="about">About </a></li>
                    <li> <a href="contact">Contact </a></li>
                </ul>
            </nav>
        </div> -->
    </nav>
    </header>
    <div class="my-slider">
            <div class="fader" rel="js-slide-image-01">
                <div class="subtitle-text">
                    <h2> Dream &amp Decide</h2>
                    <p>Remove the limits &amp; take flight!</p>
                </div>
                <img src="../images/code-slide.jpeg" />
            </div>
            <div class="fader" rel="js-slide-image-02">
                <div class="subtitle-text">
                    <h2>Design, Develop &amp; Deliver</h2>
                    <p>Bringing visions to life!</p>
                </div>
            </div>
    </div>
<div class="container mx-auto .w-full">
    <main class="xl:p-16">
    @yield('headline')
    @yield('leadingIcons')
    

    <div class="sm:inline-flex md:block lg:flex xl:flex">
    {{--<div class="p-4 flex flex-col justify-between leading-normal xl:w-2/5">--}}
    @yield('content')

    
  @yield('displayShowcase')
    

</div>

</div>
<footer class="flex items-center justify-between flex-wrap bg-footer p-6">
    <p class="text-grey-lighter text-right"> version 1.0.1 | <?php echo date("Y"); ?> </p>
</footer>
<!-- <script src="js/jquery.js"></script> -->
<script src = "{{mix('js/manifest.js')}}" > </script>
<script src = "{{mix('js/vendor.js')}}" > </script>
<script src = "{{mix('js/app.js')}}" > </script>
<!--    <script src="js/carousel.js"></script>-->

</main>
</div>
    </body>
</html>
