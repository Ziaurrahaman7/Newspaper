@extends('layouts2.master')
@section('content')
<section class="section-gap section-gap-top__with-text top-stories bg-grey-light-three">
    <div class="container">
        <div class="section-title m-b-xs-40">
            <h2 class="axil-title">Top Stories</h2>
        </div>
        <div class="row">
            <div class="col-lg-8">
                @foreach ($topnews as $topstory )
               
                @php $loopindex = $loop->index+1 @endphp
                @if ($loopindex > 1) @continue @endif
                <div class="axil-img-container m-b-xs-30">
                    <a href="/post/{{$topstory->slug}}" class="d-block">
                        <img style="height: 400px;" src="{{asset("storage/uploads/".$topstory->feather_image)}}" alt="gallery images"
                            class="w-100">
                        <div class="grad-overlay"></div>
                    </a>
                    <div class="media post-block position-absolute">
                        <div class="media-body media-body__big">
                            <div class="post-cat-group m-b-xs-10">
                                <a href="/category/{{$topstory->category_id}}" class="post-cat cat-btn bg-color-purple-one">{{$topstory->category->title}}</a>
                            </div>
                            <div class="axil-media-bottom">
                                <h3 class="axil-post-title hover-line hover-line"><a
                                        href="/post/{{$topstory->slug}}">{{Str::limit($topstory->title,45,'...')}}</a></h3>
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
                @foreach ($topnews as $topstory )
                @if ($loop->first) @continue @endif
                <div class="axil-img-container m-b-xs-30">
                    <a href="/post/{{$topstory->slug}}" class="d-block">
                        <img style="height: 185px;" src="{{asset("storage/uploads/".$topstory->feather_image)}}" alt="gallery images"
                            class="w-100">
                        <div class="grad-overlay"></div>
                    </a>
                    <div class="media post-block position-absolute">
                        <div class="media-body">
                            <div class="post-cat-group m-b-xs-10">
                                <a href="/category/{{$topstory->category_id}}"
                                    class="post-cat cat-btn btn-mid bg-color-purple-two">{{$topstory->category->title}}</a>
                            </div>
                            <div class="axil-media-bottom">
                                <h3 class="axil-post-title hover-line hover-line"><a
                                        href="/post/{{$topstory->slug}}">{{Str::limit($topstory->title , 40, '...')}}</a></h3>
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
            @foreach ($commentMax as $comment)
            <div class="col-lg-6">
                <div class="media post-block m-b-xs-30">
                    <a href="/post/{{$comment->post->slug}}" class="align-self-center"><img class=" m-r-xs-30"
                            src="{{asset("storage/uploads/".$comment->post->feather_image)}}" alt=""></a>
                    <div class="media-body">
                        <div class="post-cat-group m-b-xs-10">
                          
                            {{-- <a href="/category/{{$comment->post->category_id}}" class="post-cat cat-btn bg-color-blue-grey-one"></a> --}}
                        </div>
                        <h3 class="axil-post-title hover-line hover-line"><a
                                href="/post/{{$comment->post->slug}}">{{Str::limit($comment->post->title, 30, '...')}}</a></h3>
                        <div class="post-metas">
                            <div class="list-inline">
                        <h3 class="axil-post-title">
                            <p>{{Str::limit($comment->post->description , 70, '..');}}<a style="color:brown" href="">More</a></p>
                                {{-- <li>By <a href="#">vv</a></li> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of .post-block -->
            </div>
            @endforeach
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
                                        href="/post/{{$vedio->slug}}">{{Str::limit($vedio->title,30,'...')}}</a></h3>
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
                        <span href="/post/{{$vedio->slug}}" class="align-self-center">
                            {{-- <img class=" m-r-xs-30" src="assets/images/video-post/video-post-1.jpg" alt=""> --}}
                            <iframe style="width:140px;height:100px" class="m-r-xs-30 vedio" src="https://www.youtube.com/embed/{{$vedio->vedio}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </span>
                        <div class="media-body">
                            <div class="post-cat-group">
                                <a href="/category/{{$vedio->category_id}}" class="post-cat color-blue-three">{{$vedio->category->title}}</a>
                            </div>
                            <h3 class="axil-post-title hover-line hover-line"><a
                                    href="/post/{{$vedio->slug}}">{{Str::limit($vedio->title,30,'...')}}</a></h3>
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