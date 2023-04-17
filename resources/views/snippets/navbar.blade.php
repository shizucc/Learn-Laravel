<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="/">MyBlog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{($title === 'home') ? 'active' : ''}} " aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title === 'blog') ? 'active' : ''}} " href="{{route('post.index')}}">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title === 'categories') ? 'active' : ''}} " href="/categories">Categories</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              User
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/about">About</a></li>
            </ul>
          </li>
        </ul>
        <ul class='navbar-nav d-flex'>
          @auth
          <div class="dropdown">
            <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-circle"></i>
                Welcome Back, {{auth()->user()->name}}
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-journal"></i>My Dashboard</a></li>
                <li><hr class='dropdown-divider'></li>
                <li><a class="dropdown-item" href="/logout"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
              </ul>
            </div>
          @else 
          <li class='nav-item'>
            <a class='nav-link' {{($title === 'login') ? 'active' : ''}}  href="/login">Login</a>
          </li>     
          @endauth
        </ul>

      </div>
    </div>
  </nav>