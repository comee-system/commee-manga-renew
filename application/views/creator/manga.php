

        <!-- 作品表示 -->
        <div class="alert alert-dark mt-3" role="alert">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active d-flex justify-content-around">
                        <img src="/assets/image/5/detail/18/lists/s_5fa4eba8a7e4a.jpg" class="d-block" alt="作品ページ➀">
                    </div>
                    <div class="carousel-item d-flex justify-content-around">
                        <img src="/assets/image/5/detail/18/lists/s_5fa4eba8a87bb.jpg" class="d-block" alt="作品ページ➁">
                    </div>
                    <div class="carousel-item d-flex justify-content-around">
                        <img src="/assets/image/5/detail/18/lists/s_5fa4eba8aaa1b.jpg" class="d-block" alt="作品ページ➂">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!-- Modal Button(月額会員・連載買い切り・有料マンガ) -->
        <div class="text-center">

            <!-- 月額会員ボタン -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#subscription">
                月額会員
            </button>

            <!-- 月額会員Modal -->
            <div class="modal fade" id="subscription" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="subscriptionLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <p>続きを読むには月額会員登録してください。</p>
                            <p>連載タイトル</p>
                            <p>月額会員への説明(クリエイターごとに違う文言が入る)</p>
                            <div class="d-flex justify-content-around">
                                <p>作品の残りページ数：XX</p>
                                <p>月額XXX円</p>
                            </div>
                            <a class="btn btn-danger" href="/purchase/monthly_subscription" role="button">月額会員に登録</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 連載買い切りボタン -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#outright_purchase">
                連載買い切り
            </button>

            <!-- 連載買い切りModal -->
            <div class="modal fade" id="outright_purchase" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="outright_purchaseLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <p>連載のすべての作品をまとめて購入できます。</p>
                            <p>連載タイトル</p>
                            <p>月額会員への説明(クリエイターごとに違う文言が入る)</p>
                            <div class="d-flex justify-content-around">
                                <p>XX(全作品数)</p>
                                <p>XXX円</p>
                            </div>
                            <a class="btn btn-danger" href="/purchase/outright" role="button">連載を購入する</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 有料マンガボタン -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#paid_manga">
                有料マンガ
            </button>

            <!-- 有料マンガModal -->
            <div class="modal fade" id="paid_manga" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="paid_mangaLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <p>続きを読むには、有料マンガを購入して下さい。</p>
                            <div class="d-flex justify-content-around">
                                <p>作品の残りページ数：XX</p>
                                <p>XXX円</p>
                            </div>
                            <a class="btn btn-danger" href="/purchase/article" role="button">有料マンガを購入する</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Modal3種類のコードはここで終了 -->


        <div class="container">

            <!-- 作品情報表示部分 -->
            <div class="d-flex justify-content-between bd-highlight">
                <div class="p-2 bd-highlight ml-2">
                    <a href="/creator/serial?id={id}"><h3 class="text-dark mb-2">連載タイトル</h3></a>
                    <h5>作品タイトル(例:第1話&nbsp;はじまり)</h5>
                </div>
                <div class="p-2 bd-highlight mr-3">
                <button class="btn" type="submit"><i class="fab fa-gratipay fa-3x mt-2" style="color:pink;"></i></button>
                </div>
            </div>

            <hr>

            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="d-flex justify-content-start bd-highlight mb-1">
                            <div class="p-2 bd-highlight text-left mt-1">
                                <a href="/creator?id={id}"><p class="text-dark my-0">ユーザーネーム</p></a>
                                <p class="mt-1 mb-3">投稿日時XXXX/XX/XX&nbsp;XX:XX</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="float-left mt-3 mb-2">
                            <a class="btn btn-success" href="/manga/edit?id={id}" role="button">編集する</a>
                        </div>
                        <div class="float-right mt-3 mb-2">
                            <a href="#"><i class="fab fa-facebook-square fa-3x mx-1" style="color:blue;"></i></a>
                            <a href="#"><i class="fab fa-line fa-3x mx-1" style="color:green;"></i></a>
                            <a href="#"><i class="fab fa-twitter-square fa-3x mx-1" style="color:skyblue;"></i></a>
                            <a href="#"><i class="fab fa-google fa-3x mx-1" style="color:red;"></i></a>
                        </div>
                    </div>    
                </div>
            </div>

        </div>


    <hr>


    <div class="container">

        <!-- 支援ボタン -->
        <div class="alert alert-success my-4" role="alert">
            <h4 class="alert-heading text-center">あなたの応援が作品を描く支えになります。</h4>
            <div class="text-center">
                <button type="button" class="btn btn-success btn-lg mt-2" data-toggle="modal" data-target="#supportModal">支援する</button>
            </div>
        </div>

        <!-- 支援用Modal -->
        <div class="modal" id="supportModal" tabindex="-1" aria-labelledby="supportModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="supportModalLabel">クリエイターを支援する</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- 入力フォーム -->
                    <form method="POST" action="#">

                        <div class="modal-body">
                            <!-- 支援金額を選択 -->
                            <div class="row d-flex justify-content-around">
                                <div class="btn btn-group-toggle" data-toggle="buttons">

                                    <label class="btn btn-outline-success mt-1 "><input type="radio" name="options" id="option1" autocomplete="off" checked>100円</label>

                                    <label class="btn btn-outline-success mt-1 "><input type="radio" name="options" id="option1" autocomplete="off" checked>500円</label>

                                    <label class="btn btn-outline-success mt-1 "><input type="radio" name="options" id="option1" autocomplete="off" checked>1000円</label>

                                    <label class="btn btn-outline-success mt-1 "><input type="radio" name="options" id="option1" autocomplete="off" checked>3000円</label>
                                    <!-- "任意"を押すと金額入力に変更する動きは、topmenuの検索バーを参考に後で作る -->
                                    <label class="btn btn-outline-success mt-1 "><input type="radio" name="options" id="option1" autocomplete="off" checked>任意(金額を入力)</label>
                                </div>
                            </div>
                            <!-- メッセージを入力 -->
                            <div class="form-row text-left justify-content-center my-3">
                                <div class="col-sm-10">
                                    <h5 class="text-dark">メッセージ<small>（絵文字使用可）</small></h5>
                                    <div class="form-group">
                                        <textarea rows="7" id="textarea1" class="form-control" placeholder="メッセージを入力してください" ></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer justify-content-around">
                            <!-- 送信/キャンセル -->
                            <button type="button" class="btn btn-danger border border-dark text-center ml-3" data-dismiss="modal">キャンセル</button></a>
                            <button type="submit" class="btn btn-success text-center mr-3">支援する</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>


        <!-- 報告ボタン -->
        <div class="d-flex flex-row-reverse bd-highlight">
        
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#report">
                報告する
            </button>

            <!-- 報告用Modal -->
            <div class="modal fade" id="report" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="reportLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <!-- 通報理由入力フォーム -->
                            <form method="POST" action="#">

                                <!-- 見出し -->
                                <div class="text-center mb-5">
                                    <h3>通報理由</h3>
                                </div>

                                <div class="form-check text-left ml-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        <h5>著作権違反</h5>
                                    </label>
                                </div>
                                <div class="form-check text-left ml-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        <h5>誹謗中傷</h5>
                                    </label>
                                </div>
                                <div class="form-check text-left ml-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                        <h5>その他</h5>
                                    </label>
                                </div>
                                
                                <!-- 通報理由入力欄 -->
                                <div class="mt-1 mb-5">
                                    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="通報理由を入力してください" rows="5" required></textarea>
                                    <div class="invalid-feedback">
                                        こちらは必須項目となります
                                    </div>
                                </div>

                                <div class="modal-footer justify-content-around">
                                    <!-- キャンセル・送信ボタン -->
                                    <button type="button" class="btn btn-success" data-dismiss="modal">キャンセル</button>
                                    <button type="submit" class="btn btn-danger">送信する</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- タグ表示欄(＃xxx) -->
        <div class="d-flex flex-wrap my-3">
            <button type="button" class="btn btn-outline-dark m-1">#XXX</button>
            <button type="button" class="btn btn-outline-dark m-1">#XXXXX</button>
            <button type="button" class="btn btn-outline-dark m-1">#XXX</button>
            <button type="button" class="btn btn-outline-dark m-1">#XX</button>
            <button type="button" class="btn btn-outline-dark m-1">#XXX</button>
            <button type="button" class="btn btn-outline-dark m-1">#XXX</button>
            <button type="button" class="btn btn-outline-dark m-1">#XXXXX</button>
            <button type="button" class="btn btn-outline-dark m-1">#XXX</button>
            <button type="button" class="btn btn-outline-dark m-1">#XX</button>
            <button type="button" class="btn btn-outline-dark m-1">#XXX</button>
        </div>


        <!-- 連載＋フォロー表示欄 -->
        <div class="card my-3">
            <img src="/assets/image/5/detail/16/thum/5f6ffef48c677.jpg" class="card-img-top" alt="ヘッダー画像">
            <div class="card-body">
                <div class="card-text">
                    <div class="d-flex justify-content-between mt-1">
                        <div class="ml-2">
                            <h4>連載タイトル</h4>
                            <p>作品数</p>
                        </div>
                        <div class="mr-2">
                            <button type="button" class="btn btn-success">フォロー中</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 offset-1 text-break">
                            <p>(作品の説明)XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                        </div>
                    </div>
                    <div class="text-right mr-3">
                        <h5>月額XX円</h5>
                    </div>
                </div>
            </div>
        </div>


        <!-- クリエイター＋フォロー表示欄 -->
        <div class="card my-3">
            <div class="card-body">
                <div class="row card-text">
                    <div class="col-md-3 mt-3 text-center">
                        <img src="/assets/image/5/announce/49/xs_5f6f3e6306856.jpg" class="rounded-circle" alt="アイコン">
                    </div>
                    <div class="col-md-9">
                        <div class="d-flex bd-highlight">
                            <div class="py-2 flex-fill bd-highlight">
                                <h5 class="text-nowrap">ユーザーネーム</h5>
                                <p class="text-nowrap">フォロワー数</p>
                            </div>
                            <div class="py-2 flex-fill bd-highlight">
                                <button type="button" class="btn btn-success mr-1 mt-2">フォロー</button> 
                            </div>
                        </div>
                        <p>(連載の説明)XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- 連載一覧 -->
        <div class="border my-3">

            <div class="p-3">
                <div class="row no-gutters bg-light position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="/assets/image/5/detail/17/thum/s_5f719079b5045.jpg" class="w-100" alt="画像/サムネイル">
                    </div>
                    <div class="col-md-6 position-static p-4 pl-md-0">
                        <h3 class="text-left"><a href="/creator/manga?id={id}" class="text-dark">第1話：XXXXXXXXXXXXXXX</a></h4>
                        <h5 class="mt-3"><a href="/creator?id={id}" class="text-dark">クリエイター名</a></h5>
                        <h4 class="mt-1"><a href="/creator/serial?id={id}" class="text-dark">地縛少年花子くん</a></h4>
                        <h5 class="mt-1">2020/10/31 0:00</h5>
                        <h4 class="mt-3"><i class="far fa-heart">100</i></h4>
                    </div>
                </div>
            </div>


            <div class="p-3">
                <div class="row no-gutters bg-light position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="/assets/image/5/detail/17/thum/s_5f719079b5045.jpg" class="w-100" alt="画像/サムネイル">
                    </div>
                    <div class="col-md-6 position-static p-4 pl-md-0">
                        <h3 class="text-left"><a href="/creator/manga?id={id}" class="text-dark">第2話：XXXXXXXXXXXXXXX</a></h4>
                        <h5 class="mt-3"><a href="/creator?id={id}" class="text-dark">ユーザーネーム</a></h5>
                        <h4 class="mt-1"><a href="/creator/serial?id={id}" class="text-dark">地縛少年花子くん</a></h4>
                        <h5 class="mt-1">2020/11/30 0:00</h5>
                        <h4 class="mt-3"><i class="far fa-heart">130</i></h4>
                    </div>
                </div>
            </div>




            <div class="p-3">
                <div class="row no-gutters bg-light position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="/assets/image/5/detail/17/thum/s_5f719079b5045.jpg" class="w-100" alt="画像/サムネイル">
                    </div>
                    <div class="col-md-6 position-static p-4 pl-md-0">
                        <h3 class="text-left"><a href="/creator/manga?id={id}" class="text-dark">第3話：XXXXXXXXXXXXXXX</a></h4>
                        <h5 class="mt-3"><a href="/creator?id={id}" class="text-dark">ユーザーネーム</a></h5>
                        <h4 class="mt-1"><a href="/creator/serial?id={id}" class="text-dark">地縛少年花子くん</a></h4>
                        <h5 class="mt-1">2020/12/31 0:00</h5>
                        <h4 class="mt-3"><i class="far fa-heart">80</i></h4>
                    </div>
                </div>
            </div>

            <!-- もっと見るボタン -->
            <div class="text-center my-3">
                <button type="button" class="btn btn-success btn-lg">もっと見る</button>
            </div>
        
        </div>

        <!-- 作品一覧 -->

        <h3 class="mt-4">このクリエイターの他の作品</h3>

        <div class="border my-3">

            <div class="p-3">
                <div class="row no-gutters bg-light position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <img src="/assets/image/5/detail/18/lists/s_5fa4eba8aa1a8.jpg" class="w-100" alt="画像/サムネイル">
                    </div>
                    <div class="col-md-6 position-static p-4 pl-md-0">
                        <h3 class="text-left"><a href="/creator/manga?id={id}" class="text-dark">作品名XXXXXXXX</a></h4>
                        <h5 class="mt-3"><a href="/creator?id={id}" class="text-dark">クリエイター名</a></h5>
                        <h5 class="mt-1">2019/10/01 0:00</h5>
                        <h4 class="mt-3"><i class="far fa-heart">100</i></h4>
                    </div>
                </div>
            </div>
        
        </div>

        <!-- COMEEオススメ -->
        <h3 class="mt-4">COMEEオススメ</h3>
        
    
    </div>