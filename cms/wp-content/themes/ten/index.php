<!DOCTYPE html>
<html lang="ja">
<?php get_header(); ?>

<body onload="initialize();">
<?php get_template_part('head'); ?>
    <!-- スライダー -->
    <div class="slider">
      <div><img src="<?php bloginfo('template_url'); ?>/img/img01_pc.jpg" alt="img01" class="switch"></div>
      <div><img src="<?php bloginfo('template_url'); ?>/img/img02_pc.jpg" alt="img02" class="switch"></div>
      <div><img src="<?php bloginfo('template_url'); ?>/img/img03_pc.jpg" alt="img03" class="switch"></div>
      <div><img src="<?php bloginfo('template_url'); ?>/img/img04_pc.jpg" alt="img04" class="switch"></div>
      <div><img src="<?php bloginfo('template_url'); ?>/img/img05_pc.jpg" alt="img05" class="switch"></div>
      <div><img src="<?php bloginfo('template_url'); ?>/img/img06_pc.jpg" alt="img06" class="switch"></div>
    </div>


    <div class="l-wrapper">
        <button class="p-modalBtn" @click="openItem"{ ここをクリック }></button>
    </div>

    <div class="p-modal" :class="{'is-open': isModalActive}">
  { clickで表示したいmodal_content部分 }
</div>

    <!-- イントロ-->

    <div id="about" class="intro">
      <div class="intro__inner">
        <div class="intro__logo"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="ouchi salon te-n" class="animate"></div>
        <div class="intro__catch  animate1">
          <img src="<?php bloginfo('template_url'); ?>/img/catch.png" alt="ひと息ついて、次にいこう" class="hidden-xs">
          <span class="visible-xs">ひと息ついて、次にいこう</span>
        </div>
        <div class="intro__story  animate2">みどり豊かな練馬区の片隅に<br> 小さなお家がありました。
          <br> そのお家から出てくる人たちは
          <br> 不思議とスッキリした顔つきで、
          <br> どこか明るい光の射す方へ向かって
          <br> 歩きだしているように思えました。
        </div>
        <span class="intro__sep-line  animate3"></span>
        <div class="intro__discription  animate4">
          当店はみどり豊かな練馬区の奥地にある<br> 約５０年前の古民家を
          <br> リノベーションしたサロンです。
          <br> 最寄駅からは少し離れていますが、
          <br> こころの気づきに向き合いながら、
          <br> アロマの香りでゆとりあるお時間を
          <br> 過ごしていただければ嬉しいです。
        </div>
        <span class="intro__illust  animate"><img src="<?php bloginfo('template_url'); ?>/img/illust_butterfly.png" alt="Butterfly"></span>
      </div>
      <div class="intro__btn-wrap animate">
        <a href="javascript:void(0);" id="triger" class="btn__def">てん、の想い</a>
      </div>
    </div>

    <!-- カラー-->

    <div class="menu-unit">
      <div class="menu-unit__inner-color">
        <span id="color" class="anchorlink"></span>
        <div class="menu-unit__color-bg"><img src="<?php bloginfo('template_url'); ?>/img/bg_color.jpg" alt=""></div>
        <img src="<?php bloginfo('template_url'); ?>/img/illust_green01.png" alt="green" class="menu-unit__color-illust animate">
      </div>
      <div class="menu-unit__color">
        <h2 class="heading__catch animate">まずは心の
                <br>「気づき」から。</h2>
        <h3 class="heading__menu animate">WATCH カラーセラピー </h3>
        <div class="menu-unit__color-detail">
          <div class="menu-unit__tx animate">１０本のカラーボトルから、たった４本選んでいただくだけで<br class="hidden-xs"> 心の声に耳を傾けてみませんか？
          </div>
          <div class="menu-unit__note animate">※WATCH カラーセラピーは占いやオーラソーマなどではありません。 色彩心理や発達心理などの『脳科学』に基づいて構築されたセラピーです。
          </div>
          <div class="menu-unit__price animate">30min ,￥3,500</div>
          <div class="menu-unit__note animate">※２回目以降、その他コースと併せてご予約の場合＋¥1,500 で お受けいただけます。
          </div>
        </div>
      </div>

    </div>

    <!-- アロマ-->

    <div class="menu-unit">
      <div class="menu-unit__inner-aroma">
        <span id="aroma" class="anchorlink"></span>
        <div class="menu-unit__aroma-bg animate"><img src="<?php bloginfo('template_url'); ?>/img/bg_aroma.jpg" alt=""></div>
        <div class="menu-unit__aroma">
          <h2 class="heading__catch animate">身体にやさしく
                        <br>むきあいましょう。</h2>
          <h3 class="heading__menu animate">アロマトリートメント</h3>
          <div class="menu-unit__aroma-detail animate">
            <div class="menu-unit__tx animate">１００% 植物から抽出したエッセンシャルオイル（精油）を その日の気分や体調に合わせて数種類の中からお選びいただき あなたの為だけにお作りしたオイルでトリートメントを行います。
            </div>
            <div class="menu-unit__price animate">30min ,￥5,000</div>
            <div class="menu-unit__menu-description  animate">アロマトリートメントうつ伏せ 上半身or 下半身</div>
            <div class="menu-unit__note animate">※アロマ30 コースに限りその他コースとの組み合わせのみでご予約可能です。 アロマ30 コースのみでのご予約は出来かねますので予めご了承ください。</div>
            <div class="menu-unit__price animate">60min ,￥7,400</div>
              <div class="menu-unit__menu-description  animate">アロマトリートメントうつ伏せ全身</div>
            <div class="menu-unit__price animate">90min ,￥12,000</div>
              <div class="menu-unit__menu-description  animate">アロマトリートメントうつ伏せ全身＆仰向け 脚、腕、デコルテ</div>
          </div>
        </div>

        <img src="<?php bloginfo('template_url'); ?>/img/illust_green02.png" alt="green" class="menu-unit__aroma-illust animate">
      </div>
    </div>

    <!-- 初回限定-->
    <div class="first-note animate">※初回ご来店時のみトリートメントの前に無料にてWATCH カラーセラピーを行うことが可能です。</div>

    <!-- オプション-->
    <div class="option-unit animate">
      <span id="option" class="anchorlink"></span>
      <h2 class="option-unit__heading animate">option</h2>
      <div class="option-unit__tx animate">上記コースと併せてご予約いただけるオプションメニューです。<br> お洋服を着たままの施述をご希望の場合は、オプションメニューのみの組合せも可能です。
      </div>


      <!-- オプションメニュー-->
      <ul class="option-unit__menu-wrapper">

        <!-- リフレ-->
        <li class="option-unit__menu animate">
          <h3 class="heading__menu--option">リフレクソロジー</h3>
          <div class="option-unit__menu-tx">足裏の反射区、ふくらはぎから膝下にかけて心地よく刺激して血行やリン パの流れを促し、心身のバランスを整えます。
          </div>
          <div class="option-unit__price">30min, ¥4,000</div>
        </li>

        <!-- ヘッドヒーリング-->
        <li class="option-unit__menu animate2">
          <h3 class="heading__menu--option">ヘッドヒーリング</h3>
          <div class="option-unit__menu-tx">頭、首、肩を中心に行います。頭皮には洗い流し不要のトリート メントジェルを首元はオイルにてリンパの流れを促します。
          </div>
          <div class="option-unit__price">40min, ¥5,000</div>
        </li>
      </ul>
    </div>

