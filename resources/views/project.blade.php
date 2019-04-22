@extends('layouts.app')

@section('content')

{{-- Desktop View --}}

<div class="row desktop text-center">
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h2>{{ $project->title }}</h2>
            </div>
        </div>

        <div class="row text-left">
            <div class="col-12">
                <p><i>{{ $project->description }}</i></p>
            </div>
        </div>

        <div class="row">
            @foreach ($projectPhotos as $photo)
                <div class="col-6">
                    <img class="portfolio_pic" src="{{ "/img/" . $photo ->small }}" alt="" data-toggle="modal" data-target="#largePhoto{{ $photo->id }}">
                </div>
            @endforeach
        </div>
        
    </div>
</div>
<!-- Modals -->
@foreach ($projectPhotos as $photo)
    
    <div class="modal fade" id="largePhoto{{ $photo->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close pb-0 pl-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img class="modalPhoto" src="{{ "/img/" . $photo->original }}" alt="">
                </div>
            </div>
        </div>
    </div>

@endforeach

  
    
@endsection
