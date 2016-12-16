@extends('layouts.master')

@section('navbar')
    <li><a href="/candidates">Candidates</a></li>
    <li class="active"><a href="/candidates">Jobs <span class="sr-only">(current)</span></a></li>
    <li><a href="/companies">Companies</a></li>
@endsection

@section('title')
    Add new candidate
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">Add a new job</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">

            <!-- Start of form
            –––––––––––––––––––––––––––––––––––––––––––––––––– -->
            <form method="POST" action="/jobs">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for='company_id'>Company</label>
                    <select class="form-control" id='company_id' name='company_id'>
                        @foreach($companies_for_dropdown as $company_id => $company_name)
                             <option value='{{ $company_id }}'> 
                                 {{$company_name}}
                             </option>
                         @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Position</label>
                    <input 
                        type="text" 
                        id="position"
                        name="position" 
                        value="{{ old('position') }}"
                        placeholder="E.g. Software Engineer" 
                        class="form-control" 
                    >
                    <div class='error'>{{ $errors->first('position') }}</div>
                </div>

                <div class="form-group">
                    <label>Type</label>
                    <input 
                        type="text" 
                        id="type"
                        name="type" 
                        value="{{ old('type') }}"
                        placeholder="Full-Time or Part-Time"
                        class="form-control" 
                    >
                    <div class='error'>{{ $errors->first('type') }}</div>
                </div>

                <div class="form-group">
                    <label>Estimated Yearly Salary<small> (USD)</small></label>
                    <input 
                        type="decimal" 
                        id="salary"
                        name="salary" 
                        class="form-control" 
                        placeholder="E.g. 90000" 
                        value="{{ old('salary') }}">
                    <div class='error'>{{ $errors->first('salary') }}</div>
                </div>

                <br>

                <button type="submit" class="btn btn-primary">Submit Job Post</button>

            </form>
            <!-- End of form
            –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        </div>
    </div>

@endsection
