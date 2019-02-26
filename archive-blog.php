<?php get_header(); ?>
		<div id="load1"></div>
		<div id="load2"></div>
		<div id="load3"></div>
		<div id="load4"></div>
		<div id="load5"></div>
		<div id="load6"></div>
		<div id="load7"></div>
		<div id="load8"></div>
		<div id="load9"></div>
		<div id="load10"></div>
		<div class="blog">
			<div class="row content_top">
				<div class="content_top--blog">
					<h2>Blog</h2>
					<div class="content_top--blog--wrap">
						<div class="content_top--blog--box">
							<?php
								$wp_query = new WP_Query();
								$param = array(
									'posts_per_page' => '18', //表示件数。-1なら全件表示
									'post_type' => 'blog', //カスタム投稿タイプの名称を入れる
									'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
									'orderby' => 'post_date', //日付順に並び替え
									'order' => 'DESC'
								);
								$wp_query->query($param);
								if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();?>
									<?php
										$img_id = get_field('pic');
										$img = wp_get_attachment_image_src($img_id, 'full');
									?>
							<div class="content_top--blog--list in_view fade_in">
								<a href="<?php the_permalink(); ?>" class="movepage">
									<img src="<?php echo $img[0]; ?>">
									<div class="content_top--mask">
										<div class="content_top--caption">Read more</div>
									</div>
									<p class="content_top--blog--ttl"><?php the_title(); ?></p>
									<p class="content_top--blog--date"><?php the_field('date'); ?></p>
								</a>
							</div>
							<?php endwhile; endif; ?>
						</div>
						<div class="content_top--blog--right">
							<div class="content_top--blog--about">
								<img src="<?php echo get_template_directory_uri(); ?>/images/icon_02.jpg">
							</div>
							<p class="content_top--blog--about--name">永沼 遼<br>
							Ryo Naganuma</p>
							<p class="content_top--blog--about--txt">神奈川県横浜市生まれ。</p>
							<p class="content_top--blog--about--txt">フロントエンジニアとして活動中。</p>
							<div class="button-more">
								<a href="<?php echo home_url('/about'); ?>" title="View more"></a>
							</div>

							<div class="content_top--blog--filter">
								<p>Category</p>
		                        <ul>
		                            <?php
										$taglist = wp_list_categories(array(
										'title_li' =>'',
										'show_count' => 1,
										'taxonomy' => 'blogcategory',
										'echo' => 0,
										'hide_empty' => 0
										));
										$taglist = preg_replace('/<\/a> (\([0-9]*\))/', ' <span>$1</span></a>', $taglist);
										echo $taglist;
									?>
		                        </ul>
							</div>
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
</script>
<?php get_footer(); ?>