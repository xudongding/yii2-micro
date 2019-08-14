## 使用 Yii2 作为微框架

### 安装 Yii2

创建一个 `micro-app` 目录并将 `composer.json` 放入其中，内容如下：

	{
	    "require": {
	        "yiisoft/yii2": "~2.0.0"
	    },
	    "repositories": [
	        {
	            "type": "composer",
	            "url": "https://asset-packagist.org"
	        }
	    ]
	}

保存文件并运行 `composer install` 命令执行安装。

### 创建项目结构

创建一个 `web` 目录并将 `index.php` 放入其中，内容如下：

	<?php
	defined('YII_DEBUG') or define('YII_DEBUG', true);
	defined('YII_ENV') or define('YII_ENV', 'dev');
	
	require(__DIR__ . '/../vendor/autoload.php');
	require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
	
	$config = require __DIR__ . '/../config.php';
	(new yii\web\Application($config))->run();

创建 `config.php` 文件并包含应用程序配置：

	<?php
	return [
	    'id' => 'micro-app',
	    'basePath' => __DIR__,
	    'controllerNamespace' => 'app\controllers',
	    'aliases' => [
	        '@micro' => __DIR__,
	    ],
	];

### 创建控制器

创建一个 `controllers` 目录并将 `SiteController.php` 放入其中，内容如下：

	<?php
	namespace app\controllers;
	
	use yii\web\Controller;
	
	class SiteController extends Controller
	{
	    public function actionIndex()
	    {
	        return 'Hello, world!';
	    }
	}

项目结构如下：

	micro-app/
	├── controllers/
	│  └── SiteController.php
	├── web/
	│  └── index.php
	├── composer.json
	└── config.php

### 运行内置服务器

运行 `vendor/bin/yii serve --docroot=./web` 启动内置 PHP 服务器，浏览器访问 `http://localhost:8080/`。
