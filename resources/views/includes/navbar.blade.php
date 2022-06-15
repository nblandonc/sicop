<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
         
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
            
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">

          <li class="nav-item dropdown pe-2 d-flex align-items-center">
              
              <a href="javascript:;" class="nav-link text-body p-0" id="control" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">{{ Auth::user()->name }}</span><!-- Muestra el nombre de quien esta logueado -->
              </a>
                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="control">
                    <li class="mb-2">
    
                        <div class="d-flex py-1">
                          <div class="d-flex flex-column justify-content-center">
                          <a class="dropdown-item border-radius-md" @click="menu=25" href="#">
                              <i class="fa-solid fa-user-pen"></i> {{ __('Editar perfil') }}
                          </a>
                          </div>
                        </div>
                  </li>
                  <li class="mb-2">
                        <!-- Cerrar sesion -->
                        <div class="d-flex py-1">
                          <div class="d-flex flex-column justify-content-center">
                          <a class="dropdown-item border-radius-md" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                  <i class="fa-solid fa-person-through-window"></i> {{ __('Cerrar sesión') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                          </div>
                        </div>
                  </li>
                </ul>
              </li>
            <!-- <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" id="navbarDropdown" class="nav-link text-body p-0" data-bs-toggle="dropdown" aria-expanded="false">

                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">{{ Auth::user()->name }}</span>
              </a>

              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="navbarDropdown">
                <a class="dropdown-item border-radius-md" @click="menu=25" href="#">
                    <i class="fa-solid fa-user-pen"></i> {{ __('Editar perfil') }}
                </a>
                <a class="dropdown-item border-radius-md" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-person-through-window"></i> {{ __('Cerrar sesión') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </ul>
            </li> -->

            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>

            <li class="nav-item px-3 d-flex align-items-center">
              
            </li>

              
    
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->