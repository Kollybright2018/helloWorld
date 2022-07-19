
@extends('layout.app')
@section('title')
Insert Product
@endsection
@section('content')
<div class="row  justify-content-center">
    <div class="col-md-4">
        @if (Session::has('success'))
        <div class="alert alert-success">
             {{Session::get('success')}}
        </div>
           
        @endif
        {{-- <form method="POST" action="{{route('saveproduct')}}" class="form"> --}}
            {!! Form::open(['action' => "ProductController@saveproduct", 'method' => "POST", "class" => "form-control" ]) !!}
            {{ csrf_field()}}
                
            {{-- {!!form::open(['action' => ])} --}}
         
    <div class="form-group">
        {{-- <label for="" class="form-label">Product Name</label>
        <input type="text" name="product_name" id="" class="form-control" placeholder="Enter your product name"> --}}
        {!! Form::label('', "Product Name") !!}
        {!! Form::text("product_name", '', ['class' => 'form-control', "placeholder" => "Enter Product Name"]) !!}
    </div>

    <div class="form-group">
        {{-- <label for="" class="form-label">Product price</label>
        <input type="text" name="product_price" id="" class="form-control" placeholder="Enter your product price"> --}}
        {!! Form::label("", "Product Price") !!}
        {!! Form::text("product_price", "", ['class' => 'form-control', "placeholder" => "Enter Product Price "]) !!}
    </div>

    <div class="form-group">
        {{-- <label for="" class="form-label">Product Description</label>
        <textarea name="product_desc" id="" class="form-control"  cols="30" rows="10"></textarea> --}}
        {{-- <input type="text"  id="" placeholder="Enter your product Description"> --}}

      
       {!! Form::label("", 'Product Description') !!}
       {!! Form::textarea("product_desc", "", ['class' => 'form-control', "placeholder" => "Product Descrption"]) !!}
    </div>

    {!! Form::submit('Add Product', ['class' => "btn btn-primary"]) !!}
    {{-- <input type="submit" class="form-control btn btn-success mt-3" value="Submit" name="submit"> --}}
{{-- </form> --}}
{!! Form::close() !!}
    </div>
</div>

@endsection