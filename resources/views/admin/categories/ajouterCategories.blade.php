@extends('layouts.appadmin')

@section('title')
    Ajouter Categorie
@endsection

@section('contenu')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <form action="{{ route('categories.store') }}" enctype='multipart/form-data' method='POST' id='commentForm'>
                        @csrf

                        <div class="card-header">
                        <h2 class="card-title mb-0">{{ __('messages.Ajouter une Categorie') }}</h2>
                            <div class="card-body">
                        <input type="text" class="form-control" placeholder="{{ __('messages.Nom de la categorie') }}" name='category_name' required>
                        <br><br><br>
                        <h5 class="card-title m-2">{{ __('messages.Discription') }}</h5>
                        <input type="textarea" class="form-control" placeholder="{{ __('messages.Discription') }}" name='discription_c' required>
                        </div>
                        <h5 class="card-title m-2">{{ __('messages.Image de la categorie') }}</h5>
                        <input type="file" class="form-control" name="image_c">
                    </div>
                        <div class="card-header">
                            <h5 class="card-title mb-0">{{ __('messages.Selectionner la marque de cette categorie') }}</h5>
                                <div class="card-body">
                                <select name="marque_id" class="form-select mb-3">
                                    @foreach ($marques as $marque)
                                        <option value="{{ $marque->id }}">{{ $marque->marke_name }}</option>
                                    @endforeach
                                </select>
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
