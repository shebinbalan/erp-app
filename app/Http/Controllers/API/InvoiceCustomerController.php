<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Invoice;

class InvoiceCustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        $invoices = Invoice::all();

        return response()->json([
            'customers' => $customers,
            'invoices' => $invoices
        ]);
    }

    public function create(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'customer_email' => 'required|email',
            'customer_address' => 'required',
            'transaction_date' => 'required|date',
            'amount' => 'required|numeric',
            'status' => 'required|in:Unpaid,Paid,Cancelled',
        ]);

      
        $customer = Customer::create([
            'name' => $request->input('customer_name'),
            'phone' => $request->input('customer_phone'),
            'email' => $request->input('customer_email'),
            'address' => $request->input('customer_address'),
        ]);

     
        $invoice = Invoice::create([
            'customer_id' => $customer->id,
            'transaction_date' => $request->input('transaction_date'),
            'amount' => $request->input('amount'),
            'status' => $request->input('status'),
        ]);

        return response()->json([
            'customer' => $customer,
            'invoice' => $invoice,
            'message' => 'Customer and invoice created successfully'
        ], 201);
    }
}
