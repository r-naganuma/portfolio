jQuery(window).load(function() {

	if( latte_script_var.latte_preloader_display != 1 ) {
		/* Preloader */
		jQuery(".status").delay(2000).fadeOut("slow");
		jQuery(".preloader").delay(2000).fadeOut("slow");
	}

	if( latte_script_var.latte_animations_display != 1 ) {
		/* scrollReval */
		window.sr = new scrollReveal();
	}

});

jQuery(document).ready(function($) {
	if( latte_script_var.latte_is_homepage != 1 ) {
		/* Smooth Scroll */
		jQuery('a[href*="#"]').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = jQuery(this.hash);
				target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					jQuery('html,body').animate({
						scrollTop: target.offset().top
					}, 1200);
					return false;
				}
			}
		});
		if( latte_script_var.latte_parallax_background != '' ) {
			/* Parallax */
			$('.site-wrapper').parallax({imageSrc: latte_script_var.latte_parallax_background, bleed: '10', androidFix: 'false'});
		}
	}

	if( latte_script_var.latte_menu_display != 1 ) {
		var menuLeft = document.getElementById( 'pmenu' ),
		showLeftPush = document.getElementById( 'showLeftPush' ),
		hideLeftPush = document.getElementById( 'hideLeftPush' ),
		body = document.body;

		showLeftPush.onclick = function() {
			classie.toggle( this, 'active' );
			classie.toggle( body, 'pmenu-push-toright' );
			if (classie.has(showLeftPush,"fa-bars")) {
				classie.remove(showLeftPush,"fa-bars");
				classie.add(showLeftPush,"fa-times");
			} else {
				classie.add(showLeftPush,"fa-bars");
			}
			classie.toggle( menuLeft, 'pmenu-open' );
			disableOther( 'showLeftPush' );
		};
		hideLeftPush.onclick = function() {
			classie.toggle( this, 'active' );
			classie.toggle( body, 'pmenu-push-toright' );
			classie.toggle( menuLeft, 'pmenu-open' );
			disableOther( 'hideLeftPush' );
			classie.add(showLeftPush,"fa-bars");
		};

		function disableOther( button ) {
			if( button !== 'showLeftPush' ) {
				classie.toggle( showLeftPush, 'disabled' );
			}
		}
	}

	if( latte_script_var.latte_is_homepage != 1 ) {
		if( latte_script_var.latte_skills_display != 1 ) {
			/* Skillbar animation speed */
			jQuery('.skillbar').each(function(){
				jQuery(this).find('.skillbar-bar').animate({
					width:jQuery(this).attr('data-percent')
				},6000);
			});
		}
		/* Apply matchHeight to match services grid */
		var byRow = $('body').hasClass('pmenu-push');
		if( latte_script_var.latte_services_display != 1 ) {
			$('.col-md-12').each(function() {
				$(this).children('.service-box').matchHeight(byRow);
			});
		}
		if( latte_script_var.latte_blogposts_display != 1 ) {
			$('#blogposts').imagesLoaded( function() {
				$('.col-md-12').each(function() {
					$(this).children('.blog-item').matchHeight(byRow);
				});
			});
		}
	}

});

