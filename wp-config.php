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

define( 'DB_NAME', "yd397897_kost" );


/** Имя пользователя MySQL */

define( 'DB_USER', "yd397897_kost" );

 

/** Пароль к базе данных MySQL */

define( 'DB_PASSWORD', "magnolia555" );


/** Имя сервера MySQL */

define( 'DB_HOST', "yd397897.mysql.tools" );


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

define( 'AUTH_KEY',         '$$dT=SjpDfn%w[BJZQdQ1-N.C,Al|XPpzoT=KXw=1)%2>jc9|5rT#C+|!%1Lkx2a' );

define( 'SECURE_AUTH_KEY',  '- ZQI?P&R4I55!~0ERuT3rEralyWIA~)SoNEUXW<i_l)L0a4_0N#pW{nC|AElR`A' );

define( 'LOGGED_IN_KEY',    'y~KBw$6&&6^ylI2Bi(fDYA|aWj?U0SUPt)dApP:j3d0e*])cU{<-&kUrT6^<%(]o' );

define( 'NONCE_KEY',        '2V;(!CT[BJz~T7*p{-c?E1H2b^Qt+%9$CnY8;jmv|elnG$:U!BW=mYYJOtH(lvOQ' );

define( 'AUTH_SALT',        ';vlk|fyH2b[<+nJ@c1JI;I$[qrZ[!V0{8?@9IaAG`P=X~|v(2+=_Cj4G_{2[M0oB' );

define( 'SECURE_AUTH_SALT', 'yiF`S78FuTjSg-ZzX8n`!F]LGwCAm5Do$Sw`J0ld=+3j:/<x]q/iIM0*vciq~]XZ' );

define( 'LOGGED_IN_SALT',   'IE@@LG!S_C,NZ:b-<7E%^PhuO_ceZOP@F;v?^Pa$n6A:kb}US{SoESz/._[TDh9K' );

define( 'NONCE_SALT',       't#,V`,m*]mMi;p^OZU;uwnuTofe}2^E>x~GeF2d;b,NQlo?-,*$8bCt|O[@EHxY{' );


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

