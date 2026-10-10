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

<!--
			<svg width="346" height="277" viewBox="0 0 346 277" fill="none" xmlns="http://www.w3.org/2000/svg">
				<text transform="matrix(1 0 0 1 148 51.1786)">
					<tspan x="0" y="0" fill="#FFFFFF" font-size="15">Plenum</tspan>
					<tspan x="2.256" y="24" fill="#FFFFFF" font-size="15">Zimbel</tspan>
					<tspan x="4.896" y="48" fill="#FFFFFF" font-size="15">Scharf</tspan>
					<tspan x="3" y="72" fill="#FFFFFF" font-size="15">Mixtur</tspan>
					<tspan x="3" y="96" fill="#FFFFFF" font-size="15">Sifflöte</tspan>
					<tspan x="-10" y="120" fill="#FFFFFF" font-size="15">Superoktav</tspan>
					<tspan x="-12" y="144" fill="#FFFFFF" font-size="15">Sesquialtera</tspan>
					<tspan x="5" y="168" fill="#FFFFFF" font-size="15">Oktav</tspan>
					<tspan x="-4" y="192" fill="#FFFFFF" font-size="15">Prinzipal</tspan>
					<tspan x="0" y="216" fill="#FFFFFF" font-size="15">Subbass</tspan>
					</text>
				<path d="M18 250L328 250" stroke="white"/>
				<path d="M32.5 226.179H313.075" stroke="white"/>
				<path d="M47.5 202.179H298.145" stroke="white"/>
				<path d="M62.5 178.179H283.217" stroke="white"/>
				<path d="M77.5 154.179H268.291" stroke="white"/>
				<path d="M92.5 130.179H253.361" stroke="white"/>
				<path d="M107.5 106.179H238.435" stroke="white"/>
				<path d="M122.5 82.179H223.506" stroke="white"/>
				<path d="M137.5 58.179H208.577" stroke="white"/>
				<path d="M173 1L3 274H343L173 1Z" stroke="white"/>
			</svg>
-->

<!--
<svg width="390" height="303" viewBox="0 0 390 303" fill="none" xmlns="http://www.w3.org/2000/svg">
					<text transform="matrix(1 0 0 1 170 51.1786)">
					<tspan x="0" y="0" fill="#FFFFFF" font-size="15">Plenum</tspan>
					<tspan x="2.256" y="24" fill="#FFFFFF" font-size="15">Zimbel</tspan>
					<tspan x="4.896" y="48" fill="#FFFFFF" font-size="15">Scharf</tspan>
					<tspan x="3" y="72" fill="#FFFFFF" font-size="15">Mixtur</tspan>
					<tspan x="3" y="96" fill="#FFFFFF" font-size="15">Sifflöte</tspan>
					<tspan x="-10" y="120" fill="#FFFFFF" font-size="15">Superoktav</tspan>
					<tspan x="-12" y="144" fill="#FFFFFF" font-size="15">Sesquialtera</tspan>
					<tspan x="6.456" y="168" fill="#FFFFFF" font-size="15">Oktav</tspan>
					<tspan x="-10" y="192" fill="#FFFFFF" font-size="15">Grossquint</tspan>
					<tspan x="-4.304" y="216" fill="#FFFFFF" font-size="15">Prinzipal</tspan>
					<tspan x="0" y="240" fill="#FFFFFF" font-size="15">Subbass</tspan>
					</text>
<path d="M40 250L350 250" stroke="white"/>
<path d="M25 274H365" stroke="white"/>
<path d="M54.5 226.179H335.075" stroke="white"/>
<path d="M69.5 202.179H320.145" stroke="white"/>
<path d="M84.5 178.179H305.217" stroke="white"/>
<path d="M99.5 154.179H290.291" stroke="white"/>
<path d="M114.5 130.179H275.361" stroke="white"/>
<path d="M129.5 106.179H260.435" stroke="white"/>
<path d="M144.5 82.179H245.506" stroke="white"/>
<path d="M159.5 58.179H230.577" stroke="white"/>
<path d="M195 1L10 298H380L195 1Z" stroke="white"/>
</svg>
-->


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
            <?php if(ICL_LANGUAGE_CODE=="en"): ?>

						Membership Levels & Benefits<br>
						<!-- <span class="small">※特典のうち、飲食に関するものや、アーティストや他のお客様との接触がございます項目は、感染症予防対策上、安全に実施可能となりました場合に、ご案内申し上げます。</span> -->
