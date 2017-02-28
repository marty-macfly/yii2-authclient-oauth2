# yii2-authclient-oauth2

Yii2 authclient for [Oauth 2.0 Server Php](https://bshaffer.github.io/oauth2-server-php-docs/) work well with [macfly/yii2-oauth2-server](https://github.com/Marty-Macfly/yii2-oauth2-server)

## Installation
Through Composer
From console:
```
composer require macfly/yii2-authclient-oauth2
```
or add to "require" section to composer.json
```
"macfly/yii2-authclient-oauth2": "*"
```
##Usage

Set up your Oauth2 server, you can see (https://github.com/Marty-Macfly/yii2-oauth2-server)
And add the Oauth2 client to your auth clients.

```
php
'components' => [
    'authClientCollection' => [
      'class'   => \yii\authclient\Collection::className(),
      'clients' => [
        'oauth2-server-php' => [
          'class'             => 'macfly\authclient\OAuth2',
          'authUrl'           => 'https://oauth2-server-php/oauth2/authorize',
          'tokenUrl'          => 'https://oauth2-server-php/oauth2/token',
          'apiBaseUrl'        => 'https://oauth2-server-php/oauth2',
          'clientId'          => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
          'clientSecret'      => 'yyyyyyyyy',
        ],
        // other clients
      ],
    ],
    // ...
 ]
```
