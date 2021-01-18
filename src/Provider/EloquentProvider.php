<?php

declare(strict_types=1);
/**
 * This file is part of gdshenrun/hyperf-auth.
 *
 * @link     https://github.com/gdshenrun/hyperf-auth
 * @document https://github.com/gdshenrun/hyperf-auth/blob/master/README.md
 * @contact  appledady@foxmail.com
 * @license  https://github.com/gdshenrun/hyperf-auth/blob/master/LICENSE
 */
namespace Gdshenrun\CaissAuth\Provider;

use Gdshenrun\CaissAuth\Authenticatable;

class EloquentProvider extends AbstractUserProvider
{
    public function retrieveByCredentials($credentials)
    {
        return call_user_func_array([$this->config['model'], 'retrieveById'], [$credentials]);
    }

    public function validateCredentials(Authenticatable $user, $credentials): bool
    {
        return $user->getId() === $credentials;
    }
}
