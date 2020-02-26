<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">HASELDEN & CO NZ LTD</a>
      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav nav ml-auto">
          <li class="nav-item"><a href="/" class="nav-link"><span>Home</span></a></li>
          <li class="nav-item"><a href="/#about-section" class="nav-link"><span>About</span></a></li>
          <li class="nav-item"><a href="/#practice-section" class="nav-link"><span>Systems Implementation
        </span></a></li>
          <li class="nav-item cta"><a href="/#contact-form" class="nav-link"data-target="#modalAppointment">Contact Us</a></li>
        

         <!-- Authentication Links -->
         @guest
         <li class="nav-item">
             <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
         {{-- </li>
         @if (Route::has('register'))
             <li class="nav-item">
                 <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
             </li>
         @endif --}}
     @else
         <li class="nav-item dropdown">
             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                 {{ Auth::user()->name }} <span class="caret"></span>
             </a>

             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" target="_blank" rel="noopener noreferrer" href="/about">Admin</a>

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
     @endguest

        
        </ul>
      </div>
    </div>
  </nav>