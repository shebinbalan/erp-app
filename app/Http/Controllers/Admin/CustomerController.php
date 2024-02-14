<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        return view('admin.customer.index',compact('customer'));
    }
    public function add()
    {
        return view('admin.customer.add');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:customers|max:255',
            'address' => 'required|string',
        ]);

            $customer = new Customer();
            $customer->name = $request->input('name');
            $customer->phone = $request->input('phone');
            $customer->email = $request->input('email');
            $customer->address = $request->input('address');
           
            $customer->save();
           return redirect('/home')->with('status','Customer Added Successfully');

    }

    public function edit($id)
    {
        $customer =Customer::find($id);
        return view('admin.customer.edit',compact('customer'));
    }

    public function update(Request $request ,$id)
    {
        $customer =Customer::find($id);        
        $customer->name = $request->input('name');
        $customer->phone = $request->input('phone');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');
        $customer->update();
            return redirect('/home')->with('status','Customer Updated Successfully');
    }

    public function destroy($id)
          {
               $customer =Customer::find($id);
             
               $customer->delete();
               return redirect('/customers')->with('status','Customer Deleted Successfully');
            }
}
