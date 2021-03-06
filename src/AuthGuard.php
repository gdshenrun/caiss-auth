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

interface AuthGuard
{
    public function login(Authenticatable $user);

    public function user(): ?Authenticatable;

    public function check(): bool;

    public function guest(): bool;

    public function logout();

    public function getProvider(): UserProvider;

    public function getName(): string;
}
