<?php
/**
 * page-welfare.php
 */
get_header(); ?>

<?php get_template_part('sections/sec_page_title', null, [
    'img'     => '/assets/public/img/welfare/welfareHeader.jpg',
    'en'      => 'WELFARE',
    'title'   => '福利厚生を知る',
    'class'   => '',
]) ?>

<?php get_template_part('sections/sec_breadcrumbs', null)?>

<section id="welfare_intro" class="pt_50 pb_50">
    <div class="sec_inner">
        <div class="mx_auto" style="max-width:570px;">
            <h2 class="tx_center mb_50">社員皆の幸せの為に</h2>
            <p class="text">これが完璧とは決して言いませんが、社員皆が仕事もプライベートも充実できる様に、田村ビルズグループでは様々な福利厚生をご用意しています。<br>※新型コロナウイルス感染拡大の影響を受け、一部記載内容との変更がございます。</p>
        </div>
        <div class="mx_auto in_page_link d_flex gap_60 mt_50" style="max-width:660px;">
            <?php get_template_part('blocks/bl_btn_inpage', null, [
                'in_page_link'    => '#welfare_works',
                'txt'     => '仕事・資格支援編',
                'color' => 'blue',
                'class'   => '',
            ]) ?>
            <?php get_template_part('blocks/bl_btn_inpage', null, [
                'in_page_link'    => '#welfare_life',
                'txt'     => '生活・プライベート編',
                'color' => 'green',
                'class'   => '',
            ]) ?>
        </div>
    </div>
</section>

<section id="welfare_works" class="pt_50 pb_50">
    <div class="sec_inner">
        <h2 class="tx_center mb_50 theme_blue">社員皆の幸せの為に</h2>
        <div class="welfare_contents d_grid gap_60 column_2">
            <?php get_template_part('blocks/bl_welfare_box', null, [
                'ttl' => 'コンパ（懇親会）',
                'img' => '/assets/public/img/welfare/compa.png',
                'txt' => '当社を特徴付けているもののひとつがこの“コンパ”です。酒食をともにしながら、年齢も社歴も関係なく、皆が真剣に語り合う“場”です。</br></br>学生時代の飲み会とはぜんぜん違いますし、また一般的にイメージされるような社会人の飲み会ともまったく別物。</br></br>敢えて言えば「仕事ではなく“仕事観”や“人生観”について語り合う飲み会」なのです。というと堅苦しく感じるかもしれませんが（笑）実際には楽しくワイワイやっています。もちろん、当社にもお酒を飲めない人はたくさんいます。車通勤の社員も多いですし。酒に酔うことが目的ではないため、酒を飲めるかどうかはまったく関係ありません。強制もしませんから、ご心配なく。百聞は一見にしかず。ぜひ体感していただきたいです。選考やインターンシップのプログラムに含まれていますので、ぜひ！',
                'color' => 'blue',
            ]) ?>
            <?php get_template_part('blocks/bl_welfare_box', null, [
                'ttl' => '人材育成',
                'img' => '/assets/public/img/welfare/employee_development-new.png',
                'txt' => '私たちは、人材育成をとくに重視しています。<br>たとえば、2019年に導入したクラウドトレーニングツール「リフレクトル」。動画コンテンツを使って、スマホで、繰り返し学ぶことができます。</br></br>またその他にも、下記のプログラムがあります。<br>
                ・ルーキーミーティング(若手社員対象)<br>
                ・店舗、部門別理念勉強会<br>
                ・営業スキルアップ研修<br>
                ・ロールプレイング研修<br>
                ・図書レポート（月一冊）<br>
                ・研修旅行（年一回）<br>
                ・ビジネス研修(新入社員対象)<br>
                一人ひとりの成長のためのサポートは惜しみません。',
                'color' => 'blue',
            ]) ?>
            <?php get_template_part('blocks/bl_welfare_box', null, [
                'ttl' => 'フィロソフィミーティング',
                'img' => '/assets/public/img/welfare/meeting-new.png',
                'txt' => '私たちの会社ならではの取り組みのひとつが「フィロソフィミーティング」です。ただの懇親会や食事会とは違い、毎回テーマを設け、生き方や働き方、価値観といった「考え方」に関わる話題を中心にしています。業務中にはなかなか語れない「なぜ働くのか」「自分は何を大切にしていきたいか」といった問いに毎月時間をとり、心を高め、自分自身や仲間と向き合う大切な時間としています。お客さま・取引先・家族、そして自分自身のために、より良い仕事ができるようにこの時間を大切にしています。',
                'color' => 'blue',
            ]) ?>
            <?php get_template_part('blocks/bl_welfare_box', null, [
                'ttl' => '資格取得支援制度',
                'img' => '/assets/public/img/welfare/support_qualifications-new.png',
                'txt' => '資格取得のための試験勉強はとてもシステマチックに出来ており、特定分野において知識0からある程度のラインまで習得するのにとても効率的な勉強方法です。そのため、特に新入社員や未経験者には、資格取得の勉強は最も適していると考えています。<br><br>弊社では会社が認めた資格について、専門学校の授業料など補助します。また、資格取得後は会社が定めた規定により資格手当がつくため、社員一人ひとりのキャリアアップを会社が支援する制度が整っています。',
                'color' => 'blue',
            ]) ?>
            <?php get_template_part('blocks/bl_welfare_box', null, [
                'ttl' => '携帯電話・PC貸与制度',
                'img' => '/assets/public/img/welfare/support_device-new.png',
                'txt' => '大家族主義でありコンパやシェアハウスなどアナログなものを大切にしていますが、同じ程度に社内は生産性を高めるためのIT化を進めています。その一つとして、携帯電話やPCの貸与があります。また、お客様に提案する際に活用できるよう、共用のiPadが各店に配布されています。',
                'color' => 'blue',
            ]) ?>
            <?php get_template_part('blocks/bl_welfare_box', null, [
                'ttl' => '営業車一人1台',
                'img' => '/assets/public/img/welfare/sales_car.png',
                'txt' => '営業車を一人1台、貸与しています。また車は通勤に利用することができます（ガソリン代も会社負担）。',
                'color' => 'blue',
            ]) ?>
        </div>
    </div>
