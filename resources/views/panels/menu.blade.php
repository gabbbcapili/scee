@inject('request', 'Illuminate\Http\Request')
<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
  <li class="nav-item {{ $request->segment(2) == '' && $request->segment(3) == '' ? 'active' : '' }}">
      <a href="/" class="nav-link d-flex align-items-center">
        <i data-feather="home"></i>
        <span>Home</span>
      </a>
  </li>
</ul>



