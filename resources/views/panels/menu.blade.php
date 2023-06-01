@inject('request', 'Illuminate\Http\Request')
<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
  <li class="nav-item {{ $request->segment(1) == 'app' && $request->segment(2) == '' ? 'active' : '' }}">
      <a href="/app" class="nav-link d-flex align-items-center">
        <i data-feather="home"></i>
        <span>Home</span>
      </a>
  </li>

  <li class="nav-item {{ $request->segment(1) == 'app' && $request->segment(2) == 'article' ? 'active' : '' }}">
      <a href="{{ route('article.index') }}" class="nav-link d-flex align-items-center">
        <i data-feather="book-open"></i>
        <span>Articles</span>
      </a>
  </li>
</ul>



