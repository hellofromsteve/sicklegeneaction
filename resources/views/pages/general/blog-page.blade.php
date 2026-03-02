<x-layout title="Blog & Articles">
    <!-- Blog Section Start -->
    <div class="blog-section ptb-100 ptb-sm-60">
        <div class="container">

                <div class="section-title text-center ">
                    <h1 class="text-black">Blog & Articles</h1>
                </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach($blogs as $blog)
                            <div class="col-sm-4">
                                <div class="ht-single-blog">
                                    <div class="ht-blog-img">
                                        {{-- Updated to point to external URL --}}
                                        <a href="{{ $blog['url'] }}" target="_blank">
                                            <img src="{{ asset('img/blog/' . $blog['img']) }}" alt="{{ $blog['title'] }}">
                                        </a>
                                    </div>
                                    <div class="ht-blog-text">
                                        {{-- Link changed to the external URL --}}
                                        <h6><a href="{{ $blog['url'] }}" target="_blank">{{ $blog['title'] }}</a></h6>

                                        <div class="post-meta-wapper">
                                        <span class="s-post-meta">
                                            <i class="zmdi zmdi-calendar-check"></i> {{ $blog['date'] }}
                                        </span>
{{--                                        <span class="s-post-meta">--}}
{{--                                            <i class="zmdi zmdi-assignment-account"></i> By: <a href="#">Admin</a>--}}
{{--                                        </span>--}}
                                        </div>

                                        {{-- Placeholder description --}}
{{--                                        <p>Contrary to popular belief, Ipsum is not simply random text. It has roots in piece offer classical Latin</p>--}}

                                        {{-- Read More button linked to the external URL --}}
                                        <a href="{{ $blog['url'] }}" target="_blank" class="default-btn mt-10">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="col-md-12 text-center">
                            <div class="pagination-content">
                                <ul class="pagination">
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="current"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Blog Section End -->
</x-layout>
