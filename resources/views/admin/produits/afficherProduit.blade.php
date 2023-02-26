@extends('layouts.appadmin')

@section('title')
    {{ __('messages.Afficher les produits') }}
@endsection

{{-- {{Form::hidden('', $increment=1)}} --}}
@section('contenu')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            {{-- <div class="col-12 col-lg-8 col-xxl-9 d-flex"> --}}
                <div class="card flex-fill">
                    <div class="card-header">
                    <h5 class="card-title mb-0"> {{ __('messages.Afficher les produits') }}
                    </h5>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <td class="d-none d-xl-table-cell">{{ __('messages.Num') }}</th>
                            <th class="d-none d-xl-table-cell">{{ __('messages.Nom') }}</th>
                            <th class="d-none d-xl-table-cell">{{ __('messages.prix') }}</th>
                            <th class="d-none d-xl-table-cell">{{ __('messages.Status') }}</th>
                            <th class="d-none d-xl-table-cell">{{ __('messages.Images') }}</th>
                            <th class="d-none d-xl-table-cell">{{ __('messages.Categories') }}</th>
                            {{-- <th class="d-none d-xl-table-cell">marque</th> --}}
                            <th class="d-none d-md-table-cell">{{ __('messages.Action') }}</th>
                            {{-- <th class="d-none d-md-table-cell">Sponsorisé</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produits as $produit)
                        <tr>
                            <td class="d-none d-xl-table-cell">{{ $produit->id }}</td>
                            <td class="d-none d-xl-table-cell">{{ $produit->product_name }}</td>
                            <td class="d-none d-xl-table-cell">{{ $produit->prix }} $</td>
                            <td class="d-none d-xl-table-cell">
                            @if ( $produit->status == 1 )
                                <label class="btn btn-success"> {{ __('messages.Activé') }} </label>
                            @else
                                <label class="btn btn-danger"> {{ __('messages.Desactivé') }} </label>
                            @endif
                            </td>
                            <td class="d-none d-xl-table-cell"><img  style="size: width : 150px; height : 75px; display: block; " src="/storage/image_p/{{ $produit->image_p }}" alt="" >
                            </td>

                            {{--
                                <td class="d-none d-xl-table-cell">{{ dd($produit->marques->marke_name) }}</td>
                            --}}

                            <td class="d-none d-xl-table-cell">{{ $produit->categories->category_name}}</td>

                        <td>
                            <button class="btn btn-success" onclick="window.location ='{{ route('produit.edit', $produit->id) }}'">{{ __('messages.Edit') }}</button>

                            <button class="btn btn-danger" onclick="window.location ='{{ route('produit.destroy', $produit->id) }}'">{{ __('messages.Supprimer') }}</button>
                        </td>

{{--                         <td>
                            @if ($produit->product_sp == 1)
                                <button class="btn btn-primary" onclick="window.location ='{{ route('produit.desactiver', $produit->id) }}'">{{ __('messages.Desactivé') }}</button>
                            @else
                                <button class="btn btn-warning" onclick="window.location ='{{ route('produit.activer', $produit->id) }}'">{{ __('messages.Activé') }}</button>
                            @endif
                        </td> --}}

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
