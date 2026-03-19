<?php
/**
 * page-career-change.php
 */
get_header(); ?>

<?php get_template_part('sections/sec_page_title', null, [
    'img'     => '/assets/public/img/career-change/career_changeHeader.png',
    'en'      => 'CAREER CHANGE',
    'title'   => '転職をお考えの方へ',
    'class'   => '',
]) ?>

<?php get_template_part('sections/sec_breadcrumbs', null)?>

<section id="value" class="pt_50 pb_50">
    <div class="sec_inner">
        <div class="mx_auto" style="max-width:570px;">
            <h2 class="mb_50 tx_center">価値観</h2>
            <h3 class="tx_center mb_50 theme_blue">「どこでではなく、誰と働くか」</h3>
            <p class="text">これは、社員第一主義を貫き、圧倒的なスピードと精度で業績を伸ばしている田村ビルズの代名詞。<br>東名阪ではない山口・九州での事業展開にもかかわらず、無名に近い同社であるにもかかわらず、全国から様々な中途人材が集まってきている。現在の職を辞し新たなキャリアを手に入れようと。<br>なぜ、そのような一見「不思議な現象」が起きているのか。その理由を様々な角度からご紹介します。<br>感じるものが少しでもありましたら、お気軽にエントリーください。</p>
        </div>
        <div class="in_pagelink_box mx_auto mt_50">
            <p class="tx_center fw_n mb_30">通常エントリーに加え、見学や仕事体験を経て<br>エントリーを決める「大人のインターン」もご利用いただけます。</p>
            <?php get_template_part('blocks/bl_btn_inpage', null, [
                'in_page_link'    => '#entry',
                'txt'     => 'エントリーについて',
                'color' => 'blue',
                'class'   => '',
            ]) ?>
        </div>
    </div>
</section>
<section id="model_vision" class="pt_50 pb_50">
    <div class="sec_inner">
        <h2 class="mb_50 tx_center">ビジネスモデルとビジョン</h2>
        <?php get_template_part('blocks/bl_right_img_left_ttl_txt', null, [
            'midashi' => '140年を超える歴史と独創的な事業モデル。<br>でも、それだけじゃない。',
            'txt' => '土地売買、新築、リフォーム、解体、リサイクルと、住まいに関する入口から出口まですべて自社完結が可能。不動産事業、環境事業、建築事業の3事業それぞれで、バランスよく会社収益の3分の1ずつを担っています。創業140年を超える歴史と実績、それに甘んじない独創的なビジネスモデルは、老舗ベンチャー田村ビルズの特徴のひとつだと言えるでしょう。<br><br>けれど、田村ビルズがお客様に選ばれているいちばんの理由は、そうした事業モデルを支える『人の力』。人材採用と社員教育には何よりも力を入れており、社員一人ひとりのお客様に向き合う姿勢が、歴史や実績以上の信頼を勝ち得ているのだと思います。「同じ商品なら田村ビルズから買いたい」「他より高いしちょっと遠いけど、田村ビルズさんにお願いしたい」。そんな風に言っていただけるのは、社員一人ひとりの人間力のたまものだと思っています。',
            'img' => '/assets/public/img/career-change/model_new.jpg',
            'class' => 'mt_70',
        ]) ?>
        <?php get_template_part('blocks/bl_right_ttl_txt_left_img', null, [
            'midashi' => '1万社中の6社に選出。<br>でも、まだ終わらない旅の途中。',
            'txt' => '京セラの創業者、経営の神様ともいわれる稲盛和夫氏の勉強会、盛和塾。2016年、盛和塾に所属する1万社の中から6社に選抜され、世界大会でプレゼンテーションを行いました。山口県のいち建築企業で終わらない。世界で勝負できるグレートカンパニーを本気でめざしています。売上目標として2026年までに100億円を掲げていますが、収益性はめざす目標の3要素のうちの1つに過ぎません。その他に、社会性（社会、地域、業界に貢献すること）、教育性（社員一人ひとりの心を高めること）の追求を、重要なミッションとして置いています。<br><br>旧態依然の不必要な慣習は変えていく。業界内での影響力を増し、業界全体をより良いものへと改善していく。そうした事業活動を通じて社会課題を解決したい。結果として、従業員の物心両面の幸福を追求していますが、その活動は終わらない旅のようなものだと思っています。',
            'img' => '/assets/public/img/career-change/vision.jpg',
            'class' => 'mt_70',
        ]) ?>
        <div class="mt_50">
            <?php get_template_part('blocks/bl_btn', null, [
                'link'    => '/recruit/business/',
                'txt'     => '事業内容を詳しく',
                'is_icon' => true,
                'color' => 'blue',
                'class'   => 'mx_auto',
            ]) ?>
        </div>
    </div>
