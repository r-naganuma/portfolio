<?php get_header(); ?>

		<div class="blog">
			<div class="row content_top">
			<!-- <?php
				$theme_layout = get_theme_mod( 'latte_blog_sidebar', 'full' );
				if ($theme_layout=="left") :
					get_sidebar();
				endif;
			?>
			<?php if ($theme_layout=="full") : ?>
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			<?php else: ?>
				<div class="col-lg-8 col-md-8">
			<?php endif; ?>
				<?php if ( have_posts() ) : ?> 
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', 'page' ); ?>
					<?php endwhile; ?>
					<?php
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>
				<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?> -->
				<div id="sec01" class="content_top--about">
					<h2>About me</h2>
					<div class="content_about--love content_about--love01 in_view fade_bottom">
						<div class="content_about--love--pic">
							<p class="content_about--love--pic--txt"><span>W</span><span>H</span><span>A</span><span>T</span><br><span>T</span><span>E</span><span>A</span><span>M</span><br><span>L</span><span>O</span><span>V</span><span>E</span><span>?</span></p>
							<img class="content_about--love--pic--img img_change01" src="<?php echo get_template_directory_uri(); ?>/images/love1-1.jpg">
						</div>
						<div class="click content_about--love--cts pc_on">
							<p class="content_about--love--txt">I love<span>.</span><span>.</span><span>.</span></p>
							<p id="click_area" class="content_about--love--click">Click &amp; Hold</p>
						</div>
                        <div class="click content_about--love--cts sp_on">
                            <p class="content_about--love--txt">I love<span>.</span><span>.</span><span>.</span></p>
                            <p id="click_area--sp" class="content_about--love--click">Hold</p>
                        </div>
					</div>
					<div class="click_inner--bg">
						<div class="click_inner">
							<p class="click_inner--txt in_view fade_in">I love...<br><span>M</span><span>A</span><span>R</span><span>I</span><span>N</span><span>E</span><span>S</span> <span>!</span> <span>!</span> <span>!</span></p>
						</div>
						<div class="click_inner--img click_inner--img01"></div>
					</div>

					<div class="content_about--love content_about--love02 in_view fade_bottom">
						<div class="content_about--love--pic">
							<p class="content_about--love--pic--txt"><span>Y</span><span>O</span><span>U</span><br><span>L</span><span>I</span><span>K</span><span>E</span><br><span>W</span><span>I</span><span>N</span><span>T</span><span>E</span><span>R</span><span>?</span></p>
							<img class="content_about--love--pic--img img_change02" src="<?php echo get_template_directory_uri(); ?>/images/love2-1.jpg">
						</div>
						<div class="click02 content_about--love--cts pc_on">
							<p class="content_about--love--txt">I love<span>.</span><span>.</span><span>.</span></p>
							<p id="click_area02" class="content_about--love--click">Click &amp; Hold</p>
						</div>
                        <div class="click02 content_about--love--cts sp_on">
                            <p class="content_about--love--txt">I love<span>.</span><span>.</span><span>.</span></p>
                            <p id="click_area02--sp" class="content_about--love--click">Hold</p>
                        </div>
					</div>
					<div class="click_inner--bg02">
						<div class="click_inner">
							<p class="click_inner--txt in_view fade_in">I love...<br><span>S</span><span>N</span><span>O</span><span>W</span> <span>B</span><span>O</span><span>A</span><span>R</span><span>D</span> <span>!</span> <span>!</span> <span>!</span></p>
						</div>
						<div class="click_inner--img click_inner--img02"></div>
					</div>

					<div class="content_about--love content_about--love03 in_view fade_bottom">
						<div class="content_about--love--pic">
							<p class="content_about--love--pic--txt"><span>T</span><span>A</span><span>K</span><span>E</span><br><span>I</span><span>T</span><br><span>E</span><span>A</span><span>S</span><span>Y</span><span>!</span></p>
							<img class="content_about--love--pic--img img_change03" src="<?php echo get_template_directory_uri(); ?>/images/love3-1.jpg">
						</div>
						<div class="click02 content_about--love--cts pc_on">
							<p class="content_about--love--txt">I love<span>.</span><span>.</span><span>.</span></p>
							<p id="click_area03" class="content_about--love--click">Click &amp; Hold</p>
						</div>
                        <div class="click02 content_about--love--cts sp_on">
                            <p class="content_about--love--txt">I love<span>.</span><span>.</span><span>.</span></p>
                            <p id="click_area03--sp" class="content_about--love--click">Hold</p>
                        </div>
					</div>
					<div class="click_inner--bg03">
						<div class="click_inner">
							<p class="click_inner--txt in_view fade_in">I love...<br><span>D</span><span>A</span><span>R</span><span>T</span><span>S</span> <span>!</span> <span>!</span> <span>!</span></p>
						</div>
						<div class="click_inner--img click_inner--img03"></div>
					</div>

					<div class="content_top--about--box">
						<div class="content_top--about--txt">
							<ul class="content_top--about--txtbox">
								<li class="content_top--about--txtbox--date">
									1991.09
								</li>
								<li class="content_top--about--txtbox--cts">
									神奈川県横浜市に生まれる。
								</li>
								<li class="content_top--about--txtbox--date">
									2014.04
								</li>
								<li class="content_top--about--txtbox--cts">
									新卒で大手IT会社に入社。
								</li>
								<li class="content_top--about--txtbox--date">
									2014.07
								</li>
								<li class="content_top--about--txtbox--cts">
									主にWebコーダーとして、航空会社のイントラサイトの構築・運用業務を担当。
								</li>
								<li class="content_top--about--txtbox--date">
									2018.01
								</li>
								<li class="content_top--about--txtbox--cts">
									Webディレクターとして、航空会社のサイト運用業務を担当。
								</li>
								<li class="content_top--about--txtbox--date">
									2018.08
								</li>
								<li class="content_top--about--txtbox--cts">
									技術的なスキルを求め、転職。フロントエンドエンジニアとしてWebサイト構築・運用業務を担当。
								</li>
							</ul>
						</div>
						<div class="content_top--about--img">
							<img class="in_view fade_right" src="<?php echo get_template_directory_uri(); ?>/images/icon_02.jpg">
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>


