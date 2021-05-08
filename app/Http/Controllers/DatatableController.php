<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;
use Yajra\Datatables\Datatables;

class DatatableController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function showGridData()
    {
        $data = customer::query()->get();
        
        return Datatables::of($data)->addColumn('action', function($data){
            
            $button = '<button type="button" class="btn btn-success btn-sm" id="getEditCustomerData" data-toggle="modal" data-target="#CreateCustomerModal" data-id="'.$data->id.'">Edit</button>';

            $button .= '&nbsp;<button type="button" data-id="'.$data->id.'" data-toggle="modal" data-target="#DeleteCustomerModal" class="btn btn-danger btn-sm" id="getDeleteId">Delete</button>';


            return $button;
        })
        ->rawColumns(['action'])
        ->make(true);
    }
}
