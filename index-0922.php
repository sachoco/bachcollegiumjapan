<?php get_header(); ?>



						<div id="main" class="m-all t-all d-all cf" role="main">

							<?php //putRevSlider("homeslider_boxed","homepage") ?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<div id="feature-slider">

									<?php putRevSlider("bcj_home_test"); ?>


								</div>
								<!-- <div style="position:relative">
									<div class="feature-info-arrow"></div>
									<div class="d-1of5 feature-info active"><h3>次回BCJ定期演奏会</h3></div>
									<div class="d-1of5 feature-info"><h3>サントリー音楽賞受賞</h3></div>
									<div class="d-1of5 feature-info"><h3>教会カンタータ全集</h3></div>
									<div class="d-1of5 feature-info"><h3>ECHO MUSIC AWARD</h3></div>
									<div class="d-1of5 feature-info"><h3>教会カンタータ全集</h3></div>
								</div> -->
								<div class="hr"></div>


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


<!-- 							<div class="row">
								<div class="col span_3 cf">
									<h2 class="h-font row-header upcoming">Bach Collegium Japan</h2>
									<p>
										バッハ・コレギウム・ジャパンは世界の第一線で活躍するオリジナル楽器のスペシャリストを擁して結成したオーケストラと合唱団です。バッハ・コレギウム・ジャパンは世界の第一線で活躍するオリジナル楽器のスペシャリストを擁して結成したオーケストラと合唱団です。バッハ・コレギウム・ジャパンは世界の第一線で活躍するオリジナル楽器のスペシャリストを擁して結成したオーケストラと合唱団です。
									</p>
									<p>
										あいさつ文。バッハ・コレギウム・ジャパンは世界の第一線で活躍するオリジナル楽器のスペシャリストを擁して結成したオーケストラと合唱団です。
									</p>
									<div>
										<div class="m-1of2 t-1of2 d-1of2">
											<section class="row bg-white">
												<div class="thumb col span_1">
													<img src="<?php echo bloginfo('template_directory' ); ?>/library/images/donate_bcj.png" />
												</div>
												<div class="col span_2">
													<h2>BCJ定期演奏会</h2>
												</div>
											</section>
										</div>
										<div class="m-1of2 t-1of2 d-1of2">
											<section class="row bg-white">
												<div class="thumb col span_1">
													<img src="<?php echo bloginfo('template_directory' ); ?>/library/images/donate_bcj.png" />
												</div>
												<div class="col span_2">
													<h2>バッハ世俗カンタータ全集プロジェクト</h2>
												</div>
											</section>
										</div>
									</div>
								</div>
							</div> -->

<!-- 							<div class="row">
								<div class="col span_3 cf">
									<h2 class="h-font row-header upcoming">Bach Collegium Japan</h2>
									<p>
										バッハ・コレギウム・ジャパンは世界の第一線で活躍するオリジナル楽器のスペシャリストを擁して結成したオーケストラと合唱団です。バッハ・コレギウム・ジャパンは世界の第一線で活躍するオリジナル楽器のスペシャリストを擁して結成したオーケストラと合唱団です。バッハ・コレギウム・ジャパンは世界の第一線で活躍するオリジナル楽器のスペシャリストを擁して結成したオーケストラと合唱団です。
									</p>
									<p>
										あいさつ文。バッハ・コレギウム・ジャパンは世界の第一線で活躍するオリジナル楽器のスペシャリストを擁して結成したオーケストラと合唱団です。
									</p>
									<div>
										<div class="m-1of2 t-1of2 d-1of2">
											<section class="row bg-white">
												<div class="thumb col span_1">
													<img src="<?php echo bloginfo('template_directory' ); ?>/library/images/donate_bcj.png" />
												</div>
												<div class="col span_2">
													<h2>BCJ定期演奏会</h2>
												</div>
											</section>
										</div>
										<div class="m-1of2 t-1of2 d-1of2">
											<section class="row bg-white">
												<div class="thumb col span_1">
													<img src="<?php echo bloginfo('template_directory' ); ?>/library/images/donate_bcj.png" />
												</div>
												<div class="col span_2">
													<h2>バッハ世俗カンタータ全集プロジェクト</h2>
												</div>
											</section>
										</div>
									</div>
								</div>
							</div> -->



						<!-- <div class="row">
							<div class="hr"></div>
						</div> -->

