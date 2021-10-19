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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'bronya' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'debian-sys-maint' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'PuemdEyb6pQeP5WR' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1Wd-U/5Zv*?/&:@!T[/0r{#Q=wsXq~NB4]7H36V;=P7#% jeyc^akL*Xl<C79]YU' );
define( 'SECURE_AUTH_KEY',  '^VElP0Ro>u8Dsy|%Pis*wg50<ndPCn1@rI{&Zl5I^.$e+g3ZeuOQB,`L!t.k50P$' );
define( 'LOGGED_IN_KEY',    'K:v3DGrfH2W4IA.w9_Ox_L6k.Y@K X$^vy@x~nV]!ATt)T<^3&3oj?B-)}E@]T:7' );
define( 'NONCE_KEY',        'f8Pa0Y%F07?yhm[sh6Tl`DTJ7arddP$Q8FQ|d5kij7O=&Opx=;fglk?dSs0vY|~~' );
define( 'AUTH_SALT',        'lhe{O([wtF`z(nz7CxlO%7J# /49QaGOye:05c--O)rDGD+hV;#gbTSIclE-*y|;' );
define( 'SECURE_AUTH_SALT', 'e3n,*0qr7Bg17`UgX@KA#O9lPV=$hMvWl,aFA3TSU(FjR17HnM&xBlXzF5t&Y3]t' );
define( 'LOGGED_IN_SALT',   'L =`^LqoyTz&*K`x{c#{OswGOD1~TRc`U+4N|Rd^?b9S#r[lw(OW#V(yfq2;X1l9' );
define( 'NONCE_SALT',       '_nKFFuQD<z2rf0vvM5dWfF]M!Kz-vv1>5A]i&9!UCJok(qza_N-bFVf?`}$4O]Iz' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
