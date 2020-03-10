<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'WifiApp' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', 'root' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'j!--4yM&NA 1j`MfI8q@ECVFZ_n*/.C;~J~IV/ydh7acmv48bjzK0l*t2X;.%HYx' );
define( 'SECURE_AUTH_KEY', ';EF@X >dRwP]*yO{5N0QB@9i!M/T;LN2mt99}1@VBGDJ.9r]bDr9.rZ}*gntWcQ}' );
define( 'LOGGED_IN_KEY', 'Phd[Q-k?G]e(VF~b7==byt|/QH:bnn%YZKEYan:|4Y_=1F:%?0D_ sr8-9Vbp4^,' );
define( 'NONCE_KEY', 'k}s/U?7VKGytqEO?;4AU)2.]l-pt}l|eBYh[;}^)md(eGUn1v&C Rxf}WSLX,apo' );
define( 'AUTH_SALT', '[t!!SE@D&Nu`dp:1L~EKOBC4!z#r,=R4cN_/~g$56#(?X<~@grqq@(m a)?rxlq@' );
define( 'SECURE_AUTH_SALT', '%-?~%XzupUnnTk80:=Qv{CmD{%5yn{mYy7QvE*ntwJX,9>..`Gd9+ei~Kf2t/,JW' );
define( 'LOGGED_IN_SALT', 'F:zZhT9mp:Q/$r%8u6;B_M>H%Eelt^%V$dThqCWwb59:p+0%NY!Gb,J:1zVTWV>Y' );
define( 'NONCE_SALT', '&_>Jkq|8p{TbtCl{YnX>~~{vN!tH{jK+<V%[5)uj#Q>)Kj_51T*qefe,5>CvpzKH' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD','direct');