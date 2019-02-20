<?php get_header(); ?>
<?php
	$latte_preloader_display = get_theme_mod('latte_preloader_display');
?>

<?php if( isset($latte_preloader_display) && $latte_preloader_display != 1 ): ?>
	<div class="preloader"><div class="status">
		<svg viewBox="0 0 800 600">
		  <symbol id="s-text">
		    <text text-anchor="middle"
		          x="50%"
		          y="35%"
		          class="text--line"
		          >
		      Ryo's
		    </text>
		    <text text-anchor="middle"
		          x="50%"
		          y="53%"
		          class="text--line2"
		          >
		      Portfolio
		    </text>
		    
		  </symbol>
		  
		  <g class="g-ants">
		    <use xlink:href="#s-text"
		      class="text-copy"></use>     
		    <use xlink:href="#s-text"
		      class="text-copy"></use>     
		    <use xlink:href="#s-text"
		      class="text-copy"></use>     
		    <use xlink:href="#s-text"
		      class="text-copy"></use>     
		    <use xlink:href="#s-text"
		      class="text-copy"></use>     
		  </g>
		</div>
	</div>
<?php endif; ?>

		<section>
		<header class="archive-header">
			<div class="cover-container row">
				<div class="inner cover col-md-12">
					<h1><img class="main__img" src="<?php echo get_template_directory_uri(); ?>/images/main.jpg" alt="永沼 遼 Ryo's Portfolio"></h1>
				</div>
				<a href="#sec01" class="main__scroll"><span></span>Scroll</a>
			</div>
			<img class="main__img--bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog.jpg" alt="永沼 遼 Ryo's Portfolio">
			<canvas></canvas>
		</header>
		</section>

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
						<?php get_template_part( 'content', ( post_type_supports( get_post_type(), 'post-formats' ) ? get_post_format() : get_post_type() ) ); ?>
					<?php endwhile; ?>
						<ul class="pager">
						<?php if( get_previous_posts_link() ): ?>
							<li class="previous"><?php previous_posts_link(); ?></li>
						<?php endif; ?>
						<?php if( get_next_posts_link() ): ?>
							<li class="next"><?php next_posts_link(); ?></li>
						<?php endif; ?>
						</ul>
				<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>
				</div> -->
			<section>
			<div id="sec01" class="content_top--about">
				<h2>About me</h2>
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
				<div class="button-more">
					<a href="<?php echo home_url('/about'); ?>" title="View more"></a>
				</div>
			</div>
			</section>
			</div>

		<div class="row content_top--2">
			<section>
			<div class="content_top--works">
				<h2>Works</h2>
				<div class="content_top--works--box">
					<div class="content_top--works--list">
						<a href="<?php echo home_url('/works#no1'); ?>">
							<img class="in_view fade_right" src="<?php echo get_template_directory_uri(); ?>/images/works01.png">
							<div class="content_top--mask">
								<div class="content_top--caption">＋</div>
							</div>
						</a>
					</div>
				</div>
				<div class="button-more">
					<a href="<?php echo home_url('/works'); ?>" title="View more"></a>
				</div>
			</div>
			</section>

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



	jQuery(window).load(function() {
		$('.cover-container a').click(function(){
			var speed = 500;
			var href= $(this).attr("href");
			var target = $(href == "#" || href == "" ? 'html' : href);
			var position = target.offset().top;
			$("html, body").animate({scrollTop:position}, speed, "swing");
			return false;
		});
	});
})

jQuery(function($){
var image = document.querySelector('img.main__img--bg');
var imageCanvas = document.createElement('canvas');
var imageCanvasContext = imageCanvas.getContext('2d');
var lineCanvas = document.createElement('canvas');
var lineCanvasContext = lineCanvas.getContext('2d');
var pointLifetime = 1000;
var points = [];

if (image.complete) {
  start();
} else {
  image.onload = start;
}

/**
 * Attaches event listeners and starts the effect.
 */
function start() {
  document.addEventListener('mousemove', onMouseMove);
  window.addEventListener('resize', resizeCanvases);
  document.body.appendChild(imageCanvas);
  resizeCanvases();
  tick();
}

/**
 * Records the user's cursor position.
 *
 * @param {!MouseEvent} event
 */
function onMouseMove(event) {
  points.push({
    time: Date.now(),
    x: event.clientX,
    y: event.clientY
  });
}

/**
 * Resizes both canvases to fill the window.
 */
function resizeCanvases() {
  imageCanvas.width = lineCanvas.width = window.innerWidth;
  imageCanvas.height = lineCanvas.height = window.innerHeight;
}

/**
 * The main loop, called at ~60hz.
 */
function tick() {
  // Remove old points
  points = points.filter(function(point) {
    var age = Date.now() - point.time;
    return age < pointLifetime;
  });

  drawLineCanvas();
  drawImageCanvas();
  requestAnimationFrame(tick);
}

/**
 * Draws a line using the recorded cursor positions.
 *
 * This line is used to mask the original image.
 */
function drawLineCanvas() {
  var minimumLineWidth = 25;
  var maximumLineWidth = 100;
  var lineWidthRange = maximumLineWidth - minimumLineWidth;
  var maximumSpeed = 50;

  lineCanvasContext.clearRect(0, 0, lineCanvas.width, lineCanvas.height);
  lineCanvasContext.lineCap = 'round';
  lineCanvasContext.shadowBlur = 30;
  lineCanvasContext.shadowColor = '#000';
  
  for (var i = 1; i < points.length; i++) {
    var point = points[i];
    var previousPoint = points[i - 1];

    // Change line width based on speed
    var distance = getDistanceBetween(point, previousPoint);
    var speed = Math.max(0, Math.min(maximumSpeed, distance));
    var percentageLineWidth = (maximumSpeed - speed) / maximumSpeed;
    lineCanvasContext.lineWidth = minimumLineWidth + percentageLineWidth * lineWidthRange;

    // Fade points as they age
    var age = Date.now() - point.time;
    var opacity = (pointLifetime - age) / pointLifetime;
    lineCanvasContext.strokeStyle = 'rgba(0, 0, 0, ' + opacity + ')';
    
    lineCanvasContext.beginPath();
    lineCanvasContext.moveTo(previousPoint.x, previousPoint.y);
    lineCanvasContext.lineTo(point.x, point.y);
    lineCanvasContext.stroke();
  }
}

/**
 * @param {{x: number, y: number}} a
 * @param {{x: number, y: number}} b
 * @return {number} The distance between points a and b
 */
function getDistanceBetween(a, b) {
  return Math.sqrt(Math.pow(a.x - b.x, 2) + Math.pow(a.y - b.y, 2));
}

/**
 * Draws the original image, masked by the line drawn in drawLineToCanvas.
 */
function drawImageCanvas() {
  // Emulate background-size: cover
  var width = imageCanvas.width;
  var height = imageCanvas.width / image.naturalWidth * image.naturalHeight;
  
  if (height < imageCanvas.height) {
    width = imageCanvas.height / image.naturalHeight * image.naturalWidth;
    height = imageCanvas.height;
  }

  imageCanvasContext.clearRect(0, 0, imageCanvas.width, imageCanvas.height);
  imageCanvasContext.globalCompositeOperation = 'source-over';
  imageCanvasContext.drawImage(image, 0, 0, width, height);
  imageCanvasContext.globalCompositeOperation = 'destination-in';
  imageCanvasContext.drawImage(lineCanvas, 0, 0);
}
})
</script>

<?php get_footer(); ?>