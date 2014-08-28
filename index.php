<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="cf">

						<div id="main" class="m-all t-all d-all cf" role="main">

							<?php //putRevSlider("homeslider_boxed","homepage") ?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

									<?php putRevSlider("bcj_home"); ?>


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

							<?php if ( is_active_sidebar( 'home_section' ) ) : ?>
							<div id="home_widget" class="widget-area row" role="complementary">
								<?php dynamic_sidebar( 'home_section' ); ?>
							</div>
							<?php endif; ?>



							<div class="row">
								<article  <?php post_class( 'col span_1 cf' ); ?> role="article" >
									<div class="box-inner">

									<header class="article-header calendar">

										<h1 class="h2 entry-title">CALENDAR</h1>

									</header>

									<section class="entry-content cf">
										<div id="eventCalendarDefault"></div>
										<div class="eventdummy">
											<h2>J.S.バッハ　教会カンタータ vol.68</h2>
										</div>
									</section>

									<div class="ticket">
										<span class="buy_ticket">チケット購入</span>
									</div>

									</div>
								</article>

								<article  <?php post_class( 'col span_2 cf' ); ?> role="article" >
									<div class="box-inner">
									<header class="article-header concert">

										<h1 class="h2 entry-title"><?php echo "CONCERT"; ?></h1>

									</header>
									<?php
									$args = array(
									  'post_type' => 'schedule',
									  'post_status' => 'publish',
									  'meta_key' => 'date',
									  'orderby' => 'meta_value_num',
									  'order'	=> 'ASC'
									);
									$the_query = new WP_Query( $args );
									$col_count = 1;
									if ( $the_query->have_posts() ) :
										while ( $the_query->have_posts() ) : $the_query->the_post();
								?>

									<section class="overview cf">
										<div class="thumb">
											<?php the_post_thumbnail( 'thumbnail'); ?>
										</div>
											<div class="title">
												<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
												<div class="location"><?php the_field('location', $post->ID); ?></div>
											</div>
											<div class="meta h2">
												<div class="date_time">
												<?php
													$unixtimestamp = strtotime(get_field('date'));
													$month = date_i18n("n", $unixtimestamp);
													$day = date_i18n("d", $unixtimestamp);
													$dayofweek = date_i18n("D", $unixtimestamp);
												?>
													<div class="dayofweek smalltext align-right">SUN</div>

													<div>
														<span class="day"><?php echo $month.".".$day; ?></span> <span class="time"><?php $time = get_field('time', $post->ID); if($time) echo "START"." ".$time;   ?></span>
													</div>
												</div>
												<div class="ticket"><span class="buy_ticket">チケット購入</span></div>
											</div>
									</section>


								<?php
										endwhile;
									endif;
									wp_reset_postdata();
								?>
									<footer class="article-footer cf">
										コンサートページ　＞
									</footer>

									</div>
								</article>
							</div>

							<div class='row'>
								<article  <?php post_class( 'col span_1 cf' ); ?> role="article" >
									<div class="box-inner">
									<header class="article-header discography">

										<h1 class="h2 entry-title">DISCOGRAPHY</h1>

									</header>

									<section class="entry-content cf">
										<div class="thumb">
											<img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" >
										</div>

										<div class="title">
											<h1 class="h2 entry-title">J.S. バッハ　教会カンタータ vol.68</h1>
										</div>
										<div class="meta">
											鈴木雅明、BCJ

										</div>
									<div class="ticket">
										<span class="buy_ticket">CD購入</span>
									</div>
									</section>

									<footer class="article-footer cf">

										ディスコグラフィ　＞
									</footer>
									</div>
								</article>

								<article  <?php post_class( 'col span_1 cf' ); ?> role="article" >
									<div class="box-inner">
									<header class="article-header gallery">

										<h1 class="h2 entry-title">GALLERY</h1>

									</header>

									<section class="entry-content cf">
										<div class="thumb">
											<img src="<?php echo bloginfo('template_directory' ); ?>/library/images/donate_bcj.png" >
										</div>

										<div class="title">
											<h1 class="h2 entry-title">J.S. バッハ　教会カンタータ vol.68</h1>
										</div>
										<div class="meta">
											鈴木雅明、BCJ
										</div>
									</section>

									<footer class="article-footer cf">
										ギャラリー　＞
									</footer>
									</div>
								</article>

								<article  <?php post_class( 'col span_1 cf news' ); ?> role="article" >
									<div class="box-inner">
									<header class="article-header news">

										<h1 class="h2 entry-title">NEWS</h1>

									</header>

									<section class="entry-content cf">
										<div class="date">2014.6.22 SUN</div>
										<div class="title">
											鈴木雅明とBCJ、第４５回サントリー音楽賞受賞決定！
										</div>
									</section>
									<section class="entry-content cf">
										<div class="date">2014.6.22 SUN</div>
										<div class="title">
											鈴木雅明とBCJ、第４５回サントリー音楽賞受賞決定！
										</div>
									</section>
									<section class="entry-content cf">
										<div class="date">2014.6.22 SUN</div>
										<div class="title">
											鈴木雅明とBCJ、第４５回サントリー音楽賞受賞決定！
										</div>
									</section>
									<section class="entry-content cf">
										<div class="date">2014.6.22 SUN</div>
										<div class="title">
											鈴木雅明とBCJ、第４５回サントリー音楽賞受賞決定！
										</div>
									</section>

									<footer class="article-footer cf">
										ニュース　＞
									</footer>
									</div>
								</article>
							</div>



							<div class="m-all t-all d-all cf loadmore"><div class="box-inner">load more</div></div>

						</div>

				</div>

			</div><!-- end of  #content -->
            </div> <!-- end of  #wrapper -->


<?php get_footer(); ?>
