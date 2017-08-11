{{--  @extends ('layouts.master')

@section ('content')
    <div class="col-md-8">
        <h1>Sign in</h1>
    </div>

    <form method="POST" action="/sessions">
        {{ csrf_field() }}
        
    </form>

@endsection  --}}

@extends ('layouts.master')

@section ('content')
    <div class="col-md-8">
        <h1>Sign in</h1>
    </div>

    <form method="POST" action="/register">
        {{ csrf_field() }}

        <div class="form-control">
            <label for="name">Name: </label>
            <input type="text" id="name" name="name" class="form-control">
        </div>

        <div class="form-control">
            <label for="email">E-mail: </label>
            <input type="text" id="email" name="email" class="form-control">
        </div>

        <div class="form-control">
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Sing In</button>
        </div>
    </form>

@endsection