@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card mb-3">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <passport-clients></passport-clients>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <passport-personal-access-tokens></passport-personal-access-tokens>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <passport-authorized-clients></passport-authorized-clients>
        </div>
    </div>

</div>
@endsection
