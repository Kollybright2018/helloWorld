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
        Show Data
        @endsection
        @section('content')
      <div class="well">
             <h1>  {{$product->product_name}} </h1>
            <h3> #{{$product->product_price}} </h3>
             <p> {{$product->product_description}} </p>

             <hr>
             <h5> {{$product->created_at}} </h5>
             <hr>

             <a href="/editproduct/{{$product->id}}" class="btn btn-warning">Edit</a>
             <a href="/delete/{{$product->id}}" class="btn btn-danger">Delete</a>
        </div>    
         
       
          <br>
      
        @endsection

