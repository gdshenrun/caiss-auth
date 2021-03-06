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
namespace Gdshenrun\CaissAuth\Guard;

use Gdshenrun\CaissAuth\Authenticatable;
use Gdshenrun\CaissAuth\AuthGuard;
use Gdshenrun\CaissAuth\UserProvider;

abstract class AbstractAuthGuard implements AuthGuard
{
    /**
     * @var array
     */
    protected $config;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var UserProvider
     */
    protected $userProvider;

    /**
     * AbstractAuthGuard constructor.
     */
    public function __construct(array $config, string $name, UserProvider $userProvider)
    {
        $this->config = $config;
        $this->name = $name;
        $this->userProvider = $userProvider;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function check(): bool
    {
        return $this->user() instanceof Authenticatable;
    }

    public function guest(): bool
    {
        return ! $this->check();
    }

    public function getProvider(): UserProvider
    {
        return $this->userProvider;
    }
}
