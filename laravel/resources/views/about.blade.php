{{--TODO clean up code to reduce duplicate code.--}}
@extends ('master')
@section('title')
    Case Study | Demario
@endsection
@if(is_null($error))
@section('headline')
    <h1 class="portfolio-question-header"> Do you agree</h1>
    <h2 class="case-study-question pl-12">Quality Material Should Represent Your Brand?</h2>
@endsection
@section('content')
    <!-- <div class="text-grey-darker font-bold text-xl mb-2">Working for you. Here for you. </div> -->

    <div class="text-grey-darker text-left px-1 mb-8 pl-12 pt-5">

        <h3>{{$client['name']}}  </h3>

        <p class="case" rel="project-caseStudy">{!! $client['body'] !!}</p>
        <h4 class="pt-4">Methods/Services Provided:</h4>
        <ul rel="caseStudy-tasks" class="more">
            @foreach($client['tasks'][0]->methods as $task)
                <li>{{$task}}</li>
            @endforeach
            @foreach($client['tasks'][0]->services as $service)
                <li>{{$service}}</li>
            @endforeach
        </ul>
        <br />
        <a class="no-underline text-blue-darkest mt-5" rel="showMoreText" href="#" >View <span class="bg-orange-darkest hover:bg-blue-darkest text-white font-bold py-2 px-4 rounded-full">More</span></a>
    </div>
@endsection
@section('displayShowcase')

    <div id="myslider" class="small-slide-container h-64 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center xl:w-2/5 small-slide" >
        <img class="absolute" id="left-slideshow-button" rel="slideButtonLeft"src="../images/left-slidder-button.png" />
        <img class="absolute" id="right-slideshow-button" rel="slideButtonRight" src="../images/right-slidder-button.png" />
        @foreach($client['images'] as $image)
            <div class="slides center">
                <img src="../images/{{$image->thumbnail}}" rel="smallThumbnail{{$loop->index}}" />
            </div>
        @endforeach

        <p class="text">
            <a class="no-underline text-blue-darkest" rel="servicesProvided" href="#servicesProvided" ?page="">Provided <span class="bg-orange-darkest hover:bg-blue-darkest text-white font-bold py-2 px-4 rounded-full" rel="spanText">Services</span></a><a class="no-underline text-blue-darkest" href="" target="_blank">View <span class="bg-orange-darkest hover:bg-blue-darkest text-white font-bold py-2 px-4 rounded-full" rel="spanText">print work</span></a>
        </p>
        {{--</div>--}}

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
@else
@section('headline')
    <h1 class="portfolio-question-header"> Do you agree</h1>
    <h2 class="case-study-question">Quality Material Should Represent Your Brand?</h2>
@endsection
@section('content')
    <!-- <div class="text-grey-darker font-bold text-xl mb-2">Working for you. Here for you. </div> -->

    <div class="text-grey-darker text-left px-1 mb-8">

        <h3>{{$error}}  </h3>

        <p class="case">Oops!</p>
    </div>
@endsection
@section('displayShowcase')

    <div class="h-64 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center xl:w-2/5" style="background-image: url('images/mobile-mod-center/images/mobile-mod-center-display-01.png')" title="Woman holding a mug">

    </div>

    </div>
@endsection
@endif
