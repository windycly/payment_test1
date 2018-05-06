<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PDO;

class CreateDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'createDB';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Connect MySQL and create database as defined in config/database.php';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $config = require("config/database.php");
        extract($config['connections']['mysql']);

        $connection = new PDO("{$driver}:user={$username} password={$password}");
        $connection->query("DROP DATABASE IF EXISTS ".$database);
        $connection->query("CREATE DATABASE ".$database);
        var_dump("CREATE DATABASE ".$database);
    }
}
