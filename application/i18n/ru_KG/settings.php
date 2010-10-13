<?php
	$lang = array(
	'allow_comments' => array(
		'between' => 'Поле о допустимости отправлять комменты заполнен неверно',
		'required' => 'Введите поле о допустимости отправлять комменты.',
	),
	'allow_feed' => array(
		'between' => 'Поле о ленте RSS заполнен неверно',
		'required' => 'Введите поле о ленте RSS.',
	),
	'allow_reports' => array(
		'between' => 'Поле о допустимости отправлять отчёты заполнен неверно',
		'required' => 'Введите поле о допустимости отправлять отчёты.',
	),
	'allow_stat_sharing' => array(
		'between' => 'Поле об отправке статистики заполнен неверно',
		'required' => 'Введите поле об отправке статистики.',
	),
	'api_akismet' => array(
		'alpha_numeric' => 'Поле Akismet введен неверно',
		'length' => 'Поле Akismet введен неверно',
	),
	'cleanurl' => array(
		'clean_url_disabled' => 'Ваш сервер не настроен для чистых URL. Настойте Ваш сервер до того как включить данную услугу. Для более подробной информацмм зайдите <a href="http://forums.ushahidi.com/topic/server-configuration-for-apache-mod-rewrite" target="_blank">post</a>',
		'clean_url_enabled' => 'Это позволит Ushahidi заходить на "чистые" сайты без вхождения на "index.php".',
		'enable_clean_url' => 'Позволить чистые URL',
		'title' => 'Чистые URLs',
	),
	'clickatell_api' => array(
		'length' => 'Длинна номера Clickatell API не должна превышать 20 символов.',
		'required' => 'Введите Clickatell API номер.',
	),
	'clickatell_password' => array(
		'length' => 'Длинна пароли Clickatell не должна превышать 50 символов.',
		'required' => 'Введите пароль Clickatell.',
	),
	'clickatell_username' => array(
		'length' => 'Длинна имени пользователя Clickatell не должна превышать 50 символов.',
		'required' => 'Введите имя пользователя Clickatell.',
	),
	'configure_map' => 'Настроить карту',
	'default_location' => 'Местоположение по умолчанию',
	'default_map_all' => array(
		'alpha_numeric' => 'Поле цвета содержит неверные данные',
		'length' => 'Поле цвета должен быть 6ти значным.',
		'required' => 'Введите поле цвета.',
	),
	'default_map_view' => 'Видеть карту по умолчанию',
	'default_zoom_level' => 'уровень Zoom по умолчанию',
	'download_city_list' => 'Получить названия из ГЕОназваний',
	'email_host' => array(
		'length' => 'Поле хоста Сервера почты слишком длинный',
		'numeric' => 'Хост сервера почты должна содержать только цифры.',
	),
	'email_password' => array(
		'length' => 'Длинна пароли сервера почты не должна превышать 50 символов.',
		'required' => 'Введите пароль сервера почты.',
	),
	'email_port' => array(
		'length' => 'Поле порта Сервера почты слишком длинный',
		'numeric' => 'Порт сервера почты должна содержать только цифры.',
	),
	'email_servertype' => array(
		'length' => 'Поле порта Сервера почты слишком длинный',
		'required' => 'Введите тип Сервера почты.',
	),
	'email_username' => array(
		'length' => 'Длинна имени пользователя сервера почты не должна превышать 50 символов.',
		'required' => 'Введите имя пользователя сервера почты.',
	),
	'google_analytics' => array(
		'length' => 'Поле Google Analytics должна содержать действующий Web Property ID в формате UA-XXXXX-XX.',
	),
	'items_per_page' => array(
		'between' => 'Поле количества на страницу  (Главный) заполнен в неправильном формате',
		'required' => 'Количество отчётов на страницу для (Главный).',
	),
	'items_per_page_admin' => array(
		'between' => 'Поле количества на страницу  (Admin) заполнен в неправильном формате',
		'required' => 'Количество отчётов на страницу для (Admin).',
	),
	'map' => array(
		'default_location' => 'Выбор провайдера карты происходит напрямую с провайдером. Выберите провайдера, получите API ключ, введите ключ на сайте',
		'zoom' => 'Zoom уровень',
	),
	'map_provider' => array(
		'choose' => 'Выберите провайдера карты',
		'enter_api' => 'Выберите новый API ключ',
		'get_api' => 'Получить API ключ',
		'info' => 'Выбор провайдера карты происходит напрямую с провайдером. Выберите провайдера, получите API ключ, введите ключ на сайте',
		'name' => 'Провайдер карты',
	),
	'map_settings' => 'Настройка карты',
	'multiple_countries' => 'Объеденяет ли Ushahidi несколько государств',
	'select_default_location' => 'Выберите местоположение по умолчанию',
	'set_location' => 'Кликните на карту чтобы указать на точное местоположение',
	'site' => array(
		'allow_clustering' => 'Кластерировать Отчёты по Карте',
		'allow_comments' => 'Позволить пользователям отправлять комментарии к отчётам',
		'allow_feed' => 'Включить новостную ленту RSS в Веб сайте',
		'allow_reports' => 'Позволить пользователям отправлять отчёты о событиях',
		'api_akismet' => 'Akismet ключ',
		'default_category_colors' => 'Цвет по умолчанию для всей категорий',
		'display_contact_page' => 'Отоброзить страницу контактов',
		'display_howtohelp_page' => 'Отоброзить страницу "Как помочь" ',
		'email_alerts' => 'Email для оповещения',
		'email_notice' => '<span> Чтобы получить отчёты по почте, пожалуйста настройте параметры Вашего email.</span>',
		'email_site' => 'Email Веб сайта',
		'google_analytics' => 'Google Analytics',
		'google_analytics_example' => 'Web Property ID - Formato: UA-XXXXX-XX',
		'items_per_page' => 'Количество элементов на страницу - Главный',
		'items_per_page_admin' => 'Количество элементов на страницу - Admin',
		'kismet_notice' => 'Защитите от СПАМА используя <a href="http://akismet.com/" target="_blank">Akismet</a> от Automattic. <BR /> Вы можете получить бесплатный API ключ в <a href="http://en.wordpress.com/api-keys/" target="_blank">WordPress.com user account</a>',
		'laconica_configuration' => 'Laconica аккаунт',
		'laconica_site' => 'Laconica Сайт ',
		'language' => 'Язык Сайта',
		'message' => '',
		'name' => 'Названия сайта',
		'share_site_stats' => 'Отправлять статистику в API',
		'tagline' => 'Заголовок сайта',
		'title' => 'Параметры сайта',
		'twitter_configuration' => 'Twitter аккаунт',
		'twitter_hashtags' => 'Хэштеги - Отделите запятыми ',
	),
	'site_email' => array(
		'email' => 'Email веб сайта введен неправильно',
		'length' => 'Длинна Email веб сайта не должна содержать менее 4х и более 100 символов.',
	),
	'site_name' => array(
		'length' => 'Длинна названия сайта должен быть не менее 3х символов и более 50 символов.',
		'required' => 'Введите название сайта.',
	),
	'site_tagline' => array(
		'length' => 'Длинна поля заголовки должна быть не менее 3х и  более 100 символов.',
		'required' => 'Введите поле заголовки.',
	),
	'sms' => array(
		'clickatell_api' => 'Введите ваш Clickatell API Номер',
		'clickatell_check_balance' => 'Проверьте Ваш баланс на Clickatell',
		'clickatell_load_balance' => ' Загрузите баланс на Clickatell',
		'clickatell_password' => 'Введите Ваш Clickatell Пароль',
		'clickatell_text_1' => 'Подключитесь к услуге Clickatell в <a href="https://www.clickatell.com/central/user/client/step1.php?prod_id=2" target="_blank">clicking here</a>',
		'clickatell_text_2' => 'Введите Вашу информацию Clickatell внизу',
		'clickatell_username' => 'Введите вашу Clickatell имя пользователя',
		'flsms_description' => 'FrontlineSMS бесплатная программа которая позволяет превратить ноутбук или мобильный телефон в центр управления. Установив, программа позволяет пользователям отправлять и получать СМС для большой группы через мобильные телефоны. Нажмите на кнопу для установки от FrontlineSMS.com',
		'flsms_download' => 'Скачайте Frontline SMS и установите на Ваш компьютер',
		'flsms_instructions' => 'Сообщения полученные в FrontlineSMS может быть синхронизировать с Ushahidi. Информацию о том как синхронизировать с Ushahidi, можно найти в <strong><a href="http://wiki.ushahididev.com/doku.php?id=how_to_use_ushahidi_alpha#how_to_setup_frontlinesms_to_sync_with_ushahidi" target="_blank">here</a></strong>. Вы должны получить ключ по ссылке чтобы синхронизировать с FrontlineSMS',
		'flsms_key' => 'Это ключ синхронизации Ushahidi',
		'flsms_link' => 'FrontlineSMS HTTP Post ссылка',
		'flsms_synchronize' => 'Синхронизировать с Ushahidi',
		'flsms_text_1' => 'Введите номер телефона подключенный к Frontline SMS в поле внизу',
		'flsms_text_2' => 'Введите номер без символов + или скобок',
		'option_1' => 'Option 1: Используйте Frontline SMS',
		'option_2' => 'Option 2: Используйте Global SMS Gateway',
		'title' => 'Настройка SMS',
	),
	'sms_no1' => array(
		'length' => 'Телефон 1 содержит неверные значения',
		'numeric' => 'Телефон 1 должен содержать только цифры.',
	),
	'sms_no2' => array(
		'length' => 'Телефон 2 содержит неверные значения',
		'numeric' => 'Телефон 2 должен содержать только цифры.',
	),
	'sms_no3' => array(
		'length' => 'Телефон 3 содержит неверные значения',
		'numeric' => 'Телефон 3 должен содержать только цифры.',
	));
?>
