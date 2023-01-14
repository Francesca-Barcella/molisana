@extends('layouts.app')

@section('content')

<div class="container">
    @foreach($products as $type=>$list)
    <h2 class="text-uppercase bg-light text-black-50 bg-opacity-75 p-2 mt-4">{{$type}}</h2>
    <div class="row row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        @foreach($list as $pasta)
        <div class="col">
            <div class="card text-center">
                <img class="card-img-top" src="{{$pasta['src']}}" alt="">
                <div class="card-body">
                    {{$pasta['titolo']}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
</div>

@endsection