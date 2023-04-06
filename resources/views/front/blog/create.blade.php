@extends('layouts.front')
@section('content')
<div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">        
       <div class="rs-quick-contact">
        {{@Auth::user()->name}}
            <div class="inner-part text-center mb-50">
                <h2 class="title mb-15">Create Your Blog</h2>               
            </div>
                <div id="form-messages"></div>
            <form id="blogForm" method="post" action="">
                @csrf
                <div class="row">
                    <div class="col-lg-12 mb-35 col-md-12">
                        <label for="">Title</label>
                        <input class="from-control" type="text" id="title" name="title" placeholder="Enter Blog Title">
                    </div> 
                    <div class="col-lg-12 mb-35 col-md-12">
                        <label for="">Image</label>
                        <input class="from-control" type="file" id="image" name="image">
                    </div> 
                    <div class="col-lg-12 mb-35 col-md-12">
                        <label for="">Description</label>
                       <textarea class="from-control"  id="description" name="description" placeholder="Enter Blog Description" ></textarea>
                    </div> 
                </div>
                <div class="form-group mb-0">
                    <input class="btn-send" type="submit" value="Submit Now">
                </div>       
            </form>
            <div id="success" class="text-success"></div>
            <div id="error" class="text-danger"></div>
       </div> 
    </div>
</div>
@endsection
@section('script')
    @include('front.blog.scripts')
@endsection