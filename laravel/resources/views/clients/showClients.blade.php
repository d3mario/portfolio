@extends ('master')
@section('title')
Clients | Portfolio 
@endsection

@section('content')
    <div class="text-black font-bold text-xl mb-2">Working for you. Here for you </div>

    <div class="flex flex-wrap mb-4">
    @foreach ($clients as $client )
        <div class="w-full bg-gray-500 portfolio-work-wrapper">
        <a href="/caseStudy/{{$client->id}}"> <img class="website-comps" src="images/{{$client->displayIcon}}"alt=""> </a>
        <h4 data-type=""><a href="/caseStudy/{{$client->id}}"> {{ $client->name}}</a></h4>
        <p data-type="showAll"> {{ $client->name}}</p>
        </div>
    @endforeach
</div>
@endsection
