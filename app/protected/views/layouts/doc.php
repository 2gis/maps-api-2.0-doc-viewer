<!DOCTYPE html>
<html>
    <head>
        <style rel="stylesheet">
            sub, sup {
                /* Specified in % so that the sup/sup is the
                right size relative to the surrounding text */
                font-size: 75%;
                 
                /* Zero out the line-height so that it doesn't
                interfere with the positioning that follows */
                line-height: 0;
                 
                /* Where the magic happens: makes all browsers position
                the sup/sup properly, relative to the surrounding text */
                position: relative;
                 
                /* Note that if you're using Eric Meyer's reset.css, this
                is already set and you can remove this rule */
                vertical-align: baseline;
            }
             
            sup {
                /* Move the superscripted text up */
                top: -0.3em;
            }
             
            sub {
                /* Move the subscripted text down, but only
                half as far down as the superscript moved up */
                bottom: -0.25em;
            }
        </style>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>API 2ГИС</title>
        <link rel="shortcut icon" type="image/x-icon" href="http://api.2gis.ru/favicon.ico" />
        <link rel="stylesheet" href="http://api.2gis.ru/assets/frontend/api/css/reset.v19.css?v=1" />
        <link rel="stylesheet" href="http://api.2gis.ru/assets/frontend/api/css/highlight_default_webapi.v19.css?v=2" />
        <link rel="stylesheet" href="http://api.2gis.ru/assets/frontend/api/css/api_site_webapi.v19.css?v=7" />
        <link rel="stylesheet" href="http://api.2gis.ru/assets/frontend/api/css/doc_webapi.v19.css?v=6" />
        <link rel="stylesheet" href="http://api.2gis.ru/assets/frontend/api/css/widget_notify.v19.css" />
        <link rel="stylesheet" type="text/css" href="http://api.2gis.ru/assets/frontend/api/css/masha.v19.css?v=1">
        <!--[IF IE]><script type="text/javascript" src="http://api.2gis.ru/assets/frontend/api/js/ierange.v19.js?v=1"></script><![ENDIF]-->
        <script src="http://api.2gis.ru/assets/frontend/api/js/jquery.min.v19.js?v=1"></script>
        <script src="http://api.2gis.ru/assets/frontend/api/js/jquery.cookie.v19.js?v=1"></script>
        <script type="text/javascript" src="http://api.2gis.ru/assets/frontend/api/js/masha.min.v19.js?v=2"></script>
        
        <script type="text/javascript">
            if(window.addEventListener){
                window.addEventListener('load', function(){
                    // can be called by domready
                    MaSha.instance = new MaSha();
                }, false);
            } else {
                window.attachEvent('onload', function(){
                    // can be called by domready
                    MaSha.instance = new MaSha();
                });
            }
        </script>
    </head>
        
    <body>
        <?php echo $content ?>

        <div class="footer">

            <div class="center clearfix">

                <div class="footer-col">
                    <h5>Документация</h5>
                    <ul>
                        <li><a href="#">Документация</a></li>

                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Демо-версия</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h5>Виджеты</h5>
                    <ul>

                        <li><a href="#">Организации на карте</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h5>API 2ГИС</h5>
                    <ul>
                        <li><a href="#">Возможности</a></li>

                        <li><a href="#">Решения</a></li>
                        <li><a href="#">Монетизация</a></li>
                        <li><a href="#">Бизнесу</a></li>
                        <li><a href="#">Условия</a></li>
                        <li><a href="#">Рекламодателям</a></li>
                    </ul>

                </div>

                <div class="footer-col">
                    <ul>
                        <li class="email"><a href="mailto:api@2gis.ru">api@2gis.ru</a></li>
                        <li class="phone">+7 (383) 363-0-555 <div class="phone-add">дополнительный 146</div></li>
                        <li class="twitter-btn"><a href="http://twitter.com/api2gis"><img src="http://api.2gis.ru/assets/frontend/api/images/tmp/twitter-button.png" alt="" /></a></li>
                        <li class="account"><a href="#">Личный кабинет</a></li>

                        <li class="terms"><a href="#">Условия использования</a></li>
                        <li class="copyrights">&copy; 2011&ndash;2012, ООО «<a href="#">ДубльГИС</a>»</li>
                    </ul>
                </div>

            </div>

        </div><!-- /footer -->

        <a id="txtselect_marker" href=""></a>

        <script src="http://api.2gis.ru/assets/frontend/api/js/jquery-1.6.4.min.js?v=1"></script>
        <script src="http://api.2gis.ru/assets/frontend/api/js/highlight.min.js?v=1"></script>
        <script src="http://api.2gis.ru/assets/frontend/api/js/custom.js?v=2"></script>
        <script src="http://api.2gis.ru/assets/frontend/api/js/doc.js?v=1"></script>
    
    </body>
</html>
