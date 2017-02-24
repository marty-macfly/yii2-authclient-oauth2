<?php
namespace macfly\authclient;

use yii\authclient\OAuth2;

class ServerPhpOAuth2 extends OAuth2
{
  /**
   * @inheritdoc
   */
  protected function defaultName()
  {
		return 'serverphpoauth2';
  }


  /**
   * @inheritdoc
   */
  protected function defaultTitle()
  {
		return 'ServerPhpOAuth2';
  }

	protected function initUserAttributes()
	{
		return [ 'email' => 'test@test.com' ];
	#	return $this->api('userinfo', 'GET');
	}
}