<!-- お客様の声-->


<?php global $post; $my_post01 =
get_posts( array( 'category_name' => 'voice', // カテゴリーのスラッグが'category-slug'
'posts_per_page' => 6, // 1ページでの表示件数が6件
) ); ?>

<div id="voice" class="voice-unit">
  <h2 class="voice-unit__heading animate">お客様の声</h2>
  <ul class="voice-unit__inner">

    <?php if($my_post01) : ?>
    <?php foreach( $my_post01 as $post ) : setup_postdata($post); ?>

    <li class="voice-unit__thumb-block">
      <a href="<?php the_permalink(); ?>">
      <div class="voice-unit__thumb animate">

        <?php
if (has_post_thumbnail() )  {
    //アイキャッチがあれば img タグの画像を返す。
    echo get_the_post_thumbnail($post->ID, 'medium');

} else {
    //アイキャッチがない場合は代替画像を表示。
    echo '<img src="/img/voice/thumb.jpg">';
} ?>
      </div>
      <div class="voice-unit__tx animate">
        <span class="voice-unit__name"><?php the_field('voice_name'); ?></span>
        <span class="voice-unit__menu"><?php the_field('voice_menu'); ?></span>
        <h3 class="heading__voice-catch"><?php the_field('voice_read'); ?></h3>
      </div>
    </a>
    </li>
  <?php endforeach; ?>
  <?php endif; ?>
  </ul>
