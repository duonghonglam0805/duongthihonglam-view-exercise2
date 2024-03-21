<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <img src="{{asset('assets/images/logo.png')}}" alt="image" style="height: 70px; margin-right: 20px;">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex search">
          <input class="form-control search-input me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn " type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><img src="{{asset('assets/images/avatar1.jpg')}}" style="border-radius: 50%; width: 50px;" alt=""></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Charts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Oders</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>