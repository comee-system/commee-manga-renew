<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">

        <!-- クリエイターのプロフィール情報 -->


        <!-- 支援ボタン -->
        <div class="alert alert-success my-4" role="alert">
            <h4 class="alert-heading text-center">あなたの応援が作品を描く支えになります。</h4>
            <div class="text-center">
                <button type="button" class="btn btn-success btn-lg mt-2" data-toggle="modal" data-target="#supportModal">支援する</button>
            </div>
        </div>

        <!-- 連載作品一覧 -->
        <div class="border my-3">

            <div class="p-3">
                    <div class="row no-gutters bg-light position-relative">
                        <div class="col-md-6 mb-md-0 p-md-4">
                            <img src="/assets/image/5/detail/17/thum/s_5f719079b5045.jpg" class="w-100" alt="画像/サムネイル">
                        </div>
                        <div class="col-md-6 position-static p-4 pl-md-0">
                            <h3 class="text-left"><a href="/creator/manga?id={id}" class="text-dark">第1話：XXXXXXXXXXXXXXX</a></h4>
                            <h5 class="mt-3"><a href="/creator?id={id}" class="text-dark">ユーザーネーム</a></h5>
                            <h4 class="mt-1"><a href="/creator/serial?id={id}" class="text-dark">地縛少年花子くん</a></h4>
                            <h5 class="mt-1">2020/10/31 0:00</h5>
                            <h4 class="mt-3"><i class="far fa-heart">100</i></h4>
                        </div>
                    </div>
                </div>


            <div class="p-3">
                <div class="row no-gutters bg-light position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="/assets/image/5/detail/17/thum/s_5f719079b5045.jpg" class="w-100" alt="画像/サムネイル">
                    </div>
                    <div class="col-md-6 position-static p-4 pl-md-0">
                        <h3 class="text-left"><a href="/creator/manga?id={id}" class="text-dark">第2話：XXXXXXXXXXXXXXX</a></h4>
                        <h5 class="mt-3"><a href="/creator?id={id}" class="text-dark">ユーザーネーム</a></h5>
                        <h4 class="mt-1"><a href="/creator/serial?id={id}" class="text-dark">地縛少年花子くん</a></h4>
                        <h5 class="mt-1">2020/11/30 0:00</h5>
                        <h4 class="mt-3"><i class="far fa-heart">130</i></h4>
                    </div>
                </div>
            </div>


            <div class="p-3">
                <div class="row no-gutters bg-light position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="/assets/image/5/detail/17/thum/s_5f719079b5045.jpg" class="w-100" alt="画像/サムネイル">
                    </div>
                    <div class="col-md-6 position-static p-4 pl-md-0">
                        <h3 class="text-left"><a href="/creator/manga?id={id}" class="text-dark">第3話：XXXXXXXXXXXXXXX</a></h4>
                        <h5 class="mt-3"><a href="/creator?id={id}" class="text-dark">ユーザーネーム</a></h5>
                        <h4 class="mt-1"><a href="/creator/serial?id={id}" class="text-dark">地縛少年花子くん</a></h4>
                        <h5 class="mt-1">2020/12/31 0:00</h5>
                        <h4 class="mt-3"><i class="far fa-heart">80</i></h4>
                    </div>
                </div>
            </div>

        </div>

        <!-- 「もっと見る」をクリックで連載作品の続きを読み込み -->
        <button type="button" class="btn alert alert-success w-100 my-2">もっと見る</button>
        

        <!-- 作品一覧 -->
        <div class="border my-3">

            <div class="p-3">
                <div class="row no-gutters bg-light position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="/assets/image/5/detail/18/lists/s_5fa4eba8aa1a8.jpg" class="w-100" alt="画像/サムネイル">
                    </div>
                    <div class="col-md-6 position-static p-4 pl-md-0">
                        <h3 class="text-left"><a href="/creator/manga?id={id}" class="text-dark">作品名XXXXXXXX</a></h4>
                        <h5 class="mt-3"><a href="/creator?id={id}" class="text-dark">クリエイター名</a></h5>
                        <h5 class="mt-1">2019/10/01 0:00</h5>
                        <h4 class="mt-3"><i class="far fa-heart">100</i></h4>
                    </div>
                </div>
            </div>
        
        </div>

        <!-- 支援用Modal -->
        <div class="modal" id="supportModal" tabindex="-1" aria-labelledby="supportModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="supportModalLabel">クリエイターを支援する</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- 入力フォーム -->
                    <form method="POST" action="#">

                        <div class="modal-body">
                            <!-- 支援金額を選択 -->
                            <div class="row d-flex justify-content-around">
                                <div class="btn btn-group-toggle" data-toggle="buttons">

                                    <label class="btn btn-outline-success mt-1 "><input type="radio" name="options" id="option1" autocomplete="off" checked>100円</label>

                                    <label class="btn btn-outline-success mt-1 "><input type="radio" name="options" id="option1" autocomplete="off" checked>500円</label>

                                    <label class="btn btn-outline-success mt-1 "><input type="radio" name="options" id="option1" autocomplete="off" checked>1000円</label>

                                    <label class="btn btn-outline-success mt-1 "><input type="radio" name="options" id="option1" autocomplete="off" checked>3000円</label>
                                    <!-- "任意"を押すと金額入力に変更する動きは、topmenuの検索バーを参考に後で作る -->
                                    <label class="btn btn-outline-success mt-1 "><input type="radio" name="options" id="option1" autocomplete="off" checked>任意(金額を入力)</label>
                                </div>
                            </div>
                            <!-- メッセージを入力 -->
                            <div class="form-row text-left justify-content-center my-3">
                                <div class="col-sm-10">
                                    <h5 class="text-dark">メッセージ<small>（絵文字使用可）</small></h5>
                                    <div class="form-group">
                                        <textarea rows="7" id="textarea1" class="form-control" placeholder="メッセージを入力してください" ></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer justify-content-around">
                            <!-- 送信/キャンセル -->
                            <button type="button" class="btn btn-danger border border-dark text-center ml-3" data-dismiss="modal">キャンセル</button></a>
                            <button type="submit" class="btn btn-success text-center mr-3">支援する</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>