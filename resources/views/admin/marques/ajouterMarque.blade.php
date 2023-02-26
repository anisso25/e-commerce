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
                    <form action="{{ route('marques.store') }}" enctype='multipart/form-data' method='POST' id='commentForm'>
                        @csrf
                        <div class="card-header">
                        <h2 class="card-title mb-0">{{ __('messages.Ajouter une marque') }}</h2>
                            <div class="card-body">
                                <input type="text" class="form-control" placeholder="{{ __('messages.Ajouter une marque') }}" name='marke_name' required>
                                <br><br><br>
                        <h5 class="card-title m-2">{{ __('messages.Icon de la marque') }}</h5>
                            <input type="file" class="form-control" name="icon">
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
