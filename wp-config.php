<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define( 'DB_NAME', 'wpdb' );

/** MySQL数据库用户名 */
define( 'DB_USER', 'admin' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', '666666' );

/** MySQL主机 */
define( 'DB_HOST', 'localhost' );

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~&uVsRG#EQ.Gk5!Tf%h!1 FCC;(MV}4O0s]pM>@u!l2B03lK;{%|Rl*}s_k*?bL5' );
define( 'SECURE_AUTH_KEY',  'SXy#SXK@7>Hc,ThmUbi|HjpwH!/O~GuBi|{[SJuNN.M _X~6#k}080!*~ILtRSAN' );
define( 'LOGGED_IN_KEY',    '`U@s`/Ht<Lh2~cIP+A{7IDB9}z},mB1al%pH&EPw>n24p39M<K :OVYzT-Z8e6D!' );
define( 'NONCE_KEY',        '?uYjAjwQhS%Hk_5P8muAh{6u+K?p09|7-rj!M&sb{n{&O0pjhWH9*OQ7uU`cp0eZ' );
define( 'AUTH_SALT',        'gUYfvDT8RuY|_-P-DYkk>5k(-4WE.s%X&Dn13]:$::j;gVqT|U=Pj8`c<jb X,0b' );
define( 'SECURE_AUTH_SALT', 'mNKu2rhcq;)1&xlL%J)Z2VrFRMPIZieqgy|8t@Vh!R5wreQ{3Zv>fw%*.Sv>$McS' );
define( 'LOGGED_IN_SALT',   '@diAE@T<Ot5q>~.bmYPG78KvZ5]LM0ZEO03On.HPE&Lr`3}#]f *yr52m sE8xJw' );
define( 'NONCE_SALT',       ':-qCx*qTX.@ cI!L/lQhd`[h)Sg;T}B]5o9JF85>L]u/QI>B.FdJ|*KXmUjD7e)U' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );
