// スマホ時 ヘッダーナビ
//ハンバーガーメニュー
$(".header_hamburger_sp").click(function () {//ボタンがクリックされたら
	$(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    $(".header_menuList_sp").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
});
$(".header_menuList_sp a").click(function () {//ナビゲーションのリンクがクリックされたら
    $(".header_hamburger_sp").removeClass('active');//ボタンの activeクラスを除去し
    $(".header_menuList_sp").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
});