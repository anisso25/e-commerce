@extends('layouts.appadmin')

@section('title')
    Modifier Produit
@endsection

@section('contenu')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <form action="{{ route('produits.update') }}" enctype='multipart/form-data' method='POST' id='commentForm'>
                        @method('PUT')
                        @csrf

                        {{-- {{Form::hidden('id', $produits->id)}} --}}
                        {{Form::hidden('id', $produits->id)}}

                        <div class="card-header">
                        <h2 class="card-title mb-0">{{ __('messages.Modifier un Produit') }}</h2>
                            <div class="card-body">

                        {{-- {{Form::text('product_name', $produits->product_name, ['class' => 'form-control'])}} --}}

                        <input type="text" value="{{ $produits->product_name }}" class="form-control" placeholder="{{ __('messages.Nom du produit') }}" name='product_name' required>

                        <h5 class="card-title m-2">Modifier le titre du produit</h5>
                        {{Form::text('product_title', $produits->product_title, ['class' => 'form-control'])}}

                        <h5 class="card-title m-2">{{ __('messages.prix') }}</h5>
                        {{Form::text('prix', $produits->prix, ['class' => 'form-control'])}}

                        </div>
                        <h5 class="card-title m-2">{{ __('messages.Image du produit') }}</h5>
                        <input type="file" class="form-control" name="image_p">

                        <div class="card-header">
                        <h5 class="card-title m-2">{{ __('messages.Discription') }}</h5>
                        {{Form::text('discription_p', $produits->discription_p, ['class' => 'form-control'])}}

                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-0">{{ __('messages.Selectionner la marque du produit') }}</h5>
                                <select name="marque_id" class="form-select mb-3">
                                    @foreach ($marques as $marque)
                                         <option value="{{ $marque->id }}">{{ $marque->marke_name }}</option>
                                    @endforeach
                                </select>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title mb-0">{{ __('messages.Selectionner la categorie du produit') }}</h5>
                                <select name="category_id" class="form-select mb-3">
                                    @foreach ($categories as $categorie)
                                        <option value="{{ $categorie->id }}">{{ $categorie->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <h5 class="card-title m-2">Modifier la fiche technique du produit</h5>
                            <input type="file" class="form-control" name="fiche_t">

                            <div class="card-header">

                        <button class="btn btn-secondary" value="">{{ __('messages.Modifier') }}</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