<!--
						<hr>
						<div class="membership">
							<div>
								<h3>SUBBASS</h3>
								ズブバス<br>
								¥80,000
							</div>
							<div>
								低くまろやかな音で高い音を包み込み、支えるような響きを持っています。
							</div>
							<div>
								<ul>
									<li>●　BCJ定期演奏会の東京オペラシティ3公演もしくはサントリーホール3公演に1名様ご招待</li>
									<li>●　公演プログラム冊子贈呈</li>
									<li>●　BCJ主催公演チケットご優待</li>
									<li>●　開場前 優先入場</li>
									<li>●　ソサエティメンバー特別レセプションご案内（年一回、有料）</li>
									<li>●　ドリンク券プレゼント（1枚）</li>
								</ul>
							</div>
						</div>	
-->
						<hr>
						<div class="membership">
							<div>
								<h3>PRINZIPAL</h3>
								¥120,000
							</div>
							<div>
								The fundamental 8’ stop, forming the foundation of the organ's tonal structure and producing a warm, singing tone.
							</div>
							<div>
								<ul>
									<li>●　One invitation to a subscription concert</li>
									<li>●　Complimentary subscription concert program booklet</li>
									<li>●　Priority entry to BCJ-presented concerts</li>
									<li>●　Drink voucher</li>
									<li>●　Information on the Society members' exclusive reception</li>
								</ul>
							</div>
						</div>
						<hr>
						<div class="membership">
							<div>
								<h3>OKTAV</h3>
								¥160,000
							</div>
							<div>
								Sounding one octave above the Prinzipal, this stop reinforces the octave line and strengthens the clarity of fugue subjects.
							</div>
							<div>
								<ul>
									<li>●　All Prinzipal benefits, plus:</li>
									<li>●　Invitation to the Society members' exclusive reception</li>
								</ul>
							</div>
						</div>
						<hr>
						<div class="membership">
							<div>
								<h3>SESQUIALTERA</h3>
								¥240,000
							</div>
							<div>
								Originally denoting the ratio “2:3,” this stop creates a distinctive, colorful timbre with a slightly nasal quality suitable for solo lines.
							</div>
							<div>
								<ul>
									<li>●　All Oktav benefits, plus:</li>
									<li>●　Invitation to a pre-concert talk on the organ</li>
								</ul>
							</div>
						</div>
						<hr>
						<div class="membership">
							<div>
								<h3>SUPEROKTAV</h3>
								¥320,000
							</div>
							<div>
								Sounding two octaves above the Prinzipal, this stop lends brilliance to the sound while retaining a light, soaring character.
							</div>
							<div>
								<ul>
									<li>●　All Sesquialtera benefits, plus:</li>
									<li>●　Invitation to a private post-concert champagne toast</li>
								</ul>
							</div>
						</div>
						<hr>
						<div class="membership">
							<div>
								<h3>SIFFLÖTE</h3>
								¥500,000
							</div>
							<div>
								Sounding three octaves above the Prinzipal, this stop has a delicate yet remarkably clear and penetrating tone.
							</div>
							<div>
								<ul>
									<li>●　All Superoktav benefits, plus:</li>
									<li>●　A gift copy of BCJ's latest CD</li>
								</ul>
							</div>
						</div>
						<hr>
						<div class="membership">
							<div>
								<h3>MIXTUR</h3>
								¥1,000,000
							</div>
							<div>
								A compound stop comprising multiple ranks that reinforce the upper harmonics. It is essential to the opening of Bach's Toccata and Fugue in D minor.
							</div>
							<div>
								<ul>
									<li>●　All Sifflöte benefits, plus:</li>
									<li>●　Dedicated Society member concierge line</li>
									<li>●　Invitation to a luncheon with Masaaki Suzuki or Masato Suzuki</li>
								</ul>
							</div>
						</div>
						<hr>
						<div class="membership">
							<div>
								<h3>SCHARF</h3>
								¥2,000,000
							</div>
							<div>
								Extending into even higher harmonics, this stop produces a brighter, more brilliant sound.
							</div>
							<div>
								<ul>
									<li>●　All Mixtur benefits, plus:</li>
									<li>●　Arrangement of a private lesson with a soloist or BCJ member</li>
								</ul>
							</div>
						</div>
						<hr>
						<div class="membership">
							<div>
								<h3>ZIMBEL</h3>
								¥5,000,000
							</div>
							<div>
								Reaching the highest harmonic range, this stop forms the apex of the tonal pyramid.
							</div>
							<div>
								<ul>
									<li>●　All Scharf benefits, plus:</li>
									<li>●　Invitation to a private dinner with Masaaki Suzuki, Masato Suzuki, or a special guest artist</li>
								</ul>
							</div>
						</div>
						<hr>
						<div class="membership">
							<div>
								<h3>PLENUM</h3>
								¥10,000,000
							</div>
							<div>
								This is no longer merely the name of a stop. Originally meaning “everything,” it represents the organ sound at its most complete, embracing every harmonic from the deepest bass to the highest treble.
							</div>
							<div>
								<ul>
									<li>●　All Zimbel benefits, plus:</li>
									<li>●　Recognition of your name in the title of a BCJ-presented concert of your choice</li>
									<li>●　Personalized benefits tailored to your preferences</li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<hr>
				<div class="wrap">
					<div class="entry-content-page">
						<div class="center">How to apply and pay</div>
						<p>
							Please complete the <a href="https://forms.gle/2ycbsuQixjJLHig46" target="_blank" rel="noopener" style="color: white">membership application form (in Japanese)</a>.<br><br>
							Credit card payment is available. After you submit your application, the BCJ Ticket Center will contact you with payment instructions. Please let us know at that time if you would like to pay by credit card.<br><br>
							If you prefer a bank or postal transfer, please use the account details below and include your name. For postal transfers, also include your address, telephone number, membership level, and whether you wish your name to appear in subscription concert programmes.<br>
							<div class="border-box">
								<ul>
									<li>三井住友銀行　新宿西口支店　普通　2796216 <br>(有)バッハ・コレギウム・ジャパン　ﾕ)ﾊﾞﾂﾊｺﾚｷﾞｳﾑｼﾞﾔﾊﾟﾝ</li>
									<li><br>郵便振替口座<br>口座番号：00170-2-33885</li>
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

						メンバーシップレベルの特典<br>
						<!-- <span class="small">※特典のうち、飲食に関するものや、アーティストや他のお客様との接触がございます項目は、感染症予防対策上、安全に実施可能となりました場合に、ご案内申し上げます。</span> -->
