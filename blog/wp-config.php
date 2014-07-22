<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'boxon');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@qeK,03a-k.W~83kqhbNK?V[y|3j[:K! b7KG|z/^yzFeUw6#J7_Y<D+8W.H5@NG');
define('SECURE_AUTH_KEY',  '-sJGNjFb;(.1-~JyiTG%6os1X1ol<H*Wc]d,l4Cy+_vhfErDu%Kb1A6pKh N-ce%');
define('LOGGED_IN_KEY',    '>!?Rx*v|ZpxAP-h^d<-i|jDTtHa9+JRQ)?|B%on]K0wPgda2V$OcshU^U2){>hPB');
define('NONCE_KEY',        '(C:dI?;pw@Y{Oi`G%gDveB|./|}c1/wZjl5J6:$79W#*4W?G{[Stat`^XUD{/Iy ');
define('AUTH_SALT',        'h,0-|*f*:{yH[//J7m-F^l -ZN&,^{zjd(-.[6;.2QA3njqH:Kx-)4.)if)$N4Wa');
define('SECURE_AUTH_SALT', 'h-jJ;kJfRJ,thluN+kq-BQ+y|G!*49]7Zo|aKm1av}T{,Q}q_Hm.nl?FLM.v65VM');
define('LOGGED_IN_SALT',   'U+S+gK!|ON|-lDg16+@#mo*$^840<pwT?KJh{dC:Mn|y*@;N2Bx{R CjPaEG`|D2');
define('NONCE_SALT',       'ENQinM8-5r0GR<PGlBuM}D..P* s!R)bod.V)]ZLx8sQ`kFJI,Av4zrlu!S.1W]w');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');