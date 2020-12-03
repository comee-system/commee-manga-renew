<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <!-- 見出し -->
                <div class="alert alert-secondary w-100 mx-auto text-center p-4" role="alert">アカウント設定【カード情報】</div>

                    <div class="shadow-lg p-3 mb-5 bg-white rounded">

                        <!-- カード情報の表示フォーム -->
                        <form method="POST" action="#">

                            <!-- 入力を受け付けない範囲　ここから開始 -->
                            <fieldset disabled>

                                <!-- 使用できるカードの画像一覧 -->
                                <div class="alert alert-dark mt-3" role="alert">
                                    <h4 class="alert-heading m-4">使用できるカードの画像一覧
                                        <img src="" alt="" class="">
                                    </h4>
                                </div>

                                <!-- カード番号の表示欄 -->
                                <div class="row">
                                    <div class="col-5 offset-1">
                                        <div class="form-group">
                                            <label for="card_number">カード番号</label>
                                            <input type="text" class="form-control" id="card_number" name="card_number" aria-describedby="cardHelp">
                                        </div>
                                    </div>
                                    <div class="col-4 offset-1">
                                        <div class="form-group">
                                            <label for="deadline">有効期限</label><br>
                                            <input type="text" class="form-control" id="deadline" name="deadline" aria-describedby="deadlineHelp">
                                        </div>   
                                    </div>
                                </div>

                                <!-- カードの名義表示欄 -->
                                <div class="row">
                                    <div class="col-10 offset-1">
                                        <div class="form-group">
                                            <label for="card_name">カード名義</label>
                                            <input type="text" class="form-control" id="card_name" name="card_name">
                                        </div>
                                    </div>
                                </div>

                                <!-- セキュリティコード表示欄 -->
                                <div class="row">
                                    <div class="col-10 offset-1">
                                        <div class="form-group">
                                            <label for="security_code">セキュリティコード</label>
                                            <input type="text" class="form-control" id="security_code" name="security_code" aria-describedby="codeHelp">
                                        </div>
                                    </div>
                                </div>

                            <!-- 入力を受け付けない範囲終了 -->    
                            </fieldset>


                                <!-- 1行にキャンセル・編集・削除ボタンを羅列 -->
                                <div class="row justify-content-around">

                                    <!-- キャンセル・編集ボタン -->
                                    <a class="btn btn-danger w-25 mt-3" href="/users/settings" type="reset" role="button">キャンセル</a>
                                    <a class="btn btn-info w-25 mt-3" href="/users/update_card_information" type="button" role="button">編集</a>

                                    <!-- 削除ボタン trigger modal -->
                                    <button type="button" class="btn btn-dark w-25 mt-3" data-toggle="modal" data-target="#staticBackdrop">
                                        削除
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body text-center mt-3">
                                                    本当にこのカード情報を削除してもよろしいですか？
                                                    <div class="d-flex justify-content-around">
                                                        <button type="button" class="btn btn-secondary mt-4 w-25" data-dismiss="modal">キャンセル</button>
                                                        <a class="btn btn-primary mt-4 w-25" href="/users/settings" type="submit" role="button">削除</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                    
                                <!-- 注意書き -->
                                <p class="text-center main-text p-5">
                                    クレジットカード情報の取り扱いについては<br>
                                    「課金情報の取り扱いの安全性について」をご覧ください。
                                </p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
                    