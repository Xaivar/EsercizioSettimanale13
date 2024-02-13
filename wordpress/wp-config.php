<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'eserciziosettimanale13' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1=!(ZU@Jk_OZ8n{CGR%Cq![&(=jF&xwg,-MhKVw|22pn`XMVqZ4S0D(3y!wM=)Z|' );
define( 'SECURE_AUTH_KEY',  'z5SUn?7@gd@)j]<u/Ap]FpxEe~f@b67;hYg2|(krBo<*zwIi)ceQ+g+}p74qR`a:' );
define( 'LOGGED_IN_KEY',    'jR%zLkf*%5[W{o`Z~_)prPUoj2[Wr+=iqfs5vuKC1J:QUOl,N!pk4;sK24Q;ZX=!' );
define( 'NONCE_KEY',        'Ze|urkG8lUjh`||htOMsiI:7.QmcLSa_0G`]?YQDP> u`HT4dP(Dqr_j)KBmx+av' );
define( 'AUTH_SALT',        'pTRDUxvQ+P;6zxUJz.9M;P,xj3% /=T;Jv3[()Z#Zeo%17Ogfic@Ufa1454dZ/kt' );
define( 'SECURE_AUTH_SALT', 'c}=iZ9_qY|Vj5P-F3T6BBbh3ZcV;zzTr-,fVKFr;)<wUk:p3iMIgK}I[i06l1Q]3' );
define( 'LOGGED_IN_SALT',   '}Xnk{)Gg5n>*0-1QJ59:Zh_KPSSn&v_mtNQ{e<{YB[~Q-Z$],o=A@]X&EW0^Gd@u' );
define( 'NONCE_SALT',       '4AdbF=l~Kprafk>:G$^9VcN>}^<$TwF)o$zh}7K,ao&;NN:2Nt/IhqsRC.ioi(B5' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
