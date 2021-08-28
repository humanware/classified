@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">Verify your account</div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('verification.send') }}" method="POST">
                    @csrf
                    <button class="btn btn-primary" type="submit">Send Verification Link</button>
                </form>
            </div>
        </div>
    </div>
@endsection