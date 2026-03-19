<?php
/**
 * page-reason.php
 */
get_header(); ?>

<?php get_template_part('sections/sec_page_title', null, [
    'img'     => '/assets/public/img/basic/reasonHeader.jpg',
    'en'      => 'REASON',
    'title'   => '全国から人が集まる理由',
    'class'   => '',
]) ?>

<?php get_template_part('sections/sec_breadcrumbs', null)?>

<section id="reason_intro" class="pt_50 pb_50">
    <div class="sec_inner">
        <div class="mx_auto" style="max-width:570px;">
            <p class="text">田村ビルズグループには、福岡、佐賀、熊本、愛媛、東京、北海道など県外だけでなく、海外から来た社員も在籍しています。縁もゆかりもない山口県に、なぜこれだけ多くの人材が集まってくるのか。その理由を、県外出身の４人の若手に聞いてみました。</p>
        </div>
    </div>
</section>

<section id="members" class="pt_50 pb_50">
    <div class="sec_inner">
        <h2 class="tx_center mb_50">出席者</h2>
        <div class="reason_member d_grid">
            <div class="reason_member_wrap">
                <div class="reason_member_wrap_img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/public/img/basic/reason_member_akiyama.jpg" alt="秋山 菜実">
                </div>
                <div class="reason_member_wrap_detail">
                    <p class="reason_member_wrap_detail_name"><span class="jp">秋山 菜実</span><span class="en">NAMI AKIYAMA</span></p>
                    <p class="reason_member_wrap_detail_other">三重県出身｜2022年入社</p>
                </div>
            </div>
            <div class="reason_member_wrap">
                <div class="reason_member_wrap_img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/public/img/basic/reason_member_hamada.jpg" alt="濵田 真由">
                </div>
                <div class="reason_member_wrap_detail">
                    <p class="reason_member_wrap_detail_name"><span class="jp">濵田 真由</span><span class="en">MAYU HAMADA</span></p>
                    <p class="reason_member_wrap_detail_other">熊本県出身｜2023年入社</p>
                </div>
            </div>
            <div class="reason_member_wrap">
                <div class="reason_member_wrap_img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/public/img/basic/reason_member_miwa.jpg" alt="三輪 亮太">
                </div>
                <div class="reason_member_wrap_detail">
                    <p class="reason_member_wrap_detail_name"><span class="jp">三輪 亮太</span><span class="en">RYOTA MIWA</span></p>
                    <p class="reason_member_wrap_detail_other">北海道出身｜2023年入社</p>
                </div>
            </div>
            <div class="reason_member_wrap">
                <div class="reason_member_wrap_img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/public/img/basic/reason_member_song.jpg" alt="宋 丙勲">
                </div>
                <div class="reason_member_wrap_detail">
                    <p class="reason_member_wrap_detail_name"><span class="jp">宋 丙勲</span><span class="en">Byeonghun SONG</span></p>
                    <p class="reason_member_wrap_detail_other">韓国出身｜2023年入社</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="reason-conversation" class="pt_50 pb_50 convo">
    <div class="sec_inner">
        <div class="mx_auto" style="max-width:570px;">
            <!-- <h2 class="tx_center mb_50">テーマ</h2> -->
            <!-- <p class="text"><span class="fw_b">「全国から人材が集ま    る理由」</span><br>なぜ山口県にある田村ビルズグループの入社を決めたのか</p> -->
            <!-- <h2 class="tx_center mb_50">見出し</h2>
            <ul class="convo_midashi">
                <li><a href="#convo01">そもそも山口県にきたことはあった？</a></li>
                <li><a href="#convo02">田村ビルズと出会ったのは？</a></li>
                <li><a href="#convo03">印象に残っている選考は？</a></li>
                <li><a href="#convo04">田村社長について</a></li>
                <li><a href="#convo05">地元に戻りたいというのはなかった？</a></li>
                <li><a href="#convo06">今後について</a></li>
            </ul> -->
            <div class="convo_content">
                <h3 id="convo01" class="convo_content_midashi tx_center">採用担当秋山が内定者に聞く！<br>「全国から人が集まる理由」</h3>
                <p class="convo_content_txt"><span class="name">秋山</span>：今回は内定者4名に集まって頂きました。皆さん宜しくお願い致します！</p>
                <p class="convo_content_txt"><span class="name">全員</span>：お願い致します！</p>

                <h3 id="convo01" class="convo_content_midashi">そもそも山口県に来たことはあった？</h3>
                <!-- <img class="convo_content_img" src="<?php echo get_template_directory_uri();?>/assets/public/img/common/no_img.png"> -->

                <p class="convo_content_txt"><span class="name">秋山</span>：今回ここに集まってもらった人は本当に県がバラバラですね。そもそも山口県って来た事ってありました？</p>
                <p class="convo_content_txt"><span class="name">濵田</span>：私は熊本県出身ですが、山口に来たことは最終選考の面接まで来たことがなかったです。用事があっても九州地方の中で完結していました。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：そうなんですね。三輪さんは山口大学ですよね。出身はどちらですか？</p>
                <p class="convo_content_txt"><span class="name">三輪</span>：私は北海道から来ました！もともとは海外で楽しいことしたいな、と思っていて、それなら留学に行ったほうがいいかなくらいの感覚で、大学のカリキュラムに留学が含まれている山口大学の国際総合科学部を選んで山口に来ました！</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：ソンさんは、韓国から山口県にある東亜大学ですが、何で日本の大学を選んだんですか？</p>
                <p class="convo_content_txt"><span class="name">ソン</span>：最初に韓国の大学に通ったことがあったんですけど、前期通ってみて、これ違うな、と思って。とりあえず軍隊行ってから考えようと思って休学しました。ただ、軍隊って申し込んで2か月後に結果が出るんですよ。2ヶ月ってバイト探しても中々なくって、そうなると家でダラダラするしかなくて。そしたら、母から「日本語か中国語どっちを学んでみなさい」って言われて。日本語のアニメも見ていたので日本語ならいけるなと思って、日本語の塾に通い始めたんです。アニメを見ていたのもあって、聞き取りができていて、先生から結構褒められましたね。それで、日本語の資格をとって、塾の先生から留学してみない？って言われて。そこからは日本の大学だけを目指して、日本の小説を読みながら勉強したという感じです。軍隊で一番高いレベルの日本語能力試験を受けて、合格して、軍隊が終わりました。親から日本に留学する資金は自分で稼ぎなさいって言われたので、兵役終わって、一週間後くらいには工場に入ったんですよね。ちょうど一年くらい働いて、資金貯めて日本に来たっていう感じですね。軍隊に入った時から目標は留学しかなかったですね。</p>


                <h3 id="convo02" class="convo_content_midashi">田村ビルズと出会ったのは？</h3>
                <!-- <img class="convo_content_img" src="<?php echo get_template_directory_uri();?>/assets/public/img/common/no_img.png"> -->
                <p class="convo_content_txt"><span class="name">秋山</span>：田村ビルズに出会ったのは大学何年生の時ですか？</p>
                <p class="convo_content_txt"><span class="name">ソン</span>：私は大学4年生ですね。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：マイナビとか？</p>
                <p class="convo_content_txt"><span class="name">ソン</span>：きっかけは友達の紹介ですね。友達が大学3年生の時に田村ビルズのインターンシップに参加していて、その子が不動産には興味ないけど、雰囲気がとても良かったので、不動産に興味あるならぜひ参加してみたらいいよって言ってくれて。私がちょうど不動産に興味があったので、それがきっかけで、マイナビで探してっていう感じですね。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：そうなんだ。なかなか大学生同士の紹介で入って来る人はいないから珍しいですね。マイナビで探して、説明会が最初？</p>
                <p class="convo_content_txt"><span class="name">ソン</span>：そうですね。説明会＋一次面接に参加させていただいて、そこから面接にどんどん進んでいったって感じですね。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：三輪さんもアカデミーハウス（山口市が運営する施設）にいた、諸泉さん（2018年入社社員）と岩本さん（2020年入社社員）からの紹介？</p>
                <p class="convo_content_txt"><span class="name">三輪</span>：アカデミーハウスに、建設業の社長をやっている方がいて、その方に「田村ビルズグループはいいと思うよ！」と言われたんですよね（笑）それを言われて興味持ち始めたのがきっかけです。その一言をもらって、諸泉さんや岩本さんをよく見るようになったって感じですね。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：三輪さんは田村ビルズだけ受けていて、内定も早かったですよね。</p>
                <p class="convo_content_txt"><span class="name">三輪</span>：そうですね。2月の頭には決めていましたね。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：迷わなかったんですか？（笑）</p>
                <p class="convo_content_txt"><span class="name">三輪</span>：迷いました（笑）就職するなら田村ビルズだったんですけど、就職するか、世界一周するかで迷っていたんです。</p>
                <p class="convo_content_txt"><span class="name">秋山・ソン・濵田</span>：全然違う（笑）（笑）</p>
                <p class="convo_content_txt"><span class="name">三輪</span>：田村ビルズにいくって決めたのは、ルーキーミーティングで田村社長と話してからですね。(※ルーキーミーティングはグループ全社の1～3年目社員が集まる勉強会のこと)</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：あ、ルーキーに参加したんですか？</p>
                <p class="convo_content_txt"><span class="name">三輪</span>：はい。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：どんなこと話したんですか？</p>
                <p class="convo_content_txt"><span class="name">三輪</span>：具体的には覚えてないんですけど（笑）社長のほうから、話しかけてくださって。二言三言ちょっと話して惹かれた記憶がありますね。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：なんかオーラがありますよね。その時は内定承諾は出していない状態？</p>
                <p class="convo_content_txt"><span class="name">三輪</span>：出してないですし、まだ一次面接も始まっていない状況でしたね。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：先にルーキーに参加していたんですね！濵田さんは何がきっかけですか？</p>
                <p class="convo_content_txt"><span class="name">濵田</span>：最初はオファーボックスでメッセージを頂いて、面談をして、という感じですね。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：私もオファーボックスなんですよね。私は出身が三重県だったので、どちらかというと、大阪とか関西あたりからのオファーがすごい多かったんですけど、その中で山口県から初めてオファーがきて。「山口県の企業からオファーきた！」と思いましたね（笑）私も別に不動産系を見ていたわけではなかったんですけど、営業とか販売を広くみていて、そういった中で、濵田さんと一緒でオファーをくれた会社を調べて、面白そうだと思うかどうか。最初は単純に「面白そう」でしかオファー受けてないですね。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：濵田さんはオファーボックスでオファーを受けて、面談したんですよね。最初面談をしてどんな感じでした？</p>
                <p class="convo_content_txt"><span class="name">濵田</span>：当時面談をしてくれたのが、採用チームで働かれていた山下さんで、採用の面接とは思えないくらいリラックスして受けていた印象があります。</p>
                <p class="convo_content_txt"><span class="name">秋山・三輪・ソン</span>：（笑）（笑）</p>


                <p class="convo_content_txt"><span class="name">秋山</span>：たしかに、たしかに、山下さんと面談していたら、この人がいる会社は楽しそうだな、という印象になりますよね。私もそうでした。</p>
                <p class="convo_content_txt"><span class="name">濵田</span>：そこから、選考に進んでみようと思いましたね。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：田村ビルズの選考って、すごい沢山社員が出てきますよね（笑）</p>

                <h3 id="convo03" class="convo_content_midashi">印象に残っている選考は？</h3>
                <!-- <img class="convo_content_img" src="<?php echo get_template_directory_uri();?>/assets/public/img/common/no_img.png"> -->
                <p class="convo_content_txt"><span class="name">秋山</span>：一次選考の内容は結構衝撃受けたのを覚えていますね（笑）選考とか受けていて、印象とか変わってきました？</p>
                <p class="convo_content_txt"><span class="name">ソン</span>：そうですね。会社説明会の時から社長が自らのお話してくださって、よりうちの会社に惹かれましたね。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：会社説明会で社長がお話してくださるのはびっくりですよね！私は一次面接の内容もびっくりしたんですけど、採用コンセプトの「どこでではなく、誰と働くか」っていう言葉がホームページにも載っていて、それを見ていたので、その選考スタイルも納得しましたね。だからこの形なのか、って感じで。納得したし、この会社言っていることとやっていることが一緒だな、というのが最初の印象でしたね。そこから一次二次と通してもらって、選考進んでいく中でいろんな社員に会いますよね。この選考印象に残っているな、とかってありますか？</p>
                <p class="convo_content_txt"><span class="name">三輪</span>：たしか、二次選考がオンラインだったんですけど、『なぜ働くのか』を考えた気がするんですよ。その時に、三人くらい社員の方がいて、グループに分かれてフィードバックがあったんですけど、そのディスカッションが楽しかった記憶がありますね。本質を探っていく感じが田村ビルズらしいな、と思いましたね。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：なぜ働くのか、とかを選考の中で考えることってないですよね。濵田さんとかは色んな企業を受けられたんですか？</p>
                <p class="convo_content_txt"><span class="name">濵田</span>：私は田村ビルズ含めて10社以上の企業を受けていましたね。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：他の企業とかで「働く意味」とかを考えた企業ってありました？</p>
                <p class="convo_content_txt"><span class="name">濵田</span>：あまりなかったですね。三輪さんが言ったみたいに、私も二次選考で「なんで働くのか」っていうのがあって、そこでちゃんと考えたような気がします。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：そういうのを選考で考えるのも珍しいし、その後のフィードバックが私的にすごく印象に残っていますね。それまで楽しそうな会社というイメージだったのが、この会社いいな、というか、その会社の中を見た上で惹かれたっていうのが二次選考でしたね。皆さんはどの段階でいいな、って思いました？</p>
                <p class="convo_content_txt"><span class="name">濵田</span>：私はインターンシップの時から実は良いなと思っていて、学生一人一人に寄り添ってくださる社員の皆さまが仕事を楽しんでいて、かつ芯の強い方ばかりで、この方たちと一緒に働いたら、すごく学びが多そうだと感じ、選考が進んでいくにつれていいなと思うことが増えていきました。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：この人たちと一緒に働きたいっていうのが大きかったんですね。不動産とか事業内容はみてない感じでした？</p>
                <p class="convo_content_txt"><span class="name">濵田</span>：特に職種にこだわりはなくて、色々な職種で就活していました。そのうちの一つに不動産もありました。いいなと思った田村ビルズが不動産業も展開していたという感じです。</p>
                <p class="convo_content_txt"><span class="name">ソン</span>：私が良さそうな会社だなという印象を受けたのは、一番初めの説明会の時に社長のお話を聞いてからですね。そこから面接が進んでいって、最終面接を受けた時も、合格をもらった時も、実はいいのか悪いのか正直分かっていないところもあったんですけど、6月にある経営方針発表会（全社員が集まる場）の雰囲気でいい会社だなと思いましたね。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：その時に、ソンさんは内定承諾を出したんですよね。会社全体をみて、雰囲気をみて決めたって感じなんですね。それこそ営業同行とか、最終面接で社長と一対一で話す機会があるので、会社の中を知った上で決めきることができますよね。</p>
                <p class="convo_content_txt"><span class="name">三輪</span>：私はさっき言ったように、ルーキーミーティングで社長と話した時ですね。その時に田村社長の下で働きたいと思いました。社員の方からも京セラの稲盛和夫さんの話とかを聞いて、稲盛さんの考え方や生き方を学んでいくうちに、自分の進むべき道が見えてきて、その道を歩んでいる方がいっぱいいる環境のもとで一緒に働けたらいいだろうな、と選考が進んでいくうちに体得していった感じですね。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：考え方を大事にしたいな、というのは選考の中で思い始めたんですか？</p>
                <p class="convo_content_txt"><span class="name">三輪</span>：「心を高める、経営を伸ばす」の書籍を、いつ読み始めたか記憶が曖昧なんですけど、たぶん社長と会う前だった気がして、その考え方と社長に出会ったのがすごく大きかったな、と思いますね。</p>

                <h3 id="convo04" class="convo_content_midashi">田村社長について</h3>
                <!-- <img class="convo_content_img" src="<?php echo get_template_directory_uri();?>/assets/public/img/common/no_img.png"> -->
                <p class="convo_content_txt"><span class="name">秋山</span>：社長ってどんな存在ですか？</p>
                <p class="convo_content_txt"><span class="name">濵田</span>：私が、初めてお会いしたのはインターンシップでした。登壇してお話をされていて「社員の幸せを一番に考えてくださっているな」というのが第一印象でした。そこから最終面接までは、社長とお会いするたびに終始緊張してしまいました。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：私も最終面接めちゃくちゃ緊張していて、正直何言ったか覚えていないくらいなんですけど、すごい話を聞いてくださったっていう記憶はありますね。たしかに入ってきたときのオーラはすごいですけど（笑）入社してからも、締めるところはちゃんと締めて、フランクなところもあるので、印象は変わっていないですね。</p>
                <p class="convo_content_txt"><span class="name">ソン</span>：私の社長の印象は、最終面接で社長が「質問ありますか？」って聞いてくださった時に、「私がファイナルアンサーだから何でも聞いていいよ」と、自分の答えが会社そのものだから、と言われていて、それを聞いた時はかっこいいなと思いましたね。質問は何をしたか覚えてないんですけど（笑）</p>

                <h3 id="convo05" class="convo_content_midashi">地元に戻りたいというのはなかった？</h3>
                <!-- <img class="convo_content_img" src="<?php echo get_template_directory_uri();?>/assets/public/img/common/no_img.png"> -->
                <p class="convo_content_txt"><span class="name">秋山</span>：三人とも地元がなかなか遠いですけど、地元に戻りたいとかはなかったんですか？</p>
                <p class="convo_content_txt"><span class="name">濵田</span>：地元は熊本ですが、元々県内で働こうという考えはなかったですね。働きたいと思った田村ビルズがたまたま山口県にあったので、今は山口県で頑張ろうと思っています！</p>
                <p class="convo_content_txt"><span class="name">ソン</span>：私も韓国に戻ることは考えてなかったです。ここまで日本で生活してきて、韓国に戻るのは勿体ないなと思う気持ちが半分と、韓国はすごくスペック社会なので、TOEIC何点とかを求められたり、資格をとったり、そういう自信がなかったっていう気持ちが半分ですね。特に韓国で仕事をしたいなとは最初から思ってなかったです。</p>
                <p class="convo_content_txt"><span class="name">三輪</span>：私は、地元北海道が好きなので、北海道に何か還元したいなという気持ちはありましたね。ただ、山口県で出会った人も本当にいい人ばかりで、山口か北海道か、というか田村ビルズか北海道って感じになっていましたね（笑）それだったら、田村ビルズだ！という考えに至りました。田村社長に出会ってから北海道という選択肢が消えましたね。将来的に北海道に支店を作っちゃえば北海道に田村ビルズの三輪として恩返しできる可能性もあるので（笑）</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：私は山口県に関わりが全くなくて、正直山口県の場所も知らなかったんですよ（笑）選考を受けているときに「あ、こんなに遠いんだ」ってなりましたね（笑）もちろん、地元の企業を受けていたんですけど、田村ビルズの二次選考を受けた時くらいから他の企業はあまり見ていなかったですね。山口県にくることに戸惑いはなかったですし、山口県に田村ビルズがあるので、山口県にいきますって感じでした。今も山口県は住みやすいなと感じています。</p>

                <h3 id="convo06" class="convo_content_midashi">今後について</h3>
                <!-- <img class="convo_content_img" src="<?php echo get_template_directory_uri();?>/assets/public/img/common/no_img.png"> -->
                <p class="convo_content_txt"><span class="name">秋山</span>：将来描いている目標とかありますか？</p>
                <p class="convo_content_txt"><span class="name">ソン</span>：面接の時に言っていたことで、外国人対象の営業部をつくりたいな、と。簡単なことではないと思うんですけど。外国人労働者の働き方や生き方を変えていけるようにしていきたいですね。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：会社は絶対応援してくれますね。</p>
                <p class="convo_content_txt"><span class="name">三輪</span>：私は北海道にはいきたいですね。あとは宇宙ですかね。宇宙を探求したいというのが、心の片隅にあります。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：それは三輪亮太個人として？（笑）</p>
                <p class="convo_content_txt"><span class="name">三輪</span>：いや、田村ビルズとしてですね。宇宙は広いので、ちょっとでも宇宙のことを知れたらいいかなと思います（笑）</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：面白い（笑）ニュースには取り上げられそう（笑）私は、不動産というと男性が多い印象で、田村ビルズも大体男女比7:3くらいで、女性の営業ってまだまだ少ないので、女性が結婚しても子どもを産んでからも理想な働き方ができるような環境を作っていきたいな、と思いますね。そのために女性だけの事業部とかあっても面白いよねって若手の女性社員で話したりしています。</p>
                <p class="convo_content_txt"><span class="name">秋山</span>：まだまだ話足りないとは思いますが、今回はこの辺で。入社してからの皆さんの活躍、期待してます！私も負けないように成長しますね！皆さんありがとうございました！</p>
                <p class="convo_content_txt"><span class="name">全員</span>：ありがとうございました！</p>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('sections/sec_basic_links') ?>

<?php get_template_part('sections/sec_recruit_info_links', null, [
    'is_midashi' => 'true',  //見出しを表示したい場合のみ['true']、非表示の場合は空白
]) ?>

<?php get_template_part('sections/sec_cta'); ?>

<?php get_footer(); ?>