</section>

<section id="easy_to_work" class="pt_50 pb_50">
    <div class="sec_inner">
        <h2 class="mb_50 tx_center">なぜ働きやすいのか？</h2>
        <div class="column_2 d_grid gap_50 gap_60_pc" id="flexible_<?php echo get_the_ID(); ?>">
            <?php get_template_part('blocks/bl_img_ttl_txt_box', null, [
                'img' => '/assets/public/img/career-change/culture_new.jpg',
                'midashi' => '良い会社は、会社以外の時間も充実させられる。',
                'txt' => '『社員一人ひとりの物心両面での幸福』を本気で追求しています。子育て中の社員（もちろん男性も！）向けの時短勤務制度を整備したり、最近では顧問弁護士制度をつくったり。プライベートでのトラブルを、気軽に顧問弁護士に相談できるこの制度は、「何かあっても安心して仕事に集中できる」ととても好評。田村ビルズでは、社員のプライベート面についても、できるだけサポートしたいと考えています。',
                'is_tag' => true,
                'tag_txt' => '制度・社風',
                'tag_color' => 'red',
            ]) ?>
            <?php get_template_part('blocks/bl_img_ttl_txt_box', null, [
                'img' => '/assets/public/img/career-change/teamwork.jpg',
                'midashi' => 'チームで協力するために、個人ノルマはつくらない。',
                'txt' => '転職してきた社員たちは口をそろえて言います。「この会社は、上司も同僚も自分のことをすごく見てくれている」と。困っている人は助ける。わからないことは互いに教え合う。それが可能なのは、個人ではなくチームに目標が課されているから。個人の成績に連動したインセンティブが無いため、みんなで収益を上げ、みんなで給与を上げようという意識が浸透しているのです。事業成長に伴い新しいポジションがどんどん生まれているため、ステップアップのチャンスも常にある。転職して1年以内に支店長になった社員もいるほど。あなたもぜひ、目指してください。',
                'is_tag' => true,
                'tag_txt' => 'チームワーク',
                'tag_color' => 'red',
            ]) ?>
            <?php get_template_part('blocks/bl_img_ttl_txt_box', null, [
                'img' => '/assets/public/img/career-change/colleague.jpg',
                'midashi' => '「誰と働くか」が、自分の成長スピードを左右する。',
                'txt' => 'ある社員が転職時の面接で、こんな話をしていました。「田村ビルズは知人に紹介されたんです。そのとき『田村ビルズだと1番にはなれないかもしれないよ』と言われたのがとても印象に残っていて。「あそこは若くて優秀な社員が多いから、1番になりたいなら他の会社がいいかもしれない。でも、刺激的な環境でチャレンジしたいなら、田村ビルズがいいよ」と。それを聞いて入社したいと思いました」。そうやって、意識の高い社員が集まり、教育によってさらにレベルアップする。そんな好循環をこれからも作っていきたいと思います。',
                'is_tag' => true,
                'tag_txt' => '同僚の存在',
                'tag_color' => 'red',
            ]) ?>
            <?php get_template_part('blocks/bl_img_ttl_txt_box', null, [
                'img' => '/assets/public/img/career-change/welfare_new.jpg',
                'midashi' => 'なぜ働きやすいのか？',
                'txt' => '社員全員が、仕事もプライベートも充実できる様に、田村ビルズグループでは様々な福利厚生を用意しています。たとえば、キャリアを高めるための「資格取得支援制度」。仕事の生産性向上につながる「携帯電話貸与制度」。営業車は1人1台貸与。また社員旅行は年に二回行っています。自宅の鍵を紛失した！といったトラブル時に使える「自宅の困りごと駆けつけサービス」や「入学祝い金制度」は家族がいる社員に人気。また、シェアハウス利用者には「おかんサービス（添加物なしのお惣菜の提供、シェアハウス利用者対象）」が喜ばれています。',
                'is_tag' => true,
                'tag_txt' => '福利厚生',
                'tag_color' => 'red',
            ]) ?>
        </div>
    </div>
