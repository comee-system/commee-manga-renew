<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">

        <div class="row">
            <div class="col-md-8 offset-md-2">

                <!-- 見出し -->
                <div class="d-flex justify-content-center mt-3">
                    <h3>連載情報</h3>
                </div>

                <!-- ヘッダー画像選択欄 trigger modal -->
                <div class="row mt-5">
                    <div class="col-md-10 offset-md-1">
                        <h5>ヘッダー画像</h5>
                    </div>
                </div>
                <div class="card bg-dark text-white mx-auto d-block">
                    <img src="/assets/image/5/detail/15/thum/s_5f6f40fe94cf7.jpg" class="card-img" alt="image_phote">
                        <div class="card-img-overlay">

                            <div class="row">
                                <div class="col-5 offset-1 text-center">
                                    <a href="#" tabindex="-1">
                                        <i class="fas fa-camera fa-3x" style="color: #fff;"></i>
                                    </a>
                                </div>

                                <!-- 画像削除用ボタン➀ -->
                                <div class="col-5 text-center">
                                    <i class="far fa-window-close fa-3x" data-toggle="modal" data-target="#imageDelete"></i>
                                </div>
                            </div>                                
                        </div>
                </div>

                <!-- 入力フォーム -->
                <form method="POST" action="#">
                
                    <!-- 連載タイトル入力欄 -->
                    <div class="row mt-5">
                        <div class="col-10 offset-1">
                            <div class="form-group">
                                <label for="card_name"><h5>連載タイトル</h5></label>
                                <input type="text" class="form-control" id="card_name" name="card_name">
                            </div>
                        </div>
                    </div>
                    
                    <!-- 連載の説明入力欄 -->
                    <div class="row my-2">
                        <div class="col-10 offset-1">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"><h5>連載の説明文</h5></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- 1行にキャンセル・編集・削除ボタンを羅列 -->
                    <div class="row my-2">
                        <div class="col-md-10 offset-md-1">
                            <h5>販売設定</h5>
                        <!-- </div>
                    </div> -->
                        <div class="d-flex justify-content-around">
                            <button type="button" class="btn btn-danger mx-2 btnflex" type="reset">無料</button>
                            <button type="button" class="btn btn-info btnflex" type="button">有料買い切り</button>
                            <button type="button" class="btn btn-success mx-2 btnflex" type="button">有料月額</button>
                        </div>
                    </div>
                </div>

                    <!-- 販売価格入力欄 -->
                    <div class="row my-5">
                        <div class="col-10 offset-1">
                            <form method="POST" action="#">
                                <div class="form-group">
                                    <div class="row d-flex justify-content-start">
                                        <label for="price"><h5 class="pt-1 ml-3">販売価格：</h5></label>
                                        <input type="text" class="form-control w-25" id="price">
                                        <h5 class="pt-2 ml-2">円</h5>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <!-- 告知画像選択欄 -->
                    <div class="row mt-3">
                        <div class="col-10 offset-1">
                            <h5>告知画像(任意)</h5>
                        </div>
                    </div>
                    <div class="card bg-dark text-white mx-auto w-75 d-block">
                        <img src="/assets/image/5/detail/15/thum/5f6f40fe94cf7.jpg" class="card-img" alt="image_phote">
                            <div class="card-img-overlay">

                                <div class="row">
                                    <div class="col-5 offset-1 text-center">
                                        <a href="#" tabindex="-1">
                                            <i class="fas fa-camera fa-3x" style="color: #fff;"></i>
                                        </a>
                                    </div>
                                    <!-- 画像削除用ボタン -->
                                    <div class="col-5 text-center">
                                        <i class="far fa-window-close fa-3x" data-toggle="modal" data-target="#imageDelete"></i>
                                    </div>
                                </div>                                
                            </div>
                    </div>

                    <!-- 告知文言入力欄(任意) -->
                    <div class="row mt-5 mb-2">
                        <div class="col-10 offset-1">
                            <div class="form-group">
                                <label for="card_name"><h5>告知文言(任意)</h5></label>
                                <input type="text" class="form-control" id="card_name" name="card_name">
                            </div>
                        </div>
                    </div>

                    <!-- 公開非公開 -->
                    <div class="row my-2">
                        <div class="col-10 offset-1">
                            <div class="d-flex justify-content-start">
                                <h5 class="pt-1 mr-5">公開/非公開</h5>
                                <input type="checkbox" checked data-toggle="toggle" data-style="ios">
                            </div>
                        </div>
                    </div>

                    <!-- 1行にキャンセル・編集・削除ボタンを羅列 -->
                    <div class="row">
                        <div class="col-10 offset-1">
                            <div class="row justify-content-between my-5">
                                <a class="btn btn-danger mx-3 btnflex" href="/manga/serial_list" type="reset">キャンセル</a>
                                <a class="btn btn-info mx-3 btnflex" href="/manga/serial_list" type="submit">登録する</a>
                            </div>
                        </div>
                    </div>

                </form>
                <!-- 入力フォーム終了 -->

                <!-- 画像削除用モーダル -->
                <div class="modal fade" id="imageDelete" data-keyboard="false" tabindex="-1" aria-labelledby="imageDeleteLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
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