<?php
class ExtHttpClient extends CApplicationComponent
{
    /**
     * @var Zend_Http_Client
     */
    private $_client;
    
    /**
     * @var array
     */
    private $_clientConfig = array(
        'maxredirects' => 3,
        'timeout'      => 30
    );

    public function init()
    {
        Yii::import("application.extensions.httpclient.vendors.*", true);
        require_once ('vendors/Zend/Http/Client.php');
        $this->_client = new Zend_Http_Client();
        parent::init();
    }
    
    /**
     * @param string $uri
     * @return string|false
     */
    public function getContent($uri) 
    {
        $this->_client->setUri($uri);
        $this->_client->setConfig($this->_clientConfig);
        try {
            $request = $this->_client->request();
            return $request->getBody();
        } catch (Exception $e) {
            return false;
        }
    }
}
