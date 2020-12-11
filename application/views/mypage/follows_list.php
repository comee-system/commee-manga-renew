<?php $this->load->view('elements/topmenu'); ?>
<div class="main-contents container">
    <div class="row">
        
        <!-- クリエイター情報 -->
        <div class="col-md-8 offset-md-2">
            <div class="card media mb-3 bg-light">
                <div class="card-body">
                    <div class="row d-flex justify-content-center px-3 mx-5">  
                        <!-- アイコン画像 -->
                        <div class="col-lg my-auto d-flex justify-content-center">
                            <img src="/assets/image/5/announce/49/icon.png" class="img-thumbnail rounded-circle" width="150" height="150">
                        </div>
                        
                        <div class="row d-flex flex-column justify-content-center">
                            <!-- アカウント名 -->
                            <a href="/creator?id={id}" class="text-dark text-center"><h5 class="card-text p-2 ">アカウント名</h5></a>
                            <!-- フォロー中/フォロワー切替 -->
                            <div class="card-text text-nowrap d-flex justify-content-between ml-2">
                                <!-- 【フォロー中】の場合 -->
                                <button type="button" class="btn btn-secondary">フォロー中</button>
                                <a href="/mypage/follower_list"><button type="button" class="btn btn-outline-secondary">フォロワー</button></a>
                                <!-- 【フォロワー】の場合 
                                <a href="/mypage/following_list"><button type="button" class="btn btn-outline-secondary">フォロー中</button></a>
                                <button type="button" class="btn btn-secondary">フォロワー</button>-->
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>      
        
            <!-- フォロワー一覧(3人分) -->

        <div class="col-md-8 offset-md-2 ">
            <div class="media position-relative shadow my-3 p-3">
                <a href="/mypage/edit_creator_profile">
                    <img src="/assets/image/5/announce/49/xs_5f6f3e6306856.jpg" class="rounded-circle ml-3 mr-5 p-3" alt="follower_icon">
                </a>
                <div class="media-body">
                    <div class="row">
                        <div class="col-lg-7">
                            <a href="/mypage/edit_creator_profile" class="mt-1"><h4 class="my-3">ニックネーム</h4></a>
                            <a href="/mypage/edit_creator_profile" class="mt-1"><h6>ユーザーid</h6></a>
                            <a href="/mypage/edit_creator_profile" class="mt-1"><h6>プロフィール・・・</h6></a>
                        </div>
                        <div class="col-md-5 align-self-center">
                            <button type="button" class="btn btn-primary active mt-1 my-auto text-nowrap">フォロー中</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="media position-relative shadow my-3 p-3">
                <a href="/mypage/edit_creator_profile">
                    <img src="/assets/image/5/announce/49/xs_5f6f3e6306856.jpg" class="rounded-circle ml-3 mr-5 p-3" alt="follower_icon">
                </a>
                <div class="media-body">
                    <div class="row">
                        <div class="col-lg-7">
                            <a href="/mypage/edit_creator_profile" class="mt-1"><h4 class="my-3">ニックネーム</h4></a>
                            <a href="/mypage/edit_creator_profile" class="mt-1"><h6>ユーザーid</h6></a>
                            <a href="/mypage/edit_creator_profile" class="mt-1"><h6>プロフィール・・・</h6></a>
                        </div>
                        <div class="col-md-5 align-self-center">
                            <button type="button" class="btn btn-primary active mt-1 my-auto text-nowrap">フォロー中</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="media position-relative shadow my-3 p-3">
                <a href="/mypage/edit_creator_profile">
                    <img src="/assets/image/5/announce/49/xs_5f6f3e6306856.jpg" class="rounded-circle ml-3 mr-5 p-3" alt="follower_icon">
                </a>
                <div class="media-body">
                    <div class="row">
                        <div class="col-lg-7">
                            <a href="/mypage/edit_creator_profile" class="mt-1"><h4 class="my-3">ニックネーム</h4></a>
                            <a href="/mypage/edit_creator_profile" class="mt-1"><h6>ユーザーid</h6></a>
                            <a href="/mypage/edit_creator_profile" class="mt-1"><h6>プロフィール・・・</h6></a>
                        </div>
                        <div class="col-md-5 align-self-center">
                            <button type="button" class="btn btn-primary active mt-1 my-auto text-nowrap">フォロー中</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
