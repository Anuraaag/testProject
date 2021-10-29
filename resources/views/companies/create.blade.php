@extends('layouts.app')

@section('title', 'Add Company')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6 mt-5 ">
                <h3>Add Companies</h3>
                <form action="/companies" method="POST">
                    @csrf
                    <div class="form-group mt-4">
                        <label for="name">Name</label>
                        <input class="form-control" id="name" placeholder="XYZ ltd." name="name" value="{{ old('name') }}" required>
                        <div class="text-danger">{{ $errors->first('name')}}</div>
                    </div>

                    <div class="form-group mt-4">
                        <label for="phone">Phone</label>
                        <input class="form-control" name="phone" id="phone"  value="{{ old('phone') }}" placeholder="+91 999999999" required>
                        <div class="text-danger">{{ $errors->first('phone')}}</div>
                    </div>

                    <button type="submit" class="mt-5 btn btn-primary">Submit</button>
                </form>
            
            </div>

        </div>
        
    </div>

@endsection