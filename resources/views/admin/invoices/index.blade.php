@extends('layouts.admin')
@section('content')
<div class="card">
<div class="card-header d-flex justify-content-between align-items-center">
    <h4 class="mb-0">Invoice List</h4>
    <div>
        <a href="{{ url('add-invoice') }}" class="btn btn-primary btn-md">Add Invoice</a>
    </div>
</div>
<div class="card-body">
  <table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Date</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Action</th>           
        </tr>
    </thead>
    <tbody>
    @foreach($invoices as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->customer->name}}</td>
        <td>{{$item->transaction_date}}</td>
        <td>{{$item->amount}}</td>
        <td>{{$item->status}}</td>
      
        <td>
            <a href="{{url('edit-invoice/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
            <a href="{{url('delete-invoice/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
        </td>
    </tr>
@endforeach
    </tbody>
  </table>
</div>
@endsection