<?php
/** The name of the database for WordPress */
define('DB_NAME', 'defaultdb');

/** MySQL database username */
define('DB_USER', 'doadmin');

/** MySQL database password */
define('DB_PASSWORD', 'YOUR_SECURE_PASSWORD_HERE');

/** MySQL hostname */
define('DB_HOST', 'db-mysql-syd1-43826-do-user-24242358-0.j.db.ondigitalocean.com:25060');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 * Change these to different unique phrases!
 */
define('AUTH_KEY',         ' _{)7FP0N`pXHO#7998F[l6<=tB+i^iw.mmn!U][_+:ve74C?*4_wV+M8?ais9WX');
define('SECURE_AUTH_KEY',  '-5s~4uquE<HR%UgU&VI <X#:R$z!WCd@LtQ&qx+<)L`O:vuzN+>(/pkJ2DkgZ{`*');
define('LOGGED_IN_KEY',    'Y64rN4ma 7D|| &L?.+$_ KK!]YJy4.G5;l?*fBL@X*5#!8 >uS`:}Qj;5gx:S5A');
define('NONCE_KEY',        'a#%uAXv%d0?Az!bS}LFCrBbi)d0 9H +3SS|j=q96O (up}r{)<c|l~ptI_j9|f+');
define('AUTH_SALT',        'niueR,XXx61XN,jra|prO^GN6P+:9LZ&OA@|#fJ)py1(un4CM|{?G[vUVdgg2./|');
define('SECURE_AUTH_SALT', 'xW`QiG^oCBZU$MlyT0/Z!(Gkt}S`bMc#~gcvF:yh_FZ:>DD.X3M ]sYB]+)mJp}<');
define('LOGGED_IN_SALT',   'sqJ1SX+6`-q{$m$2/Q@Rau&@]8}dcp[a!+%!,4BHHNM%/7CG#|a-qLSSA%mC+O*|');
define('NONCE_SALT',       '$rg7Q3<+}</Hxg*6,a?e1555;:Z.;b?<S<XJ8Imyjlm-{B5`O{iTB1XsC/TmkA~?');

/**#@-*/

/** WordPress Database Table prefix. */
$table_prefix = 'wp_';

/** For developers: WordPress debugging mode. */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
