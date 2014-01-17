## Описание
Приложение для просмотра документации в стилистике сайта api.2gis.ru

## Установка
1. Склонировать репозиторий
2. Настроить Nginx. Пример конфигурационного файла (/etc/nginx/sites-enabled/docviewer.local) можно посмотреть [здесь](https://github.com/2gis/maps-api-2.0-doc-viewer/blob/master/nginx-sample.conf)
3. Сконфигурировать приложение. Файл конфигурации находится по адресу `app/protected/config/main.php`. Параметры для конфигурации:

    // application params
    'params' => array(
        'docDir' => 'http://maps.api.2gis.ru/2.0/doc',
        'menu' => 'http://maps.api.2gis.ru/2.0/doc/menu.json'
    )
    
* docDir - адрес публичного каталога, в котором находятся подкаталоги с .html файлами документации.
* menu - адрес, по которому доступен файл menu.json