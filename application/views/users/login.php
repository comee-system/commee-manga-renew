<?php $this->load->view('elements/topmenu_login'); ?>

  <div class="main-contents container">
        <div class="shadow-lg p-3 mb-5 bg-white rounded">

            <div class="text-center my-5">
                    <h1>ログインする</h1>
                    <div class="btn d-flex justify-content-around mt-5">
                        <button type="button" class="btn btn-primary w-50 m-2"> <i class="fab fa-twitter">　Twitterでログイン</i></button>
                    </div>
                    <div class="btn d-flex justify-content-around">
                        <button type="button" class="btn btn-dark w-50 m-2"><i class="fab fa-facebook-f"> Facebookでログイン</i></button>
                    </div>
                    <div class="btn d-flex justify-content-around">
                        <button type="button" class="btn btn-danger w-50 m-2"><i class="fab fa-google">　Googleでログイン</i></button>
                    </div>
                    <div class="btn d-flex justify-content-around">
                        <button type="button" class="btn btn-success w-50 m-2"><i class="fab fa-line"></i>　LINEでログイン　</i></button>
                    </div>
                    <div class="p-3">
                    </div>              
            </div>

            <form method="POST" action="#">
                <div class="text-center my-5">
                    <h4>メールアドレスまたはIDでログイン</h4>
                    <div class="form-row text-left justify-content-center mt-5">
                        <label class="col-sm-8 col-sm-offset-2"> メールアドレスまたはID</label>
                        <div class="col-sm-8">
                            <!--入力がメールアドレスの場合-->
                            <p> 
                                <input type="email" name="email" autocomplete="email" class="form-control " placeholder="メールアドレスまたはID" required />
                            </p>
                            <!--入力がユーザIDの場合 
                            <p>
                                <input type="text" name="uid" autocomplete="uid" class="form-control" placeholder="メールアドレスまたはID" required />
                            </p> -->
                        </div>

                        <label class="col-sm-8 col-sm-offset-2">パスワード<br>
                            <small class="text-danger"> *8文字以上　半角英数字または_(アンダースコア)</small>
                        </label>
                        <div class="col-sm-8">  
                            <p>
                            <input type="password" name="password" autocomplete="new-password" class="form-control" placeholder="パスワード" required />
                            </p>
                            <p><a href="/users/reset_password">パスワードを忘れた方はこちら</a></p>
                        </div>
                    </div>
                </div>
            
                <div class="text-center my-5">
                    <button type="submit" class="btn btn-success w-25">ログイン</button>
                </div>
            </form>


        </div>
  </div>
