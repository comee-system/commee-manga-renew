<?php $this->load->view('elements/topmenu_login'); ?>

<div class="main-contents container">
  <div class="shadow-lg p-3 mb-5 bg-white rounded">

    <form>
     <div class="text-center my-5">
            <h4>パスワードの再設定</h4><br><br>
        <div class="form-row text-left justify-content-center ">
            <div class="col-sm-8">
                <p> 
                    <input type="email" name="email" autocomplete="email" class="form-control " placeholder="メールアドレスを入力してください。" required />
                </p>
            </div>       
        </div>
     </div>
    
        <div class="text-center my-5">
          <button type="submit" class="btn btn-success w-25 mr-5">送信</button>
          <button type="submit" class="btn btn-danger w-25 ml-5">キャンセル</button>
        </div>
        <br>
    </form>

  </div>
</div>