</div>
<?php wp_reset_postdata(); ?>


<!-- てんとてん-->
    <div id="tentoten" class="tentoten-unit">
      <div class="tentoten-unit__dot animate">
        <div id="animation_container" style="background-color:rgba(255, 255, 255, 1.00); width:998px; height:1060px">
          <canvas id="canvas" width="998" height="1060" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 1.00);"></canvas>
          <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:998px; height:1060px; position: absolute; left: 0px; top: 0px; display: block;">
          </div>
        </div>
      </div>
      <div class="tentoten-unit__catch animate"><img src="<?php bloginfo('template_url'); ?>/img/tx_tsunaide.svg" alt="つないで、描こう。"></div>
      <div class="tentoten-unit__title animate">
        <span class="tentoten-unit__te-01 animate"><img src="<?php bloginfo('template_url'); ?>/img/te.svg" alt="て"></span>
        <span class="tentoten-unit__n-01 animate1"><img src="<?php bloginfo('template_url'); ?>/img/n.svg" alt="ん"></span>
        <span class="tentoten-unit__to-01 animate2"><img src="<?php bloginfo('template_url'); ?>/img/to.svg" alt="と"></span>
        <span class="tentoten-unit__te-02 animate3"><img src="<?php bloginfo('template_url'); ?>/img/te.svg" alt="て"></span>
        <span class="tentoten-unit__n-02 animate4"><img src="<?php bloginfo('template_url'); ?>/img/n.svg" alt="ん"></span>
      </div>
      <div class="tentoten-unit__read animate">ワークショップを開催します。</div>
      <div class="tentoten-unit__tx animate">時には新たな出会いによる刺激が「ひと息」となり、 次につながる原動力となることも…
        <br> 当サロンでは、様々なジャンルの方たちとコラボして 定期的にワークショップの開催も予定しております。
        <br><br> 詳細につきましては随時HP にて更新していきますのでぜひ、こまめにチェックしてみてください。
      </div>
    </div>

    <?php global $post; $my_post02 =
    get_posts( array( 'category_name' => 'tentoten', // カテゴリーのスラッグが'category-slug'
    'posts_per_page' => 6, // 1ページでの表示件数が6件
    ) ); ?>
    <div>
    <ul class="tentoten-unit__inner">

      <?php if($my_post02) : ?>
      <?php foreach( $my_post02 as $post ) : setup_postdata($post); ?>

      <li class="tentoten-unit__thumb-block">
        <a href="<?php the_permalink(); ?>">
        <div class="tentoten-unit__thumb animate">

          <?php
  if (has_post_thumbnail() )  {
      //アイキャッチがあれば img タグの画像を返す。
      echo get_the_post_thumbnail($post->ID, 'medium');

  } else {
      //アイキャッチがない場合は代替画像を表示。
      echo '<img src="/img/voice/thumb.jpg">';
  } ?>
        </div>
        <div class="def-unit animate">
          <span class="def-unit__date"><?php the_time('Y.m.d'); ?></span>
          <h3 class="heading__news-title"><?php the_title(); ?></h3>
          <div class="def-unit__disc"><?php<the_excerpt(); ?></div>
        </div>
      </a>
      </li>
    <?php endforeach; ?>
    <?php endif; ?>
    </ul>
  </div>
