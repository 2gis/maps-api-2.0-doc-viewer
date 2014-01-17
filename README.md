## Описание
Приложение для просмотра документации в стилистике сайта api.2gis.ru

## Установка
1. Склонировать репозиторий
2. Настроить Nginx. Пример конфигурационного файла (/etc/nginx/sites-enabled/docviewer.local):

`
    server {
        set $host_path "/var/www/maps-api-2.0-doc-viewer/app";
        access_log  /var/www/maps-api-2.0-doc-viewer/access.log;
        error_log   /var/www/maps-api-2.0-doc-viewer/error.log;

        server_name  docviewer.local;
        root   $host_path;
        set $yii_bootstrap "index.php";

        charset utf-8;

        location / {
            index  index.html $yii_bootstrap;
            try_files $uri $uri/ /$yii_bootstrap?$args;
        }

        location ~ ^/(protected|framework|themes/\w+/views) {
            deny  all;
        }

        #avoid processing of calls to unexisting static files by yii
        location ~ \.(js|css|png|jpg|gif|swf|ico|pdf|mov|fla|zip|rar)$ {
            try_files $uri =404;
        }

        # pass the PHP scripts to FastCGI server
        #
        location ~ \.php {
            fastcgi_split_path_info  ^(.+\.php)(.*)$;

            #let yii catch the calls to unexising PHP files
            set $fsn /$yii_bootstrap;
            if (-f $document_root$fastcgi_script_name){
                set $fsn $fastcgi_script_name;
            }
        fastcgi_pass  php-local;
            include fastcgi_params;
            fastcgi_param  SCRIPT_FILENAME  $document_root$fsn;

            #PATH_INFO and PATH_TRANSLATED can be omitted, but RFC 3875 specifies them for CGI
            fastcgi_param  PATH_INFO        $fastcgi_path_info;
            fastcgi_param  PATH_TRANSLATED  $document_root$fsn;
        }

        # prevent nginx from serving dotfiles (.htaccess, .svn, .git, etc.)
        location ~ /\. {
            deny all;
            access_log off;
            log_not_found off;
        }
    }
`

3. Сконфигурировать приложение. Файл конфигурации находится по адресу `app/protected/config/main.php`. Параметры для конфигурации:

    // application params
    'params' => array(
        'docDir' => 'http://maps.api.2gis.ru/2.0/doc',
        'menu' => 'http://maps.api.2gis.ru/2.0/doc/menu.json'
    )
* docDir - адрес публичного каталога, в котором находятся подкаталоги с .html файлами документации.
* menu - адрес, по которому доступен файл menu.json