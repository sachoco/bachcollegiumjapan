<?php get_header(); ?>
			<div class="wrap" >

				<div id="main"  role="main">

					<?php //putRevSlider("homeslider_boxed","homepage") ?>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div id="feature-slider">

						<?php putRevSlider("bcj_home_test"); ?>


					</div>



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








<!-- 								<div class="view"><i class="fa fa-calendar-o fa-fw" ></i>カレンダー表示　<i class="fa fa-tag fa-fw" ></i>カテゴリー表示</div> -->
					<div class="upcoming m-all t-all d-4of5">
						<h2 class="h-font row-header upcoming">Concerts</h2>

						<div id="eventCalendarCalendarLine"></div>
						<script>
							jQuery(document).ready(function($) {
								$("#eventCalendarCalendarLine").eventCalendar({
									eventsjson: '<?php echo bloginfo("template_directory"); ?>/library/json/events.json.php',
									showDayAsWeeks: false
								});
							});
						</script>


						<div class="overview-holder" >

						<?php
							$args = array(
							  'post_type' => 'schedule',
							  'post_status' => 'publish',
							  'meta_key' => 'date',
							  'orderby' => 'meta_value_num',
							  'order'	=> 'ASC',
							  'posts_per_page'      => 3
							);
							$the_query = new WP_Query( $args );
							$col_count = 1;
							if ( $the_query->have_posts() ) :
								while ( $the_query->have_posts() ) : $the_query->the_post();
						?>

							<section class="overview cf m-1of3 t-1of3 d-1of3 cf <?php if(has_category( 'BCJ')) echo 'bcj'; if(has_category( '鈴木雅明' )) echo 'masaaki';　?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
									<!-- <line class="top" x1="0" y1="0" x2="900" y2="0"/> -->
									<line class="left" x1="0" y1="320" x2="0" y2="-920"/>
									<!-- <line class="bottom" x1="266" y1="320" x2="-600" y2="320"/>
									<line class="right" x1="266" y1="0" x2="266" y2="1380"/> -->
								</svg>

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
							<div class="schedule-nav left"><span>prev</span></div>
							<div class="schedule-nav right"><span>next</span></div>
						</div>

						<footer class="article-footer cf">
							<div class="category">
								<span class="fa-stack color-bcj fa-fw">
 									<i class="fa fa-circle-thin fa-stack-2x"></i>
 									<i class="fa fa-circle fa-stack-1x"></i>
								</span>BCJ公演　
								<span class="fa-stack color-masaaki fa-fw">
 									<i class="fa fa-circle-thin fa-stack-2x"></i>
 									<i class="fa fa-circle fa-stack-1x"></i>
								</span>鈴木雅明公演　
								<span class="fa-stack color-masato fa-fw">
 									<i class="fa fa-circle-thin fa-stack-2x"></i>
 									<i class="fa fa-circle fa-stack-1x"></i>
								</span>鈴木優人公演　
								<span class="fa-stack color-genesis fa-fw">
 									<i class="fa fa-circle-thin fa-stack-2x"></i>
 									<i class="fa fa-circle fa-stack-1x"></i>
								</span>アンサンブル・ジェネシス公演


							<!-- <br><br><div class="m-all t-all d-all cf loadmore"><div class="box-inner">公演情報をもっと見る</div></div> -->
							<div class="specials">
								<img src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner3.jpg" />

								<img src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner6.jpg" />

								<img src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner_karuizawa.jpg" />
							</div>
						</footer>

					</div>
					<div class="wrap-padding">
						<div class="m-all t-all d-1of5 last-col" >
							<div class="m-all t-all d-all news" >
								<div class="social-links">
									<ul>
										<li><i class="fa fa-twitter fa-lg"></i></li>
										<li><i class="fa fa-facebook fa-lg"></i></li>
									</ul>
								</div>
								<h3>お知らせ</h3>
								<article class="news-item m-1of2 t-1of2 d-all">
									<header>BCJ・鈴木雅明　サントリー音楽賞受賞 <span class="date">2014/10/03</span></header>
									<section>鈴木雅明とバッハ・コレギウム・ジャパンが、第45回サントリー音楽賞を受賞することが決定いたしました。<br>
		http://www.suntory.co.jp/news/2014/12022.html</section>
									<footer></footer>
								</article>

								<article class="news-item m-1of2 t-1of2 d-all">
									<header>BCJ・鈴木雅明　サントリー音楽賞受賞 <span class="date">2014/10/03</span></header>
									<section>鈴木雅明とバッハ・コレギウム・ジャパンが、第45回サントリー音楽賞を受賞することが決定いたしました。<br>
		http://www.suntory.co.jp/news/2014/12022.html</section>
									<footer></footer>
								</article>

								<article class="news-item m-1of2 t-1of2 d-all">
									<header>BCJ・鈴木雅明　サントリー音楽賞受賞 <span class="date">2014/10/03</span></header>
									<section>鈴木雅明とバッハ・コレギウム・ジャパンが、第45回サントリー音楽賞を受賞することが決定いたしました。<br>
		http://www.suntory.co.jp/news/2014/12022.html</section>
									<footer></footer>
								</article>
							</div>

						<!-- <div style="text-align: center"> -->
							<div class="banner m-all t-all d-all" style="text-align: center">
								<img style="width: 100%;max-width: 200px" src="<?php echo bloginfo('template_directory' ); ?>/library/images/banner_friends.jpg" />
							</div>
						<!-- </div> -->
						</div>
						<div class="clear"></div>


					</div>
					<div class="clear"></div>

				</div>
			</div>  <!-- end of  .wrap -->



			<div class="row" style="margin-top: 100px;"><div class="hr"></div></div>

			<div id="section-about"  class="row about">
				<div class="wrap cf" >
					<h2 class="h-font row-header" style="margin-bottom: 100px">About BCJ</h2>
					<div id="about_bcj_1">バッハ・コレギウム・ジャパンと鈴木雅明</div>
					<div id="about_bcj_2">
						<div style="text-align: center">
