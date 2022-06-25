<div class="col-lg-4">
    <aside class="post-sidebar">
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
                            <a href="/post/{{$topstoy->slug}}" class="align-self-center"><img
                                    class=" m-r-xs-30" src="{{asset('storage/uploads/'.$topstoy->feather_image)}}"
                                    alt="media image"></a>
                            <div class="media-body">
                                <div class="post-cat-group">
                                    <a href="/category/{{$topstoy->category_id}}"
                                        class="post-cat color-blue-three">{{$topstoy->category->title}}</a>
                                </div>
                                <h4 class="axil-post-title hover-line hover-line"><a
                                        href="/post/{{$topstoy->slug}}">{{$topstoy->title}}
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
                                <a href="/category/{{$vedio->category_id}}"
                                    class="post-cat color-blue-one">{{$vedio->category->title}}</a>
                                <h4 class="axil-post-title hover-line hover-line"><a
                                        href="/post/{{$vedio->slug}}">{{$vedio->title}}</a></h4>
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