<!--
						<hr>
						<div class="membership">
							<div>
								<h3>SUBBASS</h3>
								ズブバス<br>
								8万円
							</div>
							<div>
								低くまろやかな音で高い音を包み込み、支えるような響きを持っています。
							</div>
							<div>
								<ul>
									<li>●　BCJ定期演奏会の東京オペラシティ3公演もしくはサントリーホール3公演に1名様ご招待</li>
									<li>●　公演プログラム冊子贈呈</li>
									<li>●　BCJ主催公演チケットご優待</li>
									<li>●　開場前 優先入場</li>
									<li>●　ソサエティメンバー特別レセプションご案内（年一回、有料）</li>
									<li>●　ドリンク券プレゼント（1枚）</li>
								</ul>
							</div>
						</div>		
-->				
						<hr>
						<div class="membership">
							<div>
								<h3>PRINZIPAL</h3>
								プリンツィパル<br>
								12万円
							</div>
							<div>
								もっとも基礎的な8フィートの長さを持つパイプです。すべてを支える根源であり、歌うような音を奏でます。
							</div>
							<div>
								<ul>
									<li>●　すべてのオラトリオ（BCJフレンズ）特典</li>
									<li>●　定期演奏会に1名様ご招待</li>
									<li>●　定期演奏会プログラム冊子贈呈</li>
									<li>●　BCJ主催公演チケットご優待</li>
									<li>●　定期演奏会開場前優先入場</li>
									<li>●　ドリンク券プレゼント</li>
									<li>●　ソサエティメンバー特別レセプションご案内</li>
								</ul>
							</div>
						</div>
<!--
						<hr>
						<div class="membership">
							<div>
								<h3>GROSSQUINT</h3>
								グロスクウィント<br>
								12万円
							</div>
							<div>
								16フィートベースの5度管です。力強く低音を支え、太い音色に貢献します。
							</div>
							<div>
								<ul>
									<li>●　すべてのプリンツィパル特典</li>
									<li>●　ドリンク券プレゼント（2枚）</li>
									<li>●　コラールカンタータプロジェクト（調布）2公演に1名様ご招待</li>
								</ul>
							</div>
						</div>
