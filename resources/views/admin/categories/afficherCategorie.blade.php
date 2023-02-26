@extends('layouts.appadmin')

@section('title')
    {{ __('messages.Afficher les Categories') }}
@endsection

{{-- {{Form::hidden('', $increment=1)}} --}}
@section('contenu')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            {{-- <div class="col-12 col-lg-8 col-xxl-9 d-flex"> --}}
                <div class="card flex-fill">
                    <div class="card-header">

                    <h5 class="card-title mb-0">{{ __('messages.Afficher les Categories') }}</h5>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th class="d-none d-xl-table-cell">{{ __('messages.Num') }}</th>
                            <th class="d-none d-xl-table-cell">{{ __('messages.Nom') }}</th>
                            <th class="d-none d-xl-table-cell">{{ __('messages.Images') }}</th>
                            <th class="d-none d-xl-table-cell">{{ __('messages.Marques') }}</th>
                            <th class="d-none d-xl-table-cell">{{ __('messages.Status') }}</th>
                            <th class="d-none d-md-table-cell">{{ __('messages.Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $categorie)
                        <tr>
                            <td class="d-none d-xl-table-cell">{{ $categorie->id }}</td>

                            <td class="d-none d-xl-table-cell">{{ $categorie->category_name }}</td>

                            <td class="d-none d-xl-table-cell"><img  style="size: width : 150px; height : 75px; display: block; " src="/storage/image_c/{{ $categorie->image_c }}" alt="image" >
                            </td>

                            <td class="d-none d-xl-table-cell">{{ $categorie->marques->marke_name }}</td>

                            <td class="d-none d-xl-table-cell">
                                @if ( $categorie->status == 1 )
                                    <label class="btn btn-success"> {{ __('messages.Activé') }} </label>
                                @else
                                    <label class="btn btn-danger"> {{ __('messages.Desactivé') }} </label>
                                @endif
                            </td>

                            <td>
                                <button class="btn btn-success" onclick="window.location ='{{ route('categorie.edit', $categorie->id) }}'">{{ __('messages.Edit') }}</button>

                                <button class="btn btn-danger" onclick="window.location ='{{ route('categorie.destroy', $categorie->id) }}'">{{ __('messages.Supprimer') }}</button>

                            </td>
                        </tr>
                            {{-- {{ Form::hidden('', $increment = $increment + 1) }} --}}
                        @endforeach
                    </tbody>
                </table>
            </div>
        {{-- </div> --}}
{{--     <div class="col-12 col-lg-4 col-xxl-3 d-flex">
        <div class="card flex-fill w-100">
            <div class="card-header">
                <h5 class="card-title mb-0">Monthly Sales</h5>
            </div>
            <div class="card-body d-flex w-100">
                <div class="align-self-center chart chart-lg">
                    <canvas id="chartjs-dashboard-bar"></canvas>
                </div>
            </div>
        </div>
    </div> --}}
        </div>
    </div>
</main>
@endsection
