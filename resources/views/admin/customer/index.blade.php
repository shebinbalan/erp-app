@extends('layouts.admin')
@section('content')
<div class="card">
<div class="card-header d-flex justify-content-between align-items-center">
    <h4 class="mb-0">Customer List</h4>
    <div>
        <a href="{{ url('add-customer') }}" class="btn btn-primary btn-md">Add Customer</a>
    </div>
</div>
<div class="card-body">
  <table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>           
        </tr>
    </thead>
    <tbody>
        @foreach($customer as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->email}}</td>            
            <td>{{$item->address}}</td>
            
            <td>
                <a href="{{url('edit-customer/'.$item->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{url('delete-customer/'.$item->id)}}" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection