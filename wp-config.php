<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'acoMedia_db');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'acoMember');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'aco22023');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'xajMU_^H~K9&teGvgQf_h``Aw3KZk,j9j])BQ0m]P8e3nHWubN!NRpU<*t5M/ah?');
define('SECURE_AUTH_KEY',  '8{}_%{Tvy(F.>J)>luKE?KA0RFofIDG;:n6O&G;Paz[38ldE S-*=pP#<GE|/A+:');
define('LOGGED_IN_KEY',    'aa_*UA-W<_ SjKwKkQlQ670ss ~nYt,)&i *HqHhc?QB&y|wTo!BUW:wAD#D5kY`');
define('NONCE_KEY',        'OvXv~;jgMXnho7R#ph$9pA)oGv/@0F>J&<<1`_i2mj4GYx5/~<L<4u{{@BubAwc,');
define('AUTH_SALT',        'CP@BYsI?&1=Zq~,~tXZ7c83tq[kzqV*yAbOG4v}EA-97tcWg:#EV0d}NI9%skY[;');
define('SECURE_AUTH_SALT', 'Za4>tHSU7C5dgr(F.Z^i*`yzkH>r>B8SW@YJ)WTkbliM2tMJEYkPbz:#*5VENUFy');
define('LOGGED_IN_SALT',   'ZZA,@I7/pX_l)mwgHI8moUWMRHRWZZ1|PfNl`,&dZ-q(^6iqw)O`X`$_6N`7)s[O');
define('NONCE_SALT',       'w#04t,}^nXb0WF:/)zNmdL=+&,qLkB(h>eURJz@R[Bo1BPLep|Fx=c-3lO:j(wuT');

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
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
