<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 12/8/16
 * Time: 7:27 PM
 *
 */

class dbconnection extends PDO
{
    public function __construct($file = 'dbsettings.ini')
    {

        if (!$settings = parse_ini_file($file, TRUE)) throw new exception('Unable to open ' . $file . '.');

          $driver = $settings['database']['driver'];
          $host   = $settings['database']['host'];
          $port   = $settings['database']['port'];
          $schema = $settings['database']['schema'];
          $username = $settings['database']['username'];
          $password = $settings['database']['password'];

        $dsn = $driver .
            ':host=' . $host .
            ((!empty($port)) ? (';port=' . $port) : '') .
            ';dbname=' . $schema;

        parent::__construct($dsn, $username, $password);
        parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        parent::setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    }
}

