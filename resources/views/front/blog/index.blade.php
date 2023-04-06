@extends('layouts.front')
@section('content')
    <div class="axil-tech-post-banner pt--30 bg-color-grey" style="padding-top: 200px">
        <div class="container">
            <div class="row">
                <div class="col-xl-6   " style="display: flex">
                    @foreach ($blogData as $blogList)
                        <!-- Start Single Post  -->
                        <div class="content-block image-rounded">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="{{ asset('storage/app/public/adminAssets/uploads/blog/' . $blogList->image) }}"
                                        alt="Post Images" height="200px !important" width="200px !important">
                                </a>
                            </div>
                            <div class="post-content">
                                <h5 class="title"><a
                                        href="{{ URL::to('blog/single-blog') . '/' . $blogList->id }}">{{ $blogList->title }}</a>
                                </h5>
                            </div>
                        </div>
                        <!-- End Single Post  -->
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
