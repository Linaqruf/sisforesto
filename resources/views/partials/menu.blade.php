
<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show c-sidebar-show" id="sidebar">
	<div class="c-sidebar-brand d-md-down-none">
		<h3>{{ config('app.name', 'SISFORESTO') }}</h3>

	</div>

  <ul class="c-sidebar-nav ps overflow-auto">
  	<div id="content-mobile">
  	        <li class="c-sidebar-nav-item">
      <a class="c-class-toggler c-sidebar-nav-link c-sidebar-nav-link-success" data-target="#sidebar" data-class="c-sidebar-show"  href="">	
      	<i class="c-sidebar-nav-icon cil-hamburger-menu"></i> Collapse
      </a>
    </li>
    </div>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link c-sidebar-nav-link-warning">
        </i>Selamat Datang,&nbsp; <strong> {{ Auth::user()->name}} </strong>
      </a>
    </li>

  			<li class="c-sidebar-nav-item">
			<a class="c-sidebar-nav-link" href="/home">
				<i class="c-sidebar-nav-icon cil-speedometer"></i>Dashboard
			</a>
		</li>
        <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="/">
        <i class="c-sidebar-nav-icon cil-speedometer"></i>Homepage
      </a>
    </li>
        <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="/pengguna/{{ Auth::user()->id}}/profil">
        <i class="c-sidebar-nav-icon cil-speedometer"></i>Profil Saya
      </a>
    </li>
    @if(auth()->user()->role == 'admin')
    <li class="c-sidebar-nav-title">Manajemen Aplikasi</li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="/restoran">
        <i class="c-sidebar-nav-icon cil-restaurant"></i>Data Restoran
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="/cafe">
        <i class="c-sidebar-nav-icon cil-speedometer"></i>Data Kafe
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="/pengguna">
        <i class="c-sidebar-nav-icon cil-user"></i>Data Pengguna
      </a>
    </li>
    @endif

        <li class="c-sidebar-nav-title">Konten Utama</li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="/listrestoran">
        <i class="c-sidebar-nav-icon cil-restaurant"></i>Daftar Restoran
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="/listcafe">
        <i class="c-sidebar-nav-icon cil-restaurant"></i>Daftar Kafe
      </a>
    </li>
    <li class="c-sidebar-nav-item mt-auto">
      <a class="c-sidebar-nav-link c-sidebar-nav-link-danger" href="{{ route('logout') }}"
				onclick="event.preventDefault();
				document.getElementById('logout-form').submit();"><i class="c-sidebar-nav-icon cil-account-logout"></i>
				{{ __('Logout') }}
      </a>
    </li>

  </ul>
  <button class="c-sidebar-minimizer c-brand-minimizer " type="button"></button>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
	@csrf
</form>