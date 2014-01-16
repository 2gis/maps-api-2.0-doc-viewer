<div class="container">
    <div class="header center">
        <h1 class="logo"><a class="logo-2gis" href="/">2GIS</a></h1>
        <div class="nav">
            <ul class="nav-primary">
                <li class="nav-primary-item">
                    <a href="#" class="nav-primary-link nav-primary-expanded"><span>API 2ГИС</span></a>
                    <ul class="nav-secondary">
                        <li class="nav-secondary-item"><a href="#" class="nav-secondary-link">Возможности</a></li>

                        <li class="nav-secondary-item"><a href="#" class="nav-secondary-link">Решения</a></li>
                        <li class="nav-secondary-item"><a href="#" class="nav-secondary-link">Монетизация</a></li>
                        <li class="nav-secondary-item"><a href="#" class="nav-secondary-link">Бизнесу</a></li>
                        <li class="nav-secondary-item"><a href="#" class="nav-secondary-link">Условия</a></li>
                        <li class="nav-secondary-item"><a href="#" class="nav-secondary-link">Рекламодателям</a></li>
                    </ul>

                </li>
                <li class="nav-primary-item">
                    <a href="#" class="nav-primary-link no-child"><span>Виджеты</span></a>
                </li>
                <li class="nav-primary-item nav-active">
                    <a href="javascript:void(0)" class="nav-primary-link nav-primary-expanded"><span>Документация</span></a>
                    <ul class="nav-secondary">
                        <li class="nav-secondary-item"><a href="#" class="nav-secondary-link">Документация</a></li>

                        <li class="nav-secondary-item"><a href="#" class="nav-secondary-link">FAQ</a></li>
                        <li class="nav-secondary-item"><a href="#" class="nav-secondary-link">Демо-версия</a></li>
                    </ul>
                </li>
                <li class="nav-primary-item">
                    <a href="#" class="nav-primary-link"><span>Личный кабинет</span></a>
                    <ul class="nav-secondary">

                        <li class="nav-secondary-item"><a href="#1" class="nav-secondary-link">Документация</a></li>
                        <li class="nav-secondary-item"><a href="#1" class="nav-secondary-link">Демо-версия</a></li>
                    </ul>
                </li>
                <li class="nav-connect"><a href="#" class="connect-btn"><span class="connect-btn-uline">Подключиться</span></a></li>
            </ul>
        </div>

    </div><!-- /header -->

    <div class="main center">
        <div id="panel" class="api-sidebar">
            <ul class="api-nav">
                <li class="collapsed">
                    <a href="#" class="toggler"><span class="toggler-bullet"></span></a>
                    <a href="#">API справочника</a>
                    <ul>
                        <li >
                            <a  href="/doc/firms/quickstart/">Общие сведения</a>
                        </li>
                    </ul>
                </li>
                <li class="expanded">
                    <a href="#" class="toggler"><span class="toggler-bullet"></span></a>
                    <a href="#">API карт</a>
                        <?php echo $this->renderPartial('_doc_menu', array('menuArr' => $menuArr)); ?>
                </li>
                <li class="collapsed">
                    <a href="#" class="toggler"><span class="toggler-bullet"></span></a>
                    <a href="#">Поиск геообъектов</a>
                </li>
                <li >
                    <a  href="#">Вопросы и ответы</a>
                </li>
                <li >
                    <a  href="#">Полезные ссылки</a>
                </li>
            </ul>
        </div>
        <div id="selectable-content" class="api-content">
            <?php echo $content ?>
        </div><!-- /content -->
    </div><!-- /main -->
</div><!-- /container -->