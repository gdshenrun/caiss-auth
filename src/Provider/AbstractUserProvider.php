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

use Gdshenrun\CaissAuth\UserProvider;

abstract class AbstractUserProvider implements UserProvider
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
     * AbstractUserProvider constructor.
     */
    public function __construct(array $config, string $name)
    {
        $this->config = $config;
        $this->name = $name;
    }
}
