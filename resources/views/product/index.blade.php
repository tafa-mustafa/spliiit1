@extends('layouts.front')


@section('content')

<div class="container">

    <h2>  Products </h2>

    <div class="">
    @foreach ($products as $product)

        @include('product._single_product')
    @endforeach

    </div>


</div>

@endsection
