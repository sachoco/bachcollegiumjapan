<?php get_header("test"); ?>

			<div id="content">

				<div id="inner-content" class="cf">

						<div id="main" class="m-all t-all d-all cf" role="main">

							<?php //putRevSlider("homeslider_boxed","homepage") ?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

									<?php putRevSlider("bcj_home_test"); ?>


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

							<div class="row upcoming">

								<article  <?php post_class( 'col span_2 cf' ); ?> role="article" >
									<h2 class="h-font row-header upcoming">次回公演情報</h2>
									<div class="view"><i class="fa fa-calendar-o fa-fw" ></i>カレンダー表示　<i class="fa fa-tag fa-fw" ></i>カテゴリー表示</div>

									<div>
										<div id="eventCalendarCalendarLine"></div>
										<script>
											jQuery(document).ready(function($) {
												$("#eventCalendarCalendarLine").eventCalendar({
													eventsjson: '<?php echo bloginfo("template_directory"); ?>/library/json/events.json.php',
													showDayAsWeeks: false
												});
											});
										</script>
									</div>
 									<!-- <div class="category"><i class="fa fa-circle-thin fa-fw" style="color: #F29D00"></i>BCJ公演　<i class="fa fa-circle-thin fa-fw" style="color: #A4E407"></i>鈴木雅明公演　<i class="fa fa-circle-thin fa-fw" style="color: #2C70C9"></i>鈴木優人公演　<i class="fa fa-circle-thin fa-fw" style="color: #EF2457"></i>アンサンブル・ジェネシス公演</div> -->
									<div class="row" style="display:table;border:none;">

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

									<section class="overview cf col span_1 cf <?php if(has_category( 'BCJ')) echo 'bcj'; if(has_category( '鈴木雅明' )) echo 'masaaki';　?>">
										<?php if(has_category( "BCJ" )) echo "<div class='hr bcj'><span>BCJ公演</span></div>"; ?>
										<?php if(has_category( "鈴木雅明" )) echo "<div class='hr masaaki'><span>鈴木雅明公演</span></div>"; ?>
										<div class="date_time">
											<?php
												$dateformatstring = "D d F, Y";
												$unixtimestamp = strtotime(get_field('date'));
												$month = date_i18n("n", $unixtimestamp);
												$day = date_i18n("d", $unixtimestamp);
												$dayofweek = date_i18n("D", $unixtimestamp);
											?>
											<div><span class="bigger2"><?php echo $month; ?></span>月<span class="bigger"><?php echo $day; ?></span>（<?php echo $dayofweek; ?>）<span class="bigger2"><?php the_field('time', $post->ID); ?></span> </div>
											<div class="location"><span class="country"><?php the_field('country', $post->ID); ?></span><br> <?php the_field('location', $post->ID); ?></div>

										</div>

										<div class="thumb">
											<?php the_post_thumbnail( 'thumbnail'); ?>
											<div class="excerpt"><?php the_excerpt(); ?></div>
										</div>
											<div class="title">
												<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
												<div class="detail"><?php the_excerpt(); ?></div>
												<div class="readmore">詳細情報は<a href="#">こちら</a></div>

											</div>
											<div class="meta">
												<span class="blue-btn ">チケット購入</span>
											</div>
									</section>


								<?php
										endwhile;
									endif;
									wp_reset_postdata();
								?>
							</div>
									<footer class="article-footer cf">
																			<div class="category"><i class="fa fa-circle-thin fa-fw" style="color: #F29D00"></i>BCJ公演　<i class="fa fa-circle-thin fa-fw" style="color: #A4E407"></i>鈴木雅明公演　<i class="fa fa-circle-thin fa-fw" style="color: #2C70C9"></i>鈴木優人公演　<i class="fa fa-circle-thin fa-fw" style="color: #EF2457"></i>アンサンブル・ジェネシス公演</div>

										<!-- <br><br><div class="m-all t-all d-all cf loadmore"><div class="box-inner">公演情報をもっと見る</div></div> -->
									</footer>

									<div class="additional">
											<h2 class="h-font row-header">BCJから皆様へ</h2>

											<div class="m-1of2 t-1of2 d-1of2 cf">
												<article>
													<header>お知らせ</header>
													<section>BCJ定期演奏会チケット残りわずかです。</section>
													<footer></footer>
												</article>
											</div>


											<div class="m-1of2 t-1of2 d-1of2 cf">

												<article>
													<header>お知らせ</header>
													<section>鈴木雅明とバッハ・コレギウム・ジャパンが、第45回サントリー音楽賞を受賞することが決定いたしました。<br>
			http://www.suntory.co.jp/news/2014/12022.html</section>
													<footer></footer>
												</article>

											</div>

									</div>


								</article>



								<div class="col span_1 cf news">
									<h2 class="h-font row-header">新着情報</h2>
									<article>
										<header><i class="fa fa-bookmark fa-lg"></i> BCJ・鈴木雅明　サントリー音楽賞受賞 <span class="date">2014/10/03</span></header>
										<section>鈴木雅明とバッハ・コレギウム・ジャパンが、第45回サントリー音楽賞を受賞することが決定いたしました。<br>
http://www.suntory.co.jp/news/2014/12022.html</section>
										<footer></footer>
									</article>

									<article>
										<header><i class="fa fa-angle-double-right"></i> メキシコ・セルバンティーノ国際芸術祭 <span class="date">2014/10/03</span></header>
										<section>本秋、ついにBCJが南アメリカに登場します。
2013～2014年は支倉使節団のメキシコ訪問400周年を記念した日墨交流年であり
10月にBCJが参加する第42回メキシコ・セルバンティーノ国際芸術祭で日本は芸術祭の特別招待国となっています。
BCJの演奏会は10/22、フアレス劇場にて行われます。
（詳細はこちら）</section>
										<footer></footer>
									</article>

									<span style="float: right;">過去のニュースを読む</span>
									<br><br><br>
									<h2 class="h-font row-header">サポートBCJ</h2>
									<article>
										<section>
											<img src="<?php echo bloginfo('template_directory' ); ?>/library/images/donate_bcj.png" />
										</section>
										<footer></footer>
									</article>
								</div>
							</div>





						</div>

				</div>

			</div><!-- end of  #content -->
            </div> <!-- end of  #wrapper -->


<?php get_footer("test"); ?>
