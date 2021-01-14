<?php $this->load->view('elements/topmenu'); ?>
<div class="main-contents container">
    <div class="row">

        <!-- 初期表示は自分がフォローしているユーザー一覧(/mypage/following_list) -->

        <!-- 自分のユーザー情報 -->
        <div class="col-md-8 offset-md-2">
            <div class="card-media mb-3 bg-light border border-secondary">
                <div class="card-body row px-3 mx-5 d-flex justify-content-around">  
                    <!-- 自分のアイコン画像 -->
                    <div class="my-auto d-flex justify-content-center">
                        <img src="/assets/image/5/announce/49/icon.png" class="img-thumbnail rounded-circle" width="150" height="150">
                    </div>
                    <div class="row d-flex flex-column justify-content-around text-center">
                        <!-- 自分のアカウント名 -->
                        <a href="/creator?id={id}" class="text-dark text-center p-3"><h5 class="card-text font-weight-bold p-2">アカウント名</h5></a>
                        <!-- フォロー中/フォロワー切替 -->
                        <div class="card-text text-nowrap d-flex justify-content-between ml-2">
                            <!-- 現在の画面がmypage/following_listの場合, 「フォロワー」を押すと/mypage/follower_listに遷移 -->
                            <button type="button" class="btn btn-secondary mx-2">フォロー中</button>
                            <a href="/mypage/follower_list"><button type="button" class="btn btn-outline-secondary mx-2">フォロワー</button></a>
                            <!-- 現在の画面がmypage/follower_listの場合, 「フォロー中」を押すと/mypage/following_listに遷移
                            <a href="/mypage/following_list"><button type="button" class="btn btn-outline-secondary mx-2">フォロー中</button></a>
                            <button type="button" class="btn btn-secondary">フォロワー</button>-->
                        </div>
                    </div>
                </div>  
            </div>
        </div>      
        
        <!-- フォロワー一覧(例 : 3人分) -->
        <div class="col-md-8 offset-md-2">
        <div class="d-flex justify-content-center">
        <h5 class="d-inline pt-3 mr-2 font-weight-bold">フォロー中</h5>
        <p class="d-inline text-center pt-3"><small class="text-danger">&nbsp;&nbsp;(&nbsp;<button type="button" class="btn btn-success btn-sm">フォロー中</button>&nbsp;をクリックでフォロー解除)</small></p>
        </div>
            <!-- フォロワー1 -->
            <div class="media position-relative shadow my-3 p-3 border border-lg">
                <a href="/mypage/edit_creator_profile">
                    <img src="/assets/image/1/icon/5fa2c65bbb3d5.png" class="rounded-circle mx-1 p-2 pr-2 ml-2" alt="follower_icon" width="120" height="120">
                </a>
                <div class="media-body">
                    <div class="row">
                        <div class="col-lg-7 text-left">
                            <div class="col-md pt-2">
                                <a href="/creator?id={id}" class="text-dark"><h5 class="mb-2 font-weight-bold">ユーザーネーム</h5></a>
                                <a href="/creator?id={id}" class="text-dark"><h6>ユーザーID</h6></a>
                                <p><small class="text-muted">プロフィールプロフィールプロフィールプロフィールプロフィールプロフィール・・・</small></p>
                            </div>
                        </div>
                        <!-- フォロー中ボタンをクリックでフォロー解除 -->
                        <div class="col-md col-sm-10 align-self-center ml-3">
                            <a href="#"><button type="button" class="btn btn-success btnflex mt-1 my-auto text-nowrap">フォロー中</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- フォロワー2 -->
            <div class="media position-relative shadow my-3 p-3 border border-lg">
                <a href="/mypage/edit_creator_profile">
                    <img src="/assets/image/1/icon/5fa2c65bbb3d5.png" class="rounded-circle mx-1 p-2 pr-2 ml-2" alt="follower_icon" width="120" height="120">
                </a>
                <div class="media-body">
                    <div class="row">
                        <div class="col-lg-7 text-left">
                            <div class="col-md pt-2">
                                <a href="/creator?id={id}" class="text-dark"><h5 class="mb-2 font-weight-bold">ユーザーネーム</h5></a>
                                <a href="/creator?id={id}" class="text-dark"><h6>ユーザーID</h6></a>
                                <p><small class="text-muted">プロフィールプロフィールプロフィールプロフィールプロフィールプロフィール・・・</small></p>
                            </div>
                        </div>
                        <div class="col-md col-sm-10 align-self-center ml-3">
                            <a href="#"><button type="button" class="btn btn-success btnflex mt-1 my-auto text-nowrap">フォロー中</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- フォロワー3 -->
            <div class="media position-relative shadow my-3 p-3 border border-lg">
                <a href="/mypage/edit_creator_profile">
                    <img src="/assets/image/1/icon/5fa2c65bbb3d5.png" class="rounded-circle mx-1 p-2 pr-2 ml-2" alt="follower_icon" width="120" height="120">
                </a>
                <div class="media-body">
                    <div class="row">
                        <div class="col-lg-7 text-left">
                            <div class="col-md pt-2">
                                <a href="/creator?id={id}" class="text-dark"><h5 class="mb-2 font-weight-bold">ユーザーネーム</h5></a>
                                <a href="/creator?id={id}" class="text-dark"><h6>ユーザーID</h6></a>
                                <p><small class="text-muted">プロフィールプロフィールプロフィールプロフィールプロフィールプロフィール・・・</small></p>
                            </div>
                        </div>
                        <!-- 一度フォローを外したフォロワーは、再度クリックでフォロー -->
                        <div class="col-md col-sm-10 align-self-center ml-3">
                            <a href="#"><button type="button" class="btn btn-outline-success btnflex mt-1 my-auto text-nowrap">＋フォロー</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 「もっと見る」を押すとさらに表示 -->
            <button type="button" class="btn alert alert-success mb-5 w-100">もっと見る</button>
        </div>
    </div>
</div>
