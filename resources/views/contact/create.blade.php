@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <h1>Contact Us</h1>
    
    @if(!session()->has('message'))
        <form action="/contact" method="POST">
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
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Type your message"  value="{{ old('message') }}" required></textarea>
                <div class="text-danger">{{ $errors->first('message')}}</div>
            </div>
            
            <button type="submit" class="mt-5 btn btn-primary">Send message</button>

        </form>
    @endif
@endsection