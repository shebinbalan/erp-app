<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Invoice;
class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return view('admin.invoices.index',compact('invoices'));
    }
    public function add()
    {
        
        $customers = Customer::all();
        return view('admin.invoices.add',compact('customers'));
    }

    public function insert(Request $request)
    {    
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'transaction_date' => 'required|date',
            'amount' => 'required|numeric|min:0',
            'status' => 'required|in:Unpaid,Paid,Cancelled',
        ]);
             $invoices = new Invoice();  
             $invoices->customer_id = $request->input('customer_id');
             $invoices->transaction_date = $request->input('transaction_date');
             $invoices->amount = $request->input('amount');
             $invoices->status = $request->input('status');             
             $invoices->save();
           
            return redirect('/home')->with('status','Invoices Added Successfully');
     
    }

    public function edit($id)
    {
        $invoice = Invoice::find($id);    
        return view('admin.invoices.edit', compact('invoice'));
    }

    public function update(Request $request ,$id)
    {
        $invoice = Invoice::find($id);

        if($invoice) {
            $invoice->customer_id = $request->input('customer_id');
            $invoice->transaction_date = $request->input('transaction_date');
            $invoice->amount = $request->input('amount');
            $invoice->status = $request->input('status');
            $invoice->update();
        }
            return redirect('/home')->with('status','Invoice Updated Successfully');
    }

    public function destroy($id)
          {
               $invoice =Invoice::find($id);             
               $invoice->delete();
               return redirect('/invoices')->with('status','Invoices Deleted Successfully');
            }

}
