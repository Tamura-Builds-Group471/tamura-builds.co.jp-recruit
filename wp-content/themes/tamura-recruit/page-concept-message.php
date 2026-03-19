<?php
/**
 * page-concept-message.php
 */
get_header(); ?>

<?php get_template_part('sections/sec_page_title', null, [
    'img'     => '/assets/public/img/basic/conceptHeader.png',
    'en'      => 'MESSAGE',
    'title'   => '代表メッセージ',
    'class'   => '',
]) ?>

<?php get_template_part('sections/sec_breadcrumbs', null)?>

<section id="concept" class="pt_50 pb_50">
    <div class="sec_inner">
        <!-- <h2 class="tx_center mb_50">コンセプト</h2> -->
        <div class="mx_auto" style="max-width:570px;">
            <h3 class="concept_ttl mb_30">A COMPANY with PHILOSOPHY<br><span>フィロソフィの旗のもとへ</span></h3>
            <img src="<?php echo get_template_directory_uri();?>/assets/public/img/top/topHeader_slide_img01.jpg" alt="フィロソフィの旗">
            <p class="text mt_30">田村ビルズグループでは「TAMURAフィロソフィ」という全78項目にまとめられた「価値観・考え方」を大切にしています。<br><br>
            その「フィロソフィ」という名の旗を掲げる田村ビルズグループには、ビジネスパーソンとして、更にはひとりの人間として、その旗が掲げる「考え方」に共感・共鳴した人材が集まってきています。<br><br>
            組織には文化や風土というものが存在し、それは会社では「社風」と呼ばれます。その社風に人は共感・共鳴し、社風が人材を育て、そのような人材が戦略を練り、商品を作り、サービスを提供していきます。<br><br>
            だからこそ私たちは、善き社風を作るベースとなる善き考え方を「TAMURAフィロソフィ」として高く掲げ、そうありたいと強く願い、毎日を過ごしています。<br><br>
            「どこ」で働くかではなく、「誰と」働くのか<br><br>
            これは、どのような考え方の人たちとあなたは働きたいですか？という私たちからのメッセージであり、私たちの働く上での「覚悟」でもあるのです。<br><br>
            そして、この旗を高らかに掲げた一枚の写真にすべての思いを込めているのです<br><br>
            このフィロソフィの旗のもとで、私たちと一緒に働きましょう。<br><br>
            </p>
            <img src="<?php echo get_home_url();?>/wp-content/uploads/2023/02/concept-message-president.jpg" alt="田村 伊幸">
        </div>
        <div class="signature">
            <p>代表取締役社長</p>
            <img src="<?php echo get_template_directory_uri();?>/assets/public/img/basic/concept_president_signature.png" alt="田村 伊幸">
        </div>
    </div>
</section>

<!-- <section id="message_president" class="pt_50 pb_50">
    <div class="sec_inner">
        <h2 class="tx_center mb_50">代表メッセージ</h2>
        <div class="mx_auto" style="max-width:570px;">
            <p class="text">
                「業種」、「社員数」、「エリア」、「本社所在地」で企業検索するのは止めませんか？想像してください。価値観の合わない人たちと毎日顔を合わせて働けますか？希望の業種、望んだエリアだったとしても、毎日うんざりするでしょう。私には耐えられません。<br><br>
                世の中の変化のスピードは速く、10年後には主力事業が変わっていることは成長企業ではよくあることです。大企業であっても組織の最小単位は10人程度で中小企業と大して変わりません。企業のM&Aが普通に起こりうる世の中で、本社や勤務地だけが変わらないことは無いはずです。それでもまだ、検索をしますか？会社選びの基準に「会社に価値観や考え方」つまり、「大切にしているフィロソフィ」があるのか。を加えてください。<br><br>
                そしてそれは、「どこで」ではなく「誰と」働くのか？とも言い換えられます。<br><br>
                どのような考え方の人達と働きたいのかを真剣に考えましょう。会社案内や会社HPでは分からない、そこで働く人達が作り出す空気を感じましょう。そして、その人達の輪の中に飛び込みたいと思える会社を選んでください。「どこで」ではなく「誰と」働くのか？は私達からあなたへのメッセージです。<br><br>
                「A COMPANY with PHILOSOPHY」<br><br>
                フィロソフィの旗のもと、共に切磋琢磨する仲間を待っています。
            </p>
        </div>

    </div>
</section>

<section id="movie" class="pt_50 pb_50">
    <div class="sec_inner">
        <h2 class="tx_center mb_50">3D動画で知る田村ビルズグループ</h2>
        <div class="matterport-showcase">
            <iframe src='https://my.matterport.com/show/?m=ZcaXVSdk81x' frameborder='0' allowfullscreen allow='vr'></iframe>
        </div>
    </div>
</section> -->

<?php get_template_part('sections/sec_basic_links') ?>

<?php get_template_part('sections/sec_recruit_info_links', null, [
    'is_midashi' => 'true',  //見出しを表示したい場合のみ['true']、非表示の場合は空白
]) ?>

<?php get_template_part('sections/sec_cta'); ?>

<?php get_footer(); ?>