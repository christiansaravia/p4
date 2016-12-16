<?php

namespace Matchio;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function jobs() {
        # Company has many Jobs
        # Define a one-to-many relationship.
        return $this->hasMany('Matchio\Jobs');
    }

    public static function companiesForDropdown() {

    	# Get all the companies
	    $companies = Company::orderBy('company_name', 'ASC')->get();

	    # Organize the companies into an array where the key = company id and value = company name
	    $companies_for_dropdown = [];
	    foreach($companies as $company) {
	        $companies_for_dropdown[$company->id] = $company->company_name;
	    }

	    return $companies_for_dropdown;
	}
}
