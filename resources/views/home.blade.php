@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Connexion</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Connexion reussite! Allez vers:
                    <hr>
                    <a href= {{route('eveniment')}}>Les evenements</a>
                    <hr>
                    <a href= {{route('read')}}>Les offres</a>
                    <hr>
                    <a href= {{route('readDemander')}}>Les demandes</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
