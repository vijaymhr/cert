<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
            <img src="{{asset('images/img/user.jpeg')}}" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}

                </div>
                <div class="email">

                    {{{ isset(Auth::user()->name) ? Auth::user()->email : Auth::user()->name }}}

                </div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        {{-- <li><a href="javascript:void(0);"><i class="material-icons">person</i>Change Password</a></li>
                        <li role="separator" class="divider"></li> --}}


                        {{-- logout --}}


                       <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            {{-- <a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a> --}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                {{-- <li class="active">
                    <a href="/dashboard">
                        <i class="material-icons">home</i>
                        <span>Dashboard</span>
                    </a>
                </li> --}}
                
                <li>
                    <a href="/about">
                        <i class="material-icons">business</i>
                        <span>About Us</span>
                    </a>
                </li>


                <li>
                    <a href="/iso">
                        <i class="material-icons">bookmark_border</i>
                        <span>ISO Standards</span>
                    </a>
                </li>
                <li>
                    <a href="/info">
                        <i class="material-icons">my_location</i>
                        <span>Address Info</span>
                    </a>
                </li>

                <li>
                    <a href="/feedback">
                        <i class="material-icons">feedback</i>
                        <span>Contact Us Feedbacks</span>
                    </a>
                </li>

                

                
            </ul>
        </div>


        



        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2020 <a href="javascript:void(0);">Vijay Maharjan</a>.
            </div>
            <div class="version">
                <b>Deasigned and Developed by </b> Vijay Maharjan
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    
</section>
