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
				<div class="content_top--works content_top--works02">
					<h2>Works</h2>
					<div class="content_top--works--box">
						<!-- ここで固定 -->
						<div class="content_top--works--list" style="display: none;">
						</div>
						<!-- // 固定 -->
						<?php
							$wp_query = new WP_Query();
							$param = array(
								'posts_per_page' => '-1', //表示件数。-1なら全件表示
								'post_type' => 'works', //カスタム投稿タイプの名称を入れる
								'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
								'orderby' => 'post_date', //日付順に並び替え
								'order' => 'DESC'
							);
							$wp_query->query($param);
							if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();?>
								<?php
									$lang = get_field('lang');
									$num = get_field('num');
									$link = get_field('link');
									$img_id = get_field('pic');
									$img = wp_get_attachment_image_src($img_id, 'full');
									$img_id_sp = get_field('pic_sp');
									$img_sp = wp_get_attachment_image_src($img_id_sp, 'full');
								?>
						<div class="content_top--works--list">
							<a id="no<?php echo $num; ?>" href="">
								<img class="in_view fade_right" src="<?php echo $img[0]; ?>">
								<div class="content_top--mask">
									<div class="content_top--caption">＋</div>
								</div>
							</a>
						</div>
						<?php endwhile; endif; ?>
					</div>
					</div>
				</div>
			</div>
					<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////
			          /////// ポップアップコンテンツ
			          //////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
					<?php
						$wp_query = new WP_Query();
						$param = array(
							'posts_per_page' => '-1', //表示件数。-1なら全件表示
							'post_type' => 'works', //カスタム投稿タイプの名称を入れる
							'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
							'orderby' => 'post_date', //日付順に並び替え
							'order' => 'DESC'
						);
						$wp_query->query($param);
						if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();?>
							<?php
								$lang = get_field('lang');
								$num = get_field('num');
								$link = get_field('link');
								$img_id = get_field('pic');
								$img = wp_get_attachment_image_src($img_id, 'full');
								$img_id_sp = get_field('pic_sp');
								$img_sp = wp_get_attachment_image_src($img_id_sp, 'full');
						?>
						<div id="modal<?php echo $num; ?>" class="modal">
				            <div id="modal_content">
				              <a class="btn_close"></a>
				              <div class="pc_area">
				              	<a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo $img[0]; ?>"></a>
				              </div>
				              <div class="sp_area">
				              	<a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo $img_sp[0]; ?>"></a>
				              </div>
				              <div class="modal_txt">
				              	<p><a href="<?php echo $link; ?>" target="_blank"><?php the_title(); ?></a><br><br>
				              	<?php echo $lang; ?></p>
				              </div>
				            </div>
			          	</div>
						<?php endwhile; endif; ?>
		</div>

<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script type="text/javascript" charset="utf-8">
jQuery(function($){
	jQuery(window).load(function(){
    $('.in_view').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if (isInView) {
            $(this).addClass('on');
        }
    });
});
	$(function(){

    ///////////////////////////
    //moda１ 
    /////////////////////////// 


    $(".content_top--works--list").each(function(x){
        var modal = $('#modal'+x),
            modalContent = $('#modal_content'),
            btnOpen = $("#no1"),
            btnClose = $(".btn_close");
     
        $("#no"+x).on('click', function() {
            $('#modal'+x).show('explode');
            $('.blog').css('opacity','0.3');
        });
     
        $('#modal'+x).on('click', function(event) {
            // if(!($(event.target).closest(modalContent).length)||($(event.target).closest(btnClose).length)){}
                $('#modal'+x).hide('explode');
            	$('.blog').css('opacity','1');
            
        });

    });
});
	window.onload = function() {
    var id = location.hash.slice(1);
    if(id=="no1"){
        $("#no1").click()
    }
    if(id=="no2"){
        $("#no2").click()
    }
    if(id=="no3"){
        $("#no3").click()
    }
};
})
</script>
<?php get_footer(); ?>