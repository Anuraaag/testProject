@extends('layout')

@section('title', 'Add new customer')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6 mt-5 ">
                <h3>Add new customer</h3>

                <form action="/customers" method="POST">
                    @csrf
                    <div class="form-group mt-4">
                        <label for="name">Name</label>
                        <input class="form-control" id="name" placeholder="John" name="name" value="{{ old('name') }}" required>
                        <div class="text-danger">{{ $errors->first('name')}}</div>
                    </div>

                    <div class="form-group mt-4">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" id="email"  value="{{ old('email') }}" placeholder="example@domain.com" required>
                        <div class="text-danger">{{ $errors->first('email')}}</div>
                    </div>

                    <div class="form-group mt-4">
                        <label for="company">Company</label>
                        <select class="form-control" id="company_id" name="company_id" value="{{ old('company_id') }}" required>
                            <option selected disabled>Select Company</option>
                            @foreach($companies as $company)
                                <option value="{{ $company->id}}"> {{ $company->name}} </option>
                            @endforeach
                        </select>
                        <div class="text-danger">{{ $errors->first('company_id')}}</div>
                    </div>

                    <div class="form-group mt-4">
                        <label for="category">Category</label>
                        <select class="form-control" id="category" name="category" value="{{ old('category') }}" required>
                            <option selected disabled>Select Category</option>
                            <option value="1">Active</option>
                            <option value="2">inactive</option>
                        </select>
                        <div class="text-danger">{{ $errors->first('category')}}</div>
                    </div>

                    <button type="submit" class="mt-5 btn btn-primary">Submit</button>
                </form>
            
            </div>

        </div>
        
            
    </div>

@endsection