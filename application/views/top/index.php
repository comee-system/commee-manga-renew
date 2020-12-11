<?php $this->load->view('elements/topmenu'); ?>

<div class="main-contents container">


		<!-- Main content -->
		<section class="contentd-flex">
			<!-- お知らせ(仮) -->
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
					<svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="200" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>
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
		</section>


		<!-- COMEEおすすめ -->
		<section class="content2 m-3 p-3 border border rounded">
			<h4>COMEEおすすめ</h4>
			<div class="row flex-row flex-nowrap overflow-auto carousel slide p-4" id="carousel-card" class="carousel slide" data-interval="false">
					<div class="carousel-inner">

					<!--カード1-5の表示 -->
			    	<div class="carousel-item px-5 active">
						<div class="col d-flex flex-row">
							<!-- カード1 -->
							<div class="card card-block">
								<div class="card">
									<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="card-img-top" width="100%" height="" role="img" aria-label="" alt="cardimg1">
									<div class="card-body">
									<h5 class="card-title">タイトル</h5>
									<p class="card-text">リード文</p>
									<p class="card-text"><small class="text-muted">Last updated 1 mins ago</small></p>
									</div>
								</div>
							</div>
							<!-- カード2 -->
							<div class="card card-block h-50">
								<div class="card">
									<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="card-img-top" width="100%" height="" role="img" aria-label="" alt="cardimg2">
									<div class="card-body">
									<h5 class="card-title">タイトル</h5>
									<p class="card-text">リード文</p>
									<p class="card-text"><small class="text-muted">Last updated 2 mins ago</small></p>
									</div>
								</div>
							</div>
							<!-- カード3 -->
							<div class="card card-block h-50">
								<div class="card">
									<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="card-img-top" width="100%" height="" role="img" aria-label="" alt="cardimg3">
									<div class="card-body">
									<h5 class="card-title">タイトル</h5>
									<p class="card-text">リード文</p>
									<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									</div>
								</div>
							</div>
							<!-- カード4 -->
							<div class="card card-block h-50">
								<div class="card">
									<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="card-img-top" width="100%" height="" role="img" aria-label="" alt="cardimg4">
									<div class="card-body">
									<h5 class="card-title">タイトル</h5>
									<p class="card-text">リード文</p>
									<p class="card-text"><small class="text-muted">Last updated 4 mins ago</small></p>
									</div>
									<!-- <div class="card-footer">
									カードのフッター
									</div> -->
								</div>
							</div>
							<!-- カード5 -->
							<div class="card card-block h-50">
								<div class="card">
									<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="card-img-top" width="100%" height="" role="img" aria-label="" alt="cardimg5">
									<div class="card-body">
									<h5 class="card-title">タイトル</h5>
									<p class="card-text">リード文</p>
									<p class="card-text"><small class="text-muted">Last updated 5 mins ago</small></p>
									</div>
									<!-- <div class="card-footer">
									カードのフッター
									</div> -->
								</div>
							</div>
						</div>
					</div>

					<!--カード6-10の表示 -->
					<div class="carousel-item px-5">	
						<div class="d-flex flex-row">
							<!-- カード6 -->
							<div class="card card-block h-50">
								<div class="card">
									<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="card-img-top" width="100%" height="" role="img" aria-label="" alt="cardimg6">
									<div class="card-body">
									<h5 class="card-title">タイトル</h5>
									<p class="card-text">リード文</p>
									<p class="card-text"><small class="text-muted">Last updated 6 mins ago</small></p>
									</div>
									<!-- <div class="card-footer">
									カードのフッター
									</div> -->
								</div>
							</div>
							<!-- カード7 -->
							<div class="card card-block h-50">
								<div class="card">
									<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="card-img-top" width="100%" height="" role="img" aria-label="" alt="cardimg7">
									<div class="card-body">
									<h5 class="card-title">タイトル</h5>
									<p class="card-text">リード文</p>
									<p class="card-text"><small class="text-muted">Last updated 7 mins ago</small></p>
									</div>
									<!-- <div class="card-footer">
									カードのフッター
									</div> -->
								</div>
							</div>
							<!-- カード8 -->
							<div class="card card-block h-50">
								<div class="card">
									<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="card-img-top" width="100%" height="" role="img" aria-label="" alt="cardimg8">
									<div class="card-body">
									<h5 class="card-title">タイトル</h5>
									<p class="card-text">リード文</p>
									<p class="card-text"><small class="text-muted">Last updated 8 mins ago</small></p>
									</div>
									<!-- <div class="card-footer">
									カードのフッター
									</div> -->
								</div>
							</div>
							<!-- カード9 -->
							<div class="card card-block h-50">
								<div class="card">
									<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="card-img-top" width="100%" height="" role="img" aria-label="" alt="cardimg9">
									<div class="card-body">
									<h5 class="card-title">タイトル</h5>
									<p class="card-text">リード文</p>
									<p class="card-text"><small class="text-muted">Last updated 9 mins ago</small></p>
									</div>
									<!-- <div class="card-footer">
									カードのフッター
									</div> -->
								</div>
							</div>
							<!-- カード10 -->
							<div class="card card-block h-50">
								<div class="card">
									<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="card-img-top" width="100%" height="" role="img" aria-label="" alt="cardimg10">
									<div class="card-body">
									<h5 class="card-title">タイトル</h5>
									<p class="card-text">リード文</p>
									<p class="card-text"><small class="text-muted">Last updated 10 mins ago</small></p>
									</div>
									<!-- <div class="card-footer">
									カードのフッター
									</div> -->
								</div>
							</div>
						</div>
					</div>
						<a class="carousel-control-prev carousel_btn" href="#carousel-card" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next carousel_btn" href="#carousel-card" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
							</a>
				</div>
			</div>
			<style>
			.carousel_btn {
			width: 5%;
			background-color: green;
			}
			</style>
		</section>










						<!-- 
						<div class="carousel-item px-5 active">
							
							<div class="col-md-3">
								<div class="card card-block h-50">
									<div class="card">
										<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="bd-placeholder-img card-img-top" width="100%" height="" role="img" aria-label="">
										<div class="card-body">
										<h5 class="card-title">タイトル</h5>
										<p class="card-text">リード文</p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
										</div>

									</div>
								</div>
							</div>

					
							<div class="col-md-3">
								<div class="card card-block h-50">
									<div class="card">
										<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="bd-placeholder-img card-img-top" width="100%" height="" role="img" aria-label="">
										<div class="card-body">
										<h5 class="card-title">タイトル</h5>
										<p class="card-text">リード文</p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
										</div>

									</div>
								</div>
							</div>

			
							<div class="col-md-3">
								<div class="card card-block h-50">
									<div class="card">
										<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="bd-placeholder-img card-img-top" width="100%" height="" role="img" aria-label="">
										<div class="card-body">
										<h5 class="card-title">タイトル</h5>
										<p class="card-text">リード文</p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
										</div>
		
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="card card-block h-50">
									<div class="card">
										<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="bd-placeholder-img card-img-top" width="100%" height="" role="img" aria-label="">
										<div class="card-body">
										<h5 class="card-title">タイトル</h5>
										<p class="card-text">リード文</p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
										</div>
			
									</div>
								</div>
							</div>
						</div> -->


						<!-- 
						<div class="carousel-item px-5">
					
							<div class="col-md-3">
								<div class="card card-block h-50">
									<div class="card">
										<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="bd-placeholder-img card-img-top" width="100%" height="" role="img" aria-label="">
										<div class="card-body">
										<h5 class="card-title">タイトル</h5>
										<p class="card-text">リード文</p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
										</div>
						
									</div>
								</div>
							</div>

						
							<div class="col-md-3">
								<div class="card card-block h-50">
									<div class="card">
										<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="bd-placeholder-img card-img-top" width="100%" height="" role="img" aria-label="">
										<div class="card-body">
										<h5 class="card-title">タイトル</h5>
										<p class="card-text">リード文</p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
										</div>
						
									</div>
								</div>
							</div>

					
							<div class="col-md-3">
								<div class="card card-block h-50">
									<div class="card">
										<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="bd-placeholder-img card-img-top" width="100%" height="" role="img" aria-label="">
										<div class="card-body">
										<h5 class="card-title">タイトル</h5>
										<p class="card-text">リード文</p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
										</div>
					
									</div>
								</div>
							</div>

					
							<div class="col-md-3">
								<div class="card card-block h-50">
									<div class="card">
										<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="bd-placeholder-img card-img-top" width="100%" height="" role="img" aria-label="">
										<div class="card-body">
										<h5 class="card-title">タイトル</h5>
										<p class="card-text">リード文</p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
										</div>
			
									</div>
								</div>
							</div>

					
							<div class="col-md-3">
								<div class="card card-block h-50">
									<div class="card">
										<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="bd-placeholder-img card-img-top" width="100%" height="" role="img" aria-label="">
										<div class="card-body">
										<h5 class="card-title">タイトル</h5>
										<p class="card-text">リード文</p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
										</div>
			
									</div>
								</div>
							</div>
						</div> -->









		<!-- COMEE期待の作家 -->
		<section class="content2 m-3 p-3 border border rounded">
			<h4>新着作品</h4>
			<div class="row flex-row flex-nowrap overflow-auto p-4">
				<!-- カード1 -->
				<div class="col-md-3">
					<div class="card card-block h-50">
						<div class="card">
							<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="bd-placeholder-img card-img-top" width="100%" height="" role="img" aria-label="">
							<div class="card-body">
							<h5 class="card-title">タイトル</h5>
							<p class="card-text">リード文</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
							<!-- <div class="card-footer">
							カードのフッター
							</div> -->
						</div>
					</div>
				</div>

				<!-- カード2 -->
				<div class="col-md-3">
					<div class="card card-block h-50">
						<div class="card">
							<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="bd-placeholder-img card-img-top" width="100%" height="" role="img" aria-label="">
							<div class="card-body">
							<h5 class="card-title">タイトル</h5>
							<p class="card-text">リード文</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
							<!-- <div class="card-footer">
							カードのフッター
							</div> -->
						</div>
					</div>
				</div>

				<!-- カード3 -->
				<div class="col-md-3">
					<div class="card card-block h-50">
						<div class="card">
							<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="bd-placeholder-img card-img-top" width="100%" height="" role="img" aria-label="">
							<div class="card-body">
							<h5 class="card-title">タイトル</h5>
							<p class="card-text">リード文</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
							<!-- <div class="card-footer">
							カードのフッター
							</div> -->
						</div>
					</div>
				</div>

				<!-- カード4 -->
				<div class="col-md-3">
					<div class="card card-block h-50">
						<div class="card">
							<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="bd-placeholder-img card-img-top" width="100%" height="" role="img" aria-label="">
							<div class="card-body">
							<h5 class="card-title">タイトル</h5>
							<p class="card-text">リード文</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
							<!-- <div class="card-footer">
							カードのフッター
							</div> -->
						</div>
					</div>
				</div>

				<!-- カード5 -->
				<div class="col-md-3">
					<div class="card card-block h-50">
						<div class="card">
							<img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg"class="bd-placeholder-img card-img-top" width="100%" height="" role="img" aria-label="">
							<div class="card-body">
							<h5 class="card-title">タイトル</h5>
							<p class="card-text">リード文</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
							<!-- <div class="card-footer">
							カードのフッター
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- COMEE期待の作家 -->
		<section class="content2 m-3 p-3 border border rounded">
			<h4>COMEE期待の作家</h4>
			<div class="row flex-row flex-nowrap overflow-auto p-4">
				<!-- カード1 -->
				<div class="col-md-3">
					<div class="card card-block h-50">
						<div class="card">
							<img src="/assets/image/1/icon/5fa2c65bbb3d5.png"class="card-img-top img-thumbnail rounded-circle" width="100%" height="" role="img" aria-label="" alt="creatorimg">
							<div class="card-body">
							<h5 class="card-title">クリエイター名</h5>
							<p class="card-text"><small class="text-muted">プロフィールプロフィールプロフィールプロフィールプロフィール</small></p>
							<p class="card-text">フォロワー：XXX</p>
							<div class="card-body alert alert-success">
            				    <button type="button" class="card-body btn btn-success text-nowrap text-align-center ncss">フォロー</button>
							</div>
							</div>
							<!-- <div class="card-footer">
							カードのフッター
							</div> -->
						</div>
					</div>
				</div>

				<!-- カード2 -->
				<div class="col-md-3">
					<div class="card card-block h-50">
						<div class="card">
							<img src="/assets/image/1/icon/5fa2c65bbb3d5.png"class="card-img-top img-thumbnail rounded-circle" width="100%" height="" role="img" aria-label="" alt="creatorimg">
							<div class="card-body">
							<h5 class="card-title">タイトル</h5>
							<p class="card-text">リード文</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
							<!-- <div class="card-footer">
							カードのフッター
							</div> -->
						</div>
					</div>
				</div>

				<!-- カード3 -->
				<div class="col-md-3">
					<div class="card card-block h-50">
						<div class="card">
							<img src="/assets/image/1/icon/5fa2c65bbb3d5.png"class="card-img-top img-thumbnail rounded-circle" width="100%" height="" role="img" aria-label="" alt="creatorimg">
							<div class="card-body">
							<h5 class="card-title">タイトル</h5>
							<p class="card-text">リード文</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
							<!-- <div class="card-footer">
							カードのフッター
							</div> -->
						</div>
					</div>
				</div>

				<!-- カード4 -->
				<div class="col-md-3">
					<div class="card card-block h-50">
						<div class="card">
							<img src="/assets/image/1/icon/5fa2c65bbb3d5.png"class="card-img-top img-thumbnail rounded-circle" width="100%" height="" role="img" aria-label="" alt="creatorimg">
							<div class="card-body">
							<h5 class="card-title">タイトル</h5>
							<p class="card-text">リード文</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
							<!-- <div class="card-footer">
							カードのフッター
							</div> -->
						</div>
					</div>
				</div>

				<!-- カード5 -->
				<div class="col-md-3">
					<div class="card card-block h-50">
						<div class="card">
							<img src="/assets/image/1/icon/5fa2c65bbb3d5.png"class="card-img-top img-thumbnail rounded-circle" width="100%" height="" role="img" aria-label="" alt="creatorimg">
							<div class="card-body">
							<h5 class="card-title">タイトル</h5>
							<p class="card-text">リード文</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							</div>
							<!-- <div class="card-footer">
							カードのフッター
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- /.content -->
	
</div>
