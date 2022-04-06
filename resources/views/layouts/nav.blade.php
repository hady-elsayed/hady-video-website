<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-danger">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href={{route('frontend.landing')}} rel="tooltip" title="Coded by Creative Tim" data-placement="bottom">
                Hady's project
            </a>

            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <!-- Example single danger button -->
                    <a class="btn btn-default" href="{{route('home')}}">Home</a>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Category
                        </button>
                        <div class="dropdown-menu">
                            @foreach($categoriesOne as $category )
                                <a class="dropdown-item" href="{{route('front.category',['id'=>$category->id])}}">{{$category->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <!-- Example single danger button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            skills
                        </button>
                        <div class="dropdown-menu">
                            @foreach($skillsOne as $skill )
                                <a class="dropdown-item" href="{{route('front.skill',['id'=>$skill->id])}}">{{$skill->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </li>
            </ul>

                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a id="navbarDropdown" class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>


                    @endguest

            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->