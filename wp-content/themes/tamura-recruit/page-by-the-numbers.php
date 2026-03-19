<?php
/**
 * page-numbers.php
 */
get_header(); ?>

<?php get_template_part('sections/sec_page_title', null, [
    'img'     => '/assets/public/img/by-the-numbers/numbersHeader.png',
    'en'      => 'BY NUMBERS',
    'title'   => '数字で知る',
    'class'   => '',
]) ?>

<?php get_template_part('sections/sec_breadcrumbs', null)?>

<section id="by_numbers_intro" class="pt_50 pb_50">
    <div class="sec_inner">
        <h2 class="mb_50">数字で知る、<br>田村ビルズグループの魅力とは</h2>
        <p class="text">いろいろな切り口で田村ビルズグループを分析してみました。<br>田村ビルズグループで挑戦するメンバーの年齢や勤続年数、<br>職種などを数字で紹介します。<br>ちょっと意外なことも！？あるかもしれません。</p>
    </div>
</section>

<section id="by_numbers_body" class="pt_50 pb_50">
    <div class="sec_inner">
        <div class="by_numbers_list d_grid">

            <!-- 田村ビルズの歴史 -->
            <div id="graph1" class="by_numbers_list_item graph content_01">
                <p class="by_numbers_list_item_ttl">田村ビルズの歴史</p>
                <p class="number first mt_50 mt_100_pc mb_50 mb_75_pc tx_center"><span class="count" data-number="33076">33076</span></p>
                <p class="by_numbers_list_item_description mb_50">皆様はこの33,076社という数字が何を意味するか分かりますでしょうか？これは日本で100年以上続いている企業の数です。国内企業数は2016年の総務省統計で約386万社。100年以上続いている企業を％にすると全体の僅か0.8%になります。</p>
                <div class="d_flex gap_35 justify_content_center align_items_center">
                    <div class="chart-box">
                        <p class="caption">%に変換すると...</p>
                        <canvas id="graph1-chart"></canvas>
                    </div>
                    <p class="number second">0.8<span class="per">%</span></p>
                </div>
            </div>

            <!-- 男女比 -->
            <div id="graph2" class="by_numbers_list_item graph content_02">
                <p class="by_numbers_list_item_ttl">男女比</p>
                <div class="pie_chart">
                    <div class="chart-box">
                        <canvas id="graph2-chart" class="mx_auto"></canvas>
                    </div>
                    <dl class="items2 item01">
                        <dt>男性</dt>
                        <dd class="number"><span class="count" data-number="63">63</span><span class="per">%</span></dd>
                    </dl>
                    <dl class="items2 item02">
                        <dt>女性</dt>
                        <dd class="number"><span class="count" data-number="37">37</span><span class="per">%</span></dd>
                    </dl>
                </div>
            </div>

            <!-- 平均年齢 -->
            <div id="graph3" class="by_numbers_list_item graph content_03">
                <p class="by_numbers_list_item_ttl">平均年齢</p>
                <div class="d_flex gap_20 gap_35_pc justify_content_space align_items_end">
                    <p class="age"><span class="number count" data-number="37">37</span><span>歳</span></p>
                    <div class="chart-box column_chart">
                        <div class="bars">
                            <div class="bar">
                                <p class="number"><span class="count" data-number="33">33</span><span class="per">%</span></p>
                                <div class="chart">
                                    <div class="bar-graph"></div>
                                </div>
                                <p class="gene">〜20代</p>
                            </div>
                            <div class="bar">
                                <p class="number"><span class="count" data-number="22">22</span><span class="per">%</span></p>
                                <div class="chart">
                                    <div class="bar-graph"></div>
                                </div>
                                <p class="gene">30代</p>
                            </div>
                            <div class="bar">
                                <p class="number"><span class="count" data-number="17">17</span><span class="per">%</span></p>
                                <div class="chart">
                                    <div class="bar-graph"></div>
                                </div>
                                <p class="gene">40代</p>
                            </div>
                            <div class="bar">
                                <p class="number"><span class="count" data-number="28">28</span><span class="per">%</span></p>
                                <div class="chart">
                                    <div class="bar-graph"></div>
                                </div>
                                <p class="gene">50代～</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 新卒出身地 -->
            <div id="graph4" class="by_numbers_list_item graph content_04">
                <p class="by_numbers_list_item_ttl">新卒出身地</p>
                <div class="d_flex column_2 al_center">
                    <div class="column_2_halfbox">
                        <p class="by_numbers_list_item_description mt_50 mb_50">ご覧の通り創業の地である山口県以外の他都道府県から来た社員が多数在籍しています。近年は福岡本社の設立、九州各エリアへの進出もあり九州出身者はさらに増えていますが、その根底にあるのは「どこで」ではなく「誰と働くか」という考え方です。</p>
                        <div class="beside">
                            <div class="bars">
                            <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="32">32</span><span>%</span></p></div>
                                        <p class="gene">山口</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="25">25</span><span>%</span></p></div>
                                        <p class="gene">福岡</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="10">10</span><span>%</span></p></div>
                                        <p class="gene">佐賀</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="7">7</span><span>%</span></p></div>
                                        <p class="gene">長崎</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="5">5</span><span>%</span></p></div>
                                        <p class="gene">熊本</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="3">3</span><span>%</span></p></div>
                                        <p class="gene">鹿児島</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="3">3</span><span>%</span></p></div>
                                        <p class="gene">兵庫</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="3">3</span><span>%</span></p></div>
                                        <p class="gene">宮崎</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="3">3</span><span>%</span></p></div>
                                        <p class="gene">広島</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="2">2</span><span>%</span></p></div>
                                        <p class="gene">三重</p>
                                    </div>
                                </div>

                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="2">2</span><span>%</span></p></div>
                                        <p class="gene">韓国</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="2">2</span><span>%</span></p></div>
                                        <p class="gene">大阪府</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="2">2</span><span>%</span></p></div>
                                        <p class="gene">高知県</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="2">2</span><span>%</span></p></div>
                                        <p class="gene">愛媛県</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column_2_halfbox">
                        <img class="place_map" src="<?php echo get_template_directory_uri();?>/assets/public/img/by-the-numbers/place_map2.png" alt="出身地マップ">
                    </div>
                </div>
            </div>

            <!-- 在籍年数 -->
            <div id="graph5" class="by_numbers_list_item graph content_05">
                <p class="by_numbers_list_item_ttl">在籍年数</p>
                <div class="pie_chart">
                    <div class="chart-box">
                        <canvas id="graph3-chart"></canvas>
                    </div>
                    <dl>
                        <dt>3年未満</dt>
                        <dd class="number"><span class="count" data-number="48">48</span><span class="per">%</span></dd>
                    </dl>
                    <dl>
                        <dt>3年～</dt>
                        <dd class="number"><span class="count" data-number="12">12</span><span class="per">%</span></dd>
                    </dl>
                    <dl>
                        <dt>5年～</dt>
                        <dd class="number"><span class="count" data-number="21">21</span><span class="per">%</span></dd>
                    </dl>
                    <dl>
                        <dt>10年～</dt>
                        <dd class="number"><span class="count" data-number="19">19</span><span class="per">%</span></dd>
                    </dl>
                </div>
            </div>

            <!-- 入社のきっかけ -->
            <div id="graph6" class="by_numbers_list_item graph content_06">
                <p class="by_numbers_list_item_ttl">入社のきっかけ</p>
                <ul class="side-list">
                    <li>
                        <dl>
                            <dt>田村社長、社員</dt>
                            <dd><p class="number"><span class="count" data-number="43">43</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>仕事内容</dt>
                            <dd><p class="number"><span class="count" data-number="17">17</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>社風、考え方（フィロソフィ）</dt>
                            <dd><p class="number"><span class="count" data-number="26">26</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>会社の方針、ビジョン</dt>
                            <dd><p class="number"><span class="count" data-number="5">5</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>各種制度、福利厚生</dt>
                            <dd><p class="number"><span class="count" data-number="3">3</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li class="other">
                        <dl>
                            <dt>その他</dt>
                            <dd><p class="number"><span class="count" data-number="6">6</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                </ul>
            </div>

            <!-- 入社して意外だったこと -->
            <div id="graph7" class="by_numbers_list_item graph content_07">
                <p class="by_numbers_list_item_ttl">入社して意外だったこと</p>
                <div class="chart-box column_chart">
                    <div class="bars">
                        <div class="bar">
                            <p class="number"><span class="count" data-number="25">25</span><span class="per">%</span></p>
                            <div class="chart">
                                <div class="bar-graph"></div>
                            </div>
                            <p class="gene">フィロソフィ</p>
                        </div>
                        <div class="bar">
                            <p class="number"><span class="count" data-number="10">10</span><span class="per">%</span></p>
                            <div class="chart">
                                <div class="bar-graph"></div>
                            </div>
                            <p class="gene">仕事内容</p>
                        </div>
                        <div class="bar">
                            <p class="number"><span class="count" data-number="24">24</span><span class="per">%</span></p>
                            <div class="chart">
                                <div class="bar-graph"></div>
                            </div>
                            <p class="gene">社長との距離</p>
                        </div>
                        <div class="bar">
                            <p class="number"><span class="count" data-number="8">8</span><span class="per">%</span></p>
                            <div class="chart">
                                <div class="bar-graph"></div>
                            </div>
                            <p class="gene">社風</p>
                        </div>
                        <div class="bar">
                            <p class="number"><span class="count" data-number="7">7</span><span class="per">%</span></p>
                            <div class="chart">
                                <div class="bar-graph"></div>
                            </div>
                            <p class="gene">制度</p>
                        </div>
                        <div class="bar">
                            <p class="number"><span class="count" data-number="7">7</span><span class="per">%</span></p>
                            <div class="chart">
                                <div class="bar-graph"></div>
                            </div>
                            <p class="gene">会社の知名度</p>
                        </div>
                        <div class="bar">
                            <p class="number"><span class="count" data-number="19">19</span><span class="per">%</span></p>
                            <div class="chart">
                                <div class="bar-graph"></div>
                            </div>
                            <p class="gene">なし</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 休日の過ごし方 -->
            <div id="graph8" class="by_numbers_list_item graph content_08">
                <p class="by_numbers_list_item_ttl">休日の過ごし方</p>
                <div class="pie_chart item2">
                    <div class="chart-box">
                        <canvas id="graph4-chart" class="mx_auto"></canvas>
                    </div>
                    <dl class="items2 item01">
                        <dt>アウトドア派</dt>
                        <dd class="number"><span class="count" data-number="53">53</span><span class="per">%</span></dd>
                    </dl>
                    <dl class="items2 item02">
                        <dt>インドア派</dt>
                        <dd class="number"><span class="count" data-number="47">47</span><span class="per">%</span></dd>
                    </dl>
                </div>
            </div>

            <!-- 産後復職したい（女性スタッフ） -->
            <div id="graph9" class="by_numbers_list_item graph content_09">
                <p class="by_numbers_list_item_ttl">産後復職したい（女性スタッフ）</p>
                <div class="pie_chart">
                    <div class="chart-box">
                        <canvas id="graph5-chart"></canvas>
                    </div>
                    <dl>
                        <dt>はい</dt>
                        <dd class="number"><span class="count" data-number="60">60</span><span class="per">%</span></dd>
                    </dl>
                    <dl>
                        <dt>いいえ</dt>
                        <dd class="number"><span class="count" data-number="10">10</span><span class="per">%</span></dd>
                    </dl>
                    <dl>
                        <dt>その他</dt>
                        <dd class="number"><span class="count" data-number="30">30</span><span class="per">%</span></dd>
                    </dl>
                </div>
            </div>

            <!-- 既婚・未婚 -->
            <div id="graph10" class="by_numbers_list_item graph content_10">
                <p class="by_numbers_list_item_ttl">既婚・未婚</p>
                <div class="chart-box">
                    <div class="married">
                        <div class="pict"><img src="<?php echo get_template_directory_uri();?>/assets/public/img/by-the-numbers/married.svg" alt="既婚者"><p>既婚者</p></div>
                        <p class="number"><span class="count" data-number="52">52</span><span class="per">%</span></p>
                    </div>
                    <div class="unmarried">
                        <p class="number"><span class="count" data-number="48">48</span><span class="per">%</span></p>
                        <div class="pict"><img src="<?php echo get_template_directory_uri();?>/assets/public/img/by-the-numbers/unmarried.svg" alt="未婚者"><p>未婚者</p></div>
                    </div>
                </div>
            </div>

            <!-- あってよかった福利厚生 -->
            <div id="graph11" class="by_numbers_list_item graph content_11">
                <p class="by_numbers_list_item_ttl">あってよかった福利厚生</p>
                <div class="d_flex column_2 gap_50">
                    <div class="column_2_halfbox">
                        <p class="by_numbers_list_item_description mt_50 mb_50">仕事もプライベートも充実できるよう、様々な福利厚生を用意しています。<br class="pc-only">入社したら遠慮なくご活用ください。　<a href="<?php echo home_url(); ?>/welfare/">→ 詳しくはこちら</a></p>
                        <div class="beside">
                            <div class="bars">
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="10">10</span><span>%</span></p></div>
                                        <p class="gene">コンパ</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="5">5</span><span>%</span></p></div>
                                        <p class="gene">社外研修</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="12">12</span><span>%</span></p></div>
                                        <p class="gene">フィロソフィミーティング</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="11">11</span><span>%</span></p></div>
                                        <p class="gene">資格支援制度</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="11">11</span><span>%</span></p></div>
                                        <p class="gene">携帯、iPad、PC購入補助</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="6">6</span><span>%</span></p></div>
                                        <p class="gene">従業員顧問弁護士制度</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="1">1</span><span>%</span></p></div>
                                        <p class="gene">自宅の困りごと駆けつけサービス</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column_2_halfbox">
                        <div class="beside">
                            <div class="bars">
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="5">5</span><span>%</span></p></div>
                                        <p class="gene">社員旅行</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="9">9</span><span>%</span></p></div>
                                        <p class="gene">オフィスおかん</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="3">3</span><span>%</span></p></div>
                                        <p class="gene">時短正社員制度</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="3">3</span><span>%</span></p></div>
                                        <p class="gene">育児休業制度</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="4">4</span><span>%</span></p></div>
                                        <p class="gene">入学祝い金制度</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="5">5</span><span>%</span></p></div>
                                        <p class="gene">シェアハウス</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="9">9</span><span>%</span></p></div>
                                        <p class="gene">営業車一人一台貸与</p>
                                    </div>
                                </div>
                                <div class="bar">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="4">4</span><span>%</span></p></div>
                                        <p class="gene">奨学金返済支援制度</p>
                                    </div>
                                </div>
                                <div class="bar other">
                                    <div class="chart">
                                        <div class="bar-graph"><p class="number"><span class="count" data-number="2">2</span><span>%</span></p></div>
                                        <p class="gene">その他</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="welfare_wrap d_flex column_2">
                    <div class="welfare_wrap_item column_2_halfbox">
                        <p class="by_numbers_list_item_description mt_50 mb_50">仕事もプライベートも充実できるよう、様々な福利厚生を用意しています。<br class="pc-only">入社したら遠慮なくご活用ください。　<a href="<?php echo home_url(); ?>/walfare">→ 詳しくはこちら</a></p>
                        <div class="side_by_side">
                            <div class="welfare_detail welfare_work">
                                <p class="name">仕事</p>
                                <p class="number"><span class="count" data-number="12">12</span><span class="per">個</span><img class="kaban" src="<?php echo get_template_directory_uri();?>/assets/public/img/by-the-numbers/welfare_work_blue.svg" alt="仕事"></p> 
                                <ul class="about sp-only">
                                    <li>・資格手当</li>
                                    <li>・資格取得支援制度</li>
                                    <li>・通勤手当</li>
                                    <li>・勉強し放題制度</li>
                                    <li>・社用携帯電話貸与</li>
                                    <li>・営業車一人一台貸与</li>
                                    <li>・コンパ費用全額会社負担</li>
                                    <li>・PC/タブレット購入費用補助</li>
                                    <li>・時短正社員制度</li>
                                    <li>・永年勤続表彰</li>
                                    <li>・月間/年間表彰</li>
                                    <li>・制服貸与</li>
                                </ul>
                            </div>
                            <div class="welfare_detail welfare_private">
                                <p class="name">プライベート</p>
                                <p class="number"><span class="count" data-number="18">18</span><span class="per">個</span><img src="<?php echo get_template_directory_uri();?>/assets/public/img/by-the-numbers/welfare_private_green.svg" alt="プライベート"></p>
                                <ul class="about sp-only">
                                    <li>・住宅手当</li>
                                    <li>・シェアハウス制度（新卒三年以内・独身者対象）</li>
                                    <li>・従業員顧問弁護士制度</li>
                                    <li>・特別休暇</li>
                                    <li>・産前産後休暇</li>
                                    <li>・慶弔見舞金制度</li>
                                    <li>・介護休業制度</li>
                                    <li>・結婚祝い金制度</li>
                                    <li>・傷病見舞金制度</li>
                                    <li>・災害見舞金制度</li>
                                    <li>・入学祝い金制度</li>
                                    <li>・住宅トラブル緊急かけつけサービス</li>
                                    <li>・インフルエンザ予防接種費用全額会社負担</li>
                                    <li>・日帰りイベント</li>
                                    <li>・社員研修旅行</li>
                                    <li>・朝食補助（シェアハウス入寮者のみ）</li>
                                    <li>・オフィスおかん</li>
                                    <li>・奨学金返済支援制度</li>
                                </ul>
                            </div>
                        </div>  
                    </div>
                    <div class="welfare_wrap_item column_2_halfbox pc-only">
                        <div class="welfare_detail">
                            <p class="name work">仕事・資格支援</p>
                            <ul class="about">
                                <li>・資格手当</li>
                                <li>・資格取得支援制度</li>
                                <li>・通勤手当</li>
                                <li>・勉強し放題制度</li>
                                <li>・社用携帯電話貸与</li>
                                <li>・営業車一人一台貸与</li>
                                <li>・コンパ費用全額会社負担</li>
                                <li>・PC/タブレット購入費用補助</li>
                                <li>・時短正社員制度</li>
                                <li>・永年勤続表彰</li>
                                <li>・月間/年間表彰</li>
                                <li>・制服貸与</li>
                            </ul>
                        </div>
                        <div class="welfare-detail">
                            <p class="name private">生活・プライベート支援</p>
                            <ul class="about">
                                <li>・住宅手当</li>
                                <li>・シェアハウス制度（新卒三年以内・独身者対象）</li>
                                <li>・従業員顧問弁護士制度</li>
                                <li>・特別休暇</li>
                                <li>・産前産後休暇</li>
                                <li>・慶弔見舞金制度</li>
                                <li>・介護休業制度</li>
                                <li>・結婚祝い金制度</li>
                                <li>・傷病見舞金制度</li>
                                <li>・災害見舞金制度</li>
                                <li>・入学祝い金制度</li>
                                <li>・住宅トラブル緊急かけつけサービス</li>
                                <li>・インフルエンザ予防接種費用全額会社負担</li>
                                <li>・日帰りイベント</li>
                                <li>・社員研修旅行</li>
                                <li>・朝食補助（シェアハウス入寮者のみ）</li>
                                <li>・オフィスおかん</li>
                                <li>・奨学金返済支援制度</li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>

            <!-- 知り合いに紹介したい会社か -->
            <div id="graph12" class="by_numbers_list_item graph content_12">
                <p class="by_numbers_list_item_ttl">知り合いに紹介したい会社か</p>
                <div class="pie_chart">
                    <div class="chart-box">
                        <canvas id="graph6-chart"></canvas>
                    </div>
                    <dl>
                        <dt>はい</dt>
                        <dd class="number"><span class="count" data-number="72">72</span><span class="per">%</span></dd>
                    </dl>
                    <dl>
                        <dt>いいえ</dt>
                        <dd class="number"><span class="count" data-number="8">8</span><span class="per">%</span></dd>
                    </dl>
                    <dl>
                        <dt>その他</dt>
                        <dd class="number"><span class="count" data-number="20">20</span><span class="per">%</span></dd>
                    </dl>
                </div>
            </div>

            <!-- 血液型 -->
            <div id="graph13" class="by_numbers_list_item graph content_13">
                <p class="by_numbers_list_item_ttl">血液型</p>
                <ul class="side-list">
                    <li>
                        <dl>
                            <dt>A型</dt>
                            <dd><p class="number"><span class="count" data-number="34">34</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>B型</dt>
                            <dd><p class="number"><span class="count" data-number="24">24</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>O型</dt>
                            <dd><p class="number"><span class="count" data-number="31">31</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>AB型</dt>
                            <dd><p class="number"><span class="count" data-number="11">11</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                </ul>
            </div>

            <!-- 視力 -->
            <div id="graph14" class="by_numbers_list_item graph content_14">
                <p class="by_numbers_list_item_ttl">視力</p>
                <ul class="side-list">
                    <li>
                        <dl>
                            <dt>裸眼</dt>
                            <dd><p class="number"><span class="count" data-number="45">45</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>メガネ</dt>
                            <dd><p class="number"><span class="count" data-number="21">21</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>コンタクト</dt>
                            <dd><p class="number"><span class="count" data-number="33">33</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>レーシック</dt>
                            <dd><p class="number"><span class="count" data-number="1">1</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                </ul>
            </div>

            <!-- 現在の住居 -->
            <div id="graph15" class="by_numbers_list_item graph content_15">
                <p class="by_numbers_list_item_ttl">現在の住居</p>
                <ul class="side-list">
                    <li>
                        <dl>
                            <dt>一人暮らし</dt>
                            <dd><p class="number"><span class="count" data-number="38">38</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>実家</dt>
                            <dd><p class="number"><span class="count" data-number="5">5</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>家族と一緒に</dt>
                            <dd><p class="number"><span class="count" data-number="53">53</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>二世帯住宅</dt>
                            <dd><p class="number"><span class="count" data-number="1">1</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>社員寮（シェアハウス）</dt>
                            <dd><p class="number"><span class="count" data-number="2">2</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li class="other">
                        <dl>
                            <dt>その他</dt>
                            <dd><p class="number"><span class="count" data-number="2">2</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                </ul>
            </div>

            <!-- 学生時代の部活 -->
            <div id="graph16" class="by_numbers_list_item graph content_16">
                <p class="by_numbers_list_item_ttl">学生時代の部活</p>
                <div class="club d_grid">
                    <div class="club_box">
                        <p class="club_box_name">運動部</p>
                        <p class="club_box_number"><span class="count" data-number="67">67</span><span class="per">%</span></p>
                        <p class="club_box_about">野球・バスケット・サッカー・テニス・バレー・弓道・卓球・剣道・ダンス・陸上・ウィンドサーフィン・柔道・空手・水泳・バドミントン等</p>
                    </div>
                    <div class="club_box">
                        <p class="club_box_name">文芸部</p>
                        <p class="club_box_number"><span class="count" data-number="8">8</span><span class="per">%</span></p>
                        <p class="club_box_about">吹奏楽・茶道・美術・合唱・マーチング・生徒会・放送部等</p>
                    </div>
                    <div class="club_box">
                        <p class="club_box_name">帰宅部</p>
                        <p class="club_box_number"><span class="count" data-number="25">25</span><span class="per">%</span></p>
                    </div>
                </div>
            </div>

            <!-- 趣味 -->
            <div id="graph17" class="by_numbers_list_item graph content_17">
                <p class="by_numbers_list_item_ttl">趣味</p>
                <ul class="side-list">
                    <li>
                        <dl>
                            <dt>映画鑑賞</dt>
                            <dd><p class="number"><span class="count" data-number="10">10</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>音楽鑑賞</dt>
                            <dd><p class="number"><span class="count" data-number="14">14</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>読書</dt>
                            <dd><p class="number"><span class="count" data-number="6">6</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>ゲーム</dt>
                            <dd><p class="number"><span class="count" data-number="11">11</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>ショッピング</dt>
                            <dd><p class="number"><span class="count" data-number="17">17</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>カラオケ</dt>
                            <dd><p class="number"><span class="count" data-number="6">6</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>ドライブ</dt>
                            <dd><p class="number"><span class="count" data-number="15">15</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>お酒を飲む</dt>
                            <dd><p class="number"><span class="count" data-number="11">11</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>仕事をする</dt>
                            <dd><p class="number"><span class="count" data-number="6">6</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li class="other">
                        <dl>
                            <dt>その他</dt>
                            <dd><p class="number"><span class="count" data-number="4">4</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                </ul>
            </div>

            <!-- 好きな食事のカテゴリー -->
            <div id="graph18" class="by_numbers_list_item graph content_18">
                <p class="by_numbers_list_item_ttl">好きな食事のカテゴリー</p>
                <div class="pie_chart">
                    <div class="chart-box">
                        <canvas id="graph7-chart"></canvas>
                    </div>
                    <dl>
                        <dt>肉食系</dt>
                        <dd class="number"><span class="count" data-number="42">42</span><span class="per">%</span></dd>
                    </dl>
                    <dl>
                        <dt>草食系</dt>
                        <dd class="number"><span class="count" data-number="20">20</span><span class="per">%</span></dd>
                    </dl>
                    <dl>
                        <dt>魚食系</dt>
                        <dd class="number"><span class="count" data-number="28">28</span><span class="per">%</span></dd>
                    </dl>
                    <dl>
                        <dt>お菓子系</dt>
                        <dd class="number"><span class="count" data-number="10">10</span><span class="per">%</span></dd>
                    </dl>
                </div>
            </div>

            <!-- ランチの平均予算 -->
            <div id="graph19" class="by_numbers_list_item graph content_19">
                <p class="by_numbers_list_item_ttl">ランチの平均予算</p>
                <ul class="baloon">
                    <li>
                        <dl>
                            <dt><span>～999円</span></dt>
                            <dd class="number"><span class="count" data-number="74">74</span><span class="per">%</span></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><span>1,001円～</span></dt>
                            <dd class="number"><span class="count" data-number="8">8</span><span class="per">%</span></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><span>愛妻弁当</span></dt>
                            <dd class="number"><span class="count" data-number="18">18</span><span class="per">%</span></dd>
                        </dl>
                    </li>
                </ul>
            </div>

            <!-- 飲む頻度 -->
            <div id="graph20" class="by_numbers_list_item graph content_20">
                <p class="by_numbers_list_item_ttl">飲む頻度</p>
                <ul class="baloon">
                    <li>
                        <dl>
                            <dt><span>ほぼ毎日</span></dt>
                            <dd class="number"><span class="count" data-number="23">23</span><span class="per">%</span></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><span>週2～3回</span></dt>
                            <dd class="number"><span class="count" data-number="20">20</span><span class="per">%</span></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><span>月2～3回</span></dt>
                            <dd class="number"><span class="count" data-number="27">27</span><span class="per">%</span></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt><span>ほとんど<br>飲まない</span></dt>
                            <dd class="number"><span class="count" data-number="30">30</span><span class="per">%</span></dd>
                        </dl>
                    </li>
                </ul>
            </div>

            <!-- 好きな映画 -->
            <div id="graph21" class="by_numbers_list_item graph content_21">
                <p class="by_numbers_list_item_ttl">好きな映画</p>
                <ul class="side-list">
                    <li>
                        <dl>
                            <dt>邦画</dt>
                            <dd><p class="number"><span class="count" data-number="39">39</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>洋画</dt>
                            <dd><p class="number"><span class="count" data-number="40">40</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>アニメ</dt>
                            <dd><p class="number"><span class="count" data-number="18">18</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>その他</dt>
                            <dd><p class="number"><span class="count" data-number="3">3</span><span class="per">%</span></p></dd>
                        </dl>
                    </li>
                </ul>
            </div>

            <!-- よく読む本 -->
            <div id="graph22" class="by_numbers_list_item graph content_22">
                <p class="by_numbers_list_item_ttl">よく読む本</p>
                <div class="pie_chart">
                    <div class="chart-box">
                        <canvas id="graph8-chart"></canvas>
                    </div>
                    <dl>
                        <dt>小説</dt>
                        <dd class="number"><span class="count" data-number="12">12</span><span class="per">%</span></dd>
                    </dl>
                    <dl>
                        <dt>自己啓発</dt>
                        <dd class="number"><span class="count" data-number="29">29</span><span class="per">%</span></dd>
                    </dl>
                    <dl>
                        <dt>マンガ</dt>
                        <dd class="number"><span class="count" data-number="35">35</span><span class="per">%</span></dd>
                    </dl>
                    <dl>
                        <dt>雑誌</dt>
                        <dd class="number"><span class="count" data-number="19">19</span><span class="per">%</span></dd>
                    </dl>
                    <dl>
                        <dt>その他</dt>
                        <dd class="number"><span class="count" data-number="5">5</span><span class="per">%</span></dd>
                    </dl>
                </div>
            </div>

        </div>
    </div>
