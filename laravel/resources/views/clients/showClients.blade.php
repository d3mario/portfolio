@extends ('master')
@section('title')
Clients | Portfolio 
@endsection

@section('content')


    <div class="sm:inline-flex md:block">
        <div class="text-black font-bold text-xl mb-2">Working for you. Here for you </div>

    @foreach ($clients as $client )
        <div class="inline-block bg-gray-500 p-3">
        <a href="/caseStudy/{{$client->id}}"> <img class="website-comps" src="images/{{$client->displayIcon}}"alt=""> </a>
        <h4 data-type=""><a href="/caseStudy/{{$client->id}}"> {{ $client->name}}</a></h4>
        <p data-type="showAll"> {{ $client->name}}</p>
        </div>
    @endforeach
</div>
    </div>
@endsection
