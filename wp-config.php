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
define( 'DB_NAME', 'e-wings' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'E-wings_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'E-wings12345' );

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
define( 'AUTH_KEY',         '3]&]6d,x`hrw@`07cSK+WnpyPa?|:{pyRKwbv%9f&,_!goouPn7}5TpR:ZR8j=A%' );
define( 'SECURE_AUTH_KEY',  '!s9D sodE=tRA|5p%qfR{I!+rizy5VL9K5Wp.3Px8ZvWUUPDMxX=uNN|S_%l(/*w' );
define( 'LOGGED_IN_KEY',    'g0~Ogf&kwh/(%@UnCo[:H$pU*|emGnq[X-e)5Dw^d|O}g7<9DVDFVnMx|mi58W~m' );
define( 'NONCE_KEY',        '3[Rq8zr}U|f?lyGz`}-WMSs?t{M& 70J.EblZ#ymU[lRR8QnaE@1U[J.}c|WRf_h' );
define( 'AUTH_SALT',        'Ox+K@ci*5e^O[Fb>*YY5yy1JGdlV`Pm{#.Wj+din?N`:W`?F;jQ/v*CQIh,*E*B`' );
define( 'SECURE_AUTH_SALT', 'jtvA$]$bNJ9as//3rN8ODr-w{2l5rqSV<&#tbjYcrWBwQV`G]bM.a<u*]d+xlT>Y' );
define( 'LOGGED_IN_SALT',   'sm:nz%Y<>@(mXLAY;FQ~=0,r0$lN@7]tdd%e)$ZhBHH)2TF2>8#Lw.&]~)E@,c^b' );
define( 'NONCE_SALT',       'POx+IW%:YK/5Fx(Dc.ZLW1D_<*[+2,-czOE.SsCXNUWOF#kuA8R>2}@=0lntV&^w' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
