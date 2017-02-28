<?php
namespace macfly\authclient;

class OAuth2 extends \yii\authclient\OAuth2
{
  /**
   * @inheritdoc
   */
  protected function defaultName()
  {
		return 'serveroauth2';
  }

  /**
   * @inheritdoc
   */
  protected function defaultTitle()
  {
		return 'ServerOAuth2';
  }

  /**
   * @inheritdoc
   */
	protected function initUserAttributes()
	{
		return $this->api('user', 'GET');
	}

  /**
   * @inheritdoc
   */
  public function applyAccessTokenToRequest($request, $accessToken)
  {
    $request->addHeaders(['Authorization' => sprintf("Bearer %s", $accessToken->getToken())]);
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
