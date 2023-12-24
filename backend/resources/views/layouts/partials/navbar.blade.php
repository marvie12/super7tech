<header class="p-3 bg-dark">
  <div class="container">
      @auth
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
        </div>
      @endauth
    </div>
  </div>
</header>