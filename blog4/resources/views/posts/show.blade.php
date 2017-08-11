@extends ('layouts.master')

@section ('content')
    <h1> {{ $post->title }}</h1>
         {{ $post->body }}

    <hr>
    <div class="comments">
        @foreach ($post->comments as $comment)
            <li class="list-group-item" style="color: blue">
                <strong>
                    {{ $comment->created_at->diffForHumans() }}: &nbsp;
                {{ $comment->body }}
            </li>
        @endforeach
    </div>

    <hr>

    <div class="card">
        <div class="card-block">
            <form method="POST" action="/posts/{{$post->id}}/comments">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea required name="body" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
            {{--  @include ('layouts.errors');  --}}
        </div>
    </div>
@endsection