</section>

<section id="after_career_change" class="pt_50 pb_50">
    <div class="sec_inner">
        <div class="mx_auto" style="max-width:570px;">
            <h2 class="mb_50 tx_center">転職後のキャリア</h2>
            <p class="text">経験者もいれば未経験者もいる。山口在住の人もいれば県外から戻ってきた人もいる。田村ビルズグループは、社員の個性と多様性を受け入れる会社。自分には縁がないと、最初から諦めないでほしい。あなたの想いや人生と重なる社員が、この中にもいるかもしれませんよ。</p>
        </div>
        <div class="column_3 d_grid gap_30 mt_50">
            <?php 
                $home = home_url();
                $fujimura_img = $home;
                $fujimura_img .= '/wp-content/uploads/2023/01/fujimura.jpg';
                get_template_part('blocks/bl_link_box_01', null, [
                    'link' => '/recruit/people/fujimura',
                    'img' => $fujimura_img,
                    'ttl' => '東京と同じレベルで、山口で働きたいと思いました。',
                    'explain' => '藤村 剛次 | 買取再販事業部<br>前職：人材会社営業',
                    'is_tag' => false,
                    'tag_txt' => '',
                    'tag_color' => '',
                    'class' => '',
                ]);

                $saito_img = $home;
                $saito_img .= '/wp-content/uploads/2023/01/saito.jpg';
                get_template_part('blocks/bl_link_box_01', null, [
                    'link' => '/recruit/people/saito/',
                    'img' => $saito_img,
                    'ttl' => 'アルバイトからでも、執行役員になれる会社です。',
                    'explain' => '齋藤 博幸 | 環境事業部<br>前職：派遣会社',
                    'is_tag' => false,
                    'tag_txt' => '',
                    'tag_color' => '',
                    'class' => '',
                ]);

                $ueda_img = $home;
                $ueda_img .= '/wp-content/uploads/2023/01/ueda.jpg';
                get_template_part('blocks/bl_link_box_01', null, [
                    'link' => '/recruit/people/ueda/',
                    'img' => $ueda_img,
                    'ttl' => '若手には頑張らないでほしいですね。僕が目立てないので(笑)',
                    'explain' => '上田 永嗣 | 売買仲介事業部<br>前職：販売営業',
                    'is_tag' => false,
                    'tag_txt' => '',
                    'tag_color' => '',
                    'class' => '',
                ]);

                $morita_img = $home;
                $morita_img .= '/wp-content/uploads/2023/01/morita.jpg';
                get_template_part('blocks/bl_link_box_01', null, [
                    'link' => '/recruit/people/morita/',
                    'img' => $morita_img,
                    'ttl' => '転職2か月での店長就任は、さすがに予想外でした。',
                    'explain' => '森田 将剛 | 売買仲介事業部<br>前職：ハウスメーカー',
                    'is_tag' => false,
                    'tag_txt' => '',
                    'tag_color' => '',
                    'class' => '',
                ]);

            ?>
        </div>
        <div class="mt_50">
            <?php get_template_part('blocks/bl_btn', null, [
                'link'    => '/recruit/welfare/',
                'txt'     => '中途入社社員を支える福利厚生をみる',
                'is_icon' => true,
                'color' => 'blue',
                'class'   => 'mx_auto',
            ]) ?>
        </div>
    </div>
</section>

<!-- <section id="worksheet" class="pt_50 pb_50">
    <div class="sec_inner">
        <div class="mx_auto" style="max-width:570px;">
            <h2 class="mb_50 tx_center">アンケート</h2>
            <p class="text">全国から集まった中途社員を対象に実施したアンケート結果を公開しています。</p>
        </div>
    </div>
