<?php

/**
 * As configurações básicas do WordPress
 * Teste de alteração de arquivo para git
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'git-wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'q`r2RgWvk1%Be@(n7-M*JZi6Tx;O4e=H>H`ReYwuS7#HXW|@JUGL)3IV.!L}PLOc');
define('SECURE_AUTH_KEY',  'phv>(wbQu5H!rrWte)Ng6YE!Z;$^XHOY>ZMWxV]:3y}X!S0@1L#95a(kq(d0ux$o');
define('LOGGED_IN_KEY',    'yp1:=LPN0QJ.kPOI~O#Ig<=D|}c07$zN/Fiy@tvQSlO*N(V!SJ6-3PAf$yi#i$sf');
define('NONCE_KEY',        'mr9)}[YY$mj,M%S7&7wtrUS@enIO>eB8>s.[ 4K+Fs*6{ 5IMRDn7i#P5SOy&?x]');
define('AUTH_SALT',        '=zuwo~Yde>;)NN-pCLF`M|5(k!2l3Rh=2uM-sQ#XivC/JOz)T])A?+ecnKN3YjNY');
define('SECURE_AUTH_SALT', ',J)cC;CibS:0I;C,3oy?.J:T/$eeNqR_z I$-*FL72aYiY3n/+Q27<%|fZq[rGV>');
define('LOGGED_IN_SALT',   '9w8+T6`R*Bu$9CMIZj_b5UDNKi|z0~&-3Am@|-=ZOFKX[7af!fV5?hQ@)cH.J|7j');
define('NONCE_SALT',       'Z_Fn56~l[uts^vYRyEGVh66P]u/Dp5.:dU`P~&2-f/@> UR&XO^X1G{m4+2Y,O?6');

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
define('WP_DEBUG', false);

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
