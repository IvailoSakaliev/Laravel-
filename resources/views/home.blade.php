@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Dashboard
                </div>

                <div class="panel-body">
                   <h2>Hello {{ Auth::user()->name }}</h2>
                        <a href="index" class="btn btn-success">Go to site</a>
                       @if(Auth::user()->id == 1)

                        <a href="admin" class="btn btn-danger">Go to Dashboard </a>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
