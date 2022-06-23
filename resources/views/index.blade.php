@extends('layouts2.master')
@section('content')
<section class="section-gap section-gap-top__with-text top-stories bg-grey-light-three">
    <div class="container">
        <div class="section-title m-b-xs-40">
            <h2 class="axil-title">Top Stories</h2>
        </div>
        <div class="row">
            <div class="col-lg-8">
                @foreach ($topstories as $topstory )
                @php $loopindex = $loop->index+1 @endphp
                @if ($loopindex > 1) @continue @endif
                <div class="axil-img-container m-b-xs-30">
                    <a href="post-format-standard.html" class="d-block">
                        <img src="{{asset("storage/uploads/".$topstory->feather_image)}}" alt="gallery images"
                            class="w-100">
                        <div class="grad-overlay"></div>
                    </a>
                    <div class="media post-block position-absolute">
                        <div class="media-body media-body__big">
                            <div class="post-cat-group m-b-xs-10">
                                <a href="{{$topstory->category_id}}" class="post-cat cat-btn bg-color-purple-one">{{$topstory->category->title}}</a>
                            </div>
                            <div class="axil-media-bottom">
                                <h3 class="axil-post-title hover-line hover-line"><a
                                        href="{{$topstory->slug}}">{{$topstory->title}}</a></h3>
                                <div class="post-metas">
                                    <ul class="list-inline">
                                        <li>By <a href="#" class="post-author">{{$topstory->user->name}}</a></li>
                                        <li><i class="dot">.</i>{{$topstory->updated_at->toDateString()}}</li>
                                        {{-- <li><a href="#"><i class="feather icon-activity"></i>5k Views</a></li> --}}
                                        {{-- <li><a href="#"><i class="feather icon-share-2"></i>230 Shares</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of .post-block -->
                </div>
                @endforeach
                <!-- End of .axil-img-container -->
            </div>
            <!-- End of .grid-item -->
            <div class="col-lg-4">
                @foreach ($topstories as $topstory )
                @if ($loop->first) @continue @endif
                <div class="axil-img-container m-b-xs-30">
                    <a href="{{$topstory->slug}}" class="d-block">
                        <img src="{{asset("storage/uploads/".$topstory->feather_image)}}" alt="gallery images"
                            class="w-100">
                        <div class="grad-overlay"></div>
                    </a>
                    <div class="media post-block position-absolute">
                        <div class="media-body">
                            <div class="post-cat-group m-b-xs-10">
                                <a href="{{$topstory->category_id}}"
                                    class="post-cat cat-btn btn-mid bg-color-purple-two">{{$topstory->category->title}}</a>
                            </div>
                            <div class="axil-media-bottom">
                                <h3 class="axil-post-title hover-line hover-line"><a
                                        href="{{$topstory->slug}}">{{$topstory->title}}</a></h3>
                                <div class="post-metas">
                                    <ul class="list-inline">
                                        <li><a href="#"
                                                class="d-flex align-items-center"><span>By {{$topstory->user->name}}</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of .post-block -->
                </div>
                @endforeach
            </div>
            <!-- End of .col-lg-4 -->
        </div>
        <!-- End of .row -->
    </div>
    <!-- End of .container -->
</section>
<!-- End of .top-stories -->
<section class="section-gap section-gap-top__with-text trending-stories">
    <div class="container">
        <div class="section-title m-b-xs-40">
            <h2 class="axil-title">Trending Stories</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="media post-block m-b-xs-30">
                    <a href="post-format-standard.html" class="align-self-center"><img class=" m-r-xs-30"
                            src="assets/images/trending-stories/trending-stories-1.jpg" alt=""></a>
                    <div class="media-body">
                        <div class="post-cat-group m-b-xs-10">
                            <a href="business.html" class="post-cat cat-btn bg-color-blue-grey-one">WORLD</a>
                        </div>
                        <h3 class="axil-post-title hover-line hover-line"><a
                                href="post-format-standard.html">Increasing Prosperity With Positive
                                Thinking</a></h3>
                        <div class="post-metas">
                            <ul class="list-inline">
                                <li>By <a href="#">Amachea Jajah</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End of .post-block -->
            </div>
            <!-- End of .col-lg-6 -->
            <div class="col-lg-6">
                <div class="media post-block m-b-xs-30">
                    <a href="post-format-standard.html" class="align-self-center"><img class=" m-r-xs-30"
                            src="assets/images/trending-stories/trending-stories-2.jpg" alt=""></a>
                    <div class="media-body">
                        <div class="post-cat-group m-b-xs-10">
                            <a href="business.html" class="post-cat cat-btn bg-color-red-two">FOOD</a>
                        </div>
                        <h3 class="axil-post-title hover-line hover-line"><a
                                href="post-format-standard.html">Crispy Air
                                Fryer
                                Parmesan And Thyme Roasted
                                Wedge Fries</a>
                        </h3>
                        <div class="post-metas">
                            <ul class="list-inline">
                                <li>By <a href="#">Xu Jianhong</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End of .post-block -->
            </div>
            <!-- End of .col-lg-6 -->
            <div class="col-lg-6">
                <div class="media post-block m-b-xs-30">
                    <a href="post-format-standard.html" class="align-self-center"><img class=" m-r-xs-30"
                            src="assets/images/trending-stories/trending-stories-3.jpg" alt=""></a>
                    <div class="media-body">
                        <div class="post-cat-group m-b-xs-10">
                            <a href="business.html" class="post-cat cat-btn bg-color-purple-one">LIFESTYLE</a>
                        </div>
                        <h3 class="axil-post-title hover-line hover-line"><a
                                href="post-format-standard.html">Boxed Water
                                Partners
                                With Rag & Bone To Tap
                                Consumer Creativity</a></h3>
                        <div class="post-metas">
                            <ul class="list-inline">
                                <li>By <a href="#">Ahmad Nazeri</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End of .post-block -->
            </div>
            <!-- End of .col-lg-6 -->
            <div class="col-lg-6">
                <div class="media post-block m-b-xs-30">
                    <a href="post-format-standard.html" class="align-self-center"><img class=" m-r-xs-30"
                            src="assets/images/trending-stories/trending-stories-4.jpg" alt=""></a>
                    <div class="media-body">
                        <div class="post-cat-group m-b-xs-10">
                            <a href="business.html" class="post-cat cat-btn bg-color-blue-three">RACING</a>
                        </div>
                        <h3 class="axil-post-title hover-line hover-line"><a
                                href="post-format-standard.html">Kipchoge
                                Proves He Has
                                No Equal: Runs 2nd
                                Fastest Marathon Time In History</a></h3>
                        <div class="post-metas">
                            <ul class="list-inline">
                                <li>By <a href="#">Sergio Pliego</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End of .post-block -->
            </div>
            <!-- End of .col-lg-6 -->
            <div class="col-lg-6">
                <div class="media post-block m-b-xs-30">
                    <a href="post-format-standard.html" class="align-self-center"><img class=" m-r-xs-30"
                            src="assets/images/trending-stories/trending-stories-5.jpg" alt=""></a>
                    <div class="media-body">
                        <div class="post-cat-group m-b-xs-10">
                            <a href="business.html" class="post-cat cat-btn bg-color-green-two">SWIMMING</a>
                        </div>
                        <h3 class="axil-post-title hover-line hover-line"><a
                                href="post-format-standard.html">Here, I Focus
                                On A Range
                                Of Items And Features
                            </a></h3>
                        <div class="post-metas">
                            <ul class="list-inline">
                                <li>By <a href="#">Amachea Jajah</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End of .post-block -->
            </div>
            <!-- End of .col-lg-6 -->
            <div class="col-lg-6">
                <div class="media post-block m-b-xs-30">
                    <a href="post-format-standard.html" class="align-self-center"><img class=" m-r-xs-30"
                            src="assets/images/trending-stories/trending-stories-6.jpg" alt=""></a>
                    <div class="media-body">
                        <div class="post-cat-group m-b-xs-10">
                            <a href="business.html" class="post-cat cat-btn bg-color-blue-two">SPORTS</a>
                        </div>
                        <h3 class="axil-post-title hover-line hover-line"><a
                                href="post-format-standard.html">Get Around Easily With A New York Limousine
                                Service</a>
                        </h3>
                        <div class="post-metas">
                            <ul class="list-inline">
                                <li>By <a href="#">Xu Jianhong</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End of .post-block -->
            </div>
            <!-- End of .col-lg-6 -->
        </div>
        <!-- End of .row -->
    </div>
    <!-- End of .container -->
</section>
<!-- End of .trending-stories -->
<section class="axil-video-posts section-gap section-gap-top__with-text bg-grey-dark-one">
    <div class="container">
        <div class="section-title title-white m-b-xs-40">
            <h2 class="axil-title">Videos</h2>
            {{-- <a href="#" class="btn-link ml-auto">All VIDEOS</a> --}}
        </div>
        <!-- End of .section-title -->
        <div class="row">
            <div class="col-lg-8">
                @foreach ($vedios as $vedio)
                @php $loopindex = $loop->index+1 @endphp
                    @if ($loopindex > 1) @continue @endif
                <div class="axil-img-container flex-height-container">
                    <span class="d-block h-100">
                        {{-- <img src="assets/images/video-post/video-post-latest.jpg" alt="video post"
                            class="w-100"> --}}
                            <iframe class="w-100 vedio" src="https://www.youtube.com/embed/{{$vedio->vedio}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="grad-overlay grad-overlay__transparent"></div>
                        <div class="video-popup video-play-btn video-play-btn__big"></div>
                    </span>
                    <div class="media post-block grad-overlay__transparent position-absolute m-b-xs-30">
                        <div class="media-body media-body__big">
                            <div class="axil-media-bottom mt-auto">
                                <h3 class="axil-post-title hover-line hover-line"><a
                                        href="{{$vedio->slug}}">{{$vedio->title}}</a></h3>
                                <div class="post-metas">
                                    <ul class="list-inline">
                                        <li>By <a href="#" class="post-author">{{$vedio->user->name}}</a></li>
                                        <li><i class="dot">.</i>{{$vedio->updated_at->toDateString()}}</li>
                                        {{-- <li><a href="#"><i class="feather icon-activity"></i>5k Views</a></li> --}}
                                        {{-- <li><a href="#"><i class="feather icon-share-2"></i>230 Shares</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End of .media-body -->
                    </div>
                    <!-- End of .post-block -->
                </div>
                @endforeach
                <!-- End of .axil-img-container -->
            </div>
            <!-- End of .col-lg-8 -->
            <div class="col-lg-4">
                <div class="axil-content">
                    @foreach ($vedios as $vedio)
                    @if ($loop->first) @continue @endif
                    <div class="media post-block post-block__small post-block__on-dark-bg m-b-xs-30">
                        <span href="{{$vedio->slug}}" class="align-self-center">
                            {{-- <img class=" m-r-xs-30" src="assets/images/video-post/video-post-1.jpg" alt=""> --}}
                            <iframe style="width:140px;height:100px" class="m-r-xs-30 vedio" src="https://www.youtube.com/embed/{{$vedio->vedio}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </span>
                        <div class="media-body">
                            <div class="post-cat-group">
                                <a href="{{$vedio->category_id}}" class="post-cat color-blue-three">{{$vedio->category->title}}</a>
                            </div>
                            <h3 class="axil-post-title hover-line hover-line"><a
                                    href="{{$vedio->slug}}">{{$vedio->title}}</a></h3>
                            <div class="post-metas">
                                <ul class="list-inline">
                                    <li>By <a href="#">{{$vedio->user->name}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!-- End of .axil-content -->
            </div>
            <!-- End of .col-lg-4 -->
        </div>
        <!-- End of .row -->
    </div>
    <!-- End of .container -->
</section>
@endsection