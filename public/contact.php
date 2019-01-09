<?php
include '../private/initalize.php' ;
$title = "Contact ";
include(SHARED_PATH .'/header.php');
?>

<main class="xl:p-16">
  
      <h1 class ="contact-question-header">Do you value</h1>
      <h2 class ="question"> Excellent Communication Skills?</h2>

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

     <div class="sm:inline-flex md:block lg:flex xl:flex">
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

<?php 
  if($_SERVER['REQUEST_METHOD'] != 'POST')
  {
    ?>
    <form class="w-full max-w-md" method="post" action="contact.php?SUCCESS">
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
        First Name
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
      <p class="text-red text-xs italic">Please fill out this field.</p>
    </div>
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
        Email: 
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="email" type="email" >
      <p class="text-red text-xs italic">Please fill out this field.</p>
    </div>
  </div>
  <div class="w-full md:w-full px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
        Email Message: 
      </label>
      <textarea class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="emailMessage"></textarea>
      <p class="text-red text-xs italic">Please fill out this field.</p>
      <div class="md:w-2/3">
      <input type="submit" class="shadow bg-purple hover:bg-purple-light focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" value"Submit">
        
    </div>
  </div>
<?php
  }
  ?>
</div>
</main>


</div>
<?php
include(SHARED_PATH .'/footer.php');
?>
