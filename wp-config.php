<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'devall');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@)9mh/9r_n{f3pFg{8pO:A=I;a+^LykA$%2hds]z-~Xh_.#jtDAsvZ,;z.u qUJu');
define('SECURE_AUTH_KEY',  '8 .!RBZ1pI}nU)E4j=UWZv}FA}];@5n$}i`w:&c*X-w?x_h-kOMPnOg2%: `,|Bq');
define('LOGGED_IN_KEY',    'I> +z-ypR8QA.eNv!g;B!CJ[y/}|&{cl4[qM!.[^Sk;T4&^+l;DGPwTg$N52u5G+');
define('NONCE_KEY',        '5_en8d*g?.kM9n15<Gz@)N)D.z^XWC1-#t/^P.?OZAy kkO%g<hO`4C[e8|L!i^y');
define('AUTH_SALT',        'eLGj Fh}Fs&m|jzkS6XCC:J.l7xO%/BDb/^(vc~=$QXa]E8G B)C<wz2rzSlqr?b');
define('SECURE_AUTH_SALT', '5^M-d$~)/c%6oVL:!N4[r`lXIL*lVrL=9feizu-}tkUD31P4u$<jWt61E^:0d%Yn');
define('LOGGED_IN_SALT',   'wLkS=(maH:H*m({iLI+Jt2vVRC1bQm83l<EsZpfhqDkwR_?cdD5^1}Zq$]Ve(3^z');
define('NONCE_SALT',       '>e`6aT|ip+&!:%_!PfNXuq%|/lMv;ZKuGoci$0_AV{wf6v[PhW5 {W3w&$|Sa8u#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
