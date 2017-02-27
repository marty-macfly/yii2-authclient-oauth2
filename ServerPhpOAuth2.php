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

  /** @inheritdoc */
	protected function initUserAttributes()
	{
		return [ 'email' => 'test@test.com' ];
	#	return $this->api('userinfo', 'GET');
	}

  /**
   * @inheritdoc
   */
  public function getEmail()
  {
		return isset($this->getUserAttributes()['email'])
			? $this->getUserAttributes()['email']
			: null;
  }

  /**
   * @inheritdoc
   */
  public function getUsername()
  {
		return isset($this->getUserAttributes()['username'])
			? $this->getUserAttributes()['username']
			: null;
  }
}
