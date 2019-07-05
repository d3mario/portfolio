@extends ('master')
@section('title')
About | Demario
@endsection
@section('content')
    <div class="p-4 flex flex-col justify-between leading-normal xl:w-2/5">

    <div class="mb-8">
      <div class="text-black font-bold text-xl mb-2">Working for you. Here for you. </div>
      <p class="antipasto text-grey-darker text-base">As your multimedia specialist it is with my greatest pleasure to maintain the highest level of excellence,
            integrity and respect for you and your brand while communicating to the prospective audience with creative
            material!</p>
        <p class="text-grey-darker"><a class="no-underline text-blue-darkest" href="portfolio.php" >View <span class="bg-orange-darkest hover:bg-blue-darkest text-white font-bold py-2 px-4 rounded-full" rel="spanText">More</a></span></p>
    </div>
    </div>
@endsection
        @section('displayShowcase')

  <div class="h-64 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center xl:w-2/5" style="background-image: url('images/mobile-mod-center/images/mobile-mod-center-display-01.png')" title="Woman holding a mug">
          <!-- <div class="h-64 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center xl:w-2/5" style="background-image: url('images/mobile-mod-center/images/mobile-mod-center-display-01.png')" title="Woman holding a mug">
    </div> -->
    </div>
  <p>
            <a rel="servicesProvided" href="#servicesProvided" ?page="">Provided <span class="samples-text" rel="spanText">Services</span></a><a href="" target="_blank">View <span class="samples-text">print work</span></a>
        </p>



</div>
    <div id="modal" rel="js-modal">
        <!-- <?php

        //$largeImageCount == $count;
        //$largeClientCompositionsViews = $client->getClientCompositonViews();
//        foreach($clientLargeCompositions as $largeComp)
//        {
//            echo ("<img class=\"modal-image\" src=images/$largeComp alt=\" \" rel=\"largeModalImage viewLargeDisplay0\">");
////            $count++;
//        }
                    // echo ("<img class=\"modal-image\" src=images/$clientLargeCompositions[0] alt=\" \" rel=\"largeModalImage\">");

        ?> -->
    </div>
    <div id="servicesDisplay" rel="js-service-modal">
        <div class="modal-content">
            <div id="lb" rel="js-service-modal">
                <p id="services-heading"> Services that were provided to: Mobile Mod Center</p>
            </div>

            <table class="user-list">
                <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead><tbody><tr><td colspan="2"><ul class="languages"></ul></td></tr><tr><td class="heading">Web Design</td><td> <div class="progressBar" rel="max 100"><div></div></div></td><td>100%</td></tr><tr><td class="heading"> Brand Development</td><td> <div class="progressBar" rel="max  100"><div></div></div></td><td> 100%</td></tr><tr><td class="heading">LANGUAGES / SOFTWARE </td><td colspan="2"><ul class="languages"><li><span class="samples-text"> Adobe FireWorks </span></li>  </ul></td>            </tr></tbody>
            </table>
            <div id="lb-footer"> </div>
        </div>
    </div>
    </div>
@endsection