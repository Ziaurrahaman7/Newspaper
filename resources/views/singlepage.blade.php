@extends('layouts2.master')
@section('content')

<!-- Banner starts -->
<section class="banner banner__single-post banner__standard">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="post-title-wrapper">
                    <div class="btn-group">
                        <a href="{{$post->category_id}}" class="cat-btn bg-color-blue-one">{{$post->category->title}}</a>
                    </div>

                    <h2 class="m-t-xs-20 m-b-xs-0 axil-post-title hover-line">VR Is the Use of Computer
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
                            <a href="#"><img class="author-img" src="assets/images/author/author-1.png"
                                    alt=""></a>
                            <div class="media-body">
                                <div class="media-body-title">
                                    <h3><a href="#">Jeffrey Franklin</a></h3>
                                </div>
                                <!-- End of .media-body-title -->

                                <div class="media-body-content">
                                    <p>At 29 years old, my favorite compliment is being told that I look
                                        like my
                                        mom.
                                        Seeing myself in her image, like this daughter up top, makes me so
                                        proud
                                        of
                                        how
                                        far I’ve come, and so thankful for where I come from.</p>
                                    <ul class="social-share social-share__with-bg">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                    <!-- End of .social-share__no-bg -->
                                </div>
                                <!-- End of .media-body-content -->
                            </div>
                        </div>
                    </div>
                    <!-- End of .about-author -->

                    <div class="comment-box">
                        <h2>Leave A Reply</h2>
                        <p>Your email address will not be published.<span class="primary-color">*</span></p>
                    </div>
                    <!-- End of .comment-box -->

                    <form action="#" class="comment-form row m-b-xs-60">
                        <div class="col-12">
                            <div class="form-group comment-message-field">
                                <label for="comment-message">Comment</label>
                                <textarea name="comment-message" id="comment-message" rows="6"></textarea>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="text" name="website" id="website">
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary">POST COMMENT</button>
                        </div>
                    </form>
                </main>
                <!-- End of main -->
            </div>
            <!--End of .col-auto  -->

            <div class="col-lg-4">
                <aside class="post-sidebar">
                    <div class="add-block-widget m-b-xs-40">
                        <a href="#"><img src="assets/images/clientbanner/clientbanner2.jpg" alt="sidebar add"
                                class="img-fluid"></a>
                    </div>
                    <div class="newsletter-widget weekly-newsletter bg-grey-light-three m-b-xs-40">
                        <div class="newsletter-content">
                            <div class="newsletter-icon">
                                <i class="feather icon-send"></i>
                            </div>
                            <div class="section-title">
                                <h3 class="axil-title">Subscribe To Our Weekly Newsletter</h3>
                                <p class="mid m-t-xs-10 m-b-xs-20">No spam, notifications only about new
                                    products,
                                    updates.</p>
                            </div>
                            <!-- End of .section-title -->

                            <div class="subscription-form-wrapper">
                                <form action="#" class="subscription-form">
                                    <div class="form-group form-group-small m-b-xs-20">
                                        <label for="subscription-email">Enter Email Address</label>
                                        <input type="text" name="subscription-email" id="subscription-email">
                                    </div>
                                    <div class="m-b-xs-0">
                                        <button class="btn btn-primary btn-small">SUBSCRIBE</button>
                                    </div>
                                </form>
                                <!-- End of .subscription-form -->
                            </div>
                            <!-- End of .subscription-form-wrapper -->
                        </div>
                        <!-- End of .newsletter-content -->
                    </div>
                    <!-- End of  .newsletter-widget -->

                    <!-- End of .category-widget -->
                    <!-- End of .sidebar-social-share -->

                    <div class="post-widget sidebar-post-widget m-b-xs-40">
                        <ul class="nav nav-pills row no-gutters">
                            <li class="nav-item col">
                                <a class="nav-link active" data-bs-toggle="pill" href="#recent-post">Recent</a>
                            </li>
                            <li class="nav-item col">
                                <a class="nav-link" data-bs-toggle="pill" href="#popular-post">Vedios</a>
                            </li>
                            <li class="nav-item col">
                                <a class="nav-link" data-bs-toggle="pill" href="#comments">Comments</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="recent-post">
                                <div class="axil-content">
                                    @foreach ($topstories as $topstoy)
                                    <div class="media post-block post-block__small">
                                        <a href="{{$topstoy->slug}}" class="align-self-center"><img
                                                class=" m-r-xs-30" src="{{asset('storage/uploads/'.$topstoy->feather_image)}}"
                                                alt="media image"></a>
                                        <div class="media-body">
                                            <div class="post-cat-group">
                                                <a href="{{$topstoy->category_id}}"
                                                    class="post-cat color-blue-three">{{$topstoy->category->title}}</a>
                                            </div>
                                            <h4 class="axil-post-title hover-line hover-line"><a
                                                    href="{{$topstoy->slug}}">{{$topstoy->title}}
                                                    </a></h4>
                                            <div class="post-metas">
                                                <ul class="list-inline">
                                                    <li>By <a href="#">{{$topstoy->user->name}}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- End of .post-block -->
                                    <!-- End of .post-block -->
                                </div>
                                <!-- End of .content -->
                            </div>
                            <!-- End of .tab-pane -->
                            <div class="tab-pane fade" id="popular-post">
                                <div class="axil-content">
                                    @foreach ($vedios as $vedio)
                                    <div class="media post-block post-block__small">
                                       <iframe style="width:140px;height:100px" class="m-r-xs-30 vedio" src="https://www.youtube.com/embed/{{$vedio->vedio}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                        <div class="media-body">
                                            <a href="{{$vedio->category_id}}"
                                                class="post-cat color-blue-one">{{$vedio->category->title}}</a>
                                            <h4 class="axil-post-title hover-line hover-line"><a
                                                    href="{{$vedio->slug}}">{{$vedio->title}}</a></h4>
                                            <div class="post-metas">
                                                <ul class="list-inline">
                                                    <li>By <a href="#">{{$vedio->user->name}}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- End of .content -->
                            </div>
                            <!-- End of .tab-pane -->
                            <div class="tab-pane fade" id="comments">
                                <div class="axil-content">
                                    <div class="media post-block post-block__small">
                                        <a href="post-format-standard.html" class="align-self-center"><img
                                                class=" m-r-xs-30" src="assets/images/media/small-media-2.jpg"
                                                alt="media image"></a>
                                        <div class="media-body">
                                            <a href="post-format-standard.html"
                                                class="post-cat color-red-two">SPORTS</a>
                                            <h4 class="axil-post-title hover-line hover-line"><a
                                                    href="post-format-standard.html">RCB
                                                    vs RR, IPL 2019:
                                                    Bangalore, Rajasthan desperate
                                                    for
                                                    win</a></h4>
                                            <div class="post-metas">
                                                <ul class="list-inline">
                                                    <li>By <a href="#">Ahmad Nazeri</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of .post-block -->
                                    <div class="media post-block post-block__small">
                                        <a href="post-format-standard.html" class="align-self-center"><img
                                                class=" m-r-xs-30" src="assets/images/media/small-media-1.jpg"
                                                alt="media image"></a>
                                        <div class="media-body">
                                            <a href="post-format-standard.html"
                                                class="post-cat color-blue-three">BEAUTY</a>
                                            <h4 class="axil-post-title hover-line hover-line"><a
                                                    href="post-format-standard.html">Stocking Your Restaurant
                                                    Kitchen Finding Reliable
                                                    Sellers</a></h4>
                                            <div class="post-metas">
                                                <ul class="list-inline">
                                                    <li>By <a href="#">Amachea Jajah</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of .post-block -->
                                    <div class="media post-block post-block__small">
                                        <a href="post-format-standard.html" class="align-self-center"><img
                                                class=" m-r-xs-30" src="assets/images/media/small-media-3.jpg"
                                                alt="media image"></a>
                                        <div class="media-body">
                                            <a href="post-format-standard.html"
                                                class="post-cat color-green-three">TRAVEL</a>
                                            <h4 class="axil-post-title hover-line hover-line"><a
                                                    href="post-format-standard.html">Trip
                                                    To Iqaluit In Nunavut A
                                                    Canadian Arctic
                                                    City</a>
                                            </h4>
                                            <div class="post-metas">
                                                <ul class="list-inline">
                                                    <li>By <a href="post-format-standard.html">Xu Jianhong</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of .post-block -->
                                    <div class="media post-block post-block__small">
                                        <a href="post-format-standard.html" class="align-self-center"><img
                                                class=" m-r-xs-30" src="assets/images/media/small-media-4.jpg"
                                                alt="media image"></a>
                                        <div class="media-body">
                                            <a href="post-format-standard.html"
                                                class="post-cat color-blue-one">FASHION</a>
                                            <h4 class="axil-post-title hover-line hover-line"><a
                                                    href="post-format-standard.html">To
                                                    Keep Makeup Looking Fresh
                                                    Take A Powder</a></h4>
                                            <div class="post-metas">
                                                <ul class="list-inline">
                                                    <li>By <a href="#">Sergio Pliego</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of .post-block -->
                                </div>
                                <!-- End of .content -->
                            </div>
                            <!-- End of .tab-pane -->
                        </div>
                        <!-- End of .tab-content -->
                    </div>
                    <!-- End of .sidebar-post-widget -->
                    <!-- End of .tag-widget -->

                    <!-- End of .instagram-widget -->
                    <!-- End of .add-block-widget -->
                </aside>
                <!-- End of .post-sidebar -->
            </div>
            <!-- End of .col-lg-4 -->
        </div>
        <!-- End of .row -->
    </div>
    <!-- End of .container -->
</div>
<!-- End of .post-single-wrapper -->

<section class="related-post p-b-xs-30">
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
                        <a href="{{$rPost->slug}}">
                            <img src="{{asset('storage/uploads/'.$rPost->feather_image)}}" alt="abstruct image"
                                class="img-fluid">
                            <div class="grad-overlay"></div>
                        </a>
                        <div class="media-caption">
                            <div class="caption-content">
                                <h3 class="axil-post-title hover-line hover-line"><a
                                        href="{{$rPost->slug}}">{{$rPost->title}}</a></h3>
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