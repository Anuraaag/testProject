<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index() {
        $companies = Company::all();    
        return view('companies.index', compact('companies'));
    }

    public function create() {
        return view('companies.create');
    }

    public function store()  {  

        $data = request()->validate([
            'name' => 'required|min:2',
            'phone' => 'required'
        ]);
        
        Company::create($data);
        return redirect('companies');

    }
}
