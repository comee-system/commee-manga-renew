<?php $this->load->view('elements/topmenu'); ?>

<div class="main-contents container">

	<!-- お知らせ（仮） -->
	<div class="contentd-flex pt-3">
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
	<div class="py-2">
	</div>
</div>



<!-- フォロー中の作品(ログイン後のみ表示) -->
<div class="row mb-3 my-5">
	<div class="col-xl-10 offset-xl-1">
		<div class="card carousel p-3 border border rounded shadow mb-3">
			<h4 class="font-weight-bold text-success">フォロー中の作品</h4><hr>
			<div class="carousel-inner">
				<div class="row flex-row flex-nowrap overflow-auto top-box mx-4">
					
					<div class="card-body top-line-height">
						<a href=""><img src="/assets/image/5/detail/15/thum/panpan.jpg" class="card-img-top2" alt="cardimg"></a>
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
					
					<div class="card-body top-line-height ">
						<a href=""><img src="/assets/image/5/detail/15/thum/strobo.jpg" class="card-img-top2" alt="cardimg"></a>
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
					
					<div class="card-body top-line-height">
						<a href=""><img src="/assets/image/5/detail/15/thum/baki.jpg" class="card-img-top2" alt="cardimg"></a>
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
	</div>
</div>




<!-- 以下、ログイン前/ログイン後で共通 -->
<div class="row mb-3 my-5">
	<div class="col-xl-10 offset-xl-1">
		<!-- COMEEおすすめ -->
		<div class="card carousel p-3 border border rounded shadow mb-3">
			<h4 class="font-weight-bold text-success">COMEEおすすめ</h4><hr>
			<div class="carousel-inner">
				<div class="row flex-row flex-nowrap overflow-auto top-box mx-4">
					<!-- 作品1 -->
					<div class="card-body top-line-height">
						<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
					<!-- 作品2 -->
					<div class="card-body top-line-height ">
						<a href=""><img src="/assets/image/5/detail/15/thum/naruto.jpg" class="card-img-top2" alt="cardimg"></a>
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
					<!-- 作品3 -->
					<div class="card-body top-line-height">
						<a href=""><img src="/assets/image/5/detail/15/thum/hagaren.jpg" class="card-img-top2" alt="cardimg"></a>
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
					<!-- 作品4 -->
					<div class="card-body top-line-height">
						<a href=""><img src="/assets/image/5/detail/15/thum/slamd.jpg" class="card-img-top2" alt="cardimg"></a>
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
					<!-- 作品5 -->
					<div class="card-body top-line-height">
						<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
					<!-- 作品6 -->
					<div class="card-body top-line-height">
						<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
					<!-- 作品7 -->
					<div class="card-body top-line-height">
						<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
					<!-- 作品8 -->
					<div class="card-body top-line-height carousel-card2">
						<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
				<!-- 左右スライドボタン（未完成・動作しない） -->
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
				<!-- 作品1 -->
				<div class="card-body top-line-height">
					<a href=""><img src="/assets/image/5/detail/15/thum/kimetsu.jpg" class="card-img-top2" alt="cardimg"></a>
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<!-- 作品2 -->
				<div class="card-body top-line-height">
					<a href=""><img src="/assets/image/5/detail/15/thum/juju.jpg" class="card-img-top2" alt="cardimg"></a>
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<!-- 作品3 -->
				<div class="card-body top-line-height">
					<a href=""><img src="/assets/image/5/detail/15/thum/chain.jpg" class="card-img-top2" alt="cardimg"></a>
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<!-- 作品4 -->
				<div class="card-body top-line-height">
					<a href=""><img src="/assets/image/5/detail/15/thum/never.jpg" class="card-img-top2" alt="cardimg"></a>
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<!-- 作品5 -->
				<div class="card-body top-line-height">
					<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<!-- 作品6 -->
				<div class="card-body top-line-height">
					<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<!-- 作品7 -->
				<div class="card-body top-line-height">
					<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<!-- 作品8 -->
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
					<!-- 作家1 -->
					<div class="card-body top-line-height">
						<img src="/assets/image/1/icon/5fa2c65bbb3d5.png"class="card-img-top3 rounded-circle" role="img" aria-label="" alt="creatorimg">
						<h6 class="card-title font-weight-bold text-nowrap">クリエイター名</h6>
						<p class="card-text"><small class="text-muted">プロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィールプロフィール</small></p>
					</div>
					<!-- 作家2 -->
					<div class="card-body top-line-height">
						<img src="/assets/image/1/icon/5fa2c65bbb3d5.png"class="card-img-top3 rounded-circle" role="img" aria-label="" alt="creatorimg">
						<h6 class="card-title font-weight-bold text-nowrap">クリエイター名</h6>
						<p class="card-text"><small class="text-muted">プロフィール</small></p>
					</div>
					<!-- 作家3 -->
					<div class="card-body top-line-height">
						<img src="/assets/image/1/icon/5fa2c65bbb3d5.png"class="card-img-top3 rounded-circle" role="img" aria-label="" alt="creatorimg">
						<h6 class="card-title font-weight-bold text-nowrap">クリエイター名</h6>
						<p class="card-text"><small class="text-muted">プロフィール</small></p>
					</div>
					<!-- 作家4 -->
					<div class="card-body top-line-height">
						<img src="/assets/image/1/icon/5fa2c65bbb3d5.png"class="card-img-top3 rounded-circle" role="img" aria-label="" alt="creatorimg">
						<h6 class="card-title font-weight-bold text-nowrap">クリエイター名</h6>
						<p class="card-text"><small class="text-muted">プロフィール</small></p>
					</div>
					<!-- 作家5 -->
					<div class="card-body top-line-height">
						<img src="/assets/image/1/icon/5fa2c65bbb3d5.png"class="card-img-top3 rounded-circle" role="img" aria-label="" alt="creatorimg">
						<h6 class="card-title font-weight-bold text-nowrap">クリエイター名</h6>
						<p class="card-text"><small class="text-muted">プロフィール</small></p>
					</div>
					<!-- 作家6 -->
					<div class="card-body top-line-height">
						<img src="/assets/image/1/icon/5fa2c65bbb3d5.png"class="card-img-top3 rounded-circle" role="img" aria-label="" alt="creatorimg">
						<h6 class="card-title font-weight-bold text-nowrap">クリエイター名</h6>
						<p class="card-text"><small class="text-muted">プロフィール</small></p>
					</div>
				</div>
				<!-- 左右切り替えボタン（未完成・動作しない） -->
				<!-- <a class="carousel-control-prev carousel_btn" href="#carousel-card2" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next carousel_btn" href="#carousel-card2" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a> -->
			</div>
		</div>
	</div>
