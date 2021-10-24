<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Company;
use Illuminat\Http\Request;

class CustomersController extends Controller
{
    public function index()  {        
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function create()  {
        
        $companies = Company::all();
        $customer = new Customer(); //to handle the conditional customer variable as the same form is used by edit and create
        return view('customers.create', compact('companies', 'customer'));
    }

    public function store()  {  
        
        // $data = request()->validate([
        //     'name' => 'required|min:2',
        //     'email' => 'required|email|unique:App\Models\Customer,email',
        //     'category' => 'required',
        //     'company_id' => 'required'
        // ]);
        // Customer::create($data); //mass assignment // this is where we need fillable/guarded

        Customer::create($this->validateRequest());

        // $customer = new Customer();
        // $customer->name = request('name');
        // $customer->email = request('email');
        // $customer->category = request('category');
        // $customer->save();

        return redirect('customers');
        // return back();
    }

    // public function show($customer){
    public function show(Customer $customer){    //in this case, the parameter value must be same as in the route. 
        // $customer = Customer::find($customer);
        // $customer = Customer::where('id', $customer)->firstOrFail();
        return view('customers.show', compact('customer'));
    }

    public function edit (Customer $customer){
        $companies = Company::all();
        return view('customers.edit', compact('customer', 'companies'));
    }

    public function update (Customer $customer){
       
        $customer->update($this->validateRequest());       
        return view('customers.show', compact('customer'));
    }

    public function destroy (Customer $customer){
    //    dd("ahoy mate");
        $customer->delete();       
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function validateRequest(){    // use any name for this function
        return request()->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',  //|unique:App\Models\Customer,email'   -> can't use this because of the edit function
            'category' => 'required',
            'company_id' => 'required'
        ]);
    }
}