@extends ('layouts.master')

@section ('content')
    <div class="col-md-8">
        <h1>Sign in</h1>
    </div>

    <form method="POST" action="/login">
        {{ csrf_field() }}

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
