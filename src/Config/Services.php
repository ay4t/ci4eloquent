<?php
/*
 * File: Services.php
 * Project: Config
 * Created Date: Th Mar 2023
 * Author: Ayatulloh Ahad R
 * Email: ayatulloh@indiega.net
 * Phone: 085791555506
 * -------------------------
 * Last Modified: Thu Mar 23 2023
 * Modified By: Ayatulloh Ahad R
 * -------------------------
 * Copyright (c) 2023 Indiega Network 

 * -------------------------
 * HISTORY:
 * Date      	By	Comments 

 * ----------	---	---------------------------------------------------------
 */


namespace Ay4t\CI4Eloquent\Config;

class Services extends \CodeIgniter\Config\Services
{
    
    /**
     * Eloquent Service
     *
     * @param  bool $getShared
     * @return mixed
     */
    public static function eloquent($getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('eloquent');
        }

        // eloquent start connection
        $db = \Config\Database::connect();
        $capsule = new \Illuminate\Database\Capsule\Manager;
        $capsule->addConnection([
            'driver' => 'mysql',
            'host' => $db->hostname,
            'database' => $db->database,
            'username' => $db->username,
            'password' => $db->password,
            'charset' => $db->charset,
            'collation' => $db->DBCollat,
            'prefix' => $db->DBPrefix
        ]);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();

        return $capsule;        
    }
}