<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'copacabana');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'l#7Kk*2|-xVq!xc(>MLl?jkW0+Bs*PNe_s:*:Z^Y->0tsREQYXPB>-yVK@:z@s4d');
define('SECURE_AUTH_KEY',  '~A#DmLLowLJvc4:*~ovl=M=khkS FJEit77Kim}K>b9]MtSCtcmLJ)FH)*?Z&8d ');
define('LOGGED_IN_KEY',    'a=Tz3Pg }?fwmG<CGP$o*mMM7^MFN_&K<Iv|PP8-?*J~*17wNhUk2dn(IW3kG7Q>');
define('NONCE_KEY',        'ZN@$~X1i.?-k;^.|(Lp,LU,#[|Ef3^XyfTX}c*YIZ6w6m(05 q`ZFE4:)+tq6>#Q');
define('AUTH_SALT',        'Av!K|Np~Wa-B%(-i7Xkm|eH,^1&y!R/h2&Cb+1y{OnU~+q|:}Db:K*XSlc+(y|J3');
define('SECURE_AUTH_SALT', '7!8d< L]cstoZ1 1cof?cu_b0 ][8XUy0-2+JlDOj]DSL.VDxF3V6!kb Ug(YTZ_');
define('LOGGED_IN_SALT',   'kAQE&|X/lx2++Nwrhwaf2LPjW]K?,(W|O*3oAK~>oL<5=,XXS]I[7(1@iA-Ru%xf');
define('NONCE_SALT',       'E}|:&;rLy]WD.S&0zg(caj-| &Hc,q+{k;hA{|{tf~KG6+]DX72BsW(c|B6`|pjJ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