<?php wp_reset_postdata(); ?>
    <div class="therapist-unit">
      <span id="therapist" class="anchorlink"></span>
      <h2 class="therapist-unit__ttl animate"><img src="<?php bloginfo('template_url'); ?>/img/therapist.svg" alt="therapist"></h2>
      <div class="therapist-unit__pic animate"><img src="<?php bloginfo('template_url'); ?>/img/aki.png" alt=""></div>
      <div class="therapist-unit__name animate"><img src="<?php bloginfo('template_url'); ?>/img/aki.svg" alt="Aki"></div>
      <div class="therapist-unit__prof animate">自身の出産＆育児中にアロマセラピーと出会い、<br class="hidden-xs"> その奥深さを知りセラピストとなる。
        <br><br> しかし、店舗での施術では、

        <br class="hidden-xs"> お一人お一人ときちんと向き合える
        <br class="hidden-xs"> 時間をもてない事に疑問を感じ、
        <br class="hidden-xs"> 自宅にてお一人お一人に
        <br class="hidden-xs"> ゆっくりと向き合える時間のもてる
        <br class="hidden-xs"> ゆとりあるサロンを開業。
        <br><br> 植物、音楽、写真などが好きで、

        <br class="hidden-xs"> かなりやんちゃな２人の男の子の育児に日々奮闘中。
        <br class="hidden-xs"> 「出会いは宝物」ぜひお気軽に会いに来てください。
      </div>
      <img src="<?php bloginfo('template_url'); ?>/img/illust_green03.png" alt="" class="therapist-unit__illust animate">
    </div>

    <!-- InstaWidget -->
    <div class="unit-insta animate">
      <!-- InstaWidget -->
      <div>
        <script src="https://instawidget.net/js/instawidget.js?u=12e3040a8920cb0005e4a1c557ae2ab469f94c8fc1a70f1be83886380faafa4c&width=100%"></script>
      </div>
    </div>
    <div class="unit-info animate">
      <span id="info" class="anchorlink"></span>
      <h2 class="heading__default animate">Information</h2>
      <div class="unit-info__inner">
        <div class="unit-info__reserve animate">
          <h3 class="heading__info">LINE＠で簡単予約！</h3>
          <ul class="line-wrapper">
            <li class="unit-info__line-tx">友達追加後、当サロンに希望時間を送信してください。 また、トーク機能を利用してのお問合せやご質問 にもお答えいたしますのでお気軽にご連絡ください。
            </li>
            <li class="unit-info__QR"><img src="<?php bloginfo('template_url'); ?>/img/qr.png" alt="LINE QRコード"></li>
          </ul>
          <div class="btn__wrapper">
            <a href="https://line.me/R/ti/p/%40wpn4566z" class="btn__def line" target="_blank">ご予約・お問い合わせ</a>
          </div>
        </div>

        <div class="unit-info__reserve animate1">
          <h3 class="heading__info">メールフォームから予約</h3>
          <div class="unit-info__tx">お客様１人１人にゆったりとしたお時間を過ごしていただく為に、ご予約は１日２名様限定とさせていただいております。 恐れ入りますが、ご予約はなるべくお早めにお問い合わせくださいますようお願いいたします。
          </div>
          <div class="btn__wrapper">
            <a href="https://tayori.com/form/96a0ee97dd25d1d675db3905bed186421b5392c8" class="btn__def" target="_blank">ご予約・お問い合わせ</a>
          </div>
        </div>


      </div>
    </div>

    <div id="map_custmomize" class="unit-map"></div>
    <div class="unit-access animate">
      <div class="unit-access__adress">〒178-0062　練馬区大泉町1丁目</div>
      <div class="unit-access__tx">
        <div>
          ※自宅兼サロンの為、WEB上では電話番号・住所を公開しておりません。<br>
        <a href="https://line.me/R/ti/p/%40wpn4566z" class="und" target="_blank">LINE</a>又は、<a href="https://tayori.com/form/96a0ee97dd25d1d675db3905bed186421b5392c8" class="und" target="_blank">お問合せフォーム</a>よりご連絡ください。</div>
        <div class="unit-access__detail">
          <ul>
            <li><span>○成増駅（東武東上線）南口より<br></span>
  <span>バス[泉33]大泉学園北口行き「南大和」下車徒歩7分</span>
            </li>
            <li><span>○和光市駅（東武東上線）南口より<br></span>
  <span>バス[泉39-1]大泉学園北口行き「司法研修所」下車徒歩11分</span>
            </li>
            <li><span>○光が丘駅（都営大江戸線）より<br></span>
  <span>バス[土支田循環]光が丘駅行き「土支田二丁目」下車徒歩7分</span>
            </li>
          </ul>

        </div>
      </div>
    </div>

    <div class="modal-overlay">
      <div class="modal-container">
        <div class="modal-inner">
          <section class="modal-content-inner">
            <span class="modal-close"><img src="<?php bloginfo('template_url'); ?>/img/cross_b.svg" alt="X"></span>
            <article class="unit-article">
              <div class="logo"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="ouchi-salon てん"></div>
              <h2 class="heading__omoi">てん、の想い</h2>
              <p>はじめまして。《ouchi salon てん、》にようこそ。
