<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of composer
 *
 * @author fabio
 */
class composer {
    //put your code here
    public $id;
    public $firstName;
    public $lastName;
    public $category;

    function __construct($id, $firstName, $lastName, $category) {
    echo "<br>";
    echo "Entrou na classe composer!";
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->category = $category;
    }
}
