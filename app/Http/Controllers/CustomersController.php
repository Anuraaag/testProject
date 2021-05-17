<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Company;
use Illuminat\Http\Request;

class CustomersController extends Controller
{
    public function index()  {
        
        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();
        return view('customers.index', compact('activeCustomers', 'inactiveCustomers'));

    }

    public function create()  {
        
        $companies = Company::all();
        return view('customers.create', compact('companies'));
    }

    public function store()  {  

        $data = request()->validate([
            'name' => 'required|min:2',
            'email' => 'required|email|unique:App\Models\Customer,email',
            'category' => 'required',
            'company_id' => 'required'
        ]);
        
        Customer::create($data);

        // $customer = new Customer();
        // $customer->name = request('name');
        // $customer->email = request('email');
        // $customer->category = request('category');
        // $customer->save();

        return redirect('customers');
        // return back();
    }
}