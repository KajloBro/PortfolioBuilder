@extends('layouts.app')

@section('content')

{{-- Desktop View --}}

<div class="row desktop text-center">
    
    @foreach ($projects as $project)
        <div class="col-6">
            <a href="{{ url('portfolio', $project->id) }}"><img class="portfolio_pic" src="{{ "/img/" . $project->small }}" alt=""></a>
            <h5 class="text-center">{{ $project->title }}</h6>
        </div>
    @endforeach

</div>


{{-- Phone View --}}

<div class="phone">

    @foreach ($projects as $project)
        <div class="col-12">
            <a href="{{ url('portfolio', $project->id) }}"><img class="portfolio_pic" src="{{ "/img/" . $project->small }}" alt=""></a>
            <h5 class="text-center">{{ $project->title }}</h6>
        </div>
    @endforeach

</div>


@endsection
