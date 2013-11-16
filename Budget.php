<?php
/**
 * KabantayNgBayan: OpenData
 *
 * @category  Hackaton
 * @package   KabantayNgBayan
 * @author    Jesus B. Nana <jesus.nana@adtouch.com>
 * @copyright 2013 KabantayNgBayan
 * @license   [url] [description]
 * @version   0.1
 * @link      http://technousers.com
 */
namespace KabantayNgBayan\Budget;

/**
 * S3 Uploader
 *
 * @category Government
 * @package  KabantayNgBayan
 * @author   Jesus B. Nana <jesus.nana@gmail.com>
 * @license  [url] [description]
 * @version  0.1
 * @link     http://technousers.com
 */
class Budget
{
    private $_conf;
    private $_accessKey;
    private $_secretKey;

    /**
     * [__construct description]
     */
    public function __construct()
    {
        $this->_conf = $this->loadConfig(__DIR__ . '/' . 'access.conf');
        $this->_accessKey = $this->_conf->AWS->accessKey;
        $this->_secretKey = $this->_conf->AWS->secretKey;
    }

    /**
     * [loadConfig description]
     *
     * @param string $file [comment]
     *
     * @return [type]
     */
    public function loadConfig($file)
    {
        $source = $file;

        if (file_exists($source)) {
            $content = file_get_contents($source);
            $data = json_decode($content);

            return $data;
        } else {
            echo $source;
        }

        return false;
    }


}

