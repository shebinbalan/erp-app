@extends('layouts.admin')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card">
    <div class="card-header">
        <h4>Add Invoice</h4>
    </div>
<div class="card-body">
    <form action="{{url('insert-invoice')}}" method="POST">
        @csrf
        <div class="row">
           <div class="col-md-12 mb-3">
           <select class="form-control" name="customer_id"  >
            <option value="">Select a Customer</option>
             @foreach($customers as $customer)
             <option value="{{$customer->id}}">{{$customer->name}}</option>
             @endforeach
           
            </select>
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Date</label>
                <input type="date" class="form-control" name="transaction_date">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Amount</label>
                <input type="text" class="form-control" name="amount">
            </div>
           
          
            <div class="col-md-12 mb-3">
    <label for="status">Status</label>
    <select class="form-control" id="status" name="status">
        <option value="Unpaid">Unpaid</option>
        <option value="Paid">Paid</option>
        <option value="Cancelled">Cancelled</option>
    </select>
</div>
           
          
         
         
            <div class="col-md-12">
             <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
</div>
@endsection