<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory domain',
    'ad_domain_help'			=> 'This is sometimes the same as your email domain, but not always.',
    'is_ad'				        => 'This is an Active Directory server',
	'alert_email'				=> 'Посылать уведомления на',
	'alerts_enabled'			=> 'Уведомления включены',
	'alert_interval'			=> 'Expiring Alerts Threshold (in days)',
	'alert_inv_threshold'		=> 'Inventory Alert Threshold',
	'asset_ids'					=> 'ID актива',
	'auto_increment_assets'		=> 'Генерировать автоматическое возрастание идентификационных номеров активов',
	'auto_increment_prefix'		=> 'Префикс ( не обязательно )',
	'auto_incrementing_help'    => 'Включить автоматические возрастание ID активов начиная с',
	'backups'					=> 'Резервные копии',
	'barcode_settings'			=> 'Настройки штрихкода',
    'confirm_purge'			    => 'Подтвердить удаление',
    'confirm_purge_help'		=> 'Введите "DELETE" в поле ниже для подтверждения удаления. Это действие необратимо.',
	'custom_css'				=> 'Пользовательское CSS',
	'custom_css_help'			=> 'Введите любое пользовательское CSS, которые вы хотите использовать. Не указывайте &lt;style&gt;&lt;/style&gt; теги.',
	'default_currency'  		=> 'Валюта по-умолчанию',
	'default_eula_text'			=> 'Пользовательское соглашение по умолчанию',
  'default_language'					=> 'Язык по умолчанию',
	'default_eula_help_text'	=> 'Вы так же можете привязать собственные пользовательские соглашения к определенным категориям активов.',
    'display_asset_name'        => 'Отображаемое имя актива',
    'display_checkout_date'     => 'Отображать дату выдачи',
    'display_eol'               => 'Отображать дату истечения срока гарантии в таблице',
    'display_qr'                => 'Display Square Codes',
	'display_alt_barcode'		=> 'Display 1D barcode',
	'barcode_type'				=> '2D Barcode Type',
	'alt_barcode_type'			=> '1D barcode type',
    'eula_settings'				=> 'Настройки лицензионного соглашения',
    'eula_markdown'				=> 'Это EULA поддерживает <a href="https://help.github.com/articles/github-flavored-markdown/">форматирование Github flavored markdown</a>.',
    'general_settings'			=> 'Общие настройки',
	'generate_backup'			=> 'Создать резервную копию',
    'header_color'              => 'Цвет заголовка',
    'info'                      => 'Эти настройки позволяют персонализировать некоторые аспекты вашей установки.',
    'laravel'                   => 'Версия Laravel',
    'ldap_enabled'              => 'LDAP активно',
    'ldap_integration'          => 'Интеграция LDAP',
    'ldap_settings'             => 'Настройка LDAP',
    'ldap_server'               => 'Сервер LDAP',
    'ldap_server_help'          => 'This should start with ldap:// (for unencrypted or TLS) or ldaps:// (for SSL)',
	'ldap_server_cert'			=> 'Подтверждение SSL сертификата LDAP',
	'ldap_server_cert_ignore'	=> 'Разрешить невалидный SSL сертификат',
	'ldap_server_cert_help'		=> 'Выберите галочку если вы используете самоподписанный SSL сертификат и хотите принять невалидный SSL сертификат.',
    'ldap_tls'                  => 'Use TLS',
    'ldap_tls_help'             => 'This should be checked only if you are running STARTTLS on your LDAP server. ',
    'ldap_uname'                => 'Имя пользователя LDAP Bind',
    'ldap_pword'                => 'Пароль LDAP Bind',
    'ldap_basedn'               => 'Основной Bind DN',
    'ldap_filter'               => 'Фильтр LDAP',
    'ldap_username_field'       => 'Поле имени пользователя',
    'ldap_lname_field'          => 'Фамилия',
    'ldap_fname_field'          => 'LDAP Имя',
    'ldap_auth_filter_query'    => 'Запрос аутентификации LDAP',
    'ldap_version'              => 'Версия LDAP',
    'ldap_active_flag'          => 'Активный флаг LDAP',
    'ldap_emp_num'              => 'Номер сотрудника LDAP',
    'ldap_email'                => 'Email LDAP',
    'load_remote_text'          => 'Внешние скрипты',
    'load_remote_help_text'		=> 'Данная установка Snipe-IT может загружать внешние скрипты.',
    'logo'                    	=> 'Логотип',
    'full_multiple_companies_support_help_text' => 'Ограничить доступ пользователям (включая админов) только активами их компаний.',
    'full_multiple_companies_support_text' => 'Полная поддержка нескольких компаний',
    'optional'					=> 'не обязательно',
    'per_page'                  => 'Результатов на страницу',
    'php'                       => 'Версия PHP',
    'php_gd_info'               => 'Для отображения QR кодов необходимо установить модуль php-gd.',
    'php_gd_warning'            => 'Библиотеки PHP Image Processing и GD plugin не установлены.',
    'qr_help'                   => 'Включить QR коды',
    'qr_text'                   => 'Текст QR кода',
    'setting'                   => 'Настройка',
    'settings'                  => 'Настройки',
    'site_name'                 => 'Название сайта',
    'slack_botname'             => 'Имя бота в Slack',
    'slack_channel'             => 'Канал в Slack',
    'slack_endpoint'            => 'Slack endpoint',
    'slack_integration'         => 'Настройки Slack',
    'slack_integration_help'    => 'Интеграция в Slack опциональна, однако endpoint и канал необходимы, если вы хотите использовать её. Для настройки интеграции в Slack вы должны сначала <a href=":slack_link" target="_new">создать входящий webhook</a> в своём аккаунте Slack.',
    'snipe_version'  			=> 'Версия Snipe-IT',
    'system'                    => 'Информация о системе',
    'update'                    => 'Обновить настройки',
    'value'                     => 'Значение',
    'brand'                     => 'Фирменный стиль',
    'about_settings_title'      => 'О настройках',
    'about_settings_text'       => 'Эти настройки позволяют персонализировать некоторые аспекты вашей установки.',
    'labels_per_page'           => 'Этикеток на странице',
    'label_dimensions'          => 'Размеры наклеек (в дюймах)',
    'page_padding'             => 'Поля страницы (в дюймах)',
    'purge'                    => 'Очистка удалённых записей',
    'labels_display_bgutter'    => 'Label bottom gutter',
    'labels_display_sgutter'    => 'Label side gutter',
    'labels_fontsize'           => 'Label font size',
    'labels_pagewidth'          => 'Label sheet width',
    'labels_pageheight'         => 'Label sheet height',
    'label_gutters'        => 'Label spacing (inches)',
    'page_dimensions'        => 'Page dimensions (inches)',
    'label_fields'          => 'Label visible fields',
    'inches'        => 'inches',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'text_pt'        => 'pt',
    'left'        => 'слева',
    'right'        => 'справа',
    'top'        => 'сверху',
    'bottom'        => 'снизу',
    'vertical'        => 'вертикально',
    'horizontal'        => 'горизонтально',
    'zerofill_count'        => 'Length of asset tags, including zerofill',
);
