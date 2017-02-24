# yii2-authclient-oauth2-server-php
[Oauth 2.0 Server Php](https://bshaffer.github.io/oauth2-server-php-docs/) client for yii2-authclient

## Installation
Through Composer
From console:
```
composer require macfly/yii2-authclient-oauth2-server-php
```
or add to "require" section to composer.json
```
"macfly/yii2-authclient-oauth2-server-php": "*"
```
##Usage

Set up your Oauth2 server.
And add the ServerPhpOauth2 client to your auth clients.

```
php
'components' => [
    'authClientCollection' => [
      'class'   => \yii\authclient\Collection::className(),
      'clients' => [
        'oauth2-server-php' => [
          'class'             => 'macfly\authclient\ServerPhpOAuth2',
          'authUrl'           => 'https://oauth2-server-php/authorize',
          'tokenUrl'          => 'https://oauth2-server-php/token',
          'clientId'          => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
          'clientSecret'      => 'yyyyyyyyy',
          'userAttributes'    => [
            'email',
          ],
        ],
        // other clients
      ],
    ],
    // ...
 ]
```
