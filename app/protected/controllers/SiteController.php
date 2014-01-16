<?php

/**
 * SiteController is the default controller to handle user requests.
 */
class SiteController extends CController
{
	public function actionDoc($docUri)
	{
        $docPath = (Yii::app()->params['docDir'] . '/' . $docUri);
        $content = Yii::app()->httpclient->getContent($docPath);
        $menuArr = json_decode(Yii::app()->httpclient->getContent(Yii::app()->params['menu']), true)['mapsapi']['children'];

        $this->layout = 'doc';
        $this->render('doc', array('content' => $content, 'menuArr' => $menuArr));
	}
}