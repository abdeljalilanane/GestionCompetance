<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class passwordStrength extends CValidator
{
 
    public $strength;
 
    private $weak_pattern = '/^(?=.*[a-zA-Z0-9]).{5,}$/';
    private $strong_pattern = '/^(?=.*\d(?=.*\d))(?=.*[a-zA-Z](?=.*[a-zA-Z])).{5,}$/';
}
?>