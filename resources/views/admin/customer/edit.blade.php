@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit/Update Customer</h4>
    </div>
<div class="card-body">
    <form action="{{url('update-customer/'.$customer->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12 mb-3">
                <label for="">Name</label>
                <input type="text" value="{{$customer->name}}" class="form-control" name="name">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Phone</label>
                <input type="text" value="{{$customer->phone}}" class="form-control" name="phone">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Email</label>
                <input type="text" value="{{$customer->email}}" class="form-control" name="email">
            </div>
            <div class="col-md-12 mb-3">
            <label for="">Address</label>
            <textarea name="address" id="address" rows="3" class="form-control">{{$customer->address}}</textarea>
            </div>
           
            <div class="col-md-12">
             <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
</div>
@endsection