</section>
<style>
      #graph4 .beside .bars .bar:nth-child(1) .bar-graph.active {
    width: 74%!important;  /* 山口県 32% */
    background: #227035!important;
  }
  #graph4 .beside .bars .bar:nth-child(2) .bar-graph.active {
    width: 57.81%!important;  /* 福岡県 25% */
    background: #003384!important;
  }
  #graph4 .beside .bars .bar:nth-child(3) .bar-graph.active {
    width: 23.12%!important;  /* 佐賀県 10% */
    background: #CE462A!important;
  }
  #graph4 .beside .bars .bar:nth-child(4) .bar-graph.active {
    width: 16.19%!important;  /* 長崎県 7% */
  }
  #graph4 .beside .bars .bar:nth-child(5) .bar-graph.active {
    width: 11.56%!important;  /* 熊本県 5% */
    background: #DD9C42!important;
  }
  #graph4 .beside .bars .bar:nth-child(6) .bar-graph.active {
    width: 6.94%!important;  /* 鹿児島県 3% */
  }
  #graph4 .beside .bars .bar:nth-child(7) .bar-graph.active {
    width: 6.94%!important;  /* 兵庫県 3% */
  }
  #graph4 .beside .bars .bar:nth-child(8) .bar-graph.active {
    width: 6.94%!important;  /* 宮崎県 3% */
  }
  #graph4 .beside .bars .bar:nth-child(9) .bar-graph.active {
    width: 6.94%!important;  /* 広島県 3% */
  }
  #graph4 .beside .bars .bar:nth-child(10) .bar-graph.active {
    width: 4.62%!important;  /* 三重県 2% */
  }
  #graph4 .beside .bars .bar:nth-child(11) .bar-graph.active {
    width: 4.62%!important;  /* 韓国 2% */
  }
  #graph4 .beside .bars .bar:nth-child(12) .bar-graph.active {
    width: 4.62%!important;  /* 大阪府 2% */
  }
  #graph4 .beside .bars .bar:nth-child(13) .bar-graph.active {
    width: 4.62%!important;  /* 高知県 2% */
  }
  #graph4 .beside .bars .bar:nth-child(14) .bar-graph.active {
    width: 4.62%!important;  /* 愛媛県 2% */
  }
</style>

<?php get_template_part('sections/sec_basic_links') ?>

<?php get_template_part('sections/sec_recruit_info_links', null, [
    'is_midashi' => 'true',  //見出しを表示したい場合のみ['true']、非表示の場合は空白
]) ?>

<?php get_template_part('sections/sec_cta'); ?>

<?php get_footer(); ?>