</div>







<!-- 以下参考（未完成） -->
<hr>
<div class="content2 m-3 p-3 border border rounded mt-5">
	<h4>参考（未完成）：左右ボタンで5作品ずつ動く（スワイプ対応、レスポンシブ未対応）</h4>
	<div class="row flex-row flex-nowrap overflow-auto carousel slide p-4" id="carousel-card" class="carousel slide" data-interval="false" data-touch="true">
		<div class="carousel-inner">

			<!--カード1-5の表示 -->
			<div class="carousel-item px-5 active">
				<div class="d-flex flex-row">
					<!-- カード1 -->
					<div class="card card-block h-50">
						<div class="card-body top-line-height ">
							<a href=""><img src="/assets/image/5/detail/15/thum/naruto.jpg" class="card-img-top2" alt="cardimg"></a>
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
					<!-- カード2 -->
					<div class="card card-block h-50">
						<div class="card-body top-line-height ">
							<a href=""><img src="/assets/image/5/detail/15/thum/naruto.jpg" class="card-img-top2" alt="cardimg"></a>
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
					<!-- カード3 -->
					<div class="card card-block h-50">
						<div class="card-body top-line-height ">
							<a href=""><img src="/assets/image/5/detail/15/thum/naruto.jpg" class="card-img-top2" alt="cardimg"></a>
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
					<!-- カード4 -->
					<div class="card card-block h-50">
						<div class="card-body top-line-height ">
							<a href=""><img src="/assets/image/5/detail/15/thum/naruto.jpg" class="card-img-top2" alt="cardimg"></a>
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
					<!-- カード5 -->
					<div class="card card-block h-50">
						<div class="card-body top-line-height ">
							<a href=""><img src="/assets/image/5/detail/15/thum/naruto.jpg" class="card-img-top2" alt="cardimg"></a>
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>
			</div>

			<!--カード6-10の表示 -->
			<div class="carousel-item px-5">	
				<div class="d-flex flex-row">
					<!-- カード6 -->
					<div class="card card-block h-50">
						<div class="card-body top-line-height">
							<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
					<!-- カード7 -->
					<div class="card card-block h-50">
						<div class="card-body top-line-height">
							<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>	
					</div>
					<!-- カード8 -->
					<div class="card card-block h-50">
						<div class="card-body top-line-height">
							<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
					<!-- カード9 -->
					<div class="card card-block h-50">
						<div class="card-body top-line-height">
							<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
					<!-- カード10 -->
					<div class="card card-block h-50">
						<div class="card-body top-line-height">
							<a href=""><img src="/assets/image/5/detail/15/thum/onep.jpg" class="card-img-top2" alt="cardimg"></a>
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev top_image" href="#carousel-card" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next top_image" href="#carousel-card" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
				</a>
			<style>
			.top_image {
			width: 5%;
			background-color: green;
			}
			</style>
		</div>
	</div>
</div>
