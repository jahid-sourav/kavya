@extends('front-end.master')
@section('title')
Login
@endsection
@section('body')
<section class="py-5 mb-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="email">User Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-lg-12">
                            <label for="password">User Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="submit" value="Login" class="btn btn-solid">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <p>Don't Have Any Account?  <a href="{{ route('register') }}" class="text-muted">Create Account</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
