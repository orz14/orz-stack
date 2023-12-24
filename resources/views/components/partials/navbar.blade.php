<section class="navbar-container">
    <nav class="navbar">
        <i class="fa-solid fa-bars text-[25px]" id="sidebar-close"></i>
        <div class="dropdown">
            <button class="dropbtn">
                <img src="{{ asset('assets/img/profile.webp') }}" alt="{{ __('My Profile') }}" class="object-cover w-full h-full" />
            </button>

            <div class="dropdown-content">
                <a href="#">{{ __('Profile') }}</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button onclick="return confirm('Are you sure want to logout?')">{{ __('Logout') }}</button>
                </form>
            </div>
        </div>
    </nav>
</section>
