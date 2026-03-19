<?php
/**
 * page-privacy.php
 */
get_header(); ?>

<?php get_template_part('sections/sec_page_title', null, [
    'img'     => '/assets/public/img/common/commonHeader.png',
    'en'      => 'PRIVACY',
    'title'   => '個人情報保護方針',
    'class'   => '',
]) ?>

<?php get_template_part('sections/sec_breadcrumbs', null)?>

<section id="privacy_contents" class="pt_50 pb_50">
    <div class="sec_inner">
        <h3 class="mt_50_sp mt_50_pc mb_30_sp mb_30_pc fs_16 fs_30_pc fw_b">個人情報の取得について</h3>
        <p class="mt_30_sp mt_25_pc fs_13 fs_16_pc lh_4 fw_n">弊社（田村ビルズ）は、偽りその他不正の手段によらず適正に個人情報を取得致します。</p>
        <h3 class="mt_50_sp mt_50_pc mb_30_sp mb_30_pc fs_16 fs_30_pc fw_b">個人情報の利用について</h3>
        <p class="mt_30_sp mt_25_pc fs_13 fs_16_pc lh_4 fw_n">弊社は、個人情報を以下の利用目的の達成に必要な範囲内で、利用致します。<br>以下に定めのない目的で個人情報を利用する場合、あらかじめご本人の同意を得た上で行ないます。<br><br>1. お見積のご依頼・ご相談に対する<br>回答及び資料送付<br>2. お問い合わせに対する回答<br>3. 各種商品・サービスに関する情報提供</p>
        <h3 class="mt_50_sp mt_50_pc mb_30_sp mb_30_pc fs_16 fs_30_pc fw_b">個人情報の安全管理について</h3>
        <p class="mt_30_sp mt_25_pc fs_13 fs_16_pc lh_4 fw_n">弊社は、取り扱う個人情報の漏洩、滅失またはき損の防止その他の個人情報の安全管理のために必要かつ適切な措置を講じます。</p>
        <h3 class="mt_50_sp mt_50_pc mb_30_sp mb_30_pc fs_16 fs_30_pc fw_b">個人情報の委託について</h3>
        <p class="mt_30_sp mt_25_pc fs_13 fs_16_pc lh_4 fw_n">弊社は、個人情報の取り扱いの全部または一部を第三者に委託する場合は、当該第三者について厳正な調査を行い、取り扱いを委託された個人情報の安全管理が図られるよう当該第三者に対する必要かつ適切な監督を行います。</p>
        <h3 class="mt_50_sp mt_50_pc mb_30_sp mb_30_pc fs_16 fs_30_pc fw_b">個人情報の第三者提供について</h3>
        <p class="mt_30_sp mt_25_pc fs_13 fs_16_pc lh_4 fw_n">弊社は、個人情報保護法等の法令に定めのある場合を除き、個人情報をあらかじめご本人の同意を得ることなく、第三者に提供致しません。</p>
        <h3 class="mt_50_sp mt_50_pc mb_30_sp mb_30_pc fs_16 fs_30_pc fw_b">個人情報の開示・訂正等について</h3>
        <p class="mt_30_sp mt_25_pc fs_13 fs_16_pc lh_4 fw_n">弊社は、ご本人から自己の個人情報についての開示の請求がある場合、速やかに開示を致します。<br>
        その際、ご本人であることが確認できない場合には、開示に応じません。<br>
        個人情報の内容に誤りがあり、ご本人から訂正・追加・削除の請求がある場合、調査の上、速やかにこれらの請求に対応致します。<br>
        その際、ご本人であることが確認できない場合には、これらの請求に応じません。<br>
        <br>
        弊社の個人情報の取り扱いにつきまして、上記の請求・お問い合わせ等ございましたら、下記までご連絡くださいますようお願い申し上げます。<br>
        【連絡先】株式会社田村ビルズ　E-mail: tamurahd[a]tamura-kenzai.co.jp（[a]を@に変換してください）</p>
        <h3 class="mt_50_sp mt_50_pc mb_30_sp mb_30_pc fs_16 fs_30_pc fw_b">組織・体制</h3>
        <p class="mt_30_sp mt_25_pc fs_13 fs_16_pc lh_4 fw_n">弊社は、個人情報管理責任者のもと、個人情報の適正な管理及び継続的な改善を実施致します。</p>
        <h3 class="mt_50_sp mt_50_pc mb_30_sp mb_30_pc fs_16 fs_30_pc fw_b">本方針の変更</h3>
        <p class="mt_30_sp mt_25_pc fs_13 fs_16_pc lh_4 fw_n">本方針の内容は変更されることがあります。変更後の本方針については、弊社が別途定める場合を除いて、当サイトに掲載した時から効力を生じるものとします。</p>
    </div>
</section>

<?php get_template_part('sections/sec_recruit_info_links', null, [
    'is_midashi' => 'true',  //見出しを表示したい場合のみ['true']、非表示の場合は空白
]) ?>

<?php get_template_part('sections/sec_cta'); ?>

<?php get_footer(); ?>