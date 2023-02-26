@extends('layouts.appadmin')

@section('title')
    Modifer Marque
@endsection
 
@section('contenu')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <form action="{{ route('marques.update') }}" enctype='multipart/form-data' method='POST' id='commentForm'>
                        @method('PUT')
                        @csrf
                        {{Form::hidden('id', $marques->id)}}
                        <div class="card-header">
                        <h2 class="card-title mb-0">{{ __('messages.Modifer la marque') }}</h2>
                            <div class="card-body">
                                {{Form::text('marke_name', $marques->marke_name, ['class' => 'form-control'])}}
                                <br><br><br>
                        <h5 class="card-title m-2">{{ __('messages.Icon de la marque') }}</h5>
                            <input type="file" class="form-control" name="icon">
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
