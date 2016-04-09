<?php
/*
Template Name: Friends
*/
?>
<?php get_header(); ?>
			<div class="content">
            <div class="wrap">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
					<header class="article-header">
						<div class="leading">
						<?php //the_post_thumbnail("full" ); ?>
						</div>
						<div class="title">
							<h1 class="friends_society">ABOUT BCJ FRIENDS<!-- <span class="small">BCJフレンズについて</span> --></h1>

						</div>
					</header>
					<section class="entry-content-page">
						<?php the_content(); ?>
						
					</section>
				</article>


			<?php endwhile; ?>

					<?php bones_page_navi(); ?>

			<?php else : ?>

				<article id="post-not-found" class="hentry cf">
					<header class="article-header">
							<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
					</header>
						<section class="entry-content">
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
					</section>
					<footer class="article-footer">
							<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
					</footer>
				</article>

			<?php endif; ?>			
			</div>
	        <!-- Background START -->
	        <div id="background">
	            <div id="page-background" ><div class="overlay"></div></div>
	        </div>
	        <!-- Background END -->
				<hr>
				<div class="table">
					<div class="table-cell">
						特典
						<hr>
						<div class="align-left">
							<ul>
								<li>●　定期演奏会プログラムへご芳名掲載</li>
								<li>●　プレコンサートトーク</li>
								<li>●　リハーサル公開</li>
								<li>●　BCJ主催コンサートチケット及びイベントの優先予約</li>
								<li>●　バックステージツアー</li>
							</ul>
							<hr>
							※上記メンバーシップ特典は、オラトリオレベル会員様から優先手配させていただきます。<br>
							※プレステージコンサートトーク、リハーサル公開、バックステージツアーは、年１〜２回BCJ主催のコンサートにて開催いたします。
						</div>
					</div>
				
					<div class="table-cell">
						メンバーシップ
						<hr>
						<div class="align-left">
						コラール<span class="price">5,000円</span>
						<hr>
						モテット<span class="price">10,000円</span>
						<hr>
						カンタータ<span class="price">20,000円</span>
						<hr>
						オラトリオ<span class="price">50,000円</span>
						<hr>
						ソサエティメンバー（詳細はこちら）<span class="price">80,000円〜</span>
						<hr>
						</div>
					</div>
				</div>

				<hr>
				<div class="wrap">
					<div class="entry-content-page">
						<div class="center">申し込み方法</div>
						<p>
							後支援金は下記の郵便口座にお振込み頂きますようお願い申し上げます。<br>
							※通信欄には必ず、お名前・ご住所・お電話番号をご記入ください。<br>
							<div class="border-box">
							<ul>
								<li>口座番号：0017-2-33885</li>
								<li>加入者名：有限会社バッハ・コレギウム・ジャパン</li>
							</ul>
							</div>
						</p>	
					</div>
				</div>
			</div>
        </section>
        <!-- Main END -->


<?php get_footer(); ?>
