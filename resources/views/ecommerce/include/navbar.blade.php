<nav class="navbar is-link is-transparent">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item">
        <i class="fas fa-store-alt fa-4x"></i>
      </a>
      <div class="navbar-burger burger" data-target="navbarBurger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <div id="navbarBurger" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="#">
          HOME
        </a>
        @foreach ($categories as $category)
        <a class="navbar-item" href="#">
          {{ $category->title }}
        </a>
        @endforeach


      </div>

      <div class="navbar-end">
        <div class="navbar-item">
          <div class="field is-grouped">
            <p class="control">
              <a class="button is-primary" href="https://github.com/jgthms/bulma/releases/download/0.7.1/bulma-0.7.1.zip">
                <span class="icon">
                  <i class="fas fa-shopping-cart"></i>
                </span>
                <span>CART</span>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>