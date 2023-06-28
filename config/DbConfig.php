<?php

namespace Config;

trait DbConfig
{
    protected static $settings = [
        "mysql" => [
            "driver" => "mysql",
            "host" => "127.0.0.1",
            "username" => "campus",
            "database" => "campuslands",
            "password" => "campus2023",
            "collation" => "utf8_unicode_ci",
            "flags" => [
                \PDO::ATTR_PERSISTENT => false,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                \PDO::ATTR_EMULATE_PREPARES => true 
            ]
        ]
    ];
}
