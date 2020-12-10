<?php $this->load->view('elements/topmenu'); ?>
    <div class="main-contents container">
        <div class="row">
           
            <!-- クリエイター情報はここに追加　↓　 -->
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


                <!--試作
                <div class="card mb-3 bg-light d-flex justify-content-center">
                    
                      クリエイター情報
                    <div class="media card-body d-flex justify-content-center">
                        <div class="row ">
                              アイコン画像 
                            <div class="media-body card-img w-50 my-auto ">
                                <a href="/creator?id={id}"><img src="/assets/image/5/announce/49/icon.png" class="img-thumbnail rounded-circle w-50" alt="icon_image"></a>
                            </div>
                             「アカウント名」と「フォロー中/フォロワー」を縦に配置
                            <div class="media-body  d-flex flex-column justify-content-around">
                                <a href="/creator?id={id}" class="text-dark"><h5 class="card-text p-2">アカウント名</h5></a>
                                 作品数、価格、解約ボタン
                                <div class="card-body row d-flex justify-content-around">
                                        <button type="button" class="btn btn-secondary">フォロー中</button>
                                        <button type="button" class="btn btn-outline-secondary">フォロワー</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


    


             クリエイター情報入力スペース　終了 -->
            
            
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

                <!-- 文字が二列になってしまう　アイコンの右余白？
                <div class="media position-relative shadow my-3 p-3">
                    <a href="/mypage/edit_creator_profile">
                        <img src="/assets/image/5/announce/49/xs_5f6f3e6306856.jpg" class="rounded-circle ml-3 mr-5 p-3" alt="follower_icon">
                    </a>
                        <div class="media-body">
                            <div class="row">
                                <div class="col-7">
                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h4 class="my-3">ニックネーム</h4></a>
                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h6>ユーザーid</h6></a>
                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h6>プロフィール・・・</h6></a>
                                </div>
                                <div class="col-5">
                                    <button type="button" class="btn btn-primary active mt-5">フォロー中</button>
                                </div>
                            </div>
                        </div>
                </div>　-->

            </div>
        </div>
    </div>
