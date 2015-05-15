<?php
/*
 * This file is part of the Harmony package.
 *
 * (c) 2013-2015 David Negrier <david@mouf-php.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Harmony\Module;

use Interop\Container\ContainerInterface;
use Mouf\MoufManager;

/**
 * Classes implementing this interface represent modules that can be used by Harmony.
 *
 * @author David Negrier
 */
class MoufModule implements HarmonyModuleInterface
{
    /**
     * You can return a container if the module provides one.
     *
     * It will be chained to the application's root container.
     *
     * @param ContainerInterface $rootContainer
     * @return ContainerInterface|null
     */
    public function getContainer(ContainerInterface $rootContainer) {
        require_once __DIR__.'/../../../../mouf/Mouf.php';
        return MoufManager::getMoufManager();
    }

    /**
     * Returns a class that can be used to explore a container
     *
     * @return ContainerExplorerInterface|null
     */
    public function getContainerExplorer() {
        require_once __DIR__.'/../../../../mouf/Mouf.php';
        return new MoufContainerExplorer();
    }
}
