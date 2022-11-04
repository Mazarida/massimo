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
define('DB_NAME', 'toaster_t16msimo');

/** Имя пользователя MySQL */
define('DB_USER', 'toaster_t16msimo');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'a48d1347f');

/** Имя сервера MySQL */
define('DB_HOST', 'sqlnew.101bot.ru');

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
define('AUTH_KEY',         'Zu%T$*o+fan$t2f?@QfK>STH$53t[50:1;3J8F}?LpP$Hv$<{}um7^zA/`p-3^}M');
define('SECURE_AUTH_KEY',  'xUmW=xMuMnoj,s_T3; !L.P*ELiYA%PkW/?7-3.yJ!=OevSH&jt00h+{O7&j`<V)');
define('LOGGED_IN_KEY',    '2H^P=5-.J@*P/oTg7Ht^@a_VXnjQem7<,!UMm22jKVJZ]3q:y[[)51%3?Mpao:W8');
define('NONCE_KEY',        'g*x1?l%pmmfz?E)=ECT|y}{QVUUV;e|U,B@0`A%UNzzWKVLYLzk5nN0CpW;DWRr4');
define('AUTH_SALT',        'wm+RT#=dbh+K#r{2Pv[F5N@wb;=;$MHYj1I?_BF8#uXq!j@jQI#-/YPnX<i1kx&6');
define('SECURE_AUTH_SALT', '4 5hlZ~}EFzmF{rIy0&cp~WNHmF:QEC1rqj}Y.XZp4<,+[0`oc{201{2,H^)G)Ry');
define('LOGGED_IN_SALT',   ' 5FPkSEumweD>]REu<a[eUEet $rmi7~aZb!a,xR#R[h3&CyF|<IDfIg S%j%0Kk');
define('NONCE_SALT',       'H,wr!1:%Q{ZLNC5E`+]%5!%;5xBDLxiY@x1DVq<FzVDtz8Vgig&R{x*wXuNK`fw;');

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

//define( 'WP_CONTENT_URL', '/assets' );
define( 'WP_DEFAULT_THEME', 'ma' );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
