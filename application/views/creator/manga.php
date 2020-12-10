<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">

        <!-- 作品表示と作品情報を枠で囲んでグループ化する -->
        <div class="border">

            <!-- 作品表示 -->
            <div class="alert alert-dark" role="alert">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/assets/image/5/detail/18/lists/s_5fa4eba8a7e4a.jpg" class="d-block" alt="作品ページ➀">
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/image/5/detail/18/lists/s_5fa4eba8a87bb.jpg" class="d-block" alt="作品ページ➁">
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/image/5/detail/18/lists/s_5fa4eba8aaa1b.jpg" class="d-block" alt="作品ページ➂">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!-- 両サイドのボタンにidをつけて自作のボタンと連動するようにするか？どちらにしろd-flexでボタンと画像の配置が必要？ -->
                </div>
            </div>


            <!-- 作品情報表示部分 -->
            <div class="d-flex justify-content-between bd-highlight">
                <div class="p-2 bd-highlight ml-2">
                    <h3 class="mb-2">連載タイトル</h3>
                    <h5>作品タイトル(例:第1話&nbsp;はじまり)</h5>
                </div>
                <div class="p-2 bd-highlight mr-3">
                    <i class="fab fa-gratipay fa-3x mt-2" style="color:pink;"></i>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-sm-6">
                    <div class="d-flex justify-content-start bd-highlight mb-1">
                        <div class="p-2 bd-highlight text-left mt-1">
                            <p class="my-0 mx-2">ユーザーネーム</p>
                            <p class="mt-1 mb-3 mx-2">投稿日時XXXX/XX/XX&nbsp;XX:XX</p>
                        </div>
                        <div class="p-2 bd-highlight mt-3 mx-1">
                            <a class="btn btn-success" href="#" role="button">編集する</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex justify-content-end bd-highlight mb-1">
                        <div class="p-2 bd-highlight mt-2">
                            <a href=""><i class="fab fa-facebook-square fa-3x" style="color:blue;"></i><a>
                        </div>
                        <div class="p-2 bd-highlight mt-2">
                            <a href=""><i class="fab fa-line fa-3x" style="color:green;"></i><a>
                        </div>
                        <div class="p-2 bd-highlight mt-2">
                            <a href=""><i class="fab fa-twitter-square fa-3x" style="color:skyblue;"></i><a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- 支援ボタン -->
        <div class="alert alert-success my-3" role="alert">
            <h4 class="alert-heading text-center">あなたの応援が作品を描く支えになります。</h4>
            <hr>
            <div class="text-center">
                <button type="button" class="btn btn-success btn-lg">
                    <h5 class="">支援する</h5>
                </button>
            </div>
        </div>

        <!-- 報告ボタンをrowで横並びにするか？ -->
        <button type="button" class="btn btn-secondary">報告する</button>

        <!-- タグ表示欄(＃xxx) -->
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <button type="button" class="ncss btn-outline-dark">#XXX</button>
                </div>
                <div class="col-2">
                    <button type="button" class="ncss btn-outline-dark">#XXXX</button>
                </div>
                <div class="col-2">
                    <button type="button" class="ncss btn-outline-dark">#XXX</button>
                </div>
                <div class="col-2">
                    <button type="button" class="ncss btn-outline-dark">#XX</button>
                </div>
                <div class="col-2">
                    <button type="button" class="ncss btn-outline-dark">#XXX</button>
                </div>
                <div class="col-2">
                    <button type="button" class="ncss btn-outline-dark">#XXXXX</button>
                </div>
            </div>
        </div>
    
    </div>