<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
<i class="hamburger align-self-center"></i>
</a>
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                        </a>
                        {{-- logOut --}}
                            <a style="padding: 5%" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                                class="text-body">
                            <i class="me-4 icon-md" data-feather=""></i>
                                <div>{{ __('Logout') }}</div>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                        </li>
                    </ul>

            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"aria-expanded="false" id="dropdownMenuButton">
                    EN
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li class="conta_icon" >
                            <a style="color: black; padding: 0.25rem 1.5rem;" class="conta_icon" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], false) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </div>
            </div>
            <br><br>

        <ul class="card" style="list-style-type: none">
                <div class="card-body">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], false) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                </div>
            </ul>
            <br><br>

{{--         <ul style="list-style-type: none">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], false) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
            @endforeach
        </ul> --}}

    </div>
</nav>
