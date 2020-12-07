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

    </div>