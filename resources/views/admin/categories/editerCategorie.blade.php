@extends('layouts.appadmin')

@section('title')
    {{ __('messages.Modifier Categorie') }}
@endsection

@section('contenu')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <form action="{{ route('categories.update') }}" enctype='multipart/form-data' method='POST' id='commentForm'>
                        @method('PUT')
                        @csrf

                        {{Form::hidden('id', $categories->id)}}
                        <div class="card-header">
                        <h2 class="card-title mb-0">{{ __('messages.Modifier une Categorie') }}</h2>
                    <div class="card-body">

                        {{Form::text('category_name', $categories->category_name, ['class' => 'form-control'])}}

                        <br><br><br>
                        <h5 class="card-title m-2">{{ __('messages.Discription') }}</h5>

                        {{Form::text('discription_c', $categories->discription_c, ['class' => 'form-control'])}}

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
                        <button class="btn btn-secondary" value="">{{ __('messages.Modifier') }}</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
