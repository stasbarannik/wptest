<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'testwp');

/** Имя пользователя MySQL */
define('DB_USER', 'testwp');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'pass4TestUsr');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C_ZC~-Pk1tD? *-IS)Qn}]+_Yz!7bV4IQ[]!Z0^}# 4U)Zk5GKE]U?cd>dq}v;10');
define('SECURE_AUTH_KEY',  'R]Iy87O=BjTVHbsb?/99i;DN{xAb,2gE:c,K08]hfc;@?TUY d=l20,s#Y@`5TdF');
define('LOGGED_IN_KEY',    'JuMW.+d=zR$-?-H>Jh9nrSc{)k`rk6i)v&% ClY?]OR=XYPo)_<7Sq:7Uz}/=n4h');
define('NONCE_KEY',        'C<]Ap2V6w9yhM,:(3J8i&V{4(!uBH25T,nLKCBT.Wl;nib%?xS5%5VlD/_tSW<$7');
define('AUTH_SALT',        '<^8}0{`M`)wZ@[7A NXmTW?>Rx)#$z,>@G8)ADh{FxjT8#=.ccpT/WhuLZ+9=**k');
define('SECURE_AUTH_SALT', '&! @iKC&eJ(6?28XKv9~h!Piw|U$ja0Fv>+bp>Ayx`>eB5l<iQueaRt<dVuaSY96');
define('LOGGED_IN_SALT',   'Y60Pih.cz)T,NZ|h/Le~]wwO$s?X}fI](p/Q>wNu|bto]lUfR7]S&Db~b!%zU6!]');
define('NONCE_SALT',       'j1Em0MmVR^r]]+i8b*!vHy,W!y6;=n;@kxpvB;]U_S2VGCj_z~b+~kXNKc>@h2l0');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
