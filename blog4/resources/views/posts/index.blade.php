@extends ('layouts.master')

@section ('content')
    
  <div class="blog-post">
    <h2 class="blog-post-title">Sample blog post</h2>
    <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
  </div>  

  @foreach ($posts as $post)
    @include ('posts.post')
  @endforeach
@endsection
