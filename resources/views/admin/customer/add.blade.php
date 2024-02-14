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
        <h4>Add Customer</h4>
    </div>
<div class="card-body">
    <form action="{{url('insert-customer')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12 mb-3">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Phone</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="col-md-12 mb-3">
            <label for="">Address</label>
            <textarea name="address" id="address" rows="3" class="form-control"></textarea>
            </div>
          
            <div class="col-md-12">
             <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
</div>
@endsection