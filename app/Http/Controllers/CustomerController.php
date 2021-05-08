<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;


class CustomerController extends Controller
{   
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'company' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $this->customer->storeData($request->all());
        return response()->json(['success'=>'Customer added successfully']);
    }

    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'company' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $this->customer->updateData($id, $request->all());
        return response()->json(['success'=>'Customer updated successfully']);
    }

    public function destroy($id)
    {   
        $this->customer->deleteData($id);
        return response()->json(['success'=>'Customer deleted successfully']);
    }

}
