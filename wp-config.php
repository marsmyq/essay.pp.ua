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
define('DB_NAME', 'albemarl_essay.pp.ua');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'BP52r25CaK/kL.vau#81[x %VmECRceOk@-C:Epsb@^*e^_2m{.13^vg_t@?xih&');
define('SECURE_AUTH_KEY',  'e0hfQTRd-rl$(EZ~HmaK4$ $;Glb.;F*HKV=iyvr0Y+-jnlySvtV)/Ih261e$1<T');
define('LOGGED_IN_KEY',    'j,Ju#A(B 2b_F%%yUQ F8It ccz!_qH1o#I!.$AyU(1B)YLAFhF$rkzZ;6.mQ/6w');
define('NONCE_KEY',        '7<BBVnsWcLaw?prL^AJqo<Sutqr$9~Qde 7u9;d#=yM}j,;;?l+e3|3Fo/w|Q569');
define('AUTH_SALT',        'SU1g;1`Df<OC9f6J~EUhTEj>aM_5R5^k<me-za7 /c,by$s1tT0,h$-44{i?_L!2');
define('SECURE_AUTH_SALT', 'of5a`K]-hq&B6-yr^s57HNu)Imsmr}*j>0whTx2VqZ6J1TZ%3.}yk_IHoIJctaaQ');
define('LOGGED_IN_SALT',   'BAf@W#*8;H]1FN@LJ-FNEm>bth%ZK`HhS*5jY>O%xlX_U-S&-H9^=8FgG[YkT9|=');
define('NONCE_SALT',       'N, ??fQ&5*c?;00=wtLMYfl5qH;U?U<sSfHi1DWzS@&@+_:0?;}bYF|k#9dkv,Ub');

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
