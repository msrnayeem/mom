<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #006400;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('MOM-logo-02.jpg') }}" alt="মদিনা অনলাইন মাদরাসা" style="width: 122px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">হোম</a></li>
                <li class="nav-item"><a class="nav-link" href="#courses">কোর্স</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">আমাদের সম্পর্কে</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">যোগাযোগ</a></li>
                @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">লগ ইন</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">রেজিস্টার</a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">ড্যাশবোর্ড</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            লগ আউট
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
