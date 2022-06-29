@extends('layouts2.master')

@section('content')
    		<!-- Banner starts -->
		<section class="banner banner__default bg-grey-light-three">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<div class="post-title-wrapper">
							<h2 class="m-b-xs-0 axil-post-title hover-line">@isset($catname){{$catname->category->title}}@else {{"Not Post Yet !"}}                         
                            @endisset</h2>
						</div>
						<!-- End of .post-title-wrapper -->
					</div>
					<!-- End of .col-lg-8 -->
				</div>
			</div>
			<!-- End of .container -->
		</section>
		<!-- End of .banner -->

		<div class="random-posts section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<main class="axil-content">
							{{-- <div class="add-container m-b-xs-60">
								<a href="#"><img src="assets/images/clientbanner/clientbanner.jpg" alt="add one"
										class="img-fluid"></a>
							</div> --}}
                            @foreach ($posts as $post)
							<div class="media post-block post-block__mid m-b-xs-30">
								<a href="/post/{{$post->slug}}" class="align-self-center"><img class=" m-r-xs-30"
										src="{{asset("storage/uploads/".$post->feather_image)}}" alt=""></a>
								<div class="media-body">
									<div class="post-cat-group m-b-xs-10">
										<p class="post-cat cat-btn bg-color-blue-one">{{$post->category->title}}</p>
									</div>
									<h3 class="axil-post-title hover-line hover-line"><a
											href="/post/{{$post->slug}}">{{Str::limit($post->title,35,'...')}}</a></h3>
									<p class="mid">{{Str::limit($post->description,40,'...')}}</p>
									<div class="post-metas">
										<ul class="list-inline">
											<li>By <a href="#">{{$post->user->name}}</a></li>
										</ul>
									</div>
								</div>
							</div>
                            @endforeach
							<!-- End of .post-block -->
                            {{ $posts->onEachSide(5)->links() }}
						</main>
						<!-- End of .axil-content -->
					</div>
					<!-- End of .col-lg-8 -->


                   @include('leftsidebar')
					<!-- End of .col-lg-4 -->
				</div>
				<!-- End of .row -->
			</div>
			<!-- End of .container -->
		</div>
		<!-- End of .random-posts -->
@endsection