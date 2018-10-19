<?php
namespace Grav\Plugin\Login\OAuth2\Providers;

use Grav\Common\Grav;

class DiscordProvider extends BaseProvider
{
    protected $name = 'Discord';
    protected $classname = 'Wohali\\OAuth2\\Client\\Provider\\Discord';
    protected $config;

    /** @var Discord */
    protected $provider;

    public function __construct(array $options)
    {
        $this->config = Grav::instance()['config'];

        $options += [
            'clientId'      => $this->config->get('plugins.login-oauth2-discord.client_id'),
            'clientSecret'  => $this->config->get('plugins.login-oauth2-discord.client_secret'),
            'redirectUri'   => $this->getCallbackUri(),
        ];

        parent::__construct($options);
    }

    public function getAuthorizationUrl()
    {
        $options = ['state' => $this->state];
        $options['scope'] = $this->config->get('plugins.login-oauth2-discord.options.scope');

        return $this->provider->getAuthorizationUrl($options);
    }

    public function getUserData($user)
    {
        $data = $user->toArray();

        $avatar_url = "https://cdn.discordapp.com/avatars/{$data['id']}/{$data['avatar']}.jpg";

        $data_user = [
            'id'         => $user->getId(),
            'login'      => $user->getUsername(),
            'fullname'   => $user->getUsername(),
            'email'      => $user->getEmail(),
            'discord'      => [
                'discriminator' => $data['discriminator'],
                'verified' => $data['verified'],
                'locale' => $data['locale'],
                'mfa_enabled' => $data['mfa_enabled'],
                'avatar_url' => $avatar_url,
            ]
        ];

        return $data_user;
    }
}