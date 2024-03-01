<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'bobo' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'HBSwmEu-b8o+`kF;}b6C9hH^|Sh,OCV.g=snR:,=^UCuilqPDe8w);m2G!gZ>Q{^' );
define( 'SECURE_AUTH_KEY',  'gfsNcT&%N.[7T=fq&#Q:KB=]/GCON9{hoL0s!6cbug^;nR|krX@g@_VSmg {<Ut$' );
define( 'LOGGED_IN_KEY',    'h.O]g.s%K(5LRMHQi/01DX$AM1|yR+OJPwu]?,2>WdCEvFU/tJyxCafUg~(rck,p' );
define( 'NONCE_KEY',        '%6^r#=0,luVL-&R$m(Y?>j}eU ~3a]ZZ~WY F6/C[n);S;d#JX+A:ev4x~2z{r1~' );
define( 'AUTH_SALT',        '|$n{PB>j]W,@RreYDLbJ:yJ1cZ?y/hPnUi|:|dKhm+@U<6-- <gzUVJh,q*3-[=k' );
define( 'SECURE_AUTH_SALT', '#S}p}ahP/R ~&139JtLQAJsfCXan[Co&Mxtk2Lz)3j!sTJib-5wi2C1=f>D^-?(c' );
define( 'LOGGED_IN_SALT',   'qn~viIlpR;kuN%ALh!zgR=%cKpC2/|`N}iPdV=E70JA;;5T_2L1&u @ug+AVzMpD' );
define( 'NONCE_SALT',       'H1]KUFH<_weK]F$)eguBr*dw9u>,K%6C(JIH5|YgoX$e>zX=9Bcvlg&MH t;1^x[' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
