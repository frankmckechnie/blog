<div class="blog-post">
  <a href="/posts/{{$post->id}}"><h2 class="blog-post-title">{{$post->title}}</h2></a>
  <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} by <a href="#">{{$post->user->name}}</a></p>

  <p>
    {{ substr($post->body, 0, 200) }}

  </p>

 
 
</div><!-- /.blog-post -->