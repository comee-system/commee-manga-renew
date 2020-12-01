<header>
	<!-- Top Nav -->
	<nav class="navbar fixed-top navbar-expand navbar-light bg-light">
		<a class="navbar-brand text-success" href="/">Comee</a>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" data-toggle="modal" data-target="#mangaSearchModal">
						<ion-icon name="search-outline" style="font-size: 1.5em;"></ion-icon>
					</a>
				</li>
				<?php if (true) : // ログイン中の場合 ?>
					<li class="nav-item">
						<a class="nav-link" href="/mypage/notice">
							<ion-icon name="notifications-outline" style="font-size: 1.5em;"></ion-icon>
						</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<ion-icon name="person-outline" style="font-size: 1.5em;"></ion-icon>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="menuDropdown">
							<a class="dropdown-item text-secondary" href="/users/settings">アカウント設定</a>
							<a class="dropdown-item text-secondary" href="/users/edit_creator_profile">クリエーターページ編集</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item text-secondary" href="/manga/list">作品一覧</a>
							<a class="dropdown-item text-secondary" href="/manga/serial_list">連載一覧</a>
							<a class="dropdown-item text-secondary" href="/mypage/dashboard/manga_views_count">ダッシュボード</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item text-secondary" href="/mypage/following_list">フォロー</a>
							<a class="dropdown-item text-secondary" href="/mypage/my_list?type=bought">購入した作品</a>
							<a class="dropdown-item text-secondary" href="/mypage/my_list?type=like">Likeした作品</a>
							<a class="dropdown-item text-secondary" href="/mypage/subsciption_list">月額会員登録中の連載</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item text-secondary" href="/users/logout">ログアウト</a>
						</div>
					</li>
					<li class="nav-item ml-3">
						<a class="nav-link btn btn-sm btn-success text-white" href="/manga/edit">作品投稿</a>
					</li>
				<?php else : // 未ログインの場合 ?>
					<li class="nav-itm"><a href="/users/login" class="nav-link">ログイン</a></li>
					<li class="nav-itm"><a href="/users/regist_user" class="nav-link">新規登録</a></li>
				<?php endif; // ここまで ?>
			</ul>
		</div>
	</nav>
	<aside>
		<!-- Modal Search Box -->
		<div class="modal fade" id="mangaSearchModal" tabindex="-1" role="dialog" aria-labelledby="mangaSearchModalLabel" aria-hidden="true">
			<div class="modal-dialog mw-100 bg-white m-auto p-3" role="document">
				<div class="modal-content border-0">
					<form action="/search" method="post">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="searchBtn">
							<div class="input-group-append">
								<button class="btn btn-outline-secondary" type="button" id="searchBtn">
									<ion-icon name="search-outline"></ion-icon>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</aside>
</header>