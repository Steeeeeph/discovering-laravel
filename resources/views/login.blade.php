@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center h-100 mt-5">
        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3 ">
            <form class="form-signin " method="post" action="" >
                @csrf

                <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                    <label for="inputEmail">Email address</label>
                </div>

                <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                    <label for="inputPassword">Password</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
                <label for="register">New here?</label> <a id="register" href="/register">Register first</a>
            </form>
        </div>
    </div>

</div>

@endsection


