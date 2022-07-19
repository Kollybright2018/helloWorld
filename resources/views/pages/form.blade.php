@extends('layout.app');
@section('title');
form
@endsection;
@section('content');
    <form class="row g-3 needs-validation" method="post" action="{{ route('my-first') }}" novalidate>
      <div class="col-md-4">
        @csrf
        @method("delete")
        <label for="validationCustom01" class="form-label">First name</label>
        <input type="text" name="fname" valu class="form-control" id="validationCustom01" value="{{ old('fname') }}" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Last name</label>
        <input type="text" name="lname" class="form-control" id="validationCustom02" value="Otto" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Username</label>
        <div class="input-group">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
          <input type="text" name="uname" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
      </div>
  
    
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div>
    </form>


@endsection;