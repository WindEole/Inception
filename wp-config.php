<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USR', 'iderighe' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PWD', 'iderighe' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'mariadb' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. ATTENTION : utf8 code sur 3 bytes, utf8mb4 code sur 4 bytes, c'est mieux !*/
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
#define( 'AUTH_KEY',         'mettez une phrase unique ici' );
#define( 'SECURE_AUTH_KEY',  'mettez une phrase unique ici' );
#define( 'LOGGED_IN_KEY',    'mettez une phrase unique ici' );
#define( 'NONCE_KEY',        'mettez une phrase unique ici' );
#define( 'AUTH_SALT',        'mettez une phrase unique ici' );
#define( 'SECURE_AUTH_SALT', 'mettez une phrase unique ici' );
#define( 'LOGGED_IN_SALT',   'mettez une phrase unique ici' );
#define( 'NONCE_SALT',       'mettez une phrase unique ici' );
#
define('AUTH_KEY',         '3YC%ckkq^*$^Awf5NwG;c^:w/DR5JXn.nH6bx8[+|B?$SmGf:cI!Q`u+Sir<.D{G');
define('SECURE_AUTH_KEY',  'Q0TTZI5-384s/=)dLf+nFQ~*#OlC-xZO/ lB)G5-{rS8)(t?_LdTq6902SMv[- a');
define('LOGGED_IN_KEY',    ':+1|TvuY1#R(=Lp9h)1Jv+4Tl2e&|~UEiN!jsa(=_G07hx0NlQTiS/<47jq#Ha80');
define('NONCE_KEY',        '#b6jxSa;PJ)Ifyw#=E%(h2}WVM/9>GZ1|f]e4LslCij@gl*{e@J2Sez<hXCY7RXT');
define('AUTH_SALT',        '#%aVu(k|/ihFqk{Dj<i#js%)6t8.:G-1^07&jW`|Pa I#m{+jnz#pR^tzQ%p+tDb');
define('SECURE_AUTH_SALT', 'sC;> ^@DXFpMdM1 rE`uvp3|IBD+~NLk fM,G+,v_:+_dMmaDZmX{<1^`T!0Js25');
define('LOGGED_IN_SALT',   'wTki~VD25>kzC7HzgRp{{k>HP5@p#$G0X^TQQp=%a<1K6$Tb`6a+JO!utYOD~q2?');
define('NONCE_SALT',       '{+BY}_elO2|}.H5Oxs|OR/&bVFZe}H`)@z=mco17>{JKDw02&gh82`5M>a@MV%+.');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', '/var/www/html/wordpress' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
