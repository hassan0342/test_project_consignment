<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Model\Consignment;
use app\User;
use PDF;




class ConsignmentController extends Controller
{
   

    public function index(Request $request)
    {
        // dd($request->all());
        $consignment = Consignment::orderBy('created_at', 'DESC')->paginate(10);
        if($request->has('download'))
        {
        $pdf = PDF::loadView('user.consignment.consignment_pdf',compact('consignment'));
        return $pdf->download('consignment.pdf');
        }
        return view('user.consignment.index', compact('consignment'));
    }

    public function create()
    {
        return view('user.consignment.form');
    }

    public function save(Request $request)
    {
       
        $consignment = new Consignment();
        $consignment->company = $request->company;
        $consignment->contact =  $request->contact;
        $consignment->addressline1 =  $request->address_one;
        $consignment->addressline2 =  $request->address_two;
        $consignment->city = $request->city;
        $consignment->country =  $request->country;
        $consignment->save();
       return redirect('user/consignment');
    }

}
