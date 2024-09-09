<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'solucio4_' );

/** Database username */
define( 'DB_USER', 'Mktools' );

/** Database password */
define( 'DB_PASSWORD', 'soluciona');

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[D=/;Dk.u3IkG{^K0y)R-G^3sI8YKI2$U5j)IRB)QRizmyyeHYH:Y0mTi{B3n@jS' );
define( 'SECURE_AUTH_KEY',  '?~vuZu(=v-_8JO|{Nt)I`Oba@BWc4a/6Sef4/P d#c:&%LD!q:n74XrD(ORYR0/E' );
define( 'LOGGED_IN_KEY',    'WnX/-[[a+*<2[JIYcq(cubR/RNlR2pgb~7/Ct7?i h4cD(rp, !I@ka>#Tn1<cO^' );
define( 'NONCE_KEY',        '(dh/>S:L_sc@@oP/k1s3]h$$;j8.7[K+.iV]Kq{a@69-vkCb1|c$]nm~YcHia`-5' );
define( 'AUTH_SALT',        'N&RE>B d*?vi73e]U~!mPGTs? L_n$bp/>MYt^!x(PzKl>a`Or3oD3DI%Ri$(VC[' );
define( 'SECURE_AUTH_SALT', 'D}j8dLI:oJ0f4ggP:<=?dO32EL%2wWSuyqxA*gty<U+,+LYsr ziUL`E+c,!PXk/' );
define( 'LOGGED_IN_SALT',   '^mZ?F|tu<y]c@8}4[1GZ$zWOBkHy{Imo:vc+<6fXnI=HDxorrG@xYtm;I6VzjkQI' );
define( 'NONCE_SALT',       'a)Y*mOZzU_Z8ho=bk_,fVeR5noN^)L}!5-80MOc6=Rp9/ LVtN6[Md&US.4a:lK(' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
