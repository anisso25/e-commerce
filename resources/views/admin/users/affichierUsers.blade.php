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
                            <th class="d-none d-xl-table-cell">{{ __('messages.Num') }}</th>
                            <th class="d-none d-xl-table-cell">{{ __('messages.Nom') }}</th>
                            <th class="d-none d-xl-table-cell">Email</th>
                            <th class="d-none d-xl-table-cell">Status</th>
                            <th class="d-none d-md-table-cell">{{ __('messages.Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td class="d-none d-xl-table-cell">{{ $user->id }}</td>
                            <td class="d-none d-xl-table-cell"> {{ $user->name }} </td>
                            <td class="d-none d-xl-table-cell"> {{ $user->email }}</td>
                            <td class="d-none d-xl-table-cell">
                            @if ( $user->status == 1 )
                                <label class="btn btn-success"> {{ __('messages.Activé') }} </label>
                            @else
                                <label class="btn btn-danger"> {{ __('messages.Desactivé') }} </label>
                            @endif
                            </td>

                        <td>
                            <button class="btn btn-success" onclick="window.location ='{{ route('users.edit', $user->id) }}'">{{ __('messages.Edit') }}</button>

                            <button class="btn btn-danger" onclick="window.location ='{{ route('users.destroy', $user->id) }}'">{{ __('messages.Supprimer') }}</button>
                        </td>

                        <td>
                            @if ($user->product_sp == 1)
                                <button class="btn btn-primary" onclick="window.location ='{{ route('user.desactiver', $user->id) }}'">{{ __('messages.Desactivé') }}</button>
                            @else
                                <button class="btn btn-warning" onclick="window.location ='{{ route('user.activer', $user->id) }}'">{{ __('messages.Activé') }}</button>
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
