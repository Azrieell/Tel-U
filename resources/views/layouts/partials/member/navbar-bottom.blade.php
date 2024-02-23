<!-- Bottom Navbar -->
<nav class="navbar navbar-light bg-white navbar-expand fixed-bottom d-md-none d-lg-none d-xl-none" style="height: 60px;">
    <ul class="navbar-nav nav-justified w-100">
        <li class="nav-item">
            <a href="/beranda" class="nav-link text-center">
                <i
                    class="mt-1 fa-solid fa-house text-lg {{ Request::is('beranda') ? 'text-danger' : 'text-secondary' }}"></i>
                <span class="small d-block {{ Request::is('beranda') ? 'text-danger' : '' }}">Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="my-journey" class="nav-link text-center">
                <img src="{{ asset('images/icon-journey.png') }}"
                    style="width: 20px; margin-bottom: 2px; margin-top: 2px;" alt="">
                <span class="small d-block">MyJourney</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="/resume-builder-create" class="nav-link text-center">
                <i class="mt-1 fa-solid fa-book text-lg text-secondary"></i>
                <span class="small d-block">Resume</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="/job-portal" class="nav-link text-center">
                <i class="mt-1 fa-solid fa-briefcase text-lg text-secondary"></i>
                <span class="small d-block">Jobs</span>
            </a>
        </li>
    </ul>
</nav>
