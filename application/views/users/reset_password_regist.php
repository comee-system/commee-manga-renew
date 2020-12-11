<?php $this->load->view('elements/topmenu_login'); ?>

<div class="main-contents container">
  <div class="shadow-lg p-3 mb-5 bg-white rounded">

    <form method="POST" action="#">
     <div class="text-center my-5">
            <h4>パスワードの再設定</h4><br><br>
        <div class="form-row text-left justify-content-center">
            <label class="col-sm-8 col-sm-offset-2">パスワード<br>
             <small class="text-danger"> *8文字以上, 半角英数字または_(アンダースコア)が使用できます</small>
            </label>
            <div class="col-sm-8">  
                <p>
                <input type="password" name="password" autocomplete="new-password" class="form-control" placeholder="新しいパスワードを入力してください。" required />
                </p>
            </div>
        </div>
        <div class="form-row text-left justify-content-center">
            <div class="col-sm-8">  
                <p>
                <input type="password" name="password" autocomplete="new-password" class="form-control" placeholder="新しいパスワードを入力してください。(確認)" required />
                </p>
            </div>
        </div>
     </div>
    
      <div class="text-center my-5">
        <input type="submit" value="設定" class="btn btn-success w-25 mr-5">
      </div>
  
    </form>


  </div>
</div>
  