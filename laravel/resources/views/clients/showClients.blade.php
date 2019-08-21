@extends ('master')
@section('title')
Clients | Portfolio 
@endsection

@section('content')


    <div class="sm:inline-flex md:block">
        <div class="text-black font-bold texdixl mb-2">
            <h1 class="portfolio-question-header"> Do you agree</h1>
            <h2 class="case-study-question pl-12">Quality Material Should Represent Your Brand?</h2>
        </div>

    @foreach ($clients as $client )
        <div class="inline-block bg-gray-500 p-3">
        <a href="/caseStudy/{{$client->id}}"> <img class="website-comps" src="images/{{$client->displayIcon}}"alt=""> </a>
        <h4 data-type="" class="pt-4 text-center"><a class="no-underline" href="/caseStudy/{{$client->id}}"> {{ $client->name}}</a></h4>
        {{--<p data-type="showAll"> {{ $client->name}}</p>--}}
        </div>
    @endforeach
</div>
    </div>
@endsection
