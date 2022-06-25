@extends('layouts2.master')
@section('content')

<!-- Banner starts -->
<section class="banner banner__single-post banner__standard">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="post-title-wrapper">
                    <div class="btn-group">
                        <a href="/category/{{$post->category_id}}" class="cat-btn bg-color-blue-one">{{$post->category->title}}</a>
                    </div>

                    <h2 class="m-t-xs-20 m-b-xs-0 axil-post-title hover-line">
                        {{$post->title}}
                    </h2>
                    <div class="post-metas banner-post-metas m-t-xs-20">
                        <ul class="list-inline">
                            <li><a href="#" class="post-author post-author-with-img">{{$post->user->name}}</a></li>
                            {{-- <li><a href="#"><i class="feather icon-activity"></i>5k Views</a></li>
                            <li><a href="#"><i class="feather icon-share-2"></i>230 Shares</a></li> --}}
                        </ul>
                    </div>
                    <!-- End of .post-metas -->
                </div>
                <!-- End of .post-title-wrapper -->
            </div>
            <!-- End of .col-lg-6 -->

            <div class="col-lg-6">
                <img src="{{asset("storage/uploads/".$post->feather_image)}}" alt="" class="img-fluid" width="600" height="600">
            </div>
        </div>
        <!-- End of .row -->
    </div>
    <!-- End of .container -->
</section>
<!-- End of .banner -->

<!-- post-single-wrapper starts -->
<div class="post-single-wrapper p-t-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <main class="site-main">
                    <article class="post-details">
                        <div class="single-blog-wrapper">
                            <div class="post-details__social-share mt-2">
                                <ul class="social-share social-share__with-bg social-share__vertical">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                                <!-- End of .social-share__no-bg -->
                            </div>
                            <!-- End of .social-share -->

                           <div class="description">
                            {{$post->description}}
                           </div>
                    </article>
                    <!-- End of .post-details -->

                    <div class="post-shares m-t-xs-60">
                        <div class="title">SHARE:</div>
                        <ul class="social-share social-share__rectangular">
                            <li><a href="#" class="btn bg-color-twitch"><i class="fab fa-twitch"></i>
                                    1K+</a>
                            </li>
                            <li><a href="#" class="btn bg-color-facebook"><i class="fab fa-facebook-f"></i>
                                    1K+</a>
                            </li>
                            <li><a href="#" class="btn bg-color-twitter"><i class="fab fa-twitter"></i>1000+</a>
                            </li>
                            <li><a href="#" class="btn bg-color-linkedin"><i
                                        class="fab fa-linkedin-in"></i>1M+</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End of .post-shares -->

                    <hr class="m-t-xs-50 m-b-xs-60">

                    <div class="about-author m-b-xs-60">
                        <div class="media">
                            {{-- <a href="#"><img class="author-img" src="assets/images/author/author-1.png"
                                    alt=""></a> --}}
                            <div class="media-body">
                                @foreach ($comments as $comment)
                                    
                              
                                <div class="media-body-title">
                                    <h3><a href="#">{{$comment->user->name}}</a></h3>
                                </div>
                                <!-- End of .media-body-title -->

                                <div class="media-body-content">
                                    <p>{{$comment->comment}}</p>
                                   
                                    <!-- End of .social-share__no-bg -->
                                </div>
                                @endforeach
                                <!-- End of .media-body-content -->
                                {{ $comments->links() }}
                            </div>
                        </div>
                    </div>
                    <!-- End of .about-author -->

                    <div class="comment-box">
                        <h2>Leave A Reply</h2>
                        {{-- <p>Your email address will not be published.<span class="primary-color">*</span></p> --}}
                    </div>
                    <!-- End of .comment-box -->
                    @auth
                    <form action="{{route('comment')}}" method="post">
                        @csrf
                        <div class="col-12">
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <input type="hidden" name="category_id" value="{{$post->category_id}}">
                            <div class="form-group comment-message-field">
                                <label for="comment-message">Comment</label>
                                <textarea name="comment" id="comment-message" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            {{-- <input type="submit" value="Post Comment"> --}}
                            <button type="submit" class="btn btn-primary">POST COMMENT</button>
                        </div>
                    </form>
                    @else 
                    <p>For comment <a style="color:#ff2c54" href="/login">Log in</a>  first!
                    @endauth
                </main>
                <!-- End of main -->
            </div>
            <!--End of .col-auto  -->
            @include('leftsidebar')
            <!-- End of .col-lg-4 -->
        </div>
        <!-- End of .row -->
    </div>
    <!-- End of .container -->
</div>
<!-- End of .post-single-wrapper -->

<section class="related-post mt-5">
    <div class="container">
        <div class="section-title m-b-xs-40">
            <h2 class="axil-title">{{$post->category->title}}</h2>
            {{-- <a href="#" class="btn-link ml-auto">All FOOD &amp; DRINK</a> --}}
        </div>
        <!-- End of .section-title -->

        <div class="grid-wrapper">
            <div class="row">
                @foreach ($relatedPost as $rPost)
                    
                
                <div class="col-lg-3 col-md-4">
                    <div class="content-block m-b-xs-30">
                        <a href="/post/{{$rPost->slug}}">
                            <img src="{{asset('storage/uploads/'.$rPost->feather_image)}}" alt="abstruct image"
                                class="img-fluid">
                            <div class="grad-overlay"></div>
                        </a>
                        <div class="media-caption">
                            <div class="caption-content">
                                <h3 class="axil-post-title hover-line hover-line"><a
                                        href="/post/{{$rPost->slug}}">{{$rPost->title}}</a></h3>
                                <div class="caption-meta">
                                    By <a href="#">{{$rPost->user->name}}</a>
                                </div>
                            </div>
                            <!-- End of .content-inner -->
                        </div>
                    </div>
                    <!-- End of .content-block -->
                </div>
                @endforeach
                <!-- End of .col-lg-3 -->
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .grid-wrapper -->
    </div>
    <!-- End of .container -->
</section>
<!-- End of .related-post -->
@endsection