</section> -->

<section id="message" class="pt_50 pb_50">
    <div class="sec_inner">
        <div class="mx_auto" style="max-width:570px;">
            <h2 class="mb_50 tx_center">転職をお考えの方への<br>メッセージ</h2>
        </div>
        <?php get_template_part('blocks/bl_right_img_left_ttl_txt', null, [
            'midashi' => '一度の人生、どのように生きたいですか？',
            'txt' => 'キャリアを積んで活躍してこられた方にあえて言います。『どこで働くかではなく、誰と働くか』が大切だと思いませんか？
                    <br><br>改めまして、株式会社田村ビルズグループ代表の田村です。
                    <br><br>当社はこの10年、『どこで働くかではなく、誰と働くか』というメッセージを新卒学生に向けて発信し、その考え方に共感・共鳴してくれた学生がたくさん入社してくれました。社是である『心を高める、経営を伸ばす』にある通り、業績を上げる（=経営を伸ばす）集団は、心を高めよう、人として正しい考え方を持とうという集団でなければならない。そのように訴えて来ました。
                    <br><br>そしてその間に入社した学生は現在、社内で目覚ましい活躍をしてくれています。新卒中心で組織を作って来ましたが、これからの不透明な経営環境の中でさらに飛躍しようと思えば、今だからこそ他社でキャリアを積まれた方の成功体験や失敗体験がどうしても必要だと考えています。',
            'img' => '/assets/public/img/career-change/message01.jpg',
            'class' => 'mt_70',
        ]) ?>
        <?php get_template_part('blocks/bl_right_txt_left_img', null, [
            'midashi' => '一度の人生、どのように生きたいですか？',
            'txt' => 'そしてそのような方々は、様々な経験をされているからこそ、『どこで働くかではなく、誰と働くか』に強く共感して頂けるのではないかと思っています。
                    <br><br>そのメッセージに共感・共鳴した集団である私達は、自分より仲間、個人よりチーム、利己ではなく利他、少しでもそのように考えられるようになりたいと考えて仕事をしています。
                    <br><br>そのように心を高めようとしている私達は、社是にある通り、直近10年間で経営も伸ばして来ました。（下記グラフ参照）<br><img src="' . get_template_directory_uri() . '/assets/public/img/career-change/graph.jpg" alt="">',
            'img' => '/assets/public/img/career-change/message02.jpg',
            'class' => 'mt_80',
        ]) ?>
        <div class="mx_auto mt_50 mb_50" style="max-width:570px;">
            
        </div>
        <?php get_template_part('blocks/bl_right_img_left_txt', null, [
            'txt' => '現在の主力事業は不動産事業、建築・足場事業、環境事業となります。
                    <br><br>不動産事業では、山口県内でハウスドゥブランドで不動産店舗を12店舗と熊本県に1店舗を展開し、今後大きな成長が見込める中古住宅マーケットでストックビジネスを幅広く展開していきます。
                    <br><br>建築足場事業では、不動産事業とともに成長するリフォーム・リノベーション事業や、豊富な足場資材の保有と専属とび職方在籍数が強みとなります。
                    <br><br>また環境事業では、産業廃棄物最終処分場や木くず・石膏ボード・廃プラスチックの各リサイクルプラントなどの保有など、参入障壁の高い許可事業を数多く有しています。
                    <br><br>これらの人材ポテンシャル、事業ポテンシャルを、共通の考え方のもとに集う新卒社員とキャリア社員が、切磋琢磨しながら、『全従業員の物心両面の幸福を求める』という経営理念の実現を達成していきたいと考えています。
                    <br><br>このような私達と一緒に働きましょう。',
            'img' => '/assets/public/img/career-change/message03.jpg',
            'class' => 'mt_70',
        ]) ?>
    </div>
</section>

