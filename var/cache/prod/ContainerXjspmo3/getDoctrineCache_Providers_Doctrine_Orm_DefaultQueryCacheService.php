<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_cache.providers.doctrine.orm.default_query_cache' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ArrayCache.php';

$this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

$instance->setNamespace('sf_orm_default_61390a7c28a932f20eaa8f3cd3f2dd77e309713ddedf490fabf6bee7f1c5c68e');

return $instance;
