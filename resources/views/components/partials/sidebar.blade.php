<aside class="sidebar">
    <a href="/" class="logo">
        <x-application-logo class="w-8 h-8" />
        {{ config('app.name', 'ORZ Stack') }}
    </a>
    <div class="menu-content">
        <ul class="menu-items">
            <div class="menu-title">Menu Title</div>

            <x-partials.sidebar-link
                :to="route('dashboard')"
                icon="fa-solid fa-fire"
                text="Dashboard"
                :active="Route::is('dashboard') ? 'active' : ''"
            />

            <div class="menu-title">Menu Title</div>

            <x-partials.sidebar-link
                icon="fa-regular fa-folder"
                text="Single Menu"
            />

            <x-partials.sidebar-dropdown icon="fa-regular fa-folder" text="Dropdown Menu 1">
                <x-partials.sidebar-dropdown-item
                    text="Submenu 1"
                />
                <x-partials.sidebar-dropdown-item
                    text="Submenu 2"
                />
                <x-partials.sidebar-dropdown-item
                    text="Submenu 3"
                />
            </x-partials.sidebar-dropdown>

            <x-partials.sidebar-dropdown icon="fa-regular fa-folder" text="Dropdown Menu 2">
                <x-partials.sidebar-dropdown-item
                    text="Submenu 1"
                />
                <x-partials.sidebar-dropdown-item
                    text="Submenu 2"
                />
                <x-partials.sidebar-dropdown-item
                    text="Submenu 3"
                />
            </x-partials.sidebar-dropdown>
        </ul>
    </div>
</aside>
