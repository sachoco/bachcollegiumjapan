<?php
/*
Template Name: Society
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
							<h1 class="friends_society">ABOUT BCJ SOCIETY<!-- <span class="small">BCJフレンズについて</span> --></h1>

						</div>
					</header>
					<section class="entry-content-page">
					<svg x="0px" y="0px" width="312.711px" height="251.139px" viewBox="0 0 312.711 251.139">
					<text transform="matrix(1 0 0 1 132 51.1786)">
					<tspan x="0" y="0" fill="#FFFFFF" font-size="15">Plenum</tspan>
					<tspan x="2.256" y="24" fill="#FFFFFF" font-size="15">Zimbel</tspan>
					<tspan x="4.896" y="48" fill="#FFFFFF" font-size="15">Scharf</tspan>
					<tspan x="3" y="72" fill="#FFFFFF" font-size="15">Mixtur</tspan>
					<tspan x="3" y="96" fill="#FFFFFF" font-size="15">Sifflöte</tspan>
					<tspan x="-10" y="120" fill="#FFFFFF" font-size="15">Superoktav</tspan>
					<tspan x="-12" y="144" fill="#FFFFFF" font-size="15">Sesquialtera</tspan>
					<tspan x="6.456" y="168" fill="#FFFFFF" font-size="15">Oktav</tspan>
					<tspan x="-4.304" y="192" fill="#FFFFFF" font-size="15">Prinzipal</tspan>
					</text>

						<line fill="none" stroke="#FFFFFF" x1="16.216" y1="226.179" x2="296.791" y2="226.179"/>
						<line fill="none" stroke="#FFFFFF" x1="31.181" y1="202.179" x2="281.826" y2="202.179"/>
						<line fill="none" stroke="#FFFFFF" x1="46.144" y1="178.179" x2="266.861" y2="178.179"/>
						<line fill="none" stroke="#FFFFFF" x1="61.107" y1="154.179" x2="251.898" y2="154.179"/>
						<line fill="none" stroke="#FFFFFF" x1="76.072" y1="130.179" x2="236.933" y2="130.179"/>
						<line fill="none" stroke="#FFFFFF" x1="91.035" y1="106.179" x2="221.97" y2="106.179"/>
						<line fill="none" stroke="#FFFFFF" x1="106" y1="82.179" x2="207.006" y2="82.179"/>
						<line fill="none" stroke="#FFFFFF" x1="120.964" y1="58.179" x2="192.041" y2="58.179"/>
						<polygon fill="none" stroke="#FFFFFF" points="156.504,1.179 1.504,250.179 311.504,250.179 	"/>
					</svg>

						<?php the_content(); ?>
						<hr>
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
						メンバーシップレベルの特典
						<hr>
						<div class="membership">
							<div>
								<h3>PRINZIPAL</h3>
								プリンツィパル<br>
								8万円	
							</div>
							<div>
								もっとも基礎的な8フィートの長さを持つパイプです。すべてを支える根源であり、歌うような音を奏でます。
							</div>	
							<div>
								<ul>
									<li>●　BCJ定期演奏会に1名様ご招待及びプログラム贈呈</li>
									<li>●　BCJ主催公演チケットご優待</li>
									<li>●　ソサエティメンバー特別レセプションご招待</li>
									<li>●　レセプションなどにおいてアーティストと写真撮影</li>
									<li>●　開場前優先入場＆ソサエティラウンジご利用</li>
									<li>●　ソサエティメンバー専用コンシェルジュ・ライン</li>
								</ul>	
							</div>	
						</div>
						<hr>
						<div class="membership">
							<div>
								<h3>OKTAV</h3>
								オクターヴ<br>
								16万円	
							</div>
							<div>
								プリンツィパルの倍の高さ、つまり実音のオクターヴ上の音を持つパイプです。しっかりとしたフーガのテーマに用います。
							</div>	
							<div>
								<ul>
									<li>●　すべてのプリンツィパルレベル特典</li>
									<li>●　オルガンプレトークご招待</li>
								</ul>	
							</div>	
						</div>
						<hr>
						<div class="membership">
							<div>
								<h3>SESQUIALTERA</h3>
								セスキアルテラ<br>
								24万円	
							</div>
							<div>
								本来は、「2対3」という比率を示す言葉です。オクターヴと一緒にやや鼻にかかった独特の響きを奏でます。
							</div>	
							<div>
								<ul>
									<li>●　すべてのオクターヴレベル特典</li>
									<li>●　BCJメンバーによるマスタークラスの受講または聴講</li>
								</ul>	
							</div>	
						</div>
						<hr>
						<div class="membership">
							<div>
								<h3>SUPEROKTAV</h3>
								ズーパーオクターヴ<br>
								32万円	
							</div>
							<div>
								プリンツィパルの4倍、実音の2オクターヴ上の音を奏でます。華やかに、しかし軽やかに飛翔するパイプです。
							</div>	
							<div>
								<ul>
									<li>●　すべのセスキアルテラレベル特典 </li>
									<li>●　BCJ音楽監督鈴木雅明を囲むディナーへご招待</li>
								</ul>	
							</div>	
						</div>
						<hr>
						<div class="membership">
							<div>
								<h3>SIFFLÖTE</h3>
								シフレット<br>
								64万円	
							</div>
							<div>
								プリンツィパルの8倍、実音の3オクターヴ上の音を奏でます。細いけれど突き抜ける強さを持っています。
							</div>	
							<div>
								<ul>
									<li>●　すべのズーパーオクターヴレベル特典 </li>
									<li>●　終演後プライベートシャンパントーストへご招待</li>
									<li>●　BCJ特別CD(非売品)贈呈</li>
								</ul>	
							</div>	
						</div>
						<hr>
						<div class="membership">
							<div>
								<h3>MIXTUR</h3>
								ミクストゥール<br>
								128万円	
							</div>
							<div>
								実音の約4オクターヴ以上の高い倍音をまとめて出せる総合ストップです。「トッカータとフーガニ短調」冒頭には不可欠です。
							</div>	
							<div>
								<ul>
									<li>●　すべのシフレットレベル特典 </li>
									<li>●　ゲストアーティストを囲むディナーへご招待</li>
									<li>●　BCJ海外ツアーより希少価値ポスター贈呈</li>
								</ul>	
							</div>	
						</div>
						<hr>
						<div class="membership">
							<div>
								<h3>SCHARF</h3>
								シャルフ<br>
								256万円	
							</div>
							<div>
								さらに高い倍音をまとめて、より輝かしい響きを奏でます。
							</div>	
							<div>
								<ul>
									<li>●　すべてのミクストゥールレベル特典</li>
									<li>●　お好きなBCJ主催演奏会に冠でお名前を頂戴</li>
									<li>●　鈴木雅明または特別ゲストアーティストとのプライベートディナー</li>
									<li>●　BCJ海外ツアーご同行権利</li>
								</ul>	
							</div>	
						</div>
						<hr>
						<div class="membership">
							<div>
								<h3>ZIMBEL</h3>
								ツィンベル<br>
								512万円	
							</div>
							<div>
								最も高いランクの倍音を含み、ピラミッドの頂点に冠を添える役を果たします。
							</div>	
							<div>
								<ul>
									<li>●　すべてのシャルフレベル特典</li>
									<li>●　お好きなBCJ主催演奏会またはBCJレコーディングプロジェクトに冠でお名前を頂戴</li>
								</ul>	
							</div>	
						</div>
						<hr>
						<div class="membership">
							<div>
								<h3>PLENUM</h3>
								プレーヌム<br>
								1,024万円	
							</div>
							<div>
								これは、もはや単なるストップの名称ではありません。本来は「すべて」を意味することばで、重低音から最高音まで、すべての倍音を含んで完成されたオルガンの響きを表します。
							</div>	
							<div>
								<ul>
									<li>●　ご希望の特典をオーダーメイド</li>
								</ul>	
							</div>	
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
