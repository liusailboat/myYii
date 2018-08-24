<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        //去除bootstrap,jquery,自带表单等
        'assetManager' => [
            'bundles' => [
                'yii\web\YiiAsset' => [
                    'js' => [],  // 去除 yii.js
                    'sourcePath' => null,  // 防止在 frontend/web/asset 下生产文件
                ],

                'yii\widgets\ActiveFormAsset' => [
                    'js' => [],  // 去除 yii.activeForm.js
                    'sourcePath' => null,  // 防止在 frontend/web/asset 下生产文件
                ],

                'yii\validators\ValidationAsset' => [
                    'js' => [],  // 去除 yii.validation.js
                    'sourcePath' => null,  // 防止在 frontend/web/asset 下生产文件
                ],
                'yii\web\JqueryAsset' => [
                    'js' => [],  // 去除 jquery.js
                    'sourcePath' => null,  // 防止在 frontend/web/asset 下生产文件
                ],
                'yii\bootstrap\BootstrapAsset' => [
                    'css' => [],  // 去除 bootstrap.css
                    'sourcePath' => null, // 防止在 frontend/web/asset 下生产文件
                ],
                'yii\bootstrap\BootstrapPluginAsset' => [
                    'js' => [],  // 去除 bootstrap.js
                    'sourcePath' => null,  // 防止在 frontend/web/asset 下生产文件
                ],
            ],
        ],
    ],
];
