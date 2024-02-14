@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit/Update Invoice</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('update-invoice/'.$invoice->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <select class="form-control" name="customer_id">
                        <option value="{{ $invoice->customer->id }}">{{ $invoice->customer->name }}</option>
                    </select>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Date</label>
                    <input type="date" class="form-control" name="transaction_date" value="{{ $invoice->transaction_date }}">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Amount</label>
                    <input type="text" class="form-control" name="amount" value="{{ $invoice->amount }}">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="Unpaid" {{ $invoice->status === 'Unpaid' ? 'selected' : '' }}>Unpaid</option>
                        <option value="Paid" {{ $invoice->status === 'Paid' ? 'selected' : '' }}>Paid</option>
                        <option value="Cancelled" {{ $invoice->status === 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
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
