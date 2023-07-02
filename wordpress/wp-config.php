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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'colivein' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'colivein' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'colivein' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'v-%[M5_>XsL{u=;FFU6YI4m_}M0Vf or(z?xBzH/-<ov,J_@?z8;(*B*-}5%yqf4' );
define( 'SECURE_AUTH_KEY',  'tUf=~W)FpH@Jh+HoKCj>i:+&dl$Lu]IV {xs3/I%Hlozh*H:B2Y+6LZTDgTU7x.d' );
define( 'LOGGED_IN_KEY',    'c^^0pv%1[AYB+#bE~,vdD!E8~<N^K]dK^_OQywK#=C`7f<S^q-._KE7s>FvxsQ$u' );
define( 'NONCE_KEY',        'N^s.>t,f~>D{(LW(FCKN*mQBNLqL7(PC5;%u}nGx~t3G^3WnIv:a*>]p tze1-8*' );
define( 'AUTH_SALT',        'Kv#/C3(l|D]Bwrq1]Qn~M[~xV_kxGr-:}s2B}o^ Qp no *-C#OSZp=%cY>9yrPO' );
define( 'SECURE_AUTH_SALT', 'Z_I$6)x&];YXk4!# |!r^`Gc~--%k+3CMcAMB.U&+S2/QZCCi=MFYY]]gj s!y15' );
define( 'LOGGED_IN_SALT',   'C!:^ddohKV)A3{Mn,o%0>s^Na{)T:Z Q{5m[H!1vW0ZUBo(WdCyR.vMz:+_&6{Qe' );
define( 'NONCE_SALT',       'Imx|F; Mz*gfkB< Ba@}EHoizXGOe%s 0l};$$uz?SWNHVWQz`$p!ezv0zhcqZ{c' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
define('FS_METHOD', 'direct');
/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
