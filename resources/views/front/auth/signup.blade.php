@extends('layouts.front')
@section('css')
    <title> Signup </title>
@endsection
@section('content')
<div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
       
        
       <div class="rs-quick-contact">
            <div class="inner-part text-center mb-50">
                <h2 class="title mb-15">Free Register</h2>
               
            </div>
                <div id="form-messages"></div>
            <form id="signupForm" method="post" action="{{route('auth.store')}}">
                @csrf
                <div class="row">
                    <div class="col-lg-12 mb-35 col-md-12">
                        <label for="">Name</label>
                        <input class="from-control" type="text" id="name" name="name" placeholder="Enter your name">
                    </div> 
                    <div class="col-lg-12 mb-35 col-md-12">
                        <label for="">Email</label>
                        <input class="from-control" type="text" id="email" name="email" placeholder="Enter your email">
                    </div> 
                    <div class="col-lg-12 mb-35 col-md-12">
                        <label for="">Password</label>
                        <input class="from-control" type="text" id="password" name="password" placeholder="Enter your password">
                    </div> 
                    
                    <div class="col-lg-12 mb-35 col-md-12">
                        <label for="">Confirm Password</label>
                        <input class="from-control" type="text" id="confirmPassword" name="confirmPassword" placeholder="Enter your confirm password">
                    </div> 
                    
                <div class="form-group mb-0">
                    <input class="btn-send" type="submit" value="Submit Now">
                </div>       
            </form>
             @if(Session::has('message'))
                <p class="alert alert-info mt-5">{{ Session::get('message') }}</p>
            @endif
            {{-- <div id="success" class="text-success"></div>
            <div id="error" class="text-danger"></div> --}}
       </div> 
    </div>
</div>
@endsection
@section('script')
    @include('front.blog.scripts')
@endsection