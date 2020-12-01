<?php $this->load->view('elements/topmenu_login'); ?>

<div class="main-contents container">
  <div class="shadow-lg p-3 mb-5 bg-white rounded">

    <form>
     <div class="text-center my-5">
            <h4>パスワードの再設定</h4><br><br>
        <div class="form-row text-left justify-content-center">
            <label class="col-sm-8 col-sm-offset-2">パスワード<br>*8文字以上半角英数記号</label>
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
          <button type="submit" class="btn btn-success w-25 mr-5">設定</button>
        </div>
        <br>
    </form>


  </div>
  </div>