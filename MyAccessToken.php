<?php

class MyAccessToken implements Dropbox\OAuth\Storage\StorageInterface
{
    private $oauth_token;
    private $oauth_token_secret;

    public function __construct($oauth_token, $oauth_token_secret)
    {
        $this->oauth_token = $oauth_token;
        $this->oauth_token_secret = $oauth_token_secret;
    }

    public function get($type)
    {
        $token = new \stdClass();
        $token->oauth_token = $this->oauth_token;
        $token->oauth_token_secret = $this->oauth_token_secret;
        return $token;
    }
    public function set($token, $type)
    {
    }
    public function delete()
    {
    }
}