</section>

<section id="welfare_life" class="pt_50 pb_50">
    <div class="sec_inner">
        <h2 class="tx_center mb_50 theme_green">生活・プライベート支援</h2>
        <div class="welfare_contents d_grid gap_60 column_2">
            <?php get_template_part('blocks/bl_welfare_box', null, [
                'ttl' => 'シェアハウス（独身者対象）',
                'img' => '/assets/public/img/welfare/share_house.png',
                'txt' => '約1年半という学びの期間の中から、総理大臣2名を含む偉人を多数輩出した、幕末山口県萩市の松下村塾をイメージしています。<br>志を同じくするものが集い、一定期間（当社では1年間）、寝食をともにして共に学ぶ「場」です。結果的に他社を圧倒する新人がどんどん育っています。<br><br>また、シェアハウス限定で朝食補助制度があります。<br><br>朝は余裕を持って起床し、朝食を食べることによって生活のリズムが生まれます。社会人として基本的な生活習慣が身に付いているかどうかは、その人のパフォーマンスに大きな影響を及ぼします。心身ともに万全なコンディションだからこそ、いい仕事が生まれると私たちは考えています。',
                'color' => 'green',
            ]) ?>
            <?php get_template_part('blocks/bl_welfare_box', null, [
                'ttl' => '従業員顧問弁護士制度',
                'img' => '/assets/public/img/welfare/support_lawyer.png',
                'txt' => '会社の顧問弁護士にプライベートな問題に関して無料相談ができます。家族・親族の様々な問題に関して悩む前に、気軽に相談して解決の糸口を見つけて欲しいと思っています。弁護士が介在することで簡単に解決できる問題は、実は沢山あるのです。仕事に集中してもらえる環境づくりも会社として重要な仕事です。<br><br>この制度は、従業員の家族も利用が出来ます。相談内容や氏名などの個人情報は会社へ通知されませんので、ご安心ください。',
                'color' => 'green',
            ]) ?>
            <?php get_template_part('blocks/bl_welfare_box', null, [
                'ttl' => '入学祝い金制度',
                'img' => '/assets/public/img/welfare/support_admission.png',
                'txt' => '小学校、中学校、高校に子供が入学する際に、お祝い金を贈ります。小・中・高校の入学時に、それぞれ20万円です。入学時は、なにかと物入りで結構な臨時出費があります。少しでも足しになれば、と考えています(支給要件あり)。',
                'color' => 'green',
            ]) ?>
            <?php get_template_part('blocks/bl_welfare_box', null, [
                'ttl' => '育児休業制度',
                'img' => '/assets/public/img/welfare/support_childcare.png',
                'txt' => '仕事と子育ての両立を考える従業員にとって大きな支えとなりうる制度です。過去10回以上の育児休業取得を実施しており、取得後復帰し、活躍している社員も多数在籍しております。',
                'color' => 'green',
            ]) ?>
            <?php get_template_part('blocks/bl_welfare_box', null, [
                'ttl' => '時短正社員制度',
                'img' => '/assets/public/img/welfare/shorttime_work.png',
                'txt' => '子育て中の社員は、時短勤務も可能です (2025年現在、10名が時短勤務・うち育休取得者1名います)。例えば、保育園の送り迎えがあるので、1時間遅く出社して、1時間早く退社したい。しかし正社員としてのキャリアは継続したい。そのような働き方にも柔軟に対応しています。',
                'color' => 'green',
            ]) ?>
            <?php get_template_part('blocks/bl_welfare_box', null, [
                'ttl' => 'EQ検査（EQPI）',
                'img' => '/assets/public/img/welfare/eq_triming.jpg',
                'txt' => '株式会社EQが提供しているもので、自分の現状（日頃の感情の使い方と性格特性）が可視化できる検査です。対人関係で悩む人、自分をもっと理解したい人におすすめの福利厚生です。EQとは、自分の感情に向き合ってその感情をうまく扱い人間関係を良好にすることで、結果的に自分の目標達成や欲しいものを手に入れるスキルです。EQを知り、高めることで仕事で良い結果をもたらすだけではなく、人生の幸福度が上がることも専門家の意見で上がるほど注目度が高くなっています。<br>※検査結果は人事評価の対象にはなりません。',
                'color' => 'green',
            ]) ?>
            <?php get_template_part('blocks/bl_welfare_box', null, [
                'ttl' => '自宅の困りごと駆けつけサービス',
                'img' => '/assets/public/img/welfare/support_helps.png',
                'txt' => '自宅の鍵を紛失した！水漏れが起きた！ガラスが割れた！などの自宅の緊急事態に、無料で業者が駆けつけて、初期対応をするサービスです。',
                'color' => 'green',
            ]) ?>
            <?php get_template_part('blocks/bl_welfare_box', null, [
                'ttl' => '社員旅行',
                'img' => '/assets/public/img/welfare/travel-new.png',
                'txt' => '研修旅行が年に1回あります。2018年は台湾へ！<br>コロナにより数年間開催できずにいましたが、2025年から復活！2025年は大阪万博へ全社員で行きました。<br>また、会員制高級リゾートホテル「ベイコート倶楽部」と契約をしており、勤続10年の社員表彰として、家族で宿泊することができます。(宿泊費はもちろん、10万円の手当もつきます！)<a href="https://baycourtclub.jp/about/" target="_blank">https://baycourtclub.jp/about/</a>',
                'color' => 'green',
            ]) ?>
            <?php get_template_part('blocks/bl_welfare_box', null, [
                'ttl' => 'オフィスおかん',
                'img' => '/assets/public/img/welfare/office_okan.png',
                'txt' => 'いつでも食べられる食の福利厚生サービスです。各店舗に定期的に届く添加物なしのお惣菜。すべて100 円で購入できます。従業員にとって魅力的な食事環境を提供することで、従業員満足度の向上を実現するとともに、健康面もサポート！栄養士監修の「オフィスおかん」は種類も豊富なので皆さんの好みや気分によって安心安全で栄養満点のおかずを選んで頂けます。',
                'color' => 'green',
            ]) ?>
            <?php get_template_part('blocks/bl_welfare_box', null, [
                'ttl' => '奨学金返済支援制度',
                'img' => '/assets/public/img/welfare/support_scholarship.png',
                'txt' => '奨学金の返済が経済的な負担になっているという場合もあり、それらを改善したいと考え、奨学金の返済を一部会社で支援いたします。※対象：独立行政法人日本学生支援機構 | JASSO',
                'color' => 'green',
            ]) ?>
            <?php get_template_part('blocks/bl_welfare_box', null, [
                'ttl' => 'イネサス',
                'img' => '/assets/public/img/welfare/inesasu-img001.png',
                'txt' => '山口・広島・福岡を中心に地元のお店で使える福利厚生クーポンサービス。無料で使うことができ、2親等以内の家族も利用可能です。（最大10名まで招待可能）お会計時にレジでクーポン画面を見せるだけでお得なサービスを受けることができます。物価高等で生活費がかさむ中、少しでも従業員の負担を軽減したいと導入を決めました。実際に使用した社員からは「いろいろなお店で使えて便利」「家計が助かる」「ランチの幅が広がった」と喜びの声が上がっています。',
                'color' => 'green',
            ]) ?>
        </div>
    </div>
</section>

<?php get_template_part('sections/sec_recruit_info_links', null, [
    'is_midashi' => 'true',  //見出しを表示したい場合のみ['true']、非表示の場合は空白
]) ?>

<?php get_template_part('sections/sec_cta'); ?>

<?php get_footer(); ?>