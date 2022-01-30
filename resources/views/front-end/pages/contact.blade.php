@extends('front-end.master')
@section('title')
Contact
@endsection
@section('body')
<section class="pt-2 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form class="comment-form" action="{{ route('submitted') }}" method="POST">
                    @csrf
                    <h5>Get In Touch</h5>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-4">
                                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                            </div>
                            <div class="col-12 col-md-6 mb-4">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="col-12 mb-4">
                                <textarea rows="7" name="message" class="form-control" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <input type="submit" value="Submit" class="btn btn-solid">
                    </form>
            </div>
        </div>
    </div>
</section>
@endsection