<script type="text/javascript" charset="utf-8">
jQuery(function($){
	jQuery(window).load(function(){
    $('.in_view').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if (isInView) {
            $(this).addClass('on');
        }
    });
});
})
// id(=click_area)の領域内でのマウスの状態を検知
jQuery(function($){
	var pushing_mouse = function(){
    // ここに処理を書く
}
	var pushing_flag = 0; // マウスの状態を示すフラグ(1なら領域内でボタンが押されている)

	$("#click_area").mousedown(function(){
    // 領域内でマウスボタンを押した時
    pushing_flag = 1;
    setTimeout(mouse_push_hold, 1); // ここで「mouse_push_hold」を指定
    return false;
}).mouseup(function(){
    // 領域内でマウスボタンを離した時
    pushing_flag = 0;
    clearTimeout(mouse_push_hold);  // clearTimeout()の処理を止める
}).mouseleave(function(){
    // マウスカーソルが領域外になった時
    pushing_flag = 2;
    clearTimeout(mouse_push_hold);  // clearTimeout()の処理を止める
}).mouseover(function(){
    // マウスカーソルが領域内になった時
    pushing_flag = 0;
    clearTimeout(mouse_push_hold);  // clearTimeout()の処理を止める
});
	var mouse_push_hold = function(){
    // ここに、マウスボタンを押しっぱなしにしている間に行いたい処理
    $(".content_about--love01").hide();
    $(".click_inner--bg").show('slow');

    if( pushing_flag == 1 ){
        // 領域内でマウスボタンを押している場合、この関数を再び呼び出す
        setTimeout(mouse_push_hold, 1);
    }
    else{
	    $(".content_about--love01").show('slow');
	   	$(".click_inner--bg").hide('slow');
    }
};
// ページ読み込み時に実行
$(window).on("load",function(){
    pushing_mouse();
});
})
// id(=click_area)の領域内でのマウスの状態を検知
jQuery(function($){
	var pushing_mouse = function(){
    // ここに処理を書く
}
	var pushing_flag = 0; // マウスの状態を示すフラグ(1なら領域内でボタンが押されている)
	$("#click_area02").mousedown(function(){
    // 領域内でマウスボタンを押した時
    pushing_flag = 1;
    setTimeout(mouse_push_hold, 1); // ここで「mouse_push_hold」を指定
    return false;
}).mouseup(function(){
    // 領域内でマウスボタンを離した時
    pushing_flag = 0;
    clearTimeout(mouse_push_hold);  // clearTimeout()の処理を止める
}).mouseleave(function(){
    // マウスカーソルが領域外になった時
    pushing_flag = 2;
    clearTimeout(mouse_push_hold);  // clearTimeout()の処理を止める
}).mouseover(function(){
    // マウスカーソルが領域内になった時
    pushing_flag = 0;
    clearTimeout(mouse_push_hold);  // clearTimeout()の処理を止める
});
	var mouse_push_hold = function(){
    // ここに、マウスボタンを押しっぱなしにしている間に行いたい処理
    $(".content_about--love02").hide();
    $(".click_inner--bg02").show('slow');

    if( pushing_flag == 1 ){
        // 領域内でマウスボタンを押している場合、この関数を再び呼び出す
        setTimeout(mouse_push_hold, 1);
    }
    else{
	    $(".content_about--love02").show('slow');
	   	$(".click_inner--bg02").hide('slow');
    }
};
// ページ読み込み時に実行
$(window).on("load",function(){
    pushing_mouse();
});

})
// id(=click_area)の領域内でのマウスの状態を検知
jQuery(function($){
	var pushing_mouse = function(){
    // ここに処理を書く
}
	var pushing_flag = 0; // マウスの状態を示すフラグ(1なら領域内でボタンが押されている)
	$("#click_area03").mousedown(function(){
    // 領域内でマウスボタンを押した時
    pushing_flag = 1;
    setTimeout(mouse_push_hold, 1); // ここで「mouse_push_hold」を指定
    return false;
}).mouseup(function(){
    // 領域内でマウスボタンを離した時
    pushing_flag = 0;
    clearTimeout(mouse_push_hold);  // clearTimeout()の処理を止める
}).mouseleave(function(){
    // マウスカーソルが領域外になった時
    pushing_flag = 2;
    clearTimeout(mouse_push_hold);  // clearTimeout()の処理を止める
}).mouseover(function(){
    // マウスカーソルが領域内になった時
    pushing_flag = 0;
    clearTimeout(mouse_push_hold);  // clearTimeout()の処理を止める
});
	var mouse_push_hold = function(){
    // ここに、マウスボタンを押しっぱなしにしている間に行いたい処理
    $(".content_about--love03").hide();
    $(".click_inner--bg03").show('slow');

    if( pushing_flag == 1 ){
        // 領域内でマウスボタンを押している場合、この関数を再び呼び出す
        setTimeout(mouse_push_hold, 1);
    }
    else{
	    $(".content_about--love03").show('slow');
	   	$(".click_inner--bg03").hide('slow');
    }
};
// ページ読み込み時に実行
$(window).on("load",function(){
    pushing_mouse();
});

// id(=click_area)の領域内でのマウスの状態を検知　スマホ用
jQuery(function($){
	var pushing_mouse = function(){
    // ここに処理を書く
}
	var pushing_flag = 0; // マウスの状態を示すフラグ(1なら領域内でボタンが押されている)

	$("#click_area--sp").on('touchstart', function(){
    // 領域内でマウスボタンを押した時
    pushing_flag = 1;
    setTimeout(mouse_push_hold, 1); // ここで「mouse_push_hold」を指定
    return false;
}).on('touchend', function(){
    // 領域内でマウスボタンを離した時
    pushing_flag = 0;
    clearTimeout(mouse_push_hold);  // clearTimeout()の処理を止める
});
	var mouse_push_hold = function(){
    // ここに、マウスボタンを押しっぱなしにしている間に行いたい処理
    $(".content_about--love01").fadeOut();
    $(".click_inner--bg").fadeIn();

    if( pushing_flag == 1 ){
        // 領域内でマウスボタンを押している場合、この関数を再び呼び出す
        setTimeout(mouse_push_hold, 1);
    }
    else{
	    $(".content_about--love01").fadeIn();
	   	$(".click_inner--bg").fadeOut();
    }
};
// ページ読み込み時に実行
$(window).on("load",function(){
    pushing_mouse();
});
})

// id(=click_area)の領域内でのマウスの状態を検知
jQuery(function($){
	var pushing_mouse = function(){
    // ここに処理を書く
}
	var pushing_flag = 0; // マウスの状態を示すフラグ(1なら領域内でボタンが押されている)
	$("#click_area02--sp").on('touchstart', function(){
    // 領域内でマウスボタンを押した時
    pushing_flag = 1;
    setTimeout(mouse_push_hold, 1); // ここで「mouse_push_hold」を指定
    return false;
}).on('touchend', function(){
    // 領域内でマウスボタンを離した時
    pushing_flag = 0;
    clearTimeout(mouse_push_hold);  // clearTimeout()の処理を止める
});
	var mouse_push_hold = function(){
    // ここに、マウスボタンを押しっぱなしにしている間に行いたい処理
    $(".content_about--love02").fadeOut();
    $(".click_inner--bg02").fadeIn();

    if( pushing_flag == 1 ){
        // 領域内でマウスボタンを押している場合、この関数を再び呼び出す
        setTimeout(mouse_push_hold, 1);
    }
    else{
	    $(".content_about--love02").fadeIn();
	   	$(".click_inner--bg02").fadeOut();
    }
};
// ページ読み込み時に実行
$(window).on("load",function(){
    pushing_mouse();
});

})
// id(=click_area)の領域内でのマウスの状態を検知
jQuery(function($){
	var pushing_mouse = function(){
    // ここに処理を書く
}
	var pushing_flag = 0; // マウスの状態を示すフラグ(1なら領域内でボタンが押されている)
	$("#click_area03--sp").on('touchstart', function(){
    // 領域内でマウスボタンを押した時
    pushing_flag = 1;
    setTimeout(mouse_push_hold, 1); // ここで「mouse_push_hold」を指定
    return false;
}).on('touchend', function(){
    // 領域内でマウスボタンを離した時
    pushing_flag = 0;
    clearTimeout(mouse_push_hold);  // clearTimeout()の処理を止める
});
	var mouse_push_hold = function(){
    // ここに、マウスボタンを押しっぱなしにしている間に行いたい処理
    $(".content_about--love03").fadeOut();
    $(".click_inner--bg03").fadeIn();

    if( pushing_flag == 1 ){
        // 領域内でマウスボタンを押している場合、この関数を再び呼び出す
        setTimeout(mouse_push_hold, 1);
    }
    else{
	    $(".content_about--love03").fadeIn();
	   	$(".click_inner--bg03").fadeOut();
    }
};
// ページ読み込み時に実行
$(window).on("load",function(){
    pushing_mouse();
});
})

$(function() {
 
  //画像にマウスを乗せたら発動
  $('.img_change01').hover(function() {
 
    //画像のsrc属性が別画像のパスに切り替わる
    $(this).attr('src', '<?php echo get_template_directory_uri(); ?>/images/love1-2.jpg');
 
  //ここにはマウスを離したときの動作を記述
  }, function() {
 
    //画像のsrc属性を元の画像のパスに戻す
    $(this).attr('src', '<?php echo get_template_directory_uri(); ?>/images/love1-1.jpg');
 
  });
  //画像にマウスを乗せたら発動
  $('.img_change02').hover(function() {
 
    //画像のsrc属性が別画像のパスに切り替わる
    $(this).attr('src', '<?php echo get_template_directory_uri(); ?>/images/love2-2.jpg');
 
  //ここにはマウスを離したときの動作を記述
  }, function() {
 
    //画像のsrc属性を元の画像のパスに戻す
    $(this).attr('src', '<?php echo get_template_directory_uri(); ?>/images/love2-1.jpg');
 
  });
  //画像にマウスを乗せたら発動
  $('.img_change03').hover(function() {
 
    //画像のsrc属性が別画像のパスに切り替わる
    $(this).attr('src', '<?php echo get_template_directory_uri(); ?>/images/love3-2.jpg');
 
  //ここにはマウスを離したときの動作を記述
  }, function() {
 
    //画像のsrc属性を元の画像のパスに戻す
    $(this).attr('src', '<?php echo get_template_directory_uri(); ?>/images/love3-1.jpg');
 
  });
});
})
</script>
<?php get_footer(); ?>