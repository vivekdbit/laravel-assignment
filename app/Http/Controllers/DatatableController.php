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
        return Datatables::of(customer::query())->make(true);
    }
}
