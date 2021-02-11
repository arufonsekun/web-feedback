
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route('index') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('img/logo-practice.png') }}" alt="">
        <span>Mural</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          @if(Auth::check())
          <li><a class="nav-link scrollto @if (request()->routeIs('index')) active @endif" href="{{ route('index') }}">Inicial</a></li>
          <li><a class="nav-link scrollto @if (request()->routeIs('feedbacks')) active @endif" href="{{ route('feedbacks') }}">Ideias</a></li>
          <li><a class="nav-link scrollto @if (request()->routeIs('servicos/acompanhar')) active @endif" href="{{ route('servicos/acompanhar') }}">Acompanhar serviços</a></li>
          <li><a class="nav-link scrollto @if (request()->routeIs('servicos/solicitar')) active @endif" href="{{ route('servicos/solicitar') }}">Solicitar serviço</a></li>
          <li><a class="nav-link scrollto @if (request()->routeIs('lousas')) active @endif" href="{{ route('lousas') }}">Criar Lousas</a></li>  
            @if(Auth()->user()->type == "admin")
              <li><a class="nav-link scrollto @if (request()->routeIs('admin')) active @endif" href="{{ route('admin') }}">Admin</a></li>
            @endif
          @endif
          @if (Auth::check())
            <li class="dropdown mx-4">
                <a href="#">
                    <span class="px-2">{{ Auth()->user()->username }}</span>
                    <img src="{{ asset('img/avatars/avatar-' . (auth()->user()->id % 4 + 1) . '.png') }}" width="32" height="32" class="rounded-circle">
                    <i class="bi bi-chevron-down"></i>
                </a>
                <ul class="mx-4">
                    <li><a href="{{ route('logout') }}">Sair<i class="bi bi-box-arrow-right"></i></a></li>
                </ul>
            </li>
          @else
            <li><a class="getstarted scrollto" href="{{ route('login') }}">Entrar <i class="bi bi-box-arrow-in-right"></i></a></li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->