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
namespace Gdshenrun\CaissAuth;

interface UserProvider
{
    /**
     * Retrieve a user by the given credentials.
     *
     * @param $credentials
     * @return null|Authenticatable
     */
    public function retrieveByCredentials($credentials);

    /**
     * Validate a user against the given credentials.
     *
     * @param $credentials
     */
    public function validateCredentials(Authenticatable $user, $credentials): bool;
}
