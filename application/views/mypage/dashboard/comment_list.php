<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">

        <!-- 見出し -->
        <div class="d-flex justify-content-center my-5">
            <h3>ダッシュボード</h3>
        </div>

        <!-- ダッシュボードメニュー -->
        <hr>
        <div class="d-flex justify-content-around mt-3">
            <h5 class="text-center mx-1">閲覧数</h5>
            <a href="/mypage/sales_data"><h5 class="text-center mx-1">売上管理</h5></a>
            <a href="/mypage/transfer_history"><h5 class="text-center mx-1">振込管理</h5></a>
            <a href="/mypage/comment_list"><h5 class="text-center mx-1">コメント</h5></a>
        </div>
        <hr>

        <!-- 集計期間表示欄(mdより小さい画面でのみ表示) -->
        <div class="mt-3">
            <div class="d-block d-md-none alert alert-success w-100 text-center" role="alert">
                <p>集計期間:</p>
                <p>XXXX/XX/XX～XXXX/XX/XX</p>
            </div>
        </div>

        <!-- 集計期間入力欄(すべての画面で表示) -->
        <div class="d-flex bd-highlight justify-content-around mt-4">
        
            <div class="bd-highlight">
                <button type="button" class="btn btn-success">全期間</button>
            </div>
            <div class="bd-highlight">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        月
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item">2020年8月</a>
                        <a class="dropdown-item">2020年7月</a>
                        <a class="dropdown-item">2020年6月</a>
                        <a class="dropdown-item">2020年5月</a>
                    </div>
                </div>
            </div>
            <div class="bd-highlight">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        7日間
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item">8/13～8/19</a>
                        <a class="dropdown-item">8/6～8/12</a>
                        <a class="dropdown-item">7/30～8/5</a>
                        <a class="dropdown-item">7/23～7/29</a>
                        <a class="dropdown-item">7/16～7/22</a>
                    </div>
                </div>
            </div>

            <div class="bd-highlight">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        今日
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item">今日</a>
                        <a class="dropdown-item">昨日</a>
                        <a class="dropdown-item">8/17</a>
                        <a class="dropdown-item">8/16</a>
                        <a class="dropdown-item">8/15</a>
                        <a class="dropdown-item">8/14</a>
                        <a class="dropdown-item">8/13</a>
                        <a class="dropdown-item">8/12</a>
                    </div>
                </div>
            </div>

            <!-- 集計期間表示欄(mdサイズ以上の画面でのみ表示) -->
            <div class="bd-highlight">
                <div class="d-none d-md-block alert alert-success text-center" role="alert">
                    <p>集計期間:</p>
                    <p>XXXX/XX/XX～XXXX/XX/XX</p>
                </div>
            </div>

        </div>


    </div>