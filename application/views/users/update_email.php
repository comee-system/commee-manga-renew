<?php $this->load->view('elements/topmenu'); ?>

<div class="main-contents container">
    <div class="alert alert-secondary w-100 mx-auto text-center" role="alert">アカウント設定【メールアドレスの変更】</div>
    
    
    <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <form>
            <div class="text-center my-5">
                <div class="form-row text-left justify-content-center ">
                <label class="col-sm-8 col-sm-offset-2"> 新しいメールアドレス</label>
                    <div class="col-sm-8">
                        <p> 
                            <input type="email" name="email" autocomplete="email" class="form-control " placeholder="メールアドレスを入力してください。" required />
                        </p>
                    </div>       
                </div>
            </div>

            <div class="text-center my-5">
                <a href=/users/settings><button type="button" class="btn btn-danger w-25 mr-5">キャンセル</button></a>
                <button type="submit" formaction="/users/settings" class="btn btn-success w-25 ml-5">保存</button>
            </div>
            <br>
        </form>
    </div>

</div>



















