<?php
/**
 * page-adult-internships.php
 */
get_header(); ?>

<?php get_template_part('sections/sec_page_title', null, [
    'img'     => '/assets/public/img/career-change/career_changeHeader.png',
    'en'      => 'INTERN FOR<br>CAREER CHANGERS',
    'title'   => '大人のインターンシップ',
    'class'   => '',
]) ?>

<?php get_template_part('sections/sec_breadcrumbs', null)?>

<section id="adult_intern_intro" class="pt_50 pb_50">
    <div class="sec_inner">
        <div>
            <h2 class="mb_50 tx_center theme_blue">まずは体感してみよう。<br>転職はそれからでも、遅くはない。</h2>
            <h3 class="tx_center mb_50 orange">学生対象ではありません。<br>“大人のための”インターンシップです。</h3>
            <p class="text mx_auto" style="max-width:570px;">「応募する前に、会社の雰囲気が知りたい。」<br>「仕事内容やキャリアについて知ってから受けたい」etc.<br>そういった方のために、気軽にオフィスを見学したり、仕事を体験できる機会をご用意しました。</p>
        </div>
    </div>
</section>

<section id="programs" class="pt_50 pb_50">
    <div class="sec_inner">
        <h2 class="mb_50 tx_center">プログラム例</h2>
        <div class="column_3 d_grid gap_30 mt_50">
            <?php get_template_part('blocks/bl_case_box', null, [
                'img' => '/assets/public/img/adult-internships/case01.jpg',
                'num' => '01',
                'midashi' => '仕事体験またはのぞき見ツアー',
                'midashi_sub' => '［60〜180分］',
                'txt' => '興味がある職種を体験していただけます。<br>実務に触れ、イメージを膨らませる機会にしてください。また、仕事体験はせずに、ただオフィスにいて、社員が仕事をしている様子を眺める、だけでも大丈夫です。私たちの仕事風景を“のぞき見”するのも一興ですよ。',
                'is_small_txt' => true,
                'txt_small' => '＜仕事体験例＞<br>●不動産事業部：接客の立会い、物件案内、顧客訪問等<br>●環境事業部：営業・打合せの立会い<br>●建築事業部：リフォームの提案、打合せ立会いなど',
            ]) ?>
            <?php get_template_part('blocks/bl_case_box', null, [
                'img' => '/assets/public/img/adult-internships/case02.jpg',
                'num' => '02',
                'midashi' => 'トークリレー',
                'midashi_sub' => '［60分程度］',
                'txt' => '「誰と働くか」を大切にしている私たち。<br>ぜひ、社員と交流してください。そして、なんでも自由に話をし、遠慮なく聞きたいことを質問してください。話し相手はこちらで用意しますが、「部門長と話したい」「今年入社した人と話がしたい」などリクエストをいただくこともできます。',
                'is_small_txt' => false,
                'txt_small' => '',
            ]) ?>
            <?php get_template_part('blocks/bl_case_box', null, [
                'img' => '/assets/public/img/adult-internships/case03.jpg',
                'num' => '03',
                'midashi' => '懇親会',
                'midashi_sub' => '［90〜120分］',
                'txt' => '弊社では“コンパ”と呼んでいる食事会。<br>社員同士がどんな雰囲気で、どんな会話をしているのかを体感してください。<br>そして、お互いに懇親を深めましょう。',
                'is_small_txt' => false,
                'txt_small' => '',
            ]) ?>
        </div>
    </div>
</section>

<section id="application_flow" class="pt_50 pb_50">
    <div class="sec_inner">
        <h2 class="mb_50 tx_center">申し込みの流れ</h2>
        <?php get_template_part('blocks/bl_flow', null, [
            'num' => '01',
            'midashi' => 'エントリーフォームまたはLINEにてお申し込みください。',
            'class' => '',
        ]) ?>
        <div class="flow_body mt_20 mb_50">
            <h4 class="flow_body_h4">エントリーフォームの場合</h4>
            <p class="text mb_20">希望する内容（見学、体験内容、トーク会）や、希望日時は、エントリーフォームのフリーエリア欄にご記入ください。</p>
            <?php get_template_part('blocks/bl_btn', null, [
                'link'    => '/recruit/midway-entry',
                'txt'     => '大人のインターンエントリーフォーム',
                'is_icon' => true,
                'color' => 'blue',
                'class'   => 'mt_10 mb_50',
            ]) ?>
            <h4 class="flow_body_h4">LINEの場合</h4>
            <p class="text">お友達登録いただいた後にトークにて「大人のインターン希望」とメッセージをお送りください。</p>
            <?php get_template_part('blocks/bl_btn', null, [
                'link'    => 'https://liff.line.me/2004781790-JZOGxzdq/landing?follow=%40579zznrn&lp=LSIHt4&liff_id=2004781790-JZOGxzdq',
                'txt'     => 'LINEでエントリー',
                'is_icon' => true,
                'color' => 'green',
                'class'   => 'mt_10 mb_10',
            ]) ?>
        </div>
        <?php get_template_part('blocks/bl_flow', null, [
            'num' => '02',
            'midashi' => '日程の調整〜確定をいたします。内容にご要望があれば遠慮なく仰ってください。',
            'class' => '',
        ]) ?>
        <div class="flow_body mb_50">
            <p class="text">※場合によっては、履歴書・職務経歴書のご提出を予めお願いする場合がございます。</p>
        </div>
        <?php get_template_part('blocks/bl_flow', null, [
            'num' => '03',
            'midashi' => '見学または体験を実施します。',
            'class' => 'mb_50',
        ]) ?>
        <?php get_template_part('blocks/bl_flow', null, [
            'num' => '04',
            'midashi' => '入社意思が芽生えた場合にはお知らせください。その後のステップをお教えいたします。',
            'class' => '',
        ]) ?>
        <div class="license_cntents column_2 d_grid gap_50 gap_60_pc mt_100">
            <div class="bk_gray license_cntents_box">
                <h3 class="theme_blue mb_30">参加資格</h3>
                <p class="text">ご社会人・既卒（新卒は対象外です）</p>
                <p class="text mt_30">
                    ＜主な職種＞<br>
                    ●不動産エージェント<br>
                    ●仮設プロデューサー<br>
                    ●リフォームプランナー<br>
                    ●環境コンサルタント<br>
                    ※個人情報・機密情報保持契約書にサインをいただける方
                </p>
            </div>
            <div class="bk_gray license_cntents_box">
                <h3 class="theme_blue mb_30">注意事項</h3>
                <p class="text">※参加費用は不要です（交通費など実費はご負担ください）<br>※フォームにてご希望いただいた内容や日時は、時期等によりご希望に添えない場合がありますのでご了承ください。</p>
            </div>
        </div>
    </div>
</section>


<?php get_template_part('sections/sec_recruit_info_links', null, [
    'is_midashi' => 'true',  //見出しを表示したい場合のみ['true']、非表示の場合は空白
]) ?>

<?php get_template_part('sections/sec_cta'); ?>

<?php get_footer(); ?>