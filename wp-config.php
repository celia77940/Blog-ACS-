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
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
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
define( 'AUTH_KEY',         '?7=UnqEv<|eGJ:I.eki30FFhGPe6i>6VJ:h)z(&t9$q9%^vEzxYN#!H0uxuX%Nc:' );
define( 'SECURE_AUTH_KEY',  'ZKe6~oN]?5#Wv7b4YQ<:e,@^jl#k4FRrzrjs9LzIt(cT!G+T5GHuVyuUK(LOz:KT' );
define( 'LOGGED_IN_KEY',    '{on4BHck7UN7nxUKFl:In>vcb%Ji-:z|@rR 6`D,lve;&Ho-:AS.U`[:m.< LQE/' );
define( 'NONCE_KEY',        'vGt__ZW9K[9t,Sc]/7#pX;|$oM;Fw-rp1IO`*%4@ucuhD[]S(nUN{tUa|yM>*TxJ' );
define( 'AUTH_SALT',        '90dX0)A5oC_+3=te2_8wPhPxpQC,{qY5pE0asU&wLmIaHeS.;)crtR1URi2aLv}c' );
define( 'SECURE_AUTH_SALT', 'JBYT-RRvT>ZaaRo. +&}%_Ke)`-AQRfp4()5i*dZ- _^Ps I4.@GeA=VX*vGiae&' );
define( 'LOGGED_IN_SALT',   '>Y+ObViN>MVw#4<?#iDX!,;#gPXAXj]h/X-CE.q}/te(0*@2z64tmXgLE#{=~qgg' );
define( 'NONCE_SALT',       '0l+h;&MZ@!.)THk4J?f_8/nLjrV5|,1~dz&u&mOsotu/W%fXr0xW%uJ/!$@=E}Rv' );
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
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