<!-- 							<h2>J.S.バッハ教会カンタータ全曲録音</h1>

 -->
		    					<div class="h_iframe">
		        					<!-- a transparent image is preferable -->
		        					<img class="ratio" src="http://placehold.it/16x9"/>
		 						<iframe src="//player.vimeo.com/video/61724704?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		    					</div>

						</div>
						<div class="wrap-padding">
							<p>
							バッハ･コレギウム･ジャパン（BCJ）はバッハ演奏の第一人者、鈴木雅明が世界の第一線で活躍するオリジナル楽器のスペシャリストを擁して結成したオーケストラと合唱団である。
							</p>
							<p>
							１９９０年の創設以来J.S.バッハの宗教曲を中心に音楽作品の理想的な上演を目指して活動し、その演奏は「アンサンブル全体が協和しながら光を発するかのような響きの美しさ（朝日新聞）」と評される。
							</p>
							<p>
							80点に及ぶCDをリリースし、数多くの賞を受賞。中でも1995年から時系列順で取り組んできた＜バッハ：教会カンタータ全曲シリーズ＞が、2013年2月に全曲演奏・録音を完遂し、世界でもまれにみるこの偉業に大きな話題を呼んでいる。
							</p>
						</div>


						<div class="clear"></div>
					</div>
					<div style="text-align: center;" class="wrap-padding">
						<div style="display:inline-block;padding: 2%;width:46%; max-width:250px">BCJプロフィール詳細はこちら<br><img style="width:100%" src="<?php echo bloginfo('template_directory' ); ?>/library/images/prof.jpg" /></div>
						<div style="display:inline-block;padding: 2%;width:46%; max-width:250px">鈴木雅明プロフィール詳細はこちら<br><img style="width:100%" src="<?php echo bloginfo('template_directory' ); ?>/library/images/masaaki_1.jpg" /></div>
						<div class="clear"></div>
						<h2 class="" >主な活動</h2>
						<p>
							<ul>
								<li>定期演奏会</li>
								<li>軽井沢コンサート</li>
								<li>クリスマスコンサート</li>
								<li></li>
							</ul>
						</p>
						<h2 class="" style="margin-top: 50px;">主な受賞</h2>
						<p>
							<ul>
								<li>サントリー音楽賞</li>
								<li>軽井沢コンサート</li>
								<li>クリスマスコンサート</li>
								<li></li>
							</ul>
						</p>
					</div>
					<div class="wrap-padding">
						<h2 class="h-font row-header" style="margin-bottom: 50px">BCJ Recordings</h2>
						<div class="cd-holder">
							<div class="arrow-left"></div>
							<div class="arrow-right"></div>
							<div class="cd-holder-inner">
								<ul>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-4.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-4.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></li>

									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-4.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-4.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-4.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></li>
									<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-4.jpg" /></li>
								</ul>
							</div>
						</div>

						<!-- <h2 style="text-align: center; margin-top: 80px;">BCJディスコグラフィ詳細はこちら</h2> -->
						<div class="d-all" style="padding:0 15%;margin-top: 50px; text-align: center;">
							<span class="blue-btn ">BCJディスコグラフィ詳細はこちら</span>
						</div>
					</div>
				</div>
				<div class="overlay"></div>
			</div>