-->
						<hr>
						<div class="membership">
							<div>
								<h3>OKTAV</h3>
								オクターヴ<br>
								16万円
							</div>
							<div>
								実音のオクターヴ上の音を持つパイプです。響きに芯を加え、しっかりとしたフーガのテーマに用います。
							</div>
							<div>
								<ul>
									<li>●　すべてのプリンツィパル特典</li>
									<li>●　ソサエティメンバー特別レセプションご招待</li>
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
								本来は「2対3」という比率を示すことばです。独特な倍音構成により、やや鼻にかかったソロ向きの美しい響きを奏でます。
							</div>
							<div>
								<ul>
									<li>●　すべてのオクターヴ特典</li>
									<li>●　オルガンプレトークご招待</li>
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
								実音の2オクターヴ上の高音を奏でます。華やかに、しかし軽やかに飛翔するパイプです。
							</div>
							<div>
								<ul>
									<li>●　すべてのセスキアルテラ特典 </li>
									<li>●　終演後プライベートシャンパントーストご招待</li>
								</ul>
							</div>
						</div>
						<hr>
						<div class="membership">
							<div>
								<h3>SIFFLÖTE</h3>
								シフレット<br>
								50万円
							</div>
							<div>
								実音の3オクターヴ上の極めて高い音を奏でます。細いけれど突き抜ける強さを持っています。
							</div>
							<div>
								<ul>
									<li>●　すべてのズーパーオクターヴ特典 </li>
									<li>●　BCJ最新CD贈呈</li>
								</ul>
							</div>
						</div>
						<hr>
						<div class="membership">
							<div>
								<h3>MIXTUR</h3>
								ミクストゥール<br>
								100万円
							</div>
							<div>
								高い倍音をいくつも重ねて鳴らす総合ストップです。「トッカータとフーガ ニ短調」の冒頭を彩る、オルガン特有のまばゆい響きには不可欠です。
							</div>
							<div>
								<ul>
									<li>●　すべてのシフレット特典 </li>
									<li>●　ソサエティメンバー専用コンシェルジュ・ライン</li>
									<li>●　鈴木雅明または鈴木優人を囲むランチご招待</li>
								</ul>
							</div>
						</div>
						<hr>
						<div class="membership">
							<div>
								<h3>SCHARF</h3>
								シャルフ<br>
								200万円
							</div>
							<div>
								さらに高い倍音をあわせ持ち、アンサンブルにより輝かしい響きをもたらします。
							</div>
							<div>
								<ul>
									<li>●　すべてのミクストゥール特典</li>
									<li>●　ソリストあるいはBCJメンバーによる個人レッスンの手配</li>
								</ul>
							</div>
						</div>
						<hr>
						<div class="membership">
							<div>
								<h3>ZIMBEL</h3>
								ツィンベル<br>
								500万円
							</div>
							<div>
								最も高い音域の倍音を含み、オルガンの響きのピラミッドの頂点に冠を添える役を果たします。
							</div>
							<div>
								<ul>
									<li>●　すべてのシャルフ特典</li>
									<li>●　鈴木雅明あるいは鈴木優人、または特別ゲストアーティストとのプライベートディナーご招待</li>
								</ul>
							</div>
						</div>
						<hr>
						<div class="membership">
							<div>
								<h3>PLENUM</h3>
								プレーヌム<br>
								1,000万円
							</div>
							<div>
								これは、もはや単なるストップの名称ではありません。本来は「すべて」を意味する言葉で、重低音から最高音まで、すべての響きが一体となったオルガンの究極の豊かさを表します。
							</div>
							<div>
								<ul>
									<li>●　すべてのツィンベル特典</li>
									<li>●　お好きなBCJ主催演奏会のタイトルにお名前を頂戴</li>
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
							こちらのフォームから、必要事項をご入力ください。<br>
							<a href="https://forms.gle/2ycbsuQixjJLHig46" target="_blank" style="color: white">https://forms.gle/2ycbsuQixjJLHig46</a><br><br>
							
							※郵便口座の場合は、通信欄に『お名前・ご住所・お電話番号・ご希望のメンバーシップレベル・定期演奏会プログラムへのご芳名掲載の可否』をご記入いただくことでも構いません。
							<br><br>
							クレジットカードもご利用いただけます。お申し込み後、BCJチケットセンターからのお支払い案内の際に、カード決済をご希望の旨をお伝えください。<br><br>
							銀行振込・郵便振替をご希望の場合は、下記口座をご利用ください。<br>
							<div class="border-box">
								<ul>
									<li>三井住友銀行　新宿西口支店　普通　2796216 <br>(有)バッハ・コレギウム・ジャパン　ﾕ)ﾊﾞﾂﾊｺﾚｷﾞｳﾑｼﾞﾔﾊﾟﾝ</li>
									<li><br>郵便振替口座<br>口座番号：00170-2-33885</li>
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