突然ですが、最近有意義な「ひと息」つかれていますか？</p>

              <p>20代後半から40代の女性は取り巻く環境も人それぞれ様々。 お身体の不調はもちろん、育児、結婚、仕事、不妊、介護etc… 見えない鎖に縛られて、息苦しい日々をお過ごしではないでしょうか.
              </p>
            </article>

            <article class="unit-article">
              <h2 class="heading__omoi"><span class="heading__no">o1</span>子育てとアロマ</h2>
              <p>わたし自身、９歳の長男と５歳の次男の育児真っ只中な環境にいます。 男の子の育児は大変！なんて世間でもよく言われていますが、 ここまで大変か？！ってくらい日々、身をもって感じております（笑）</p>

              <p>特に長男は小さい頃からの俗に言われる問題児。 小さい頃から泣き喚きが激しかった長男は、たまの外食でも他の客の迷惑になるとお店を追い出されたり、 保育園ではパジャマで登園する！と騒ぎそのまま登園。 保育園で泥遊びをした後も、お着替えを拒み結局お迎えの時まで泥だらけのパジャマで帰宅なんてことも。 もちろん、動きも激しく１歳で骨折、全身やけどで救急車にも乗りました。
              </p>

              <p>初めての子育てに頭を抱えている中、ふと訪れるお昼寝タイムの静寂時間。 スマホのSNSにアップされてくるのはキラキラと輝いて見える同世代のお友達。 好きなことを好きな時に好きなようにできている友達の姿を見て、 まるで自分が見えない鎖に縛られ、世間から取り残されたかのような感覚にも陥りました…
              </p>

              <p>長男が幸運にも保育園に通えるようになった頃、 せっかくのこの時間を無駄にしてはいけないと思い立ったわたしは 何か新しいことを始めてみたくなり、ふと目に飛び込んできたアロマの学校へ通うことにしました。 はじめは「アロマ＝いい香り」くらいにしか思っていなかったのですが、 実際、勉強をしていくと心にも身体にもとても良い影響を与えることを知りました。
              </p>

              <p>相モデルになってトリートメント実習の授業があった日は、不思議と心に余裕ができて いつもなら子供に強く怒って対応してしまうような場面も、 穏やかに対応することができたのを覚えています。
              </p>

              <p>そして、更にアロマの素晴らしさを痛感した出来事が、次男の出産の時でした。 出産予定日より１週間前、いつもどおり午前中は定期検診に行き、 出産まではまだもう少しかかりそうと先生に言われそのまま帰宅。 昼過ぎになんとなく微弱の痛みを感じ一応感覚をはかってみると、すでに１５分おき！ それでも、母とランチを食べ、シャワーも浴び、夕方に長男のお迎えに行ってから 車で病院へ到着したのが夕方５時過ぎ。 助産師さんも「生まれるのは明日の朝くらいかもね〜」なんて言っていたので、 とりあえず遅れて病院に到着した旦那さんがコンビニに買い出しに出る前に
                事前に自分で用意していた陣痛促進に働きかけるようなアロマオイルを 塗布してもらってから約10分… あれよあれよと言う間に微弱だった陣痛がドーンとやってきて、 次男が誕生したのは、なんと６時５９分でした！ 恐るべし、精油の力！
              </p>
              <p>おかげで最初から最後まで出産に立ち会えた旦那さんも 「あの時コンビニに行ってたら一生攻め続けられることになったな」なんて笑い話をよくします。
              </p>

            </article>

            <article class="unit-article">
              <h2 class="heading__omoi"><span class="heading__no">o2</span>わたしって何だろう？</h2>
              <p>そんなわけで、無事に２人の男のママになった私ですが、 次男の出産＆育児によりせっかく見つけたお仕事も泣く泣く辞めることになり 再び家に篭りがちな日々が続くことになりました…
              </p>

              <p>相変わらず平日は終電帰りの旦那さん。 次男の誕生により赤ちゃん返りが加わり、より一層パワーを増した長男。 まだまだ産まれたてで夜泣きも激しい次男。 見事にそろった三拍子！
              </p>

              <p>目の前のことをこなすのが精一杯で、とてもこの状況で 自分の為に何か新しいことに挑戦するなんて余裕は全くありませんでした… というか、わたしが自分の為に何かすることはダメなこと、無理なことと 勝手に心の蓋を閉じてしまっていたようにも思います。
              </p>

              <p>そんな時に出会ったのが、偶然お友達が最近勉強し始めたという WATHCカラーボトルでした。 聞きなれない言葉と数本の鮮やかなボトル。 はじめは占いのようなものだと思って半信半疑だったのですが、 詳しく話を聞いてみると色彩心理学とコーチングを組み合わせることによって 行うセラピーで、占いやオーラなどとは違うということ。 </p>

              <p>ますます「？」な感じを持ちつつも言われるがままにたった４本のボトルを選ぶだけで、 自分でも蓋をしていた「本当に望む自分」に気づき、向き合うことができたのです！
              </p>
              <p>その当時、見えない「母親」という鎖に縛られていたわたしは、 これをきっかけにずっとやりたいと心の底にしまっていたセラピストとしての道を 再チャレンジすることになりました！
              </p>

              <p>実際、育児をしながらのチャレンジは大変なこともいっぱいありましたが、 頑張っている姿を見て、家族も前以上に家事に協力してくれるようになったり、 わたし自身も大変ながらもやりたい事にチャレンジできているおかげか、 心に余裕ができて、子ども達との時間を有意義に過ごそうという気持ちが強くなりました。
              </p>

            </article>

            <article class="unit-article">
              <h2 class="heading__omoi"><span class="heading__no">o3</span>ひと息のススメ</h2>


              <p>そして、様々なお客様と関わっていくうちに、みなさんそれぞれの「肩書き」や 「見えない鎖」に縛られて、苦しんでいらっしゃる方が多い事に気がつきました。 「育児」「仕事」「結婚」「不妊」「介護」etc… 特に２０代後半から４０代の女性は、取り巻く生活環境も人それぞれ様々。 それぞれの環境により、価値観のズレも出始め、 昔からの友人とも隙間ができてしまうなんてこともあるのではないでしょうか…
              </p>

              <p>第三者のわたしから見れば、結婚してても、独身でも、ママでも、ママじゃなくでも どのお客様もそれぞれの場所で、それぞれの魅力を個々にもっているはずなのに、 見えない鎖に縛られ自分に素直になれなくなっていらっしゃる方が多くおられるように思います。
              </p>

              <p>長男が幸運にも保育園に通えるようになった頃、 せっかくのこの時間を無駄にしてはいけないと思い立ったわたしは 何か新しいことを始めてみたくなり、ふと目に飛び込んできたアロマの学校へ通うことにしました。 はじめは「アロマ＝いい香り」くらいにしか思っていなかったのですが、 実際、勉強をしていくと心にも身体にもとても良い影響を与えることを知りました。
              </p>

              <p class="heading__omoi">自分に素直な女性は輝きを増す。</p>

              <p>わたしはそう思います。</p>
              <p>オシャレに敏感でいつもキラキラ輝いて見えるあの人</p>

              <p>いつも笑顔で友達も多く、毎日楽しそうなあの人</p>

              <p>好きな仕事をして充実した日々を過ごしていそうなあの人</p>

              <p>子どものわがままにもイヤな顔せず、常に優しく穏やかに対応できるあの人　etc…</p>
              <p>まるで遠い世界でキラキラと輝き、手の届かないように見える「あの人」達も きっと、それぞれに悩み、もがき苦しむ時もあるんだと思います。
              </p>
              <p>
                ただちょっと違うのは、もしかするとそんな「あの人」達は ほんのちょっぴり自分の気持ちに素直なのかもしれません。 そして、ほんのちょっぴり一息つくのが上手なのかもしれません。
              </p>
              <p>「ひと息つく」と言ってもそれはひとそれぞれ違うと思います。 単純に身体の疲れをほぐしたい人もいれば 心のモヤモヤをスッキリさせたい人もいる そして、時には新たな出会いによる刺激が一息となり、原動力となる人もいると思います。
              </p>
              <p>お身体が辛い時はあなたの為だけにブレンドしたアロマオイルでトリートメント。 カラーボトルやフレグランスを使って頭の中を整理することも。 定期的に開催されるワークショップでは、様々なジャンルの方とコラボしたイベントを開催予定。 きっと新たな出会いがあなたにワクワクをお届けすることになるでしょう。
              </p>
              <p>お買い物中に疲れたら、ちょっと一息、カフェで休む。 長い文章の途中で、ちょっと一息、息を吸い込む。 頑張ることに疲れたら、ちょっと一息、空を見上げる。
              </p>
              <p>どうかそんな気軽な感覚でわたしに会いに来てください。</p>
              <p>長い人生の一瞬の「、」 きっと、その「一息」が次のなにかに繋がるはずです。
              </p>
              <p>ぜひ、お会いできる日を心よりお待ちしています！</p>

            </article>
            <span class="modal-close-bottom"><img src="<?php bloginfo('template_url'); ?>/img/cross_b.svg" alt="X"></span>

          </section>
        </div>
      </div>
    </div>



<?php get_footer(); ?>
</div>

</body>

</html>
