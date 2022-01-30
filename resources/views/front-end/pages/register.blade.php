@extends('front-end.master')
@section('title')
Register
@endsection
@section('body')
<section class="py-5 mb-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="row mb-4">
                        <div class="col-lg-12">
                            <label for="name">User Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                    </div>
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
                    <div class="row my-4">
                        <div class="col-lg-12">
                            <label for="c-password">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="c-password" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="submit" value="Register" class="btn btn-solid">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <p>Already Have An Account?  <a href="{{ route('login') }}" class="text-muted">Login</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
