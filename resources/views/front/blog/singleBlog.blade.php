@extends('layouts.front')
@section('content')
    <!-- Start Post Single Wrapper  -->
    <div class="post-single-wrapper axil-section-gap bg-color-white" style="padding-top: 200px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Start Banner Area -->
                    <div class="banner banner-single-post post-formate post-layout axil-section-gapBottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Start Single Slide  -->
                                    <div class="content-block">
                                        <!-- Start Post Content  -->
                                        <div class="post-content">
                                            <h1 class="title">{{ $blog->title }}</h1>
                                            <!-- Post Meta  -->
                                            <div class="post-meta-wrapper">
                                                <div class="post-meta">
                                                    <div class="post-author-avatar border-rounded">
                                                        <img src="{{ asset('storage/app/public/adminAssets/uploads/blog/' . $blog->image) }}"
                                                            alt="Author Images">
                                                    </div>
                                                    <div class="content" style="display: flex">
                                                        <h6 class="post-author-name">
                                                            <a class="hover-flip-item-wrapper" href="">
                                                                <span class="hover-flip-item">
                                                                    <span
                                                                        data-text="Ismat Jahan">{{ $blog->user->name }}</span>
                                                                </span>
                                                            </a>
                                                        </h6>
                                                        <ul class="post-meta-list">
                                                            <li>{{ $blog->created_at->format('Y-m-d') }}</li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- End Post Content  -->
                                    </div>
                                    <!-- End Single Slide  -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Banner Area -->
                    <div class="axil-post-details">
                        {{ $blog->description }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
