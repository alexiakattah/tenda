<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'tenda' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'G*iz?LueQBAW8Dccg5G(YIQ{;Jvo>bs(6i2GF20T=<W`i1k{$Xv)rCG@:Y_2M1OO' );
define( 'SECURE_AUTH_KEY',  ']-7Tjl Ov|{.;9KX}24H{&*J678%sUZ[+#E,T8l=Ib$c(o%+rMmk~8k>aLU|TEKf' );
define( 'LOGGED_IN_KEY',    'X~X3Ikjm|?,lR7&v<Qm,6:49L@$Gp1x6%o>-aaK+;<YI=&vm<^-.Bv> 1xh6Y&H%' );
define( 'NONCE_KEY',        'ts-V6-# f~TrBIuSp`Y`ntQ,JvOEAK%b2Zjbk(z>>m`mFW?I(_C!WRbf0#:u)pYP' );
define( 'AUTH_SALT',        'i7|5aEuQX_HuEvDF=%TyK-)j>3J2J>S.-<j(J9Zad;Q_jPz]6-59r&l<G!.F^.r~' );
define( 'SECURE_AUTH_SALT', 'Yi!3@IO;fU90R !Su)k8J{jS^E>Uo_-XYx!A`<jGjMA,e7^Uw6c@pv~B]P.^woVQ' );
define( 'LOGGED_IN_SALT',   'Ew?Ktc9}uh?gz{8@#<9P_*~J0=NZ%Y[/hoO0CL=bo8FJyCh;Yh%~Dt4~LR6UcE;l' );
define( 'NONCE_SALT',       '}wHrQw_oCy#i!6aVrQH=g+:)ApQ,O!2FUxk[N8qF/9a/0Vogi3F?k?y_ZJzKHXv,' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
