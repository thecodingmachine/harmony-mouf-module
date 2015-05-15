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
use Mouf\MoufManager;
use Mouf\Moufspector;

/**
 * Adapter for the container explorer class of Harmony
 *
 * @author David Negrier
 */
class MoufContainerExplorer implements ContainerExplorerInterface
{

    /**
     * Returns the name of the instances implementing `$type`
     * @return string[]
     */
    public function getInstancesByType($type)
    {
        return MoufManager::getMoufManager()->findInstances($type);
    }
}
