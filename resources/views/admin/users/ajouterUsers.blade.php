@extends('layouts.appadmin')

@section('title')
    Ajouter Marque
@endsection

@section('contenu')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <form action="{{ route('users.store') }}" enctype='multipart/form-data' method='POST' id='commentForm'>
                        @csrf
                        <div class="card-header">

                        <h2 class="card-title mb-0">Ajouter un utilisateur</h2>
                            <div class="card-body">
                                <input type="text" class="form-control" placeholder="Ajouter une utilisateur" name='name' required>
                                <br><br><br>
                                
                        <h2 class="card-title mb-0">Ajouter un utilisateur</h2>
                            <div class="card-body">
                                    <input type="text" class="form-control" placeholder="Ajouter une utilisateur" name='name' required>

                        </div>
                        <button class="btn btn-secondary" value="">{{ __('messages.Enregistrer') }}</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