<!-- 						<div class="row"><div class="hr"></div></div>

							<div class="activities" style="margin-bottom: 50px;">
								<div class=" cf" >
									<h2 class="h-font row-header">Activities</h2>

										<div class="m-1of4 t-1of4 d-1of4">

											<article>
												<header><h2>東京定期演奏会</h2></header>
												<img style="width: 100%;" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner.jpg" />
											</article>

										</div>

										<div class="m-1of4 t-1of4 d-1of4">

											<article>
												<header><h2>名古屋定期演奏会</h2></header>
												<img style="width: 100%;" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner.jpg" />
											</article>

										</div>

										<div class="m-1of4 t-1of4 d-1of4">

											<article>
												<header><h2>軽井沢コンサート</h2></header>
												<img style="width: 100%;" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner.jpg" />
											</article>

										</div>

										<div class="m-1of4 t-1of4 d-1of4">

											<article>
												<header><h2>ヨーロッパツアー</h2></header>
												<img style="width: 100%;" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner.jpg" />
											</article>

										</div>

										<div class="m-1of4 t-1of4 d-1of4">

											<article>
												<header><h2>J.S.バッハ世俗カンタータ全曲録音</h2></header>
												<img style="width: 100%;" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner.jpg" />
											</article>

										</div>

								</div>
							</div> -->



						<div class="row"><div class="hr"></div></div>


							<div class="row upcoming d-3of5">

								<article  <?php post_class( ' cf' ); ?> role="article" >

	<!-- 								<div class="view"><i class="fa fa-calendar-o fa-fw" ></i>カレンダー表示　<i class="fa fa-tag fa-fw" ></i>カテゴリー表示</div> -->
									<div class="d-3of5">
										<h2 class="h-font row-header upcoming">Concerts</h2>

										<div class=" cf">
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

												<section class="overview cf d-1of3 cf <?php if(has_category( 'BCJ')) echo 'bcj'; if(has_category( '鈴木雅明' )) echo 'masaaki';　?>">
												<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
													<!-- <line class="top" x1="0" y1="0" x2="900" y2="0"/> -->
													<line class="left" x1="0" y1="320" x2="0" y2="-920"/>
													<!-- <line class="bottom" x1="266" y1="320" x2="-600" y2="320"/>
													<line class="right" x1="266" y1="0" x2="266" y2="1380"/> -->
												</svg>
													<?php //if(has_category( "BCJ" )) echo "<div class='hr bcj'><span>BCJ公演</span></div>"; ?>
													<?php //if(has_category( "鈴木雅明" )) echo "<div class='hr masaaki'><span>鈴木雅明公演</span></div>"; ?>
													<div class="date_time">
														<?php
															$dateformatstring = "D d F, Y";
															$unixtimestamp = strtotime(get_field('date'));
															$month = date_i18n("n", $unixtimestamp);
															$day = date_i18n("d", $unixtimestamp);
															$dayofweek = date_i18n("D", $unixtimestamp);
														?>
														<div><span class="bigger3 number"><?php echo $month; ?>.</span><span class="bigger number"><?php echo $day; ?></span>（<?php echo $dayofweek; ?>）<span class="bigger2"><?php the_field('time', $post->ID); ?></span> </div>

													</div>

													<div class="location"><span class="country"><?php the_field('location', $post->ID); ?></span> <span class="country"><?php the_field('country', $post->ID); ?></span></div>

													<div class="thumb">
														<?php the_post_thumbnail( 'bones-thumb-300'); ?>
														<div class="excerpt"><?php the_excerpt(); ?></div>
													</div>
													<div class="title">
														<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
														<!-- <div class="detail"><?php the_excerpt(); ?></div>-->
														<!-- <div class="readmore">詳細情報は<a href="#">こちら</a></div> -->

													</div>
													<!-- <div class="meta">
														<span class="blue-btn ">チケット購入</span>
													</div> -->
													<div class="description">
														<div class="detail"><?php the_excerpt(); ?></div>
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
											<h2 class="h-font row-header upcoming" style="font-size:1.3em">BCJ Specials</h2>

												<img style="width: 150px" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner3.jpg" />
											<!-- <div class="d-1of3">
												<img style="width: 100%" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner4.jpg" />
											</div>
											<div class="d-1of3">
												<img style="width: 100%" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner5.jpg" />
											</div> -->
												<img style="width: 150px" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner6.jpg" />

												<img style="width: 150px" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner_karuizawa.jpg" />

										</footer>

										<!-- <div>
											<h2 class="h-font row-header upcoming" style="font-size:1.3em">BCJ Specials</h2>

											<div class="d-1of4">
												<img style="width: 100%" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner3.jpg" />
											</div>
											<div class="d-1of4">
												<img style="width: 100%" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner6.jpg" />
											</div>
											<div class="d-1of4">
												<img style="width: 100%" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner_karuizawa.jpg" />
											</div>
										</div> -->



										</div>
										<div class="d-2of5" style="padding-left: 20%;">
											<h2 class="h-font row-header"><!-- News --></h2>

											<div class="d-all news" style="background-color: rgba(0,0,0,.2); margin-bottom: 20px; padding: 10px;">
												<section class="row ">
													<article>
														<header><i class="fa fa-bookmark fa-lg"></i> BCJ・鈴木雅明　サントリー音楽賞受賞 <span class="date">2014/10/03</span></header>
														<section>鈴木雅明とバッハ・コレギウム・ジャパンが、第45回サントリー音楽賞を受賞することが決定いたしました。<br>
				http://www.suntory.co.jp/news/2014/12022.html</section>
														<footer></footer>
													</article>

												</section>
											</div>
											<div class="d-all news" style="background-color: rgba(0,0,0,.2); margin-bottom: 20px; padding: 10px;">
												<section class="row ">
													<article>
														<header><i class="fa fa-bookmark fa-lg"></i> BCJ・鈴木雅明　サントリー音楽賞受賞 <span class="date">2014/10/03</span></header>
														<section>鈴木雅明とバッハ・コレギウム・ジャパンが、第45回サントリー音楽賞を受賞することが決定いたしました。<br>
				http://www.suntory.co.jp/news/2014/12022.html</section>
														<footer></footer>
													</article>

												</section>
											</div>
											<div class="d-all news" style="background-color: rgba(0,0,0,.2); margin-bottom: 20px; padding: 10px;">
												<section class="row ">
													<article>
														<header><i class="fa fa-bookmark fa-lg"></i> BCJ・鈴木雅明　サントリー音楽賞受賞 <span class="date">2014/10/03</span></header>
														<section>鈴木雅明とバッハ・コレギウム・ジャパンが、第45回サントリー音楽賞を受賞することが決定いたしました。<br>
				http://www.suntory.co.jp/news/2014/12022.html</section>
														<footer></footer>
													</article>

												</section>
											</div>
											<div class="d-all news" style="text-align: left;">
												<div style="color: grey">
												<i class="fa fa-twitter fa-3x"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<i class="fa fa-facebook fa-3x"></i>
												</div>
										       </div>
										       <div class="d-all news" style="text-align: left;width: 220px;margin-top: 20px;">
												<div style="color: grey">
													<img style="width: 100%" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner_friends.jpg" />

												</div>
										       </div>
										       <!-- <div class="d-all news" style="text-align: left;width: 220px;margin-top: 20px;">
												<div style="color: grey">
													<img style="width: 100%" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner_karuizawa.jpg" />

												</div>
										       </div> -->

										</div>
							<!-- <div class="row">
								<section >
									<div class="d-1of5" style="margin-top:20px;">
											<img style="width: 100%" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner3.jpg" />
									</div>
									<div class="d-1of5" style="margin-top:20px;">
											<img style="width: 100%" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner4.jpg" />
									</div>
									<div class="d-1of5" style="margin-top:20px;">
											<img style="width: 100%" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner5.jpg" />
									</div>
									<div class="d-1of5" style="margin-top:20px;">
											<img style="width: 100%" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner6.jpg" />
									</div>
									<div class="d-1of5" style="margin-top:20px;">
											<img style="width: 100%" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner2.jpg" />
									</div>
								</section>
							</div> -->




