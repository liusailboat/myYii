<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-weApi',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'weApi\controllers',
    'defaultRoute' => 'site/index',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-weApi',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-weApi', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the weApi
            'name' => 'advanced-weApi',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
        // 模块
        'modules' => [
            'v1' => [
                'class' => 'weApi\modules\v1\Module',
            ],
        ],
    ],
    'params' => $params,
];
