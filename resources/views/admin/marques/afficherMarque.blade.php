@extends('layouts.appadmin')

@section('title')
    Afficher les Marques
@endsection

{{-- {{Form::hidden('', $increment=1)}} --}}
@section('contenu')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            {{-- <div class="col-12 col-lg-8 col-xxl-9 d-flex"> --}}
                <div class="card flex-fill">
                    <div class="card-header">

                    <h5 class="card-title mb-0">{{ __('messages.Afficher les Marques') }}</h5>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <td class="d-none d-xl-table-cell">{{ __('messages.Num') }}</th>
                            <th class="d-none d-xl-table-cell">{{ __('messages.Nom') }}</th>
                            <th class="d-none d-xl-table-cell">{{ __('messages.Status') }}</th>
                            <th class="d-none d-xl-table-cell">{{ __('messages.Images') }}</th>
                            <th class="d-none d-md-table-cell">{{ __('messages.Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($marques as $marque)
                        <tr>
                            <td class="d-none d-xl-table-cell">{{ $marque->id }}</td>
                            <td class="d-none d-xl-table-cell">{{ $marque->marke_name }}</td>
                            <td class="d-none d-xl-table-cell">
                                @if ( $marque->status == 1 )
                                    <label class="btn btn-success"> {{ __('messages.Activé') }} </label>
                                @else
                                    <label class="btn btn-danger"> {{ __('messages.Desactivé') }} </label>
                                @endif
                            </td>
                            <td class="d-none d-xl-table-cell"><img  style="size: width : 150px; height : 75px; display: block; " src="/storage/icon/{{ $marque->icon }}" alt="" >
                            </td>
                            <td>
                                <button class="btn btn-info" onclick="window.location ='{{ route('marque.edit', $marque->id) }}'">{{ __('messages.Edit') }}</button>

                                <button class="btn btn-danger" onclick="window.location ='{{ route('marque.destroy', $marque->id) }}'">{{ __('messages.Supprimer') }}</button>

                                @if ($marque->status == 1)
                                    <button class="btn btn-primary" onclick="window.location ='{{ route('marque.desactiver', $marque->id) }}'">{{ __('messages.Desactivé') }}</button>
                                @else
                                    <button class="btn btn-warning" onclick="window.location ='{{ route('marque.activer', $marque->id) }}'">{{ __('messages.Activé') }}</button>
                                @endif
                            </td>
                        </tr>
                            {{-- {{ Form::hidden('', $increment = $increment + 1) }} --}}
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
