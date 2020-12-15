<?php $this->load->view('elements/topmenu'); ?>

<div class="main-contents container">

	<!-- お知らせ（仮） -->
	<div class="contentd-flex">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="6000">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
				<svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1200" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>
				</div>
				<div class="carousel-item">
				<svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Second slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"/><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>
				</div>
				<div class="carousel-item">
				<svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Third slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"/><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div class="py-3">
	</div>
</div>


以下テスト中

<div class="py-3">




<div class="row">
	<div class="col-xl-10 offset-xl-1">
		<!-- COMEEおすすめ -->
		<div id="mangaslide" class="carousel slide multi-carousel p-3 border border rounded shadow mb-3" data-ride="carousel" data-interval="false">
			<h4 class="font-weight-bold text-success">COMEEおすすめ</h4><hr>
			<div class="carousel-inner" role="listbox">
				<div class="row flex-row flex-nowrap overflow-auto mx-4">

					<!-- 作品1 -->
					<div class="carousel-item active">
						<div class="card-body top-line-height item active">
							<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
					<!-- 以降、任意の数の<div class="card body">繰り返し -->
					<div class="carousel-item">
						<div class="card-body top-line-height item">
							<a href=""><img src="/assets/image/5/detail/15/thum/naruto.jpg" class="card-img-top2" alt="cardimg"></a>
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>

					<div class="carousel-item">
						<div class="card-body top-line-height item">
							<a href=""><img src="/assets/image/5/detail/15/thum/hagaren.jpg" class="card-img-top2" alt="cardimg"></a>
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>


					<div class="d-flex flex-row carousel-item">
						<div class="card-body top-line-height item">
							<a href=""><img src="/assets/image/5/detail/15/thum/slamd.jpg" class="card-img-top2" alt="cardimg"></a>
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
						<div class="card-body top-line-height item">
							<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
						<div class="card-body top-line-height item">
							<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
						<div class="card-body top-line-height item">
							<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
						<div class="card-body top-line-height item">
							<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>

				</div>
				<!-- 左右スライドボタン -->
				<a class="carousel-control-prev carousel_btn" href="#mangaslide" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next carousel_btn" href="#mangaslide" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
</div>

<div class="py-3">

以上テスト

<!-- COMEEおすすめ -->
<div class="row mb-3 my-5">
	<div class="col-xl-10 offset-xl-1">
		<div class="card carousel p-3 border border rounded shadow mb-3">
			<h4 class="font-weight-bold text-success">COMEEおすすめ</h4><hr>
			<div class="carousel-inner">
				<div class="row flex-row flex-nowrap overflow-auto top-box mx-4">
					<div class="card-body top-line-height">
						<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
					<!-- 以降、任意の数の<card-body>繰り返し -->
					<div class="card-body top-line-height ">
						<a href=""><img src="/assets/image/5/detail/15/thum/naruto.jpg" class="card-img-top2" alt="cardimg"></a>
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
					<div class="card-body top-line-height">
						<a href=""><img src="/assets/image/5/detail/15/thum/hagaren.jpg" class="card-img-top2" alt="cardimg"></a>
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
					<div class="card-body top-line-height">
						<a href=""><img src="/assets/image/5/detail/15/thum/slamd.jpg" class="card-img-top2" alt="cardimg"></a>
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
					<div class="card-body top-line-height">
						<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
					<div class="card-body top-line-height">
						<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
					<div class="card-body top-line-height">
						<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
					<div class="card-body top-line-height carousel-card2">
						<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
				<a class="carousel-control-prev carousel_btn" href="#carousel-card2" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next carousel_btn" href="#carousel-card2" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<!-- 新着作品 -->
		<div class="card p-3 border border rounded shadow mb-3">
			<h4 class="font-weight-bold text-success">新着作品</h4><hr>
			<div class="row flex-row flex-nowrap overflow-auto top-box">
				<div class="card-body top-line-height">
					<a href=""><img src="/assets/image/5/detail/15/thum/kimetsu.jpg" class="card-img-top2" alt="cardimg"></a>
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<!-- 以降、任意の数の<card-body>繰り返し -->
				<div class="card-body top-line-height">
					<a href=""><img src="/assets/image/5/detail/15/thum/juju.jpg" class="card-img-top2" alt="cardimg"></a>
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<div class="card-body top-line-height">
					<a href=""><img src="/assets/image/5/detail/15/thum/chain.jpg" class="card-img-top2" alt="cardimg"></a>
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<div class="card-body top-line-height">
					<a href=""><img src="/assets/image/5/detail/15/thum/never.jpg" class="card-img-top2" alt="cardimg"></a>
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<div class="card-body top-line-height">
					<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<div class="card-body top-line-height">
					<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<div class="card-body top-line-height">
					<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<div class="card-body top-line-height">
					<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>


		<!-- COMEE期待の作家 -->
		<div class="card carousel p-3 border border rounded shadow mb-3">
			<h4 class="font-weight-bold text-success">COMEE期待の作家</h4><hr>
			<div class="carousel-inner">
				<div class="row flex-row flex-nowrap overflow-auto top-box mx-4">
					<!-- 以降、任意の数の<card-body>繰り返し -->
					<div class="card-body top-line-height">
						<img src="/assets/image/1/icon/5fa2c65bbb3d5.png"class="card-img-top3 rounded-circle" role="img" aria-label="" alt="creatorimg">
						<h6 class="card-title font-weight-bold text-nowrap">クリエイター名</h6>
						<p class="card-text"><small class="text-muted">プロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィール</small></p>
					</div>
					<div class="card-body top-line-height">
						<img src="/assets/image/1/icon/5fa2c65bbb3d5.png"class="card-img-top3 rounded-circle" role="img" aria-label="" alt="creatorimg">
						<h6 class="card-title font-weight-bold text-nowrap">クリエイター名</h6>
						<p class="card-text"><small class="text-muted">プロフィール</small></p>
					</div>
					<div class="card-body top-line-height">
						<img src="/assets/image/1/icon/5fa2c65bbb3d5.png"class="card-img-top3 rounded-circle" role="img" aria-label="" alt="creatorimg">
						<h6 class="card-title font-weight-bold text-nowrap">クリエイター名</h6>
						<p class="card-text"><small class="text-muted">プロフィール</small></p>
					</div>
					<div class="card-body top-line-height">
						<img src="/assets/image/1/icon/5fa2c65bbb3d5.png"class="card-img-top3 rounded-circle" role="img" aria-label="" alt="creatorimg">
						<h6 class="card-title font-weight-bold text-nowrap">クリエイター名</h6>
						<p class="card-text"><small class="text-muted">プロフィール</small></p>
					</div>
					<div class="card-body top-line-height">
						<img src="/assets/image/1/icon/5fa2c65bbb3d5.png"class="card-img-top3 rounded-circle" role="img" aria-label="" alt="creatorimg">
						<h6 class="card-title font-weight-bold text-nowrap">クリエイター名</h6>
						<p class="card-text"><small class="text-muted">プロフィール</small></p>
					</div>
					<div class="card-body top-line-height">
						<img src="/assets/image/1/icon/5fa2c65bbb3d5.png"class="card-img-top3 rounded-circle" role="img" aria-label="" alt="creatorimg">
						<h6 class="card-title font-weight-bold text-nowrap">クリエイター名</h6>
						<p class="card-text"><small class="text-muted">プロフィール</small></p>
					</div>
					
				</div>
				<a class="carousel-control-prev carousel_btn" href="#carousel-card2" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next carousel_btn" href="#carousel-card2" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
</div>
