<?php
$CONFIG = array (
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/owncloud/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/owncloud/custom',
      'url' => '/custom',
      'writable' => true,
    ),
  ),
  'trusted_domains' => 
  array (
    0 => 'localhost',
  ),
  'datadirectory' => '/mnt/data/files',
  'dbtype' => 'mysql',
  'dbhost' => 'mariadb:3306',
  'dbname' => 'owncloud',
  'dbuser' => 'owncloud',
  'dbpassword' => 'owncloud',
  'dbtableprefix' => 'oc_',
  'log_type' => 'owncloud',
  'supportedDatabases' => 
  array (
    0 => 'sqlite',
    1 => 'mysql',
    2 => 'pgsql',
  ),
  'upgrade.disable-web' => true,
  'default_language' => 'en',
  'overwrite.cli.url' => 'http://localhost:8080/',
  'htaccess.RewriteBase' => '/',
  'logfile' => '/mnt/data/files/owncloud.log',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'mysql.utf8mb4' => true,
  'filelocking.enabled' => true,
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => 'redis',
    'port' => '6379',
  ),
  'passwordsalt' => 'wqC0hgW32kybtVgMJawQ/uU1v+gtSq',
  'secret' => '2yR4QlfWfwAn5YOPVUP/5SIi/DWpwmRXtNrOoCOEXegRxCYc',
  'version' => '10.11.0.6',
  'allow_user_to_change_mail_address' => '',
  'logtimezone' => 'UTC',
  'installed' => true,
  'instanceid' => 'occ9dq0bq7so',
);
