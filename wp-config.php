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
define( 'DB_NAME', 'wordpressData' );

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
define( 'AUTH_KEY',         '{k@Y3oJPu3;S0g z/hFj3TFi?z=u%/}J@+5BwJ_T%4Ll<]@_<,ipiQ{Sf(6GpWnR' );
define( 'SECURE_AUTH_KEY',  'iMPAj+y[PMQc|ropu]$G:qnX5V0s<g&!i)DbI603[tHGT_~v_ANJ`irvDU4hQJCf' );
define( 'LOGGED_IN_KEY',    'rJ|5%w+}$:Nw%`$}dw t+CZ*f{r!B,pH${Nfv{j!]bUjJ=!i[*I.fn V,<p4YA6W' );
define( 'NONCE_KEY',        '#3@-H[_t#09) pG*<4<up4c<d&j-Rpu#&H-[=u!h(OhfZzT@Y~e{2b0m=nS1SiGc' );
define( 'AUTH_SALT',        'atG)g@02<{M7iEix:9/VxS|A3V![v/%D-W6cYIAFofa-`2!f<Z}Zp0I:1(%|{ni5' );
define( 'SECURE_AUTH_SALT', 'RV3 ]dRF- Ys|}t<L3yHF5R>T[`vF:>#dpBC{nQ,?%?PI(]@BHUWR@$%pkN%.:gS' );
define( 'LOGGED_IN_SALT',   'M=,x#*/(H[5(7s7K<6tc}l8;O@19R3w3;F|`Rb1(DNg9+`).HdSH73l^B%(v;(?$' );
define( 'NONCE_SALT',       '(L(m%GQ7]C)Jt-EAI?Czq71Ms^[i]L&auP55i5Fxq)oOi7T<N1I{{M;1LrN_$$j6' );
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
