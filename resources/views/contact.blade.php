@extends('layouts.app')

@section('content')
    

{{-- Desktop View --}}
<div class="desktop" style="background-image: url('{{ asset('img/logo_render.jpg') }}'); background-size: cover;">
    <div class="row pt-5">
        <div class="offset-8 col-3 contact_info_layout pt-2 pb-2">
            <h2>Contact</h2>
            <br>
            <h4>Patricija Radivoj</h4>
            <br>
            <i class="fas fa-phone pr-2"></i>+44 75938 060339<br>
            <i class="fas fa-map-marker-alt pr-2"></i>Luton<br>
            <i class="fas fa-envelope-open pr-2"></i>patricija.radivoj@icloud.com<br>
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
            <h4>Patricija Radivoj</h4>
            <br>
            <i class="fas fa-phone pr-2"></i>+44 75938 060339<br>
            <i class="fas fa-map-marker-alt pr-2"></i>Luton<br>
            <i class="fas fa-envelope-open pr-2"></i>patricija.radivoj@icloud.com<br>
        </div>
    </div>
    
</div>

@endsection