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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'ClubedaPele');

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
define('AUTH_KEY',         'RKR0EZX=4iZv4ZC5vn.PRC77gXA)dOLPyNO;1C<-7^IPy9O$(xr@C#[lT;nC6U,#');
define('SECURE_AUTH_KEY',  '_+nm+u;4J~%wf`8mAzHbpi4}OlnK)t>Dt9WU9:T[bn_JwcA9.ToUHia3Y3^cI*]|');
define('LOGGED_IN_KEY',    'sk5Z/nX<<:s`xm`NyCL#</;xM-y3$I{eS|{6N4Jh(!fA=th0pbE}z@%N,w]3R)V2');
define('NONCE_KEY',        '*txQsZ<bv)x%ea0NG?ByCgapo&a[f-|fY3}xu,#$[aB`eWT!yvuulGIGrla3{Gnn');
define('AUTH_SALT',        'Z&}is]V<g8Zq*a!Gm5,W:dXP{?Qzrngvbm iz%k,ELq7RtQV9T#bsy5a.]4+TtU%');
define('SECURE_AUTH_SALT', 'y^towledkj8`8n|U@AVora8GcWLJkD!)GijI~}MObL4<aKc%NfX_0x-X8xGZhBaO');
define('LOGGED_IN_SALT',   '9z<ykAdi,2}R?(e[@{w?h7s2h0/a9jMN=_SHBJmb-#M4[p6k:0TzVu|p&z%U=%gj');
define('NONCE_SALT',       'GCP-._M<kIdD5t4lZcY6:m|?{cOZgLYFY.a*|7E{8Y^>I0HQbUow2Izf9Itep?s4');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
