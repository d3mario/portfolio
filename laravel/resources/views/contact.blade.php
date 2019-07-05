@extends ('master')
@section('title')
Contact | DeMario
@endsection
@section('headline')
<h1 class="text-center"> Do you value</h1>
<h2 class="text-center"> Excellent Communication skills</h2>
@endsection
@section('leadingIcons')
<div class="sm:inline-flex md:block lg:flex xl:flex">
  <div class="text-grey-darker text-center px-4 py-2 m-2"><a class="no-underline large-phone-icon" href="tel:3035782725">Call Me Today:</a> </div>
  <div class="text-grey-darker text-center px-4 py-2 m-2"><a class="no-underline email-icon" href="testimony">Email me today:</a> </div>
  <div class="text-grey-darker text-center px-4 py-2 m-2"><a class="no-underline linkedin-icon" href="contact">Linked In:</a> </div>
  <div class="text-grey-darker text-center px-4 py-2 m-2"><a class="no-underline gitHub-icon" href="portfolio">Git Hub:</a> </div>
</div>
<hr class="divider">
<div class="sm:inline-flex md:block lg:flex xl:flex">

  <div class="text-grey-darker text-center px-4 py-2 m-2"><a href="tel:3035782725">303-578-2725</a><</div>
  <div class="text-grey-darker text-center px-4 py-2 m-2"><a href="#modal" rel="js-email-form">info [at] d3mario [dot] com</a></div>
  <div class="text-grey-darker text-center px-4 py-2 m-2"><a href="https://www.linkedin.com/pub/demario-windom/21/390/855" target="_blank">DeMario Windom</a> </div>
  <div class="text-grey-darker text-center px-4 py-2 m-2"><a href="https://github.com/d3mario" target="_blank">DeMario Windom</a> </div>

</div>

@endsection
@section('content')
    <div class="p-4 flex flex-col justify-between leading-normal xl:w-2/5">

    <div class="mb-8">
      <div class="text-black font-bold text-xl mb-2">Thank You! 
      <?php
          $mailSent = true;

          if ($_SERVER['REQUEST_METHOD'] === 'POST')
          {
            echo "<p> Your message was sent successfully</p>";
          }
          else {
            echo "<p>I look forward to working with you and bringing your vision to life! </p>";
          }
          ?>
      </div>

    </div>
    </div>
  @endsection