<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <div class="shadow-lg p-3 mb-5 bg-white rounded">

                    <!-- 通報理由入力フォーム -->
                    <form method="POST" action="#">

                        <!-- 見出し -->
                        <div class="text-center my-5">
                            <h3>通報理由</h3>
                        </div>

                        <div class="row">
                            <div class="col-10 offset-1">

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        <h5>著作権違反</h5>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        <h5>誹謗中傷</h5>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        <h5>その他</h5>
                                    </label>
                                </div>
                                
                                <!-- 通報理由入力欄 -->
                                <div class="my-1">
                                    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="通報理由を入力してください" rows="5" required></textarea>
                                    <div class="invalid-feedback">
                                    こちらは必須項目となります
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- キャンセル・送信ボタン -->
                        <div class="row justify-content-around">
                            <a class="btn btn-success w-25  my-4 ml-3" href="/users/settings" type="submit">キャンセル</a>
                            <input class="btn btn-danger w-25  my-4 mr-3" type="submit" value="送信する">   
                        </div>

                            

                    </form>

                </div>

            </div>
        </div>
    </div>