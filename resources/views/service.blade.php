{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       
    </head>
    <body class="antialiased"> --}}

        @extends('layout.app')
        @section('title')
        Service
        @endsection
        @section('content')
          <h1>Hello Laravel Services   </h1> 
          @foreach ($products as $product )
          <div class="bg-light  p-3 m-3 text-center">
             <h1>  <a class=" ext-light" href="/show/{{$product->id}} ">{{$product->product_name}} </a> </h1>
             {{-- <h3> #{{$product->product_price}} </h3>
             <p> {{$product->product_description}} </p>

             <hr>
             <h5> {{$product->created_at}} </h5> --}}
        </div>    
         
          @endforeach
          <br>
        {{$products->links()}}
        @endsection

