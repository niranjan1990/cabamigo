<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            //'showScriptName' => false,

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
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'google' => [
                    'class' => 'yii\authclient\clients\GoogleOAuth',
                    'authUrl' => 'https://accounts.google.com/o/oauth2/auth',
                    'clientId' => '654768428355-t3c5t2csro7dhi4ouukuju206gi3smbj.apps.googleusercontent.com',
                    'clientSecret' => 'TYVjNIug-44E2cfPPjd01nYt',
                ],
                'facebook' => [
                    'class' => 'yii\authclient\clients\Facebook',
                    'authUrl' => 'https://www.facebook.com/dialog/oauth?display=popup',
                    'clientId' => '1512235375735235',
                    'clientSecret' => '561ff189115258b390420acdb6093b12',
                ],
                'twitter' => [
                    'class'          => 'yii\authclient\clients\Twitter',
                    'consumerKey'    => 'swTHPueMo8QI6b028xr3zT7I7',
                    'consumerSecret' => 'p3pRSQNfg1Iqs4Hz03ELwQzLtvoXiQCs7HKnOBfXszfH4GfqTo',
                ],
                'linkedin' => [
                    'class' => 'yii\authclient\clients\LinkedIn',
                    'clientId' => '75s3ozcp2gu5p3',
                    'clientSecret' => 'j7WNZDpfuaF0vsAK',
                ],
            ],
        ],
    ],
    'params' => $params,
];