jQuery(function($){
	$(function(){
	var loading = $('#load1');
	var links = $('a.movepage');
	// ローディング画面を隠す
	loading.addClass('is-hidden');
	links.on('click',function(event){
	// クリック時に発生するイベントをキャンセル
	event.preventDefault();
	// ローディング画面を表示
	loading.removeClass('is-hidden');
	// 移動先のURLを取得して指定秒数後にページ遷移する
	var href = $(this).attr('href'), // クリックしたリンクから遷移先URLを取得
	wait = 1000; // 待ち時間をミリ秒で指定
	setTimeout(function(){
	// ページ遷移の処理
	location.href = href ;
	}, wait);
	});
	});

	$(function(){
	var loading = $('#load2');
	var links = $('a.movepage');
	// ローディング画面を隠す
	loading.addClass('is-hidden');
	links.on('click',function(event){
	// クリック時に発生するイベントをキャンセル
	event.preventDefault();
	// ローディング画面を表示
	loading.removeClass('is-hidden');
	// 移動先のURLを取得して指定秒数後にページ遷移する
	var href = $(this).attr('href'), // クリックしたリンクから遷移先URLを取得
	wait = 1000; // 待ち時間をミリ秒で指定
	setTimeout(function(){
	// ページ遷移の処理
	location.href = href ;
	}, wait);
	});
	});

	$(function(){
	var loading = $('#load3');
	var links = $('a.movepage');
	// ローディング画面を隠す
	loading.addClass('is-hidden');
	links.on('click',function(event){
	// クリック時に発生するイベントをキャンセル
	event.preventDefault();
	// ローディング画面を表示
	loading.removeClass('is-hidden');
	// 移動先のURLを取得して指定秒数後にページ遷移する
	var href = $(this).attr('href'), // クリックしたリンクから遷移先URLを取得
	wait = 1000; // 待ち時間をミリ秒で指定
	setTimeout(function(){
	// ページ遷移の処理
	location.href = href ;
	}, wait);
	});
	});

	$(function(){
	var loading = $('#load4');
	var links = $('a.movepage');
	// ローディング画面を隠す
	loading.addClass('is-hidden');
	links.on('click',function(event){
	// クリック時に発生するイベントをキャンセル
	event.preventDefault();
	// ローディング画面を表示
	loading.removeClass('is-hidden');
	// 移動先のURLを取得して指定秒数後にページ遷移する
	var href = $(this).attr('href'), // クリックしたリンクから遷移先URLを取得
	wait = 1000; // 待ち時間をミリ秒で指定
	setTimeout(function(){
	// ページ遷移の処理
	location.href = href ;
	}, wait);
	});
	});

	$(function(){
	var loading = $('#load5');
	var links = $('a.movepage');
	// ローディング画面を隠す
	loading.addClass('is-hidden');
	links.on('click',function(event){
	// クリック時に発生するイベントをキャンセル
	event.preventDefault();
	// ローディング画面を表示
	loading.removeClass('is-hidden');
	// 移動先のURLを取得して指定秒数後にページ遷移する
	var href = $(this).attr('href'), // クリックしたリンクから遷移先URLを取得
	wait = 1000; // 待ち時間をミリ秒で指定
	setTimeout(function(){
	// ページ遷移の処理
	location.href = href ;
	}, wait);
	});
	});

	$(function(){
	var loading = $('#load6');
	var links = $('a.movepage');
	// ローディング画面を隠す
	loading.addClass('is-hidden');
	links.on('click',function(event){
	// クリック時に発生するイベントをキャンセル
	event.preventDefault();
	// ローディング画面を表示
	loading.removeClass('is-hidden');
	// 移動先のURLを取得して指定秒数後にページ遷移する
	var href = $(this).attr('href'), // クリックしたリンクから遷移先URLを取得
	wait = 1000; // 待ち時間をミリ秒で指定
	setTimeout(function(){
	// ページ遷移の処理
	location.href = href ;
	}, wait);
	});
	});

	$(function(){
	var loading = $('#load7');
	var links = $('a.movepage');
	// ローディング画面を隠す
	loading.addClass('is-hidden');
	links.on('click',function(event){
	// クリック時に発生するイベントをキャンセル
	event.preventDefault();
	// ローディング画面を表示
	loading.removeClass('is-hidden');
	// 移動先のURLを取得して指定秒数後にページ遷移する
	var href = $(this).attr('href'), // クリックしたリンクから遷移先URLを取得
	wait = 1000; // 待ち時間をミリ秒で指定
	setTimeout(function(){
	// ページ遷移の処理
	location.href = href ;
	}, wait);
	});
	});

	$(function(){
	var loading = $('#load8');
	var links = $('a.movepage');
	// ローディング画面を隠す
	loading.addClass('is-hidden');
	links.on('click',function(event){
	// クリック時に発生するイベントをキャンセル
	event.preventDefault();
	// ローディング画面を表示
	loading.removeClass('is-hidden');
	// 移動先のURLを取得して指定秒数後にページ遷移する
	var href = $(this).attr('href'), // クリックしたリンクから遷移先URLを取得
	wait = 1000; // 待ち時間をミリ秒で指定
	setTimeout(function(){
	// ページ遷移の処理
	location.href = href ;
	}, wait);
	});
	});

	$(function(){
	var loading = $('#load9');
	var links = $('a.movepage');
	// ローディング画面を隠す
	loading.addClass('is-hidden');
	links.on('click',function(event){
	// クリック時に発生するイベントをキャンセル
	event.preventDefault();
	// ローディング画面を表示
	loading.removeClass('is-hidden');
	// 移動先のURLを取得して指定秒数後にページ遷移する
	var href = $(this).attr('href'), // クリックしたリンクから遷移先URLを取得
	wait = 1000; // 待ち時間をミリ秒で指定
	setTimeout(function(){
	// ページ遷移の処理
	location.href = href ;
	}, wait);
	});
	});

	$(function(){
	var loading = $('#load10');
	var links = $('a.movepage');
	// ローディング画面を隠す
	loading.addClass('is-hidden');
	links.on('click',function(event){
	// クリック時に発生するイベントをキャンセル
	event.preventDefault();
	// ローディング画面を表示
	loading.removeClass('is-hidden');
	// 移動先のURLを取得して指定秒数後にページ遷移する
	var href = $(this).attr('href'), // クリックしたリンクから遷移先URLを取得
	wait = 1000; // 待ち時間をミリ秒で指定
	setTimeout(function(){
	// ページ遷移の処理
	location.href = href ;
	}, wait);
	});
	});
})