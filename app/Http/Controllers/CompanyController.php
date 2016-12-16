<?php

namespace Matchio\Http\Controllers;

use Illuminate\Http\Request;
use Matchio\Company;

class CompanyController extends Controller
{
    public function index()
    {
        # Query DB
        $companies = Company::all(); 

        # Display results
        return view('company.index')->with('companies', $companies);;
    }
}