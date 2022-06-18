<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
  <body>
    @if(Session::has('loginError'))
    <div class="alert alert-danger">
        {{ Session::get('loginError') }}
    </div>
    @endif
    <form method="post" action="/login">
        @csrf
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" placeholder="Email address" class="form-control form-control-lg text-success @error('email') is-invalid @enderror"
            id="email" name="email" value ="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" placeholder="Password" class="form-control form-control-lg text-success @error('password') is-invalid @enderror"
            id="password" name="password" value ="{{ old('password') }}">
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div><br>
        <div class="form-group">
            <button type="submit" class="btn btn-success" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
        </div>

    </form>

  </body>
</html>
