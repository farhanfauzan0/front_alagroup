<header class="header navbar-fixed-top">
    <!-- Navbar -->
    <nav class="navbar" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="menu-container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="toggle-icon"></span>
                </button>

                <!-- Logo -->
                <div class="logo">
                    <a class="logo-wrap" href="{{ route('home.index') }}">
                        <img class="logo-img logo-img-main" style="margin-top: -20%;"
                            src="{{ url('https://backend.ala-group.id/assets/images/logoonly.png') }}" alt="Logo"
                            style="height: auto; width: auto; max-width: 300px; max-height: 300px;">
                        <img class="logo-img logo-img-active" style="margin-top: -20%;"
                            src="{{ url('https://backend.ala-group.id/assets/images/logoonly.png') }}" alt="Logo"
                            style="height: auto; width: auto; max-width: 300px; max-height: 300px;">
                    </a>
                </div>
                <!-- End Logo -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-collapse">
                <div class="menu-container">
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item"><a
                                class="nav-item-child nav-item-hover {{ request()->is('/') ? 'active' : '' }}"
                                href="{{ route('home.index') }}">Halaman Utama</a>
                        </li>
                        <li class="nav-item"><a
                                class="nav-item-child nav-item-hover {{ request()->is('visi-misi') ? 'active' : '' }}"
                                <a class="nav-item-child nav-item-hover" href="{{ route('visi-misi.index') }}">
                                Visi Misi
                            </a>
                        </li>
                        <li class="nav-item"><a
                                class="nav-item-child nav-item-hover {{ request()->is('produk') ? 'active' : '' }}"
                                href="{{ route('produk.index') }}">Produk</a>
                        </li>
                        <li class="nav-item"><a
                                class="nav-item-child nav-item-hover {{ request()->is('katalog') ? 'active' : '' }}"
                                href="{{ route('katalog.index') }}">Katalog</a>
                        </li>
                        <li class="nav-item"><a
                                class="nav-item-child nav-item-hover {{ request()->is('portofolio') ? 'active' : '' }}"
                                href="{{ route('portofolio.index') }}">Portofolio</a>
                        </li>
                        <li class="nav-item"><a
                                class="nav-item-child nav-item-hover {{ request()->is('hubungi-kami') ? 'active' : '' }}"
                                href="{{ route('contact.index') }}">Hubungi
                                Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Navbar Collapse -->
        </div>
    </nav>
    <!-- Navbar -->
</header>
