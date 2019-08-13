<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'ten');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'i>`LHmni>-pL9?UAq]wO4n@&p_19JaY,i{)rtJbrihIL;jZ3d;,DizRmj%V)g%YB');
define('SECURE_AUTH_KEY',  '}@IdlUr^n|c7+?uotE_|uBFt-zHC&K}Y=5nFhtGh&DNmA18r$x/bY$NC2-7EV#aD');
define('LOGGED_IN_KEY',    'u@5!N1-5%DpjCPi3lmcVjjAK8Ak8[r655)Z1a*Iz4a=CpAvApr8Pqg$]E)nEQJmu');
define('NONCE_KEY',        '|ov^CieJFf<aRV7!/lg>4:r|kA&nW?oC*77)$<1!*fG0xrN5#s:_Vl8$TH+Y$ S:');
define('AUTH_SALT',        '>@%fe}uG[Zk%pQ`WjiYy4QwX4=k@|Bacm ,2dXkWoL-Ut,_}L%gfFZ;4mt}q:_?J');
define('SECURE_AUTH_SALT', '>/b$76v_LqDq{hY[`ZFi_1NWri=FuoJ5>%;:k%0je)`G9_SeY nR?>eF%t=S/~S#');
define('LOGGED_IN_SALT',   ')Ta_nm9ga6G[z06~}3h+gR#g!#3wBn5NTV.Sf7TQ;v>lX&,5-LSs`B6!1rb!C,v)');
define('NONCE_SALT',       '-6uYH* O:Y54DnW#LuY6;y0S`k}B5qTZ13e<{d0`d?}$uNJa:p(}mtb4~RcIP[w(');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
