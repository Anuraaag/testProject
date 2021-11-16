@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <my-button text="My button using vue component" type="submit"></my-button> {{-- 'text' is just a variable sent to vue as a prop --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 