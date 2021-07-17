<?php

namespace App\Http\Controllers\admin;

use App\Company;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class CompanyController extends Controller

{
    public function index(){
        return view('admin.company.create');
    }
  
    public function register(Request $request){
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => 'required',
            'password' => ['required', 'string', 'min:3'],
            'role' => 'nullable',
            'registration_date' => 'required',
            'cr_no' => 'required',
            'gosi_amount' => 'required',
            'lmr_amount' => 'required',
            'activity' => 'required',
            'mobile' => 'required',
            'owner_name' => 'required',
            'lan' => 'required',
            'address' => 'required',

        ]);
        $company_id = Company::insertGetId([
            'name' => $data['name'],
            'email' => $data['email'],
            'registration_date' => $data['registration_date'],
            'cr_no' => $data['cr_no'],
            'gosi_amount' => $data['gosi_amount'],
            'lmr_amount' => $data['lmr_amount'],
            'activity' => $data['activity'],
            'mobile' => $data['mobile'],
            'owner_name' => $data['owner_name'],
            'lan' => $data['lan'],
            'address' => $data['address']
        ]);
         User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
            'company_id' => $company_id,
        ]);
       
        return redirect(route('company.index'))->with('success','Company registered successfully!');;

    }
    public function show(){
        $companies = Company::orderBy('name','asc')->get();
        return view('admin.company.index',['companies'=>$companies]);
    }

    /***
     * 
     * 
     */
    public function search(Request $request){

        $searchText = $request->searchText;
        $companies = Company::where('email', 'like', '%' . $searchText . '%')
        ->orWhere('name', 'like', '%' . $searchText . '%')
        ->orWhere('cr_no', 'like', '%' . $searchText . '%')
        ->get();
        return view('admin.company.index',['companies'=>$companies]);
    }
}
