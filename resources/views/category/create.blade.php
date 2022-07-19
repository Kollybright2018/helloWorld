@extends('layout.app')
@section('title',  'Category Index')
    


@section('content')

    <form enctype="multipart/form-data" action="{{ route('category.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="" class="form-label"> Name: </label>
            <input type="text" name="name"  id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="" class="form-label"> Description </label>
            <input type="text" name="description"  id="" class="form-control">
        </div>

        <div class="form-group">
            <label for="" class="form-label"> User Id </label>
            <input type="text" name="user_id"  id="" class="form-control">
        </div>

        <div class="form-group">
            <label for="" class="form-label"> Image </label>
            <input type="file" name="image" id="" class="form-control">
        </div>
        <input type="submit" value="Submit" class="btn btn-success">


    </form>
    
@endsection
