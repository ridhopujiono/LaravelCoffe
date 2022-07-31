<li class="nav-item">
    <a href="{{ route('produks.index') }}"
       class="nav-link {{ Request::is('produks*') ? 'active' : '' }}">
        <p>Produks</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('chefs.index') }}"
       class="nav-link {{ Request::is('chefs*') ? 'active' : '' }}">
        <p>Chefs</p>
    </a>
</li>


