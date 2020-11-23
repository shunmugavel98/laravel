@extends('layouts.header')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <a href="{{URL::to('/create1')}}">Add employees</a></p>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Age</td>
          <td>Contact</td>
          <td>Gender</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($coronacases as $case)
        <tr>
            <td>{{$case->id}}</td>
            <td>{{$case->name}}</td>
            <td>{{$case->age}}</td>
            <td>{{$case->contact}}</td>
            <td>{{$case->gender}}</td>
            <td>
              <form method="POST" action="{{ baseUrl() }}products/destroy1">
                  {{ csrf_field() }}
                 <input type="hidden" name="id" value="{{ $case->id }}">
                  <button class="btn btn-danger" type="submit">Delete</button>
 
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

<div>

@endsection