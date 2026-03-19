$(function(){
    //カラー設定
    //青
    var blue = '0, 51, 132';
    //緑
    var green = '34, 112, 53';
    //赤
    var red = '206, 70, 42';
    //オレンジ
    var orange = '221, 156, 66';
    //水色
    var water = '41, 150, 193';
    //黄
    var yellow = '255, 222, 39';
    //グレー
    var gray = '209, 211, 214';
    
    //棒グラフ対象
    var bar = $(".bar-graph");
    //カウントアップ対象
    var counter = $(".count");
    //カウントスピード
    var countSpeed = 3000;
    //全てカウントを0に
    counter.text('0');
    
    //画面に入ったら処理
    $('.graph').on('inview', function(){
        //まだ一度も処理を開始していない要素のみ（一度だけカウントアップ処理させる）
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            //数字のカウントアップ
            $(this).find(counter).each(function(){
                var self = $(this),
                countMax = self.attr('data-number');
                self.animateNumber({
                    number: countMax
                },countSpeed);
            });
            //棒グラフ囲みにクラス付与
            $(this).find(bar).each(function(){
                $(this).addClass('active');
            });
        }
    });
    
    //田村ビルズの歴史
    $("#graph1-chart").on('inview',function(){
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            var ctx = document.getElementById("graph1-chart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: [{
                        //label: '# of Votes',
                        data: [98, 2],
                        backgroundColor: [
                            'rgba('+gray+', 1)',
                            'rgba('+blue+', 1)'
                        ]
                    }]
                },
                options:{
                    animation:{
                        duration: countSpeed
                    },
                    tooltips:{
                        //ツールチップ表示無し
                        enabled: false
                    },
                    elements:{
                        arc:{
                            //区切り線無し
                            borderWidth: 0
                        }
                    }
                }
            });
        }
    });
    
    //男女比
    $("#graph2-chart").on('inview',function(){
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            var ctx = document.getElementById("graph2-chart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["女性","男性"],
                    datasets: [{
                        //label: '# of Votes',
                        data: [37, 63],
                        backgroundColor: [
                            'rgba('+red+', 1)',
                            'rgba('+blue+', 1)'
                        ]
                    }]
                },
                options:{
                    animation:{
                        duration: countSpeed
                    },
                    legend:{
                        //タイトル表示無し
                        display: false
                    },
                    elements:{
                        arc:{
                            //区切り線無し
                            borderWidth: 0
                        }
                    }
                }
            });
        }
    });
    
    //在籍年数
    $("#graph3-chart").on('inview',function(){
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            var ctx = document.getElementById("graph3-chart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["3年未満","3年～","5年～","10年～"],
                    datasets: [{
                        data: [48, 12, 21, 19],
                        backgroundColor: [
                            'rgba('+blue+', 1)',
                            'rgba('+green+', 1)',
                            'rgba('+red+', 1)',
                            'rgba('+orange+', 1)'
                        ]
                    }]
                },
                options:{
                    animation:{
                        duration: countSpeed
                    },
                    legend:{
                        //タイトル表示無し
                        display: false
                    },
                    elements:{
                        arc:{
                            //区切り線無し
                            borderWidth: 0
                        }
                    }
                }
            });
        }
    });

    //休日の過ごし方
    $("#graph4-chart").on('inview',function(){
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            var ctx = document.getElementById("graph4-chart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["インドア派","アウトドア派"],
                    datasets: [{
                        //label: '# of Votes',
                        data: [47, 53],
                        backgroundColor: [
                            'rgba('+red+', 1)',
                            'rgba('+blue+', 1)'
                        ]
                    }]
                },
                options:{
                    animation:{
                        duration: countSpeed
                    },
                    legend:{
                        //タイトル表示無し
                        display: false
                    },
                    elements:{
                        arc:{
                            //区切り線無し
                            borderWidth: 0
                        }
                    }
                }
            });
        }
    });

    //産休後復職したい
    $("#graph5-chart").on('inview',function(){
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            var ctx = document.getElementById("graph5-chart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["はい","いいえ","その他"],
                    datasets: [{
                        data: [60, 10, 30],
                        backgroundColor: [
                            'rgba('+red+', 1)',
                            'rgba('+orange+', 1)',
                            'rgba('+gray+', 1)'
                        ]
                    }]
                },
                options:{
                    animation:{
                        duration: countSpeed
                    },
                    legend:{
                        //タイトル表示無し
                        display: false
                    },
                    elements:{
                        arc:{
                            //区切り線無し
                            borderWidth: 0
                        }
                    }
                }
            });
        }
    });

    //知り合いに紹介したい会社か
    $("#graph6-chart").on('inview',function(){
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            var ctx = document.getElementById("graph6-chart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["はい","いいえ","その他"],
                    datasets: [{
                        data: [72, 8, 20],
                        backgroundColor: [
                            'rgba('+blue+', 1)',
                            'rgba('+green+', 1)',
                            'rgba('+red+', 1)'
                        ]
                    }]
                },
                options:{
                    animation:{
                        duration: countSpeed
                    },
                    legend:{
                        //タイトル表示無し
                        display: false
                    },
                    elements:{
                        arc:{
                            //区切り線無し
                            borderWidth: 0
                        }
                    }
                }
            });
        }
    });

    //好きな食事のカテゴリー
    $("#graph7-chart").on('inview',function(){
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            var ctx = document.getElementById("graph7-chart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["肉食系","草食系","魚食系","お菓子系"],
                    datasets: [{
                        data: [42, 20, 28, 10],
                        backgroundColor: [
                            'rgba('+blue+', 1)',
                            'rgba('+red+', 1)',
                            'rgba('+orange+', 1)',
                            'rgba('+green+', 1)'
                        ]
                    }]
                },
                options:{
                    animation:{
                        duration: countSpeed
                    },
                    legend:{
                        //タイトル表示無し
                        display: false
                    },
                    elements:{
                        arc:{
                            //区切り線無し
                            borderWidth: 0
                        }
                    }
                }
            });
        }
    });

    //よく読む本
    $("#graph8-chart").on('inview',function(){
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            var ctx = document.getElementById("graph8-chart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["小説","自己啓発","マンガ","雑誌","その他"],
                    datasets: [{
                        data: [12, 29, 35, 19, 5],
                        backgroundColor: [
                            'rgba('+blue+', 1)',
                            'rgba('+red+', 1)',
                            'rgba('+orange+', 1)',
                            'rgba('+green+', 1)',
                            'rgba('+gray+', 1)'
                        ]
                    }]
                },
                options:{
                    animation:{
                        duration: countSpeed
                    },
                    legend:{
                        //タイトル表示無し
                        display: false
                    },
                    elements:{
                        arc:{
                            //区切り線無し
                            borderWidth: 0
                        }
                    }
                }
            });
        }
    });
    
});