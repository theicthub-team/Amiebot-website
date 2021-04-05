<?php include 'header.php'; ?>


<section class="">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><svg id="iconmonstr-home-1-240" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" viewBox="0 0 15 15">
                    <image id="iconmonstr-home-1-240-2" data-name="iconmonstr-home-1-240" width="15" height="15" xlink:href="data:image/png;base64,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" />
                </svg>
            </li>
        </ol>
    </div>
</section>


<!-- page title section -->

<section class="page_deatils display_none_small_765">
    <!-- <div class="container"> -->
    <div class="row">
        <div class="page_name_blank">
        </div>
        <div class="page_Title_blank" style=" background: url('../img/features/header_features.png');background-size: cover;">
        </div>
    </div>
    <div class="container" style="transform: translateY(-162px);">
        <div class="row">
            <div class="page_name">
                <h1>Features</h1>
                <h5>機能と特長</h5>
            </div>
            <div class="page_Title">
                <h2>amieヘルプボットの機能紹介</h2>
                <p>こちらではamieの特徴的な機能についてご紹介します。</p>
            </div>
        </div>
    </div>
    <!-- </div> -->
</section>
<section class="page_deatils display_none_big_765">
    <!-- <div class="container"> -->
    <div class="container">
        <div class="row">
            <div class="page_name_sp col-sm-12">
                <h1>Features</h1>
                <h5>機能と特長</h5>
            </div>
            <div class="page_Title_sp col-sm-12" style=" background: url('../img/features/header_features.png');background-size: cover;">
                <h2>amieヘルプボットの機能紹介</h2>
                <p>こちらではamieの特徴的な機能についてご紹介します。</p>
            </div>
        </div>
    </div>
    <!-- </div> -->
</section>
<!-- page title section end -->

<!-- page feature point section start -->
<section class="position-relative feature_points">
    <div class="container">
        <div class="row justify-content-md-end">
            <div class="col-md-6  wrapper">
                <div class="left_site ">
                    <img src="img/features/features_1.png" class="img" alt="about">
                </div>
            </div>

            <div class="offset-md-1 col-md-6">
                <div class="case_description">
                    <h6>point <span>01</span></h6>
                    <h3>たったの2ステップで学習が完了！<br>「簡単自動学習機能」</h3>
                    <p>
                        チャットボットの導入にいて一番手間の掛かる初期導入時のシナリオ作成や、学習データの整形など不要！</p>
                    <p>
                        既にウェブヘルプがある場合は、学習したいページのトップURLの指定、マニュアルファイルやFAQデータファイルがあれば、ドラッグ＆ドロップするだけ。
                        指定が完了したら「学習」ボタンを押すだけでチャットができる！</p>
                    <p>
                        チャットが完成したら精度のチェックをして表示したいウェブページにタグを追加するだけで導入可能です。
                    </p>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-md-6 order-xs-1 ">
                <div class="case_description">
                    <h6>point <span>02</span></h6>
                    <h3>利用状況が一目で分かる！<br>「利用状況監視機能」</h3>
                    <p>
                        利用状況を日別や時間帯別で確認でき、稼働が高い時期を一目で確認可能です。</p>
                    <p>
                        また、良く質問されるキーワードが自動集計され、登録されていないキーワードも含め確認できるため、学習させるべきポイントや、マニュアルなど手厚くすべきポイントが簡単に確認できます。</p>


                </div>
            </div>
            <div class="col-md-6 order-xs-0 wrapper_right ">
                <div class="">
                    <img src="img/features/features_2.png" alt="case2.png" class="img-fluid">
                </div>
            </div>

        </div>

        <div class="row justify-content-md-end">
            <div class="col-md-6  wrapper">
                <div class="left_site ">
                    <img src="img/features/features_3.png" class="img" alt="about">
                </div>
            </div>

            <div class="offset-md-1 col-md-6">
                <div class="case_description">
                    <h6>point <span>03</span></h6>
                    <h3>回答の精度を向上させる！<br>「問合せ解析機能」</h3>
                    <p>
                        リアルタイムのチャットの履歴が確認でき、データをCSVで取り出すことができます。
                        よくある質問や、より具体的にすべき回答は学習経過に合わせて追加するなど、問合せ傾向など含め確認することが可能となります。</p>

                </div>
            </div>

        </div>


    </div>
    </div>
</section>

<!-- page feature point section start -->

<!-- page other point section start -->

<section class="position-relative feature_points_others">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 text-center">
                <img src="./img/features/Group 496.png" alt="...">
            </div>
            <div class="col-md-8 col-sm-12">
                <h2>多言語対応</h2>
                <p>amie(アミー）は現在14カ国語に対応。</p>
                <p>
                    英語・中国語・ドイツ語などの多言語でチャットボットを使うことができ、日本語以外のマニュアルも学習することができます。</p>
                <p>
                    言語を問わず学習を行い、チャットで英語の質問や、中国語など学習させたマニュアルやWeb ヘルプと異なる言語で質問をしても、自動で言語変換を行い、チャットで返答することが可能です。</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-12 text-center">
                <img src="./img/features/Group 510.png" alt="...">
            </div>
            <div class="col-md-8 col-sm-12">
                <h2>辞書登録機能</h2>
                <p>違う言い回しの単語をたくさん登録し、使われるキーワードを抽出して類義語を登録し、様々な言い回しに対応できるように学習させます。</p>
                <p> 自社専用の専門用語サービス名など、回答できなかった単語も後で簡単に登録可能です。</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-12 text-center">
                <img src="./img/features/Group 534.png" alt="...">
            </div>
            <div class="col-md-8 col-sm-12">
                <h2>シナリオ追加機能</h2>
                <p>シナリオの機能は、機械学習上、データがある事柄に関してはカバーできますが、ウェブページに記載されていない内容の表示、特定の質問に必ず反応させたい場合などに使用します 。</p>
                <p>
                    似たような内容のお問合せを登録することで、反応しやすくなります。</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-12 text-center">
                <img src="./img/features/Group 523.png" alt="...">
            </div>
            <div class="col-md-8 col-sm-12">
                <h2>手動返信機能</h2>
                <p>今まで来たことのない質問や企業側が予想もしていなかった質問などをお持ちの場合もあり、チャットボットで準備した内容に収まらないケースも多くなります。</p>
                <p>
                    管理者側でユーザーのチャットでの問い合わせ状況をリアルタイムに確認でき、サポートデスクや担当者が直接対応を巻き取ることも可能となります。</p>
            </div>
        </div>
    </div>
</section>

<!-- page other point section end -->
<?php include 'footer.php'; ?>