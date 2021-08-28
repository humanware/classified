@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Reset your password
                    </div>
                    <div class="card-body">
                        @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{ route('password.request') }}" method="POST">
                            @csrf
                            <div class="form-group row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" placeholder="Enter your email" class="mb-3 form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <p class="mb-0"><small>Enter your email associated with your account to reset the password, we will send you the password reset link</small></p>
                                </div>
                            </div>
                            <div class="col-md-8 offset-md-4">
                                <input type="submit" class="btn btn-primary" value="Send Reset Link" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
