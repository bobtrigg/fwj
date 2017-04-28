    <div class="masthead">
      <div class="container">
        <nav class="nav">
          <a class="nav-link active" href="/">Home</a>
          <a class="nav-link" href="/tracks">Tracks</a>
          <a class="nav-link" href="/albums">Albums</a>
          <a class="nav-link" href="/artists">Artists</a>
          <a class="nav-link" href="/seasons">Seasons</a>
          <a class="nav-link" href="/formats">Formats</a>
          @if (Auth::check())
            <span class="nav-link ml-auto">Welcome, {{ Auth::user()->name }}</span>
            <a class="nav-link" href="/logout">Logout</a>
          @else
            <a class="nav-link ml-auto" href='/login'>Login</a>
          @endif
        </nav>
      </div>
    </div>
