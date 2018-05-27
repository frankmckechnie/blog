@extends('layout')

@section ('content')


      <div class="blog-header">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          @foreach($posts as $post)
            @include('posts.post')
          @endforeach
          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

        </div><!-- /.blog-main -->

        @include('partials.sidebar')

      </div><!-- /.row -->



@endsection

@section ('footer')
<script type="text/javascript" src="js/app.js"></script>
@endsection