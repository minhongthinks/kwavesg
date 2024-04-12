<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'lavishsi_wp567' );

/** Database username */
define( 'DB_USER', 'lavishsi_wp567' );

/** Database password */
define( 'DB_PASSWORD', '5)x.4SprX4' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'wd2q864gxvcz36sek4492sgoqs5o0ik333cbcihdlfzayoftty181y24u1ru91po' );
define( 'SECURE_AUTH_KEY',  'bgzbwmuigap8nhsffgttik4jhwlsq1sxtv3mqet4qaptqa26631qyaupzk7ys1xr' );
define( 'LOGGED_IN_KEY',    'he4akcsxjpm3zkqzdmcalqg9xqmkzybmh4udkxtnys0pgukwripklio2rzvcked5' );
define( 'NONCE_KEY',        'f4dkqh19k0f5ksehl05jtavtetrmcxemn6daasmnzkce0izgspixoyjsaph9lsi3' );
define( 'AUTH_SALT',        'qc0hkpdt2xctsvxfanygciljfdg02qnbzb7tdzcdozgcczf7xrdt28psbtldzze5' );
define( 'SECURE_AUTH_SALT', 'rnbuskjoiintp4bqfja02kcqe5eihjocii6zquaolxwoostzf2xekxb3pma3catg' );
define( 'LOGGED_IN_SALT',   'ttq87rfc6ek5eqcx3zvybpvkwirq9an81oywgrnw1cgfav5xeldp5l40yy61uq6n' );
define( 'NONCE_SALT',       'dktxxl7frxcgtoiathst37oievfydh76s9sbwkk7undfxl0sd4wapqjxbwtqkmr0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpcq_';

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
