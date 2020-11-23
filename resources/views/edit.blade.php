@extends('layouts.header')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Customer Data
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
      <form method="POST" action="{{ baseUrl() }}customer/update">
          <div class="form-group">
              {{ csrf_field() }}

            <label for="name">Name:</label>
              <input type="text" class="form-control" name="name" value="{{ $coronacase->name }}"/>
          </div>
          <div class="form-group">
              <label for="address">Address :</label>
              <textarea rows="5" columns="5" class="form-control" name="address">{{ $coronacase->address }}
              </textarea>
          </div>
          <div class="form-group">
              <label for="salary">Salary :</label>
              <input type="text" class="form-control" name="salary" value="{{ $coronacase->salary }}"/>
          </div>
          <input type="hidden" name="id" value="{{ $coronacase->id }}">
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection