<aside class="sidebar">
    <a href="/" class="logo">
        <x-application-logo class="w-8 h-8" />
        {{ config('app.name', 'ORZ Stack') }}
    </a>
    <div class="menu-content">
        <ul class="menu-items">
            <div class="menu-title">Menu Title</div>
            <li class="item">
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>

            <div class="menu-title">Menu Title</div>
            <li class="item">
                <a href="#">Single Menu</a>
            </li>
            <li class="item">
                <div class="submenu-item">
                    <span>Dropdown Menu 1</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
                <ul class="menu-items submenu">
                    <div class="menu-title">
                        <i class="fa-solid fa-chevron-left"></i>
                        Dropdown Menu 1
                    </div>
                    <li class="item">
                        <a href="#">Submenu 1</a>
                    </li>
                    <li class="item">
                        <a href="#">Submenu 2</a>
                    </li>
                    <li class="item">
                        <a href="#">Submenu 3</a>
                    </li>
                </ul>
            </li>
            <li class="item">
                <div class="submenu-item">
                    <span>Dropdown Menu 2</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
                <ul class="menu-items submenu">
                    <div class="menu-title">
                        <i class="fa-solid fa-chevron-left"></i>
                        Dropdown Menu 2
                    </div>
                    <li class="item">
                        <a href="#">Submenu 1</a>
                    </li>
                    <li class="item">
                        <a href="#">Submenu 2</a>
                    </li>
                    <li class="item">
                        <a href="#">Submenu 3</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