<!-- 			<div class="row"  ><div class="hr"></div></div>
			<div id="section-recordings" class="recordings">
					<h2 class="h-font row-header" style="margin-bottom: 50px">BCJ Recordings</h2>
				<div class="cd-holder">
					<div class="arrow-left"></div>
					<div class="arrow-right"></div>
				<ul>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-4.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-4.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></li>

					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-4.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-4.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-4.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-2.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-3.jpg" /></li>
					<li><img src="<?php echo bloginfo('template_directory' ); ?>/library/images/cd-4.jpg" /></li>
				</ul>
			</div>

			<div class="d-all" style="padding:0 15%;margin-top: 50px; text-align: center;">
				<span class="blue-btn ">BCJディスコグラフィ詳細はこちら</span>
			</div>
			</div> -->

<!-- 			<div class="row"  ><div class="hr"></div></div>
			<div class="wrap">
				<div class="row activities" style="margin-bottom: 50px;">
					<div class=" cf" >
						<h2 class="h-font row-header" style="margin-bottom: 100px">Achievement</h2>
						<div style="text-align: center">
							<h1>J.S.バッハ教会カンタータ全曲録音</h1>
							<iframe src="//player.vimeo.com/video/61724704?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							<p>

							</p>
						</div>


					</div>
				</div>
			</div> -->





			<div class="row"><div class="hr"></div></div>
			<div id="section-support"  class="row support" style="margin-bottom: 0px;">
				<div class="wrap cf" >
					<h2 class="h-font row-header ">Support BCJ</h2>
					<h4 style="text-align: center;">フレンズ＆ソサエティのご案内</h4>
					<div style="padding:0 15%; text-align: left;">
						バッハ・コレギウム・ジャパン（BCJ）は、日本から世界へと発信する有数のバロック・オーケストラおよび合唱団として、広く知られています。1990年に活動を開始して以来、15カ国、71都市で約1,000ものコンサートを行い、また80タイトル以上のCD録音（BISレーベル)を通して、世界の100万人以上の聴衆と共に、J.S.バッハの音楽のすばらしさを共有してきました。今後も、ますます多くの人々に、次世代を担う若い人々に、この宝を、伝えていきたいと願っています。J.S.バッハの音楽は、世界共通の言葉です。ヨーロッパ、アメリカ、さらにアジアの国々、至るところで、バッハを中心とする音楽の演奏・録音・教育活動を続けていくため、どうぞ、皆様のご支援をお願いいたします。<br><br><br>


					</div>
    					<div class="h_iframe">
        					<!-- a transparent image is preferable -->
        					<img class="ratio" src="http://placehold.it/16x9"/>
						<iframe width="853" height="480" src="//www.youtube.com/embed/J5bGxCWf0yM?rel=0" frameborder="0" allowfullscreen></iframe>
    					</div>
					<div class="d-all" style="padding:0 15%;margin-top: 50px;">
							<span class="blue-btn ">BCJフレンズ＆ソサエティ詳細はこちら</span>
<br><br><br>


					</div>
				</div>
			</div>







<?php get_footer(); ?>
