@extends ('layouts.master')

@section ('content')
    <div class="col-sm-8 blog-main">
        <h1>Create a Post</h1>
        <form method="POST" action="/posts">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title: </label>
                <input required type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="body">Body: </label>
                <textarea required id="body" name="body" class="form-control" cols="30" rows="10"></textarea>
            </div>
    </div>
        <button type="submit" class="btn btn-primary">Publish</button>

        <div class="form-group">
            <div class="alert alert-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </form>

    
@endsection