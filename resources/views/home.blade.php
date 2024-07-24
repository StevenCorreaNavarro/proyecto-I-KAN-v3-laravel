@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido a I kan') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        {{ __('You are logged in!') }}
                    </div>
                    <br><br>
                    <div>
                        <a href="home" class="active"><button> ir a nicio </button></a>
                    </div>

                    
                    
                </div>
                
            </div>
            
        </div>
    </div>
</div>
@endsection
