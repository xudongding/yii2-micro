<?php
namespace app\controllers;

use yii\web\Controller;

/**
 * Class SiteController 站点控制器
 * @package app\controllers
 */
class SiteController extends Controller
{
    /**
     * 默认动作
     * @return string
     */
    public function actionIndex()
    {
        return 'Hello, world!';
    }
}
