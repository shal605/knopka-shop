<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'knopka' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '319924' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b3}1xSJb0q#nC*$yPm(y;lM]98TgSG6ONT_?[5)*n9fFhlXDPvcnOefe6c[,o xJ' );
define( 'SECURE_AUTH_KEY',  '$GV:Zyzf(2??4uwUrNA4xfc,.B~c:q)T4[Q![mjTfYlo;..;P oO:{Q^c`q#0Uo8' );
define( 'LOGGED_IN_KEY',    'shVix:Fi)y%,? Xi>n5Wmrh#n=v{]hH;|`3]P<U]E.7[,2]<4V!7;CfHh<mF!9 X' );
define( 'NONCE_KEY',        '425+ASQm@=Uw4EPlc,~K&HG77gIA~)szOKHC!yP%0=]avvWStWT1JwbOy:@u>Rqx' );
define( 'AUTH_SALT',        'Bu^Zfq,FE05^eH]S-G4jAsOiwK/{n*<uoy$b+u.C9mR`rJ 9|Mtd3~5fO8,&%6kv' );
define( 'SECURE_AUTH_SALT', 'lJG@p$9$}k*l?H?cXRN+pnJBA<(de~d ,40zt9<uq)PAr#iUA1H!`Eo) d}BsA8C' );
define( 'LOGGED_IN_SALT',   '7~[(9/O=jtzFuFM@W+U~2Xld^#Oy3Qaag!,5A9.-(5j<471}koH-t3WC^F|x_|PE' );
define( 'NONCE_SALT',       '#-?U$/8@:h@KQJ.QfM>0Aqwq9Z`{oA=^i`YO[e>v]b=sO.e~Z&mI1B!E~@YT1K|!' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
