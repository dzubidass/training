<?php

$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';

$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';

$databases['default']['default'] = array (
  'database' => 'drupal9',
  'username' => 'drupal9',
  'password' => 'drupal9',
  'prefix' => '',
  'host' => 'database',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

$databases['externalreal']['default'] = array (
  'database' => 'REAL',
  'username' => 'drupal',
  'password' => 'Qs2dD-fdsy5.t@C6',
  'prefix' => '',
  'host' => 'ora-real.upce.cz',
  'port' => '1521',
  'namespace' => 'Drupal\\oracle\\Driver\\Database\\oracle',
  'driver' => 'oracle',
);

$databases['externalost12']['default'] = array (
  'database' => 'CMS',
  'username' => 'drupal',
  'password' => '9@4Kn8PVB3c6.3vX',
  'prefix' => '',
  'host' => 'ora-ost12.upce.cz',
  'port' => '1521',
  'namespace' => 'Drupal\\oracle\\Driver\\Database\\oracle',
  'driver' => 'oracle',
);