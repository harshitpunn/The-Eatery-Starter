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

define( 'DB_NAME', "eatersolutions" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "root" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         '7FPJlXhoX22K_1h~,$&1cz1{[/9=C%(l5f7K9!uuiEn4(A?3m9=0LGoi-X9sc2`6' );

define( 'SECURE_AUTH_KEY',  'nQbvucWQj[RDT$0<uI9LXqQ06@C&j}~LF0Y?x0J1Z{sM%L fzp0#o-SJ2LSnxw!@' );

define( 'LOGGED_IN_KEY',    ']YAzeaumpme!__uXuH23BMa+~??dgJs=#zy6Fk$5YqynPRV;l+cu&yo>./yvg5L*' );

define( 'NONCE_KEY',        '?S$+?-|y.C!F6]AI~ dRZf$WC )daq6G(+HupLBHoS6x4e8g_^%)hP u2L}WlAQ?' );

define( 'AUTH_SALT',        '@}?J1K{RJ&cex9^F.e)Zac9U4}F6N`D:0<Lul0HCu>p>6!IRB>cH@hRiv3w};R;Y' );

define( 'SECURE_AUTH_SALT', 'w9N{crk%e`RtZ@Vc:F!h?]+,mS+GUH; l.IFK<*`Z.V1--(SWI#O]uCG~7P4%tuf' );

define( 'LOGGED_IN_SALT',   'ML3Qw-9#xNRXnx<m.[|nEe692g-ex`bL JJR{w)x]FB<x<ZUnYhFGRCXh]Mme}G!' );

define( 'NONCE_SALT',       'H-*]ZCE#iT!$cV3.:jFt-BwTtf1#;LQi/4UEaWhzCe.t/Vg8MJbLjEtsCY1#1Xs9' );


/**#@-*/


/**

 * WordPress Database Table prefix.

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

 * visit the Codex.

 *

 * @link https://codex.wordpress.org/Debugging_in_WordPress

 */

define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once( ABSPATH . 'wp-settings.php' );

