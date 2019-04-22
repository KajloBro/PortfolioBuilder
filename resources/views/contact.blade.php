@extends('layouts.app')

@section('content')

@if ($contact)
    

    {{-- Desktop View --}}
    <div class="desktop" style="background-image: url('{{ asset($contact->photo ? $contact->photo->original : "N/A") }}'); background-size: cover;">
        <div class="row pt-5">
            <div class="offset-8 col-3 contact_info_layout pt-2 pb-2">
                <h2>Contact</h2>
                <br>
                <h4>{{ $contact->full_name }}</h4>
                <br>
                @if ($contact->telephone)
                    <i class="fas fa-phone pr-2"></i>{{ $contact->telephone }}<br>
                @endif
                @if ($contact->location)
                    <i class="fas fa-map-marker-alt pr-2"></i>{{ $contact->location }}<br>
                @endif
                @if ($contact->email)
                    <i class="fas fa-envelope-open pr-2"></i>{{ $contact->email }}<br>
                @endif
            </div>
        </div>
    </div>



    {{-- Phone View --}}
    <div class="phone">
        <img class="margin_pic d-block w-100" src="{{ asset('img/logo_render.jpg') }}" alt="">
        <div class="row m-3">
            <div class="col-12">
                <h2>Contact</h2>
                <br>
                <h4>{{ $contact->full_name }}</h4>
                <br>
                @if ($contact->telephone)
                    <i class="fas fa-phone pr-2"></i>{{ $contact->telephone }}<br>
                @endif
                @if ($contact->location)
                    <i class="fas fa-map-marker-alt pr-2"></i>{{ $contact->location }}<br>
                @endif
                @if ($contact->email)
                    <i class="fas fa-envelope-open pr-2"></i>{{ $contact->email }}<br>
                @endif
            </div>
        </div>
        
    </div>

@endif

@endsection

{{-- BackUp --}}
{{-- +44 75938 060339 --}}
{{-- patricija.radivoj@icloud.com --}}