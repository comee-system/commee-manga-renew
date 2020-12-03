<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">

        <div class="row">
            <div class="col-md-8 offset-md-2">

                <!-- 見出し -->
                <div class="d-flex justify-content-center mt-3">
                    <h3 class="main-text mr-5 pt-2">連載情報</h3>
                    <a class="btn btn-info" href="/manga/serial_list" type="button" role="button">
                        <h5 class="pt-1">
                            連載を見る
                        </h5>
                    </a>
                </div>

                <!-- 編集情報入力フォーム -->
                <form method="POST" action="#">

                    <!-- ヘッダー画像選択欄 trigger modal -->
                    <div class="row mt-5">
                        <div class="col-10 offset-1">
                            <h5>ヘッダー画像</h5>
                        </div>
                    </div>
                    <div class="card bg-dark text-white mx-auto w-75 d-block">
                        <img src="/assets/image/5/detail/15/thum/s_5f6f40fe94cf7.jpg" class="card-img" alt="image_phote">
                            <div class="card-img-overlay">

                                <div class="row">
                                    <div class="col-5 offset-1 text-center">
                                        <a href="/users/settings" tabindex="-1">
                                            <i class="fas fa-camera fa-3x" style="color: #fff;"></i>
                                        </a>
                                        <!-- 上記のaタグで画像選択画面に遷移するように設定する(現在はアカウント設定に飛ぶように仮設定しています。) -->
                                    </div>

                                    <div class="col-5 text-center">
                                        <i class="far fa-window-close fa-3x" data-toggle="modal" data-target="#staticBackdrop"></i>
                                            
                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            本当にこの画像を削除してもよろしいですか？
                                                        </div>
                                                        <div class="modal-footer d-flex justify-content-around">
                                                            <button type="sumbit" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
                                                            <button type="sumbit" class="btn btn-danger" data-dismiss="modal">削除する</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>

                                </div>                                
                            </div>
                    </div>
                    
                    <!-- 連載タイトル表示欄 -->
                    <div class="row mt-5 mb-4">
                        <div class="col-10 offset-1">
                            <h5>連載タイトル　:　XXXXXXXXXXX</h5>
                        </div>
                    </div>
                    
                    <!-- 連載の説明表示欄 -->
                    <div class="row my-4">
                        <div class="col-10 offset-1">
                            <h5 class="text-break">連載の説明文　:　XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</h5>
                        </div>
                    </div>
                    

                    <!-- Button trigger modal -->
                    <div class="row my-4">
                        <div class="col-10 offset-1">
                            <h5 class="" data-toggle="modal" data-target="#exampleModal">
                            フォロワー数　:　XX
                            </h5>

                                <!-- Follower MOdal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">フォロワー一覧</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="media position-relative shadow my-2">
                                                    <a href="/mypage/edit_creator_profile">
                                                        <img src="/assets/image/5/announce/49/xs_5f6f3e6306856.jpg" class="rounded-circle mr-1 p-3" alt="follower_icon">
                                                    </a>
                                                        <div class="media-body">
                                                            <div class="row">
                                                                <div class="col-7">
                                                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h4 class="my-3">ニックネーム</h4></a>
                                                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h6>ユーザーid</h6></a>
                                                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h6>プロフィール・・・</h6></a>
                                                                </div>
                                                                <div class="col-5">
                                                                    <button type="button" class="btn btn-primary btn-sm active mt-5">フォロー中</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>

                                                <div class="media position-relative shadow my-2">
                                                    <a href="/mypage/edit_creator_profile">
                                                        <img src="/assets/image/5/announce/49/xs_5f6f3e6306856.jpg" class="rounded-circle mr-1 p-3" alt="follower_icon">
                                                    </a>
                                                        <div class="media-body">
                                                            <div class="row">
                                                                <div class="col-7">
                                                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h4 class="my-3">ニックネーム</h4></a>
                                                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h6>ユーザーid</h6></a>
                                                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h6>プロフィール・・・</h6></a>
                                                                </div>
                                                                <div class="col-5">
                                                                    <button type="button" class="btn btn-primary btn-sm active mt-5">フォロー中</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>

                                                <div class="media position-relative shadow my-2">
                                                    <a href="/mypage/edit_creator_profile">
                                                        <img src="/assets/image/5/announce/49/xs_5f6f3e6306856.jpg" class="rounded-circle mr-1 p-3" alt="follower_icon">
                                                    </a>
                                                        <div class="media-body">
                                                            <div class="row">
                                                                <div class="col-7">
                                                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h4 class="my-3">ニックネーム</h4></a>
                                                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h6>ユーザーid</h6></a>
                                                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h6>プロフィール・・・</h6></a>
                                                                </div>
                                                                <div class="col-5">
                                                                    <button type="button" class="btn btn-primary btn-sm active mt-5">フォロー中</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>

                                                <div class="media position-relative shadow my-2">
                                                    <a href="/mypage/edit_creator_profile">
                                                        <img src="/assets/image/5/announce/49/xs_5f6f3e6306856.jpg" class="rounded-circle mr-1 p-3" alt="follower_icon">
                                                    </a>
                                                        <div class="media-body">
                                                            <div class="row">
                                                                <div class="col-7">
                                                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h4 class="my-3">ニックネーム</h4></a>
                                                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h6>ユーザーid</h6></a>
                                                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h6>プロフィール・・・</h6></a>
                                                                </div>
                                                                <div class="col-5">
                                                                    <button type="button" class="btn btn-primary btn-sm active mt-5">フォロー中</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>

                                                <div class="media position-relative shadow my-2">
                                                    <a href="/mypage/edit_creator_profile">
                                                        <img src="/assets/image/5/announce/49/xs_5f6f3e6306856.jpg" class="rounded-circle mr-1 p-3" alt="follower_icon">
                                                    </a>
                                                        <div class="media-body">
                                                            <div class="row">
                                                                <div class="col-7">
                                                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h4 class="my-3">ニックネーム</h4></a>
                                                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h6>ユーザーid</h6></a>
                                                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h6>プロフィール・・・</h6></a>
                                                                </div>
                                                                <div class="col-5">
                                                                    <button type="button" class="btn btn-primary btn-sm active mt-5">フォロー中</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>

                                                <div class="media position-relative shadow my-2">
                                                    <a href="/mypage/edit_creator_profile">
                                                        <img src="/assets/image/5/announce/49/xs_5f6f3e6306856.jpg" class="rounded-circle mr-1 p-3" alt="follower_icon">
                                                    </a>
                                                        <div class="media-body">
                                                            <div class="row">
                                                                <div class="col-7">
                                                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h4 class="my-3">ニックネーム</h4></a>
                                                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h6>ユーザーid</h6></a>
                                                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h6>プロフィール・・・</h6></a>
                                                                </div>
                                                                <div class="col-5">
                                                                    <button type="button" class="btn btn-primary btn-sm active mt-5">フォロー中</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>

                                                <div class="media position-relative shadow my-2">
                                                    <a href="/mypage/edit_creator_profile">
                                                        <img src="/assets/image/5/announce/49/xs_5f6f3e6306856.jpg" class="rounded-circle mr-1 p-3" alt="follower_icon">
                                                    </a>
                                                        <div class="media-body">
                                                            <div class="row">
                                                                <div class="col-7">
                                                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h4 class="my-3">ニックネーム</h4></a>
                                                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h6>ユーザーid</h6></a>
                                                                    <a href="/mypage/edit_creator_profile" class="mt-1"><h6>プロフィール・・・</h6></a>
                                                                </div>
                                                                <div class="col-5">
                                                                    <button type="button" class="btn btn-primary btn-sm active mt-5">フォロー中</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Follower MOdal 終了-->
                        </div>
                    </div>

                    <!-- 販売価格表示欄 -->
                    <div class="row my-3">
                        <div class="col-10 offset-1">
                            <h5>販売価格　　　:　XX円</h5>
                        </div>
                    </div>

                    <!-- 作成日表示欄 -->
                    <div class="row my-3">
                        <div class="col-10 offset-1">
                            <h5>作成日　　　　:　XXXX年　XX月　XX日</h5>
                        </div>
                    </div>

                    <!-- 告知画像選択欄 -->
                    <div class="row mt-5">
                        <div class="col-10 offset-1">
                            <h5>告知画像(任意)</h5>
                        </div>
                    </div>
                    <div class="card bg-dark text-white mx-auto w-75 d-block">
                        <img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg" class="card-img" alt="image_phote">
                            <div class="card-img-overlay">

                                <div class="row">
                                    <div class="col-5 offset-1 text-center">
                                        <a href="/users/settings" tabindex="-1">
                                            <i class="fas fa-camera fa-3x" style="color: #fff;"></i>
                                        </a>
                                        <!-- 上記のaタグで画像選択画面に遷移するように設定する(現在はアカウント設定に飛ぶように仮設定しています。) -->
                                    </div>

                                    <div class="col-5 text-center">
                                        <i class="far fa-window-close fa-3x" data-toggle="modal" data-target="#staticBackdrop"></i>
                                            
                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            本当にこの画像を削除してもよろしいですか？
                                                        </div>
                                                        <div class="modal-footer d-flex justify-content-around">
                                                            <button type="sumbit" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
                                                            <button type="sumbit" class="btn btn-danger" data-dismiss="modal">削除する</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>

                                </div>                                
                            </div>
                    </div>

                    <!-- 告知文言入力欄(任意) -->
                    <div class="row mt-5 mb-3">
                        <div class="col-10 offset-1">
                            <div class="form-group">
                                <label for="card_name"><h5>告知文言(任意)</h5></label>
                                <input type="text" class="form-control" id="card_name" name="card_name" placeholder="新作を投稿しました！等　既述の告知文言を表示しておく">
                            </div>
                        </div>
                    </div>

                    <!-- 公開非公開 -->
                    <div class="row mb-3">
                        <div class="col-10 offset-1">
                            <h5>公開/非公開</h5>
                            <input type="checkbox" checked data-toggle="toggle" data-style="ios">
                        </div>
                    </div>

                    <!-- 1行にキャンセル・編集・削除ボタンを羅列 -->
                    <div class="row justify-content-center my-5">
                        <a class="btn btn-danger w-25 mt-3 mx-3" href="/manga/serial_list" type="reset" role="button">キャンセル</a>
                        <a class="btn btn-info w-25 mt-3 mx-3" href="/manga/serial_list" type="button" role="button">変更する</a>
                        <a class="btn btn-secondary w-25 mt-3 mx-3" href="/manga/serial_list" type="reset">削除</a>
                    </div>

                </form>
                <!-- 編集情報入力フォーム終了 -->
            </div>
        </div>
    </div>