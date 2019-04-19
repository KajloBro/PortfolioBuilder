@extends('layouts.app')

@section('content')
    

{{-- Desktop View --}}
<div class="desktop" style="background-image: url('{{ asset('img/about/pic5.jpg') }}'); background-size: cover;">
    <div class="row pt-5">
        <div class="offset-1 col-4 text-center">
            {{-- <p>&Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nulla, possimus nobis itaque deserunt cum dolore recusandae facere doloribus consequatur dolor at unde aperiam adipisci sint? Maiores ad cupiditate nesciunt.</p>
            <p>&Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nulla, possimus nobis itaque deserunt cum dolore recusandae facere doloribus consequatur dolor at unde aperiam adipisci sint? Maiores ad cupiditate nesciunt.</p>
            <p>&Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nulla, possimus nobis itaque deserunt cum dolore recusandae facere doloribus consequatur dolor at unde aperiam adipisci sint? Maiores ad cupiditate nesciunt.</p> --}}
            <p>Coming Soon!</p>
        </div>
    </div>
</div>



{{-- Phone View --}}
    <div class="phone">
        <img class="margin_pic d-block w-100" src="{{ asset('img/about/pic5.jpg') }}" alt="">
        <div class="row m-3">
            <h3>About Patricija</h3>
        </div>
        <div class="row m-2">
            {{-- <p>&Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nulla, possimus nobis itaque deserunt cum dolore recusandae facere doloribus consequatur dolor at unde aperiam adipisci sint? Maiores ad cupiditate nesciunt.</p>
            <p>&Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nulla, possimus nobis itaque deserunt cum dolore recusandae facere doloribus consequatur dolor at unde aperiam adipisci sint? Maiores ad cupiditate nesciunt.</p>
            <p>&Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nulla, possimus nobis itaque deserunt cum dolore recusandae facere doloribus consequatur dolor at unde aperiam adipisci sint? Maiores ad cupiditate nesciunt.</p> --}}
            <p>Coming Soon!</p>
        </div>
    </div>
    
</div>

@endsection