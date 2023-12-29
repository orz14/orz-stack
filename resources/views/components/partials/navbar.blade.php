<section class="navbar-container">
    <nav class="navbar">
        <i class="fa-solid fa-bars text-[25px]" id="sidebar-close"></i>
        <div class="dropdown">
            <button class="dropbtn">
                @isset(auth()->user()->avatar)
                    <img src="{{ asset('storage/' . auth()->user()->avatar) }}" alt="{{ auth()->user()->name }}" class="object-cover w-full h-full" />
                @else
                    <img src="{{ asset('assets/img/profile.webp') }}" alt="{{ auth()->user()->name }}" class="object-cover w-full h-full" />
                @endisset
            </button>

            <div class="dropdown-content">
                <a href="{{ route('profile.edit') }}">{{ __('Profile') }}</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button onclick="return confirm('Are you sure want to logout?')">{{ __('Logout') }}</button>
                </form>
            </div>
        </div>
    </nav>
</section>
