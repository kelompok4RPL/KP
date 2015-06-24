<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tes
 *
 * @author Acer
 */
namespace Core\Model;
class Tes extends Model{
    function Oke(){
        return $this->relasiDengan("Oke", "id", "idoke");
    }
}
