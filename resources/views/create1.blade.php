@extends('layouts.header')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Employees Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{URL::to('/storess')}}">
          <div class="form-group">
              {{ csrf_field() }}
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
         <div class="form-group">
              <label for="age">Age :</label>
              <input type="text" class="form-control" name="age"/>
          </div>
          <div class="form-group">
              <label for="contact">Contact :</label>
              <input type="text" class="form-control" name="contact"/>
          </div>
           <div class="form-group">
              <label for="contact">Gender :</label>
              <input type="radio" name="gender" value="male">Male
              <input type="radio" name="gender" value="female">Female
          </div>
          <button type="submit" class="btn btn-primary">Add Data</button>
      </form>
  </div>
</div>
@endsection