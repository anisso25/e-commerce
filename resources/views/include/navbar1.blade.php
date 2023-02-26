<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <p class="sidebar-brand" href="">
            <span class="align-middle">{{ __('messages.AdminKit') }}</span>
        </p>

            {{-- Dashboard --}}
        <ul class="sidebar-nav">

            <li class="sidebar-item active">
                <a class="sidebar-link" href="index.html">
                        <span class="align-middle">
                            {{ __('messages.Dashboard') }}
                        </span>
                </a>
            </li>

            {{-- Pages  --}}
        <li class="sidebar-header">
            {{ __('messages.Marques') }}
        </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('marques.indexMarque') }}">
                    <i class="align-middle" data-feather="folder-plus"></i>
                    <span class="align-middle">
                        {{ __('messages.Ajouter') }}
                    </span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('marques.create') }}">
                    <i class="align-middle" data-feather="eye"></i>
                    <span class="align-middle">
                        {{ __('messages.Afficher') }}
                    </span>
                </a>
            </li>

            {{-- Tools & Components  --}}
            <li class="sidebar-header">
                {{ __('messages.Categories') }}
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('categories.indexCategorie') }}">
                    <i class="align-middle" data-feather="plus-square"></i>
                    <span class="align-middle">
                        {{ __('messages.Ajouter') }}
                    </span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('categories.create') }}">
                    <i class="align-middle" data-feather="eye"></i>
                    <span class="align-middle">
                        {{ __('messages.Afficher') }}
                    </span>
                </a>
            </li>

            {{-- Plugins & Addons  --}}
            <li class="sidebar-header">
                {{ __('messages.Produits') }}
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('produits.indexProduit') }}">
                    <i class="align-middle" data-feather="plus"></i>
                    <span class="align-middle">
                        {{ __('messages.Ajouter') }}
                    </span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('produits.create') }}">
                    <i class="align-middle" data-feather="eye"></i>
                    <span class="align-middle">
                        {{ __('messages.Afficher') }}
                    </span>
                </a>
            </li>
        </ul>
    </div>
</nav>
