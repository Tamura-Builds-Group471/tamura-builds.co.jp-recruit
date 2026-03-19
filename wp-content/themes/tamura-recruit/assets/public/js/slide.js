// トップページ　ファーストビュー　スライダー

jQuery(function(){

    // $(".bl_topHeader_slide").slick({
    //     autoplay: true, 
    //     autoplaySpeed: 3000,
    //     fade: true,
    //     arrows: false,
    //     pauseOnFocus: false,
    //     pauseOnHover: false,
    // });
    $(".bl_topHeader_slide")
    // 最初のスライドに"add-animation"のclassを付ける(data-slick-index="0"が最初のスライドを指す)
    .on("init", function () {
      $('.slick-slide[data-slick-index="0"]').addClass("add-animation");
    })
    // 通常のオプション
    .slick({
        autoplay: true, 
        autoplaySpeed: 5000,
        fade: true,
        arrows: false,
        pauseOnFocus: false,
        pauseOnHover: false,
    })
    .on({
        // スライドが移動する前に発生するイベント
        beforeChange: function (event, slick, currentSlide, nextSlide) {
          // 表示されているスライドに"add-animation"のclassをつける
          $(".slick-slide", this).eq(nextSlide).addClass("add-animation");
          // あとで"add-animation"のclassを消すための"remove-animation"classを付ける
          $(".slick-slide", this).eq(currentSlide).addClass("remove-animation");
        },
        // スライドが移動した後に発生するイベント
        afterChange: function () {
          // 表示していないスライドはアニメーションのclassを外す
          $(".remove-animation", this).removeClass(
            "remove-animation add-animation"
          );
        },
    });
});


//　採用情報リンク　スライダー

jQuery(function(){
  $(".bl_recruit_info_slide")
  .slick({
    autoplay: true, 
    autoplaySpeed: 3000,
    fade: true,
    arrows: false,
    pauseOnFocus: false,
    pauseOnHover: false,
  })
});