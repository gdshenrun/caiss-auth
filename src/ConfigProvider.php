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

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
            ],
            'commands' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                    'ignore_annotations' => [
                        'mixin',
                    ],
                ],
            ],
            'publish' => [
                [
                    'id' => 'auth',
                    'description' => 'auth 组件配置.', // 描述
                    // 建议默认配置放在 publish 文件夹中，文件命名和组件名称相同
                    'source' => __DIR__ . '/../publish/auth.php',  // 对应的配置文件路径
                    'destination' => BASE_PATH . '/config/autoload/auth.php', // 复制为这个路径下的该文件
                ],
            ],
        ];
    }
}
