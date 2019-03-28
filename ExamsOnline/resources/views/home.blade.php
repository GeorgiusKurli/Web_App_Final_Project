@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <img style="display:block; margin-left: auto; margin-right: auto; width: 50%; height: 50%;" src="https://media1.tenor.com/images/557a2dbce8d3441703ca123ee0fb084e/tenor.gif?itemid=4617915">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
