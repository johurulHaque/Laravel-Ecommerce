@extends('layouts.app')

{{-- after complete registration --}}
{{-- after complete registration --}}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
