@extends ('master')
@section('title')
Clients | Portfolio 
@endsection

@section('content')
<div class="flex flex-wrap mb-4">
    <div class="text-black font-bold text-xl mb-2">Working for you. Here for you </div>
    @foreach ($clients as $client )
        <div class="sm:w-1 md:w-1/3 lg:w-1/4 xl:w-1/3 mb-4 portfolio-work-wrapper">
        <a href="/caseStudy/{{$client->id}}"> <img class="website-comps" src="images/{{$client->displayIcon}}"alt=""> </a>
        <h4 data-type=""><a href="/caseStudy/{{$client->id}}"> {{ $client->name}}</a></h4>
        <p data-type="showAll"> {{ $client->name}}</p>
        </div>
    @endforeach
</div>
@endsection
