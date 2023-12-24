<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
         
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
            
            
              <li class="nav-item" >
              <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right"  aria-labelledby="navbarDropdownProfile">
               
                  <div class ="dropdown-divider"></div>

                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>