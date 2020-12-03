<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <!-- 見出し -->
                <div class="alert alert-secondary w-100 mx-auto text-center p-4" role="alert">アカウント設定【カード情報】</div>

                    <div class="shadow-lg p-3 mb-5 bg-white rounded">

                        <!-- カード情報の登録フォーム -->
                        <form method="POST" action="#">

                                <!-- 使用できるカードの画像一覧 -->
                                <div class="alert alert-dark mt-3" role="alert">
                                    <h4 class="alert-heading m-4">使用できるカードの画像一覧
                                        <img src="" alt="" class="">
                                    </h4>
                                </div>

                                <!-- カード番号の入力欄 -->
                                <div class="row">
                                    <div class="col-10 offset-1">
                                        <div class="form-group">
                                            <label for="card_number">カード番号</label>
                                                <input type="text" class="form-control" id="card_number" name="card_number" aria-describedby="cardHelp" placeholder="例) 0000 1111 2222 3333">
                                        </div>
                                    </div>
                                </div>

                                <!-- カードの有効期限入力欄 -->
                                <div class="row">
                                    <div class="col-10 offset-1">
                                        <div class="form-group">
                                            <label for="deadline">有効期限</label><br>
                                            <select class="form-control custom-select w-25" title="有効期限(月)" name="deadline_month" autocomplete="deadline_month" aria-describedby="deadlineHelp">
                                                <option selected value="">--</option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                            　/　
                                            <select class="custom-select w-25" title="有効期限(年)" name="deadline_year" autocomplete="deadline_year">
                                                <option selected value="">--</option>
                                                <option value="2020">20</option>
                                                <option value="2021">21</option>
                                                <option value="2022">22</option>
                                                <option value="2023">23</option>
                                                <option value="2024">24</option>
                                                <option value="2025">25</option>
                                                <option value="2026">26</option>
                                                <option value="2027">27</option>
                                                <option value="2028">28</option>
                                                <option value="2029">29</option>
                                                <option value="2030">30</option>
                                                <option value="2031">31</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- カードの名義入力欄 -->
                                <div class="row">
                                    <div class="col-10 offset-1">
                                        <div class="form-group">
                                            <label for="card_name">カード名義</label>
                                            <input type="text" class="form-control" id="card_name" name="card_name" placeholder="例) SATOU TAROU">
                                        </div>
                                    </div>
                                </div>

                                <!-- セキュリティコード入力欄 -->
                                <div class="row">
                                    <div class="col-10 offset-1">
                                        <div class="form-group">
                                            <label for="security_code">セキュリティコード</label>
                                            <input type="text" class="form-control" id="security_code" name="security_code" aria-describedby="codeHelp" placeholder="例) 000">
                                        </div>
                                    </div>
                                </div>

                                <!-- キャンセル・確定ボタン -->
                                <div class="row justify-content-around">
                                    <input class="btn btn-danger w-25 mt-3" type="reset" value="キャンセル">
                                    <a class="btn btn-success w-25 mt-3" href="/users/settings" type="submit">確定</a>
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
                    