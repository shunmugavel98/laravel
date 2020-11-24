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
  <a href="{{URL::to('/create')}}">Add customer</a></p>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Address</td>
          <td>Salary</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($coronacases as $case)
        <tr>
            <td>{{$case->id}}</td>
            <td>{{$case->name}}</td>
            <td>{{$case->address}}</td>
            <td>{{$case->salary}}</td>
            <td><a href="{{ route('customer.edit', $case->id)}}" class="btn btn-primary">Edit</a></td>
           <!-- <td><a href = 'customer/{{ $case->id }}'>Delete</a></td>-->
            <td>
              <form method="POST" action="{{ baseUrl() }}customer/destroy">
                  {{ csrf_field() }}
                 <input type="hidden" name="id" value="{{ $case->id }}">
                  <button class="btn btn-danger" type="submit">Delete</button>
 
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
{!! $coronacases->links('paginator') !!}
<div>

@endsection