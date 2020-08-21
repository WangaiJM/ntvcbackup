<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm navs">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            Naivasha TVC
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="/about" class="nav-link">About</a>
                </li>
                <!-- Academics -->
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        Academics <span class="caret"></span>
                    </a>
                    <ul id="" class="dropdown-menu dropdown-menu-right">
                        <li class="nav-item">
                            <a href="/programmes" class="nav-link">Academic Programmes</a>
                        </li>
                    </ul>
                </li>
                <!-- Administration -->
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        Administration <span class="caret"></span>
                    </a>
                    <ul id="" class="dropdown-menu dropdown-menu-right">
                        <li class="nav-item">
                            <a href="/administration" class="nav-link">School Administration</a>
                        </li>
                        <li class="nav-item">
                            <a href="/chairperson" class="nav-link">Chairperson</a>
                        </li>
                        <li class="nav-item">
                            <a href="/principal" class="nav-link">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a href="/deputy_principal" class="nav-link">Deputy Principal</a>
                        </li>
                        <li class="nav-item">
                            <a href="/registrar" class="nav-link">Registrar</a>
                        </li>
                    </ul>
                </li>
                <!-- Admissions -->
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        Admissions <span class="caret"></span>
                    </a>
                    <ul id="" class="dropdown-menu dropdown-menu-right">
                        <li class="nav-item">
                            <a href="/general" class="nav-link">General Admission Information</a>
                        </li>
                        <li class="nav-item">
                            <a href="/admission_programmes" class="nav-link">Academic Programmes</a>
                        </li>
                        <li class="nav-item">
                            <a href="/apply" class="nav-link">How to apply</a>
                        </li>
                        <li class="nav-item">
                            <a href="/accounts" class="nav-link">Institution Accounts</a>
                        </li>
                        <li class="nav-item">
                            <a href="/registration" class="nav-link">Application Forms</a>
                        </li>
                    </ul>
                </li>
                <!-- Students -->
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        Students <span class="caret"></span>
                    </a>
                    <ul id="" class="dropdown-menu dropdown-menu-right">
                        <li class="nav-item">
                            <a href="" class="nav-link">Students Welfare</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Student Portal</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Games and Sports</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Teaching Timetable</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Exam Timetable</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Student Downloads</a>
                        </li>
                    </ul>
                </li>
                <!-- Careers -->
                <!-- <li class="nav-item">
                    <a href="" class="nav-link">Careers</a>
                </li> -->
                <!-- Contacts -->
                <li class="nav-item">
                    <a href="/contacts" class="nav-link">Contacts</a>
                </li>
                <!-- Portals -->
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        Portals <span class="caret"></span>
                    </a>
                    <ul id="" class="dropdown-menu dropdown-menu-right">
                        <li class="nav-item">
                            <a href="" class="nav-link">Student Portal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Staff {{ __('Login') }}</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li> -->
                    </ul>
                </li>
                <!-- Authentication Links -->
                <!-- @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest -->
            </ul>
        </div>
    </div>
</nav>