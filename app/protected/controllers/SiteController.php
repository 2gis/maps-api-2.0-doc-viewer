<?php

/**
 * SiteController is the default controller to handle user requests.
 */
class SiteController extends CController
{
    public function actionIndex(){
        $this->redirect('/doc');
    }

	public function actionDoc($uri)
	{
        $menuArr = json_decode(Yii::app()->httpclient->getContent(Yii::app()->params['menu']), true)['mapsapi']['children'];

        $docPath = Yii::app()->params['docDir'] . '/' . $this->_infoportalUriToDocViewerUri($uri, $menuArr);
        $content = Yii::app()->httpclient->getContent($docPath);

        $this->layout = 'doc';
        $this->render('doc', array('content' => $content, 'menuArr' => $menuArr));
	}

    private function _infoportalUriToDocViewerUri($uri, $menuArr)
    {
        foreach ($menuArr as $value) {
            if ($value['content']['ru']['uri'] == $uri) {
                return str_replace('.md', '.html', $value['content']['ru']['_src']);
            }
            if (is_array($value['children'])) {
                foreach ($value['children'] as $subValue) {
                    if ($subValue['content']['ru']['uri'] == $uri) {
                        return str_replace('.md', '.html', $subValue['content']['ru']['_src']);
                    }
                }
            }
        }

        return null;
    }
}