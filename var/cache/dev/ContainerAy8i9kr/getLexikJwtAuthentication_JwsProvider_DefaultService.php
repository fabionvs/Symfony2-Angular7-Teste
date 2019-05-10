<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'lexik_jwt_authentication.jws_provider.default' shared service.

include_once $this->targetDirs[3].'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/KeyLoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/AbstractKeyLoader.php';
include_once $this->targetDirs[3].'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/KeyDumperInterface.php';
include_once $this->targetDirs[3].'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/RawKeyLoader.php';

@trigger_error('The "lexik_jwt_authentication.jws_provider.default" is deprecated since version 2.5 and will be removed in 5.0, use "lexik_jwt_authentication.jws_provider.lcobucci" instead.', E_USER_DEPRECATED);

return $this->services['lexik_jwt_authentication.jws_provider.default'] = new \Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\DefaultJWSProvider(${($_ = isset($this->services['lexik_jwt_authentication.key_loader']) ? $this->services['lexik_jwt_authentication.key_loader'] : $this->services['lexik_jwt_authentication.key_loader'] = new \Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader(($this->targetDirs[3].'/app/../config/jwt/private.pem'), ($this->targetDirs[3].'/app/../config/jwt/public.pem'), '1234')) && false ?: '_'}, 'openssl', 'RS256', 3600, 0);