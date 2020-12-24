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

            <?php if(ICL_LANGUAGE_CODE=="en"): ?>
				<div class="table">
					<div class="table-cell">
						Benefits
						<hr>
						<div class="align-left">
							<ul>
								<li>●　Listing in BCJ program books</li>
								<li>●　Advance ordering priviledges for BCJ concerts and events</li>
								<li>●　Admission to special working rehearsal (Motet and above)</li>
								<li>●　Admission to special pre-concert talk (Cantata and above)</li>
								<li>●　Back stage tour (Oratorio and above)</li>
							</ul>
							<hr>
							※Priority of the above benefits given in order of membership level, beginning with Oratorio.<br>
							※Pre-concert talk, Working rehearsal, and Back stage tour basically take place before a BCJ subscription concert 1-2 times a year.<br>
							※特典のうち、飲食に関するものや、アーティストや他のお客様との接触がございます項目は、感染症予防対策上、安全に実施可能となりました場合に、ご案内申し上げます。
						</div>
					</div>

					<div class="table-cell">
						Membership Levels
						<hr>
						<div class="align-left">
						Choral<span class="price">¥5,000~</span>
						<hr>
						Motet<span class="price">¥10,000~</span>
						<hr>
						Cantata<span class="price">¥20,000~</span>
						<hr>
						Oratorio<span class="price">¥40,000~</span>
						<hr>
						Society Member（<a href="/bcj-society" target="_self">more detail</a>）<span class="price">¥80,000〜</span>
						<hr>
						</div>
					</div>
				</div>

				<hr>
				<div class="wrap">
					<div class="entry-content-page">
						<div class="center">申し込み方法</div>
						<p>
							ご支援金は下記の郵便口座にお振込み頂きますようお願い申し上げます。<br>
							※通信欄には必ず、『お名前・ご住所・お電話番号・ご希望のメンバーシップクラス・定期演奏会プログラムへのご芳名掲載の可否』をご記入ください。<br>
							<div class="border-box">
							<ul>
								<li>口座番号：00170-2-33885</li>
								<li>加入者名：有限会社バッハ・コレギウム・ジャパン</li>
							</ul>
							</div>
							<br>
							If you live in outside Japan, please make a check payable to "Bach Collegium Japan" and send it to the BCJ office address in Japan below.
							<br><br>
							BACH COLLEGIUM JAPAN Office<br>
							5-29-7 Sendagaya, Suite 402, Shibuya Tokyo 151-0051 Japan<br>
							Tel: +81(0) 3-3226-5333 Fax: +81(0) 3-5362-5445<br>
							E-mail: friends@bach.co.jp
						</p>
					</div>
				</div>
            <?php else: ?>

				<div class="table">
					<div class="table-cell">
						特典
						<hr>
						<div class="align-left">
							<ul>
								<li>●　定期演奏会プログラムへご芳名掲載</li>
								<li>●　BCJ主催コンサートチケット及びイベントの優先予約</li>
								<li>●　リハーサル公開（モテット以上）</li>
								<li>●　プレコンサートトーク（カンタータ以上）</li>
								<li>●　バックステージツアー（オラトリオ以上）</li>
							</ul>
							<hr>
							※上記メンバーシップ特典は、オラトリオレベル会員様から優先手配させていただきます。<br>
							※プレステージコンサートトーク、リハーサル公開、バックステージツアーは、年１〜２回BCJ主催のコンサートにて開催いたします。<br>
							※特典のうち、飲食に関するものや、アーティストや他のお客様との接触がございます項目は、感染症予防対策上、安全に実施可能となりました場合に、ご案内申し上げます。
						</div>
					</div>

					<div class="table-cell">
						メンバーシップ
						<hr>
						<div class="align-left">
						コラール<span class="price">5,000円〜</span>
						<hr>
						モテット<span class="price">10,000円〜</span>
						<hr>
						カンタータ<span class="price">20,000円〜</span>
						<hr>
						オラトリオ<span class="price">40,000円〜</span>
						<hr>
						ソサエティメンバー（詳細は<a href="/bcj-society" target="_self">こちら</a>）<span class="price">80,000円〜</span>
						<hr>
						</div>
					</div>
				</div>

				<hr>
				<div class="wrap">
					<div class="entry-content-page">
						<div class="center">申し込み方法</div>
						<p>
							ご支援金は下記の郵便口座にお振込み頂きますようお願い申し上げます。<br>
							※通信欄には必ず、『お名前・ご住所・お電話番号・ご希望のメンバーシップクラス・定期演奏会プログラムへのご芳名掲載の可否』をご記入ください。<br>
							<div class="border-box">
							<ul>
								<li>口座番号：00170-2-33885</li>
								<li>加入者名：有限会社バッハ・コレギウム・ジャパン</li>
							</ul>
							</div>
						</p>
					</div>
				</div>
            <?php endif; ?>
			</div>

        </section>
        <!-- Main END -->


<?php get_footer(); ?>
