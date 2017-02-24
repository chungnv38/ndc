<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Auth;

use Cake\Auth\AbstractPasswordHasher;

class NonePasswordHasher extends AbstractPasswordHasher
{

    public function hash($password)
    {
        return $password;
    }

    public function check($password, $hashedPassword)
    {
        return $password === $hashedPassword;
    }
}