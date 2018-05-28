<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'db693736506');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'dbo693736506');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'R89Lm12wsX5,');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'db693736506.db.1and1.com');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'U.is8,iOio@z83jNX.ve?&h^g-&JMXX=A01C(1trf7,4o-A0~{nYcf-A_[zKQ0i6');
define('SECURE_AUTH_KEY',  '-rdtdQ+?oR3|6mE(BVljvt pwiUV$18&,po.BT^H&bDw$.yrW_4@bgJz:o6q7dF.');
define('LOGGED_IN_KEY',    'H2t}3r8A(u!1HKnT9thj91a^wh3v v4?xo6xbR[qhjX: VaeVJFh!X%#jdjjC-,x');
define('NONCE_KEY',        '-&ee3zZK}]`oTcksp7aMM_8Y3Z<FVUm68UPXu1Wnb/)$13)c~J<L^CxHH+%aR4-G');
define('AUTH_SALT',        ';A%HxXB_5s0=*sW^H%3zpo+3X0B/+_^r#F65!X<)Tir7bgz]I0@{0zCgT>IWF4id');
define('SECURE_AUTH_SALT', ':5y.$ &FoIVahQkXDMI2ReL~1r)-W3CGjp_GH|3sH>Li4|m4vUIQO~}zRCc&4;@F');
define('LOGGED_IN_SALT',   '_WP[8CWp0vaZR`Tf*/?^?NPqB.#g[v`G!cDsrLPc|gjmS]0_{A0}[!7HheBe[[ZG');
define('NONCE_SALT',       ':[@@m)5X>4EN`9`!N_di0u}m4)EBc @)zKo>UN6rUz99/N:z}qR6P7NqUIjsB{%i');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'st_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');