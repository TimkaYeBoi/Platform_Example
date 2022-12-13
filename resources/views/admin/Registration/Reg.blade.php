@extends("layouts.sign")
@section("content")
<div class="container">
        <div class="row mt-5">
            <div class="col-md-6 offset-3">
                <form action="{{ route("reg.check") }}" method="post">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal mt-6">Please sign in</h1>
                    <div class="form-floating">
                        <input type="text" name = "username" class="form-control" id="floatingInput" placeholder="Username">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating my-2">
                        <input type="password" name = "password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                </form>
            </div>
        </div>
    </div>
@endsection