<section id="midway" class="pt_50 pb_50">
    <div class="sec_inner">
        <div class="mx_auto" style="max-width:570px;">
            <h2 class="mb_50 tx_center">募集要項</h2>
            <p class="text">中途採用の募集職種一覧になります。ご確認の上、エントリーへお進みください。<br>新卒採用の方は<a href="<?php echo home_url(); ?>/application/new-graduates" class="theme_blue tx_deco_under">新卒採用 募集職種</a>をご確認ください。</p>
        </div>
        <div class="column_3 d_grid gap_30 mt_50">
            <?php
                $post_type = 'application';
                $taxonomy = 'application_cat';
                $term = "midway";
                $term_name = "中途採用";
                $term_color = "green";

                $args=array( 
                    'post_type' => $post_type, //カスタム投稿名
                    'posts_per_page'=> -1, //表示件数（-1で全ての記事を表示）
                    'taxonomy' => $taxonomy,
                    'term' => $term,
                );
            ?>
            <?php $query = new WP_Query( $args );?>
            <?php if( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php
                    $post_id = get_the_ID();
                    $post_link = get_the_permalink();
                    $post_ttl = get_the_title();
                    $post_expalin = get_field('archive_explain', $post_id);

                    if(get_field('page_head_img', $post_id)):
                        $post_head_img = get_field('page_head_img', $post_id);
                    else:
                        $post_head_img = '';
                        $post_head_img .= get_template_directory_uri();
                        $post_head_img .= '/assets/public/img/common/no_img.png';
                    endif;
                    
                    get_template_part('blocks/bl_link_box_01', null, [
                        'link' => $post_link,
                        'img' => $post_head_img,
                        'ttl' => $post_ttl,
                        'explain' => $post_expalin,
                        'is_tag' => true,
                        'tag_txt' => $term_name,
                        'tag_color' => $term_color,
                        'class' => '',
                    ]);
                ?>
            <?php endwhile;?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

<section id="entry" class="pt_50 pb_50">
    <div class="sec_inner">
        <div class="mx_auto" style="max-width:570px;">
            <h2 class="mb_50 tx_center">エントリーについて</h2>
        </div>
        <div class="entry_cntents column_2 d_grid gap_50 gap_60_pc mt_50">
            <div class="tx_center bk_gray entry_cntents_box">
                <h3 class="theme_blue mb_30">通常エントリー</h3>
                <p class="text tx_center">ご希望の方はこちらよりエントリーください。</p>
                <?php get_template_part('blocks/bl_btn', null, [
                    'link'    => '/recruit/midway-entry',
                    'txt'     => '中途採用専用エントリーフォーム',
                    'is_icon' => true,
                    'color' => 'blue',
                    'class'   => 'mx_auto mt_40',
                ]) ?>
                <!-- <?php get_template_part('blocks/bl_btn', null, [
                    'link'    => 'https://liff.line.me/2004781790-JZOGxzdq/landing?follow=%40579zznrn&lp=LSIHt4&liff_id=2004781790-JZOGxzdq',
                    'txt'     => 'LINEでエントリー',
                    'is_icon' => true,
                    'color' => 'green',
                    'class'   => 'mx_auto mt_20',
                ]) ?>
                <p class="text small mt_30 tx_left">※LINEでのエントリーはお友達登録いただいた後にトークにて「通常エントリー希望」とメッセージをお送りください。当社より折返しメッセージをお送りします。</p> -->
            </div>
            <div class="tx_center bk_gray entry_cntents_box">
                <h3 class="theme_blue mb_30">大人のインターン</h3>
                <p class="text tx_center">当社の見学や仕事体験、トーク会などご希望のコンタクトを経てからエントリーするかを決めていただくことができます。</p>
                <?php get_template_part('blocks/bl_btn', null, [
                    'link'    => '/recruit/career-change/adult-internships',
                    'txt'     => '大人のインターンについて',
                    'is_icon' => true,
                    'color' => 'blue',
                    'class'   => 'mx_auto mt_50',
                ]) ?>
            </div>
        </div>
    </div>
</section>


<?php get_template_part('sections/sec_recruit_info_links', null, [
    'is_midashi' => 'true',  //見出しを表示したい場合のみ['true']、非表示の場合は空白
]) ?>

<?php get_template_part('sections/sec_cta'); ?>

<?php get_footer(); ?>