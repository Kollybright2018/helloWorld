@extends('layout.app')
@section('title',  'Category Index')
    
@section('content')

<a href=" {{route('category.create')}} " class="btn btn-success m-3">Add New</a>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone </th>
            <th colspan="2" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>kolade</td>
            <td>kolade@gmail</td>
            <td>06060844</td>
            <td><a href=" {{route('editcart')}} " class="btn btn-success"> Edit</a></td>
            <td><a href="" class="btn btn-danger"> Delete</a></td>
        </tr>

    </tbody>
</table>
    
@endsection
