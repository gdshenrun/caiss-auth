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
use Hyperf\Utils\ApplicationContext;
use Gdshenrun\CaissAuth\AuthManager;

if (! function_exists('auth')) {
    /**
     * 建议视图中使用该函数，其他地方请使用注入.
     * @throws \Gdshenrun\CaissAuth\GuardException
     * @throws \Gdshenrun\CaissAuth\UserProviderException
     * @return AuthManager|mixed|\Gdshenrun\CaissAuth\AuthGuard
     */
    function auth(?string $guard = null)
    {
        $auth = ApplicationContext::getContainer()->get(AuthManager::class);

        if (is_null($guard)) {
            return $auth;
        }

        return $auth->guard($guard);
    }
}
