<?php $this->load->view('elements/topmenu'); ?>

<div class="gap">
    <div class="main-contents container">
        <div class="shadow-lg p-3 mb-5 bg-white rounded my-5">
            <h1 class="text-center my-5 font-weight-bold">退会</h1>
            <h5 class="text-center">このページから退会ができます。</h5>
            <h5 class="text-center">退会すると、登録作品も削除され、</h5>
            <h5 class="text-center">購入した商品も閲覧できなくなります。</h5>

            <!-- 退会理由入力欄 -->
            <form>
                <div class="form-row text-left justify-content-center my-5">
                    <div class="col-sm-5">
                        <div class="form-group">
                            <textarea rows="7" id="textarea1" class="form-control" placeholder="退会理由を教えてください" ></textarea>
                        </div>
                    </div>
                </div>
            </form>

            <div class="text-center my-5">
                <a href="/top/index" class="btn btn-primary w-25 text-center mx-auto">退会する</a>
            </div>
        </div>
    </div>
</div>
