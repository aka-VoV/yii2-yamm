<?php
/**
 * Created by PhpStorm.
 * User: turko_v
 * Date: 09.12.2015
 * Time: 21:04
 */

namespace akavov\yamm;

use Yii;
use yii\web\AssetBundle;

class YammAsset extends AssetBundle
{
    public $sourcePath = '';
    public $css = [
        'yamm.css',
    ];
    public $js = [];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
    /**
     * @inheritdoc
     */
    public function init() {
        $this->sourcePath = "@vendor/bower/yamm3/yamm";
        parent::init();
    }
}