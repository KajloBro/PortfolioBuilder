@extends('layouts.app')

@section('content')
    

{{-- Desktop View --}}
<div class="desktop" style="background-image: url('{{ asset($about->photo->original) }}'); background-size: cover;">
    <div class="row pt-5">
        <div class="offset-1 col-4 text-center">
            <p>{{ $about->content }}</p>            
        </div>
    </div>
</div>



{{-- Phone View --}}
    <div class="phone">
        <img class="margin_pic d-block w-100" src="{{ asset($about->photo->original) }}" alt="">
        <div class="row m-3">
            <h3>About Patricija</h3>
        </div>
        <div class="row m-2">
            <p>{{ $about->content }}</p>
        </div>
    </div>
    
</div>

@endsection