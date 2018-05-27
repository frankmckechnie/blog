<div class="blog-masthead">
  <div class="container">
    <nav class="blog-nav">
      <a class="blog-nav-item {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
      <a class="blog-nav-item {{ Request::is('posts/create') ? 'active' : '' }}" href="/posts/create">Create new post</a>

      @if(Auth::check())

      <a class="blog-nav-item pull-right"  href="">{{ Auth::user()->name }}</a>
    
      @endif
    </nav>
  </div>
</div>