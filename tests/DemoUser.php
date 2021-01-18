<?php

declare(strict_types=1);
/**
 * This file is part of qbhy/hyperf-auth.
 *
 * @link     https://github.com/qbhy/hyperf-auth
 * @document https://github.com/qbhy/hyperf-auth/blob/master/README.md
 * @contact  appledady@foxmail.com
 * @license  https://github.com/qbhy/hyperf-auth/blob/master/LICENSE
 */
namespace HyperfTest;

use Gdshenrun\CaissAuth\Authenticatable;

class DemoUser implements Authenticatable
{
    public $id;

    /**
     * DemoUser constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public static function retrieveById($key): ?Authenticatable
    {
        return new DemoUser($key);
    }
}
