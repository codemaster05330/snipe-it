<?php

return array(
    'ad'				        => 'Directorio Activo',
    'ad_domain'				    => 'Dominio del Directorio Activo',
    'ad_domain_help'			=> 'Esto es a veces el mismo que su correo electrónico de dominio, pero no siempre.',
    'is_ad'				        => 'Este es un servidor de Directorio Activo',
	'alert_email'				=> 'Enviar alertas a',
	'alerts_enabled'			=> 'Alertas habilitadas',
	'alert_interval'			=> 'Limite de alertas de expiración (en días)',
	'alert_inv_threshold'		=> 'Umbral de alerta del inventario',
	'asset_ids'					=> 'IDs de Recurso',
	'auto_increment_assets'		=> 'Generar IDs de equipo autoincrementales',
	'auto_increment_prefix'		=> 'Prefijo (opcional)',
	'auto_incrementing_help'    => 'Activa la generación automática de IDs de equipo antes de configurar esto',
	'backups'					=> 'Copias de seguridad',
	'barcode_settings'			=> 'Configuración de Código de Barras',
    'confirm_purge'			    => 'Confirmar la purga',
    'confirm_purge_help'		=> 'Introduzca el texto "Borrar" en el cuadro a continuación para depurar sus registros eliminados. Esta acción no se puede deshacer.',
	'custom_css'				=> 'CSS Personalizado',
	'custom_css_help'			=> 'Ingrese cualquier CSS personalizado que desee utilizar. No incluya tags como: &lt;style&gt;&lt;/style&gt.',
	'default_currency'  		=> 'Moneda Predeterminada',
	'default_eula_text'			=> 'EULA por defecto',
  'default_language'					=> 'Idioma predeterminado',
	'default_eula_help_text'	=> 'También puede asociar EULAs personalizadas para categorías especificas de equipos.',
    'display_asset_name'        => 'Mostrar Nombre Equipo',
    'display_checkout_date'     => 'Mostrar Fecha de Salida',
    'display_eol'               => 'Mostrar EOL',
    'display_qr'                => 'Mostrar Códigos QR',
	'display_alt_barcode'		=> 'Mostrar códigos de barras en 1D',
	'barcode_type'				=> 'Tipo de códigos de barras 2D',
	'alt_barcode_type'			=> 'Tipo de códigos de barras 1D',
    'eula_settings'				=> 'Configuración EULA',
    'eula_markdown'				=> 'Este EULS permite <a href="https://help.github.com/articles/github-flavored-markdown/">makrdown estilo Github</a>.',
    'general_settings'			=> 'Configuración General',
	'generate_backup'			=> 'Generar Respaldo',
    'header_color'              => 'Color de encabezado',
    'info'                      => 'Estos parámetros permirten personalizar ciertos aspectos de la aplicación.',
    'laravel'                   => 'Versión de Laravel',
    'ldap_enabled'              => 'LDAP activado',
    'ldap_integration'          => 'Integración LDAP',
    'ldap_settings'             => 'Ajustes LDAP',
    'ldap_server'               => 'Servidor LDAP',
    'ldap_server_help'          => 'Esto debería empezar con ldap:// (sin codificar o TLS) o ldaps:// (para SSL)',
	'ldap_server_cert'			=> 'Certificado de validación SSL LDAP',
	'ldap_server_cert_ignore'	=> 'Permitir certificados SSL inválidos',
	'ldap_server_cert_help'		=> 'Selecciona este campo si estás usando un certificado SSL auto firmado y quieres aceptar un certificado SSL inválido.',
    'ldap_tls'                  => 'Usar TLS',
    'ldap_tls_help'             => 'Esto se debe seleccionar si se está ejecutando STARTTLS en el servidor LDAP. ',
    'ldap_uname'                => 'Enlazar usuario LDAP',
    'ldap_pword'                => 'Enlazar contraseña LDAP',
    'ldap_basedn'               => 'Enlazar base DN',
    'ldap_filter'               => 'Filtro LDAP',
    'ldap_pw_sync'              => 'Sincronización de Contraseña LDAP',
    'ldap_pw_sync_help'         => 'Desmarca esta casilla si no quieres mantener las contraseñas LDAP sincronizadas con las contraseñas locales. Desactivar esto significa que tus usuarios no podrán acceder si tu servidor LDAP no está disponible por algún motivo.',
    'ldap_username_field'       => 'Campo de usuario',
    'ldap_lname_field'          => 'Apellido',
    'ldap_fname_field'          => 'Nombre LDAP',
    'ldap_auth_filter_query'    => 'Consulta de autentificación LDAP',
    'ldap_version'              => 'Versión LDAP',
    'ldap_active_flag'          => 'Flag activo LDAP',
    'ldap_emp_num'              => 'Número de empleado LDAP',
    'ldap_email'                => 'Email LDAP',
    'load_remote_text'          => 'Scripts remotos',
    'load_remote_help_text'		=> 'Esta instalación de Snipe-IT puede cargar scripts desde fuera.',
    'logo'                    	=> 'Logo',
    'full_multiple_companies_support_help_text' => 'Usuarios restringidos (incluidos administradores) asignados a compañías de sus bienes de compañía.',
    'full_multiple_companies_support_text' => 'Soporte completo múltiple de compañías',
    'optional'					=> 'opcional',
    'per_page'                  => 'Resultados por página',
    'php'                       => 'Versión de PHP',
    'php_gd_info'               => 'Debes instalar php-gd para mostrar Códigos QR, ver instrucciones de instalación en <a href="http://www.php.net/manual/en/image.installation.php"></a>.',
    'php_gd_warning'            => 'PHP Image Processing y GD plugin NO instalados.',
    'qr_help'                   => 'Activa Códigos QR antes para poder ver esto',
    'qr_text'                   => 'Texto Código QR',
    'setting'                   => 'Parámetro',
    'settings'                  => 'Configuración',
    'site_name'                 => 'Nombre del sitio',
    'slack_botname'             => 'Nombre de bot en Slack',
    'slack_channel'             => 'Canal en Slack',
    'slack_endpoint'            => 'Terminal en Slack',
    'slack_integration'         => 'Configuración Slack',
    'slack_integration_help'    => 'La integración con Slack es opcional, de todos modos la terminal y el canal son requeridos si desea usarlo. Para configurar la integración con Slack, debe primero <a href=":slack_link" target="_new">crear un webhook entrante</a> en su cuenta de Slack.',
    'snipe_version'  			=> 'Version de Snipe-IT',
    'system'                    => 'Información del Sistema',
    'update'                    => 'Actualizar Parámetros',
    'value'                     => 'Valor',
    'brand'                     => 'Marca',
    'about_settings_title'      => 'Acerca de Ajustes',
    'about_settings_text'       => 'Estos ajustes te permiten personalizar ciertos aspectos de tu instalación.',
    'labels_per_page'           => 'Etiquetas por pàgina',
    'label_dimensions'          => 'Dimensiones de las etiquetas (pulgadas)',
    'next_auto_tag_base'        => 'Next auto-increment',
    'page_padding'             => 'Margenès de pàgina (pulgadas)',
    'purge'                    => 'Purgar registros eliminados',
    'labels_display_bgutter'    => 'Borde inferior de la Etiqueta',
    'labels_display_sgutter'    => 'Borde lateral de la Etiqueta',
    'labels_fontsize'           => 'Tamaño de fuente de la etiqueta',
    'labels_pagewidth'          => 'Ancho de la hoja de etiqueta',
    'labels_pageheight'         => 'Altura de la hoja de etiqueta',
    'label_gutters'        => 'Espaciamiento de etiqueta (pulgadas)',
    'page_dimensions'        => 'Dimensiones de la página (pulgadas)',
    'label_fields'          => 'Campos visibles de la etiqueta',
    'inches'        => 'pulgadas',
    'width_w'        => 'an',
    'height_h'        => 'al',
    'text_pt'        => 'pt',
    'two_factor'        => 'Autenticación en dos pasos',
    'two_factor_secret'        => 'Código de verificación en dos pasos',
    'two_factor_enrollment'        => 'Enrolamiento en verificación en dos pasos',
    'two_factor_enabled_text'        => 'Activar la verificación en dos pasos',
    'two_factor_reset'        => 'Reiniciar Secreto de verificación en dos pasos',
    'two_factor_reset_help'        => 'Esto forzará al usuario a inscribirse otra vez su dispositivo con Google Authenticator. Esto puede ser útil si la pérdida o robo de su dispositivo actualmente inscrito. ',
    'two_factor_reset_success'          => 'Verificación en dos pasos de dispositivo reiniciado exitosamente',
    'two_factor_reset_error'          => 'Falló la Verificación en dos pasos del dispositivo',
    'two_factor_enabled_warning'        => 'Permitiendo dos factores si no está activado inmediatamente obliga a autenticar con un dispositivo de autenticación de Google inscritos. Usted tendrá la posibilidad de inscribirse el dispositivo si uno no está inscrito actualmente.',
    'two_factor_enabled_help'        => 'Esto encenderá la autenticación de dos factores usando Google Authenticator.',
    'two_factor_optional'        => 'Selectiva (los usuarios pueden activar o desactivar si está permitido)',
    'two_factor_required'        => 'Requerido para todos los usuarios',
    'two_factor_disabled'        => 'Desactivado',
    'two_factor_enter_code'	=> 'Ingrese código de verificación en dos pasos',
    'two_factor_config_complete'	=> 'Enviar código',
    'two_factor_enabled_edit_not_allowed' => 'El administrador no permite modificar esta configuración.',
    'two_factor_enrollment_text'	=> "Autenticación de doble factor se requiere, sin embargo el dispositivo no ha inscrito todavía. Abra la aplicación Google Authenticator y escanear el código QR a continuación para inscribir a su dispositivo. Una vez que haya inscrito su dispositivo, introduzca el código de abajo",
    'require_accept_signature'      => 'Requerir Firma',
    'require_accept_signature_help_text'      => 'Para activar esta función se requiere que los usuarios firmen fisicamente aceptando el activo.',
    'left'        => 'izquierda',
    'right'        => 'derecha',
    'top'        => 'arriba',
    'bottom'        => 'fondo',
    'vertical'        => 'vertical',
    'horizontal'        => 'horizontal',
    'zerofill_count'        => 'Longitud de etiquetas de activos, incluyendo relleno de ceros',
);
