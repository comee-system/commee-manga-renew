<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
  <div class="container">

    <div class="navbar" >
      <div class="center-block">
        <h1>COMEEに登録する</h1>
      </div>
    </div>


    <form>

        <div class="form-row">
            <label class="col-sm-8 col-sm-offset-8">メールアドレス <span class="badge badge-danger">必須</span></label>
            <div class="col-sm-9">
              <p>
                <input type="email" name="email" autocomplete="email" class="form-control" placeholder="メールアドレス" required />
              </p>
            </div>
          </div>

      <div class="form-row">
        <label class="col-sm-8 col-sm-offset-2">パスワード <span class="badge badge-danger">必須</span><br>8文字以上半角英数記号</label>
        <div class="col-sm-9">
          <p>
            <input type="password" name="password" autocomplete="new-password" class="form-control" placeholder="パスワード" required />
          </p>
        </div>
      </div>

      <div class="form-row">
        <label class="col-sm-8 col-sm-offset-2">ユーザネーム <span class="badge badge-danger">必須</span><br>（COMEEで表示される名前です）</label><br>
        <div class="col-sm-9">
          <p>
            <input type="text" name="name" autocomplete="name" class="form-control" placeholder="ユーザネーム" required />
          </p>
        </div>
      </div>

      <div class="form-row">
        <label class="col-sm-8 col-sm-offset-2">生年月日</label>

        <div class="col-sm-9">

          <select class="custom-select w-25" title="生年月日(西暦)" name="bday-year" autocomplete="bday-year">
            <option selected="">----</option>
            <option value="2010">2010</option>
            <option value="2009">2009</option>
            <option value="2008">2008</option>
            <option value="2007">2007</option>
            <option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
            <option value="1997">1997</option>
            <option value="1996">1996</option>
            <option value="1995">1995</option>
            <option value="1994">1994</option>
            <option value="1993">1993</option>
            <option value="1992">1992</option>
            <option value="1991">1991</option>
            <option value="1990">1990</option>
            <option value="1989">1989</option>
            <option value="1988">1988</option>
            <option value="1987">1987</option>
            <option value="1986">1986</option>
            <option value="1985">1985</option>
            <option value="1984">1984</option>
            <option value="1983">1983</option>
            <option value="1982">1982</option>
            <option value="1981">1981</option>
            <option value="1980">1980</option>
            <option value="1979">1979</option>
            <option value="1978">1978</option>
            <option value="1977">1977</option>
            <option value="1976">1976</option>
            <option value="1975">1975</option>
            <option value="1974">1974</option>
            <option value="1973">1973</option>
            <option value="1972">1972</option>
            <option value="1971">1971</option>
            <option value="1970">1970</option>
            <option value="1969">1969</option>
            <option value="1968">1968</option>
            <option value="1967">1967</option>
            <option value="1966">1966</option>
            <option value="1965">1965</option>
            <option value="1964">1964</option>
            <option value="1963">1963</option>
            <option value="1962">1962</option>
            <option value="1961">1961</option>
            <option value="1960">1960</option>
            <option value="1959">1959</option>
            <option value="1958">1958</option>
            <option value="1957">1957</option>
            <option value="1956">1956</option>
            <option value="1955">1955</option>
            <option value="1954">1954</option>
            <option value="1953">1953</option>
            <option value="1952">1952</option>
            <option value="1951">1951</option>
            <option value="1950">1950</option>
          </select>
          年
          <select class="custom-select w-25" title="生年月日(月)" name="bday-month" autocomplete="bday-month">
            <option selected="">--</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
          月
          <select class="custom-select w-25" title="生年月日(日)" name="bday-day" autocomplete="bday-day">
            <option selected="">--</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
          </select>
          日
        </div>

      </div>
      <br>
      <div class="form-row">
        <label class="col-sm-8 col-sm-offset-2">ユーザID  <span class="badge badge-danger">必須</span><br> 8文字以上半角英数記号</label>
        <div class="col-sm-9">
          <p>
            <input type="text" name="uid" autocomplete="uid" class="form-control" placeholder="ユーザID" required />
          </p>
        </div>
      </div>

      <div class="text-center my-5">
        <button type="submit" class="btn btn-success">登録する</button>
      </div>

    </form>
  </div>
</body>
</html>
