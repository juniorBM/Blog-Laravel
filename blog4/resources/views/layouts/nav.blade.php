<div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="/">Inicio</a>
          <a class="nav-link" href="/posts/create">Novo Post</a>
          <a class="nav-link" href="/register">Registre-se</a>
          <a class="nav-link" href="#">New hires</a>

          @if (Auth::check())
            <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
          @endif
        </nav>
      </div>
    </div>