<!-- 							<div class="d-2of7 cf">

								<div class="row" style="margin-top:20px;">
										<img src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner2.jpg" />
								</div>
								<div class="row" style="margin-top:20px;">
										<img src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner2.jpg" />
								</div>
								<div class="row" style="margin-top:20px;">
										<img src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner2.jpg" />
								</div>
								<div class="row" style="margin-top:20px;">
										<img src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner2.jpg" />
								</div>



							</div> -->

						</div>



					</div>
				</div>
			</div>
			<div>
				<div>
					<div>


						<div class="row" style="margin-top: 100px;"><div class="hr"></div></div>

							<div id="section-about"  class="row about" style="margin-bottom: 0px;">
								<div class=" cf" >
									<h2 class="h-font row-header" style="margin-bottom: 100px">About BCJ</h2>
									<div class="d-1of2"></div>
								</div>
							</div>



						<div class="row"  ><div class="hr"></div></div>
						<div class="wrap">
							<div class="row activities" style="margin-bottom: 50px;">
								<div class=" cf" >
									<h2 class="h-font row-header" style="margin-bottom: 100px">Activities</h2>
									<div style="float:left;">
										<div class="d-1of2" style="padding: 0 20px 0 0;text-align:left;"><h1>J.S.バッハ教会カンタータ全曲録音</h1>
											<div style="font-size:1.3em"><p>Something to say.. Something to say.. Something to say.. Something to say.. Something to say.. Something to say.. Something to say.. Something to say.. Something to say.. Something to say.. Something to say.. </p><p>Something to say.. Something to say.. Something to say.. Something to say.. Something to say.. Something to say.. </p></div>
										</div>
										<div class="d-1of2" style="padding-left: 20px"><iframe src="//player.vimeo.com/video/61724704" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/61724704">BCJ 教会カンタータ全曲演奏・録音達成 鈴木雅明メッセージ</a> from <a href="http://vimeo.com/user17036156">Bach Collegium Japan</a> on <a href="https://vimeo.com">Vimeo</a>.</p></div>
									</div>
									<div style="float:left;margin-top:100px;">
										<div class="d-1of2" style="padding-right: 20px"><iframe src="//player.vimeo.com/video/61724704" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/61724704">BCJ 教会カンタータ全曲演奏・録音達成 鈴木雅明メッセージ</a> from <a href="http://vimeo.com/user17036156">Bach Collegium Japan</a> on <a href="https://vimeo.com">Vimeo</a>.</p></div>
										<div class="d-1of2" style="padding: 0 0 0 20px;text-align:right;"><h1>J.S.バッハ教会カンタータ全曲録音</h1>
											<div style="font-size:1.3em"><p>Something to say.. Something to say.. Something to say.. Something to say.. Something to say.. Something to say.. Something to say.. Something to say.. Something to say.. Something to say.. Something to say.. </p><p>Something to say.. Something to say.. Something to say.. Something to say.. Something to say.. Something to say.. </p></div>
										</div>
									</div>
								</div>
							</div>
						</div>



<!-- 						<div class="row"><div class="hr"></div></div>

							<div class="row">
								<div class="col span_3 cf" >
									<h2 class="h-font row-header">News</h2>

									<div>
										<div class="m-1of3 t-1of3 d-1of3 news">
											<section class="row bg-white">

									<article>
										<header><i class="fa fa-bookmark fa-lg"></i> BCJ・鈴木雅明　サントリー音楽賞受賞 <span class="date">2014/10/03</span></header>
										<section>鈴木雅明とバッハ・コレギウム・ジャパンが、第45回サントリー音楽賞を受賞することが決定いたしました。<br>
http://www.suntory.co.jp/news/2014/12022.html</section>
										<footer></footer>
									</article>

											</section>
										</div>
										<div class="m-1of3 t-1of3 d-1of3 news">
											<section class="row bg-white">

									<article>
										<header><i class="fa fa-bookmark fa-lg"></i> BCJ・鈴木雅明　サントリー音楽賞受賞 <span class="date">2014/10/03</span></header>
										<section>鈴木雅明とバッハ・コレギウム・ジャパンが、第45回サントリー音楽賞を受賞することが決定いたしました。<br>
http://www.suntory.co.jp/news/2014/12022.html</section>
										<footer></footer>
									</article>


											</section>
										</div>
										<div class="m-1of3 t-1of3 d-1of3 news">
											<section class="row bg-white">

									<article>
										<header><i class="fa fa-bookmark fa-lg"></i> BCJ・鈴木雅明　サントリー音楽賞受賞 <span class="date">2014/10/03</span></header>
										<section>鈴木雅明とバッハ・コレギウム・ジャパンが、第45回サントリー音楽賞を受賞することが決定いたしました。<br>
http://www.suntory.co.jp/news/2014/12022.html</section>
										<footer></footer>
									</article>


											</section>
										</div>
									</div>
								</div>
							</div> -->


						<div class="row"><div class="hr"></div></div>
							<div id="section-support"  class="row support" style="margin-bottom: 0px;">
								<div class=" cf" >
									<h2 class="h-font row-header ">Support BCJ</h2>
									<h4 style="text-align: center;">フレンズ＆ソサエティのご案内</h4>
									<div class="d-1of2"></div>
								</div>
							</div>


<!--
							<div class="row" style="margin-bottom: 100px;">
								<div class="col span_3 cf">
									<h2 class="h-font row-header ">Support BCJ</h2>
									<h4 style="text-align: center;">フレンズ＆ソサエティのご案内</h4>
									<div class="row bg-white">
										<div class="m-1of2 t-1of2 d-1of2">
											<img src="<?php echo bloginfo('template_directory' ); ?>/library/images/donate_bcj.png" />
										</div>
										<div class="m-1of2 t-1of2 d-1of2">
											バッハ・コレギウム・ジャパンは世界の第一線で活躍するオリジナル楽器のスペシャリストを擁して結成したオーケストラと合唱団です。バッハ・コレギウム・ジャパンは世界の第一線で活躍するオリジナル楽器のスペシャリストを擁して結成したオーケストラと合唱団です。バッハ・コレギウム・ジャパンは世界の第一線で活躍するオリジナル楽器のスペシャリストを擁して結成したオーケストラと合唱団です。
										</div>
									</div>


								</div>
							</div> -->










							</div>




						</div>

            </div> <!-- end of  #wrapper -->


<?php get_footer(); ?>
