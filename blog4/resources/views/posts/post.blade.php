<div class="blog-post">
    <a href="/posts/{{ $post->id }}">
      <h2 class="blog-post-title">{{ $post->title }}</h2>
    </a>
    <p class="blog-meta-post">
      {{ $post->user->name}} on
      {{ $post->created_at }}
    </p>
    {{ $post->body }}
    <hr>
  </div>  
