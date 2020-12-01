<?php $this->load->view('elements/topmenu'); ?>

    <div class="main-contents container">
        <!-- カード情報の登録フォーム -->
        <div class="alert alert-secondary w-100 mx-auto text-center" role="alert">アカウント設定【カード情報】</div>

        <form>
            <div class="form-group">
                <label for="card_Number">カード番号</label>
                <input type="number" class="form-control" id="card_Number" aria-describedby="cardHelp" placeholder="例) 0000 1111 2222 3333">
            </div>
            <div class="form-group">
                <label for="deadline">有効期限</label>
                <input type="number" class="form-control" id="deadline" aria-describedby="deadlineHelp">
            </div>
            <div class="form-group">
                <label for="cardName">カード名義</label>
                <input type="password" class="form-control" id="cardName" placeholder="例) SATOU TAROU">
            </div>
            <div class="form-group">
                <label for="security_code">セキュリティコード</label>
                <input type="number" class="form-control" id="security_code">
            </div>
            <div class="d-flex justify-content-around">
                <button type="button" class="btn btn-danger w-25 mt-3">キャンセル</button>
                <button type="button" class="btn btn-success w-25 mt-3">確定</button>
            </div>   
        </form>

        <select class="custom-select w-25" title="有効期限(月)" name="deadline_month" autocomplete="deadline_month">
            <option selected value="01">01</option>
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
        <option selected value="2020">2020</option>
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

        



