<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of composerData
 *
 * @author fabio
 */
require "composer.php";

class composerData {
    public $composers;
 
    function __construct() {
    echo "<br>";
    echo "Entrou na classe composerData'!";
        $this->composers = array(
            new composer("1", "Johann Sebastian", "Bach", "Baroque"),
            new composer("2", "Arcangelo", "Corelli", "Baroque"),
            new composer("3", "George Frideric", "Handel", "Baroque"),
            new composer("4", "Henry", "Purcell", "Baroque"),
            new composer("5", "Jean-Philippe", "Rameau", "Baroque"),
            new composer("6", "Domenico", "Scarlatti", "Baroque"),
            new composer("7", "Antonio", "Vivaldi", "Baroque"),
            new composer("8", "Ludwig van", "Beethoven", "Classical"),
            new composer("9", "Johannes", "Brahms", "Classical"),
            new composer("10", "Francesco", "Cavalli", "Classical"),
            new composer("11", "Fryderyk Franciszek", "Chopin", "Classical"),
            new composer("12", "Antonin", "Dvorak", "Classical"),
            new composer("13", "Franz Joseph", "Haydn", "Classical"),
            new composer("14", "Gustav", "Mahler", "Classical"),
            new composer("15", "Wolfgang Amadeus", "Mozart", "Classical"),
            new composer("16", "Johann", "Pachelbel", "Classical"),
            new composer("17", "Gioachino", "Rossini", "Classical"),
            new composer("18", "Dmitry", "Shostakovich", "Classical"),
            new composer("19", "Richard", "Wagner", "Classical"),
            new composer("20", "Louis-Hector", "Berlioz", "Romantic"),
            new composer("21", "Georges", "Bizet", "Romantic"),
            new composer("22", "Cesar", "Cui", "Romantic"),
            new composer("23", "Claude", "Debussy", "Romantic"),
            new composer("24", "Edward", "Elgar", "Romantic"),
            new composer("25", "Gabriel", "Faure", "Romantic"),
            new composer("26", "Cesar", "Franck", "Romantic"),
            new composer("27", "Edvard", "Grieg", "Romantic"),
            new composer("28", "Nikolay", "Rimsky-Korsakov", "Romantic"),
            new composer("29", "Franz Joseph", "Liszt", "Romantic"),
            new composer("30", "Felix", "Mendelssohn", "Romantic"),
            new composer("31", "Giacomo", "Puccini", "Romantic"),
            new composer("32", "Sergei", "Rachmaninoff", "Romantic"),
            new composer("33", "Camille", "Saint-Saens", "Romantic"),
            new composer("34", "Franz", "Schubert", "Romantic"),
            new composer("35", "Robert", "Schumann", "Romantic"),
            new composer("36", "Jean", "Sibelius", "Romantic"),
            new composer("37", "Bedrich", "Smetana", "Romantic"),
            new composer("38", "Richard", "Strauss", "Romantic"),
            new composer("39", "Pyotr Il'yich", "Tchaikovsky", "Romantic"),
            new composer("40", "Guiseppe", "Verdi", "Romantic"),
            new composer("41", "Bela", "Bartok", "Post-Romantic"),
            new composer("42", "Leonard", "Bernstein", "Post-Romantic"),
            new composer("43", "Benjamin", "Britten", "Post-Romantic"),
            new composer("44", "John", "Cage", "Post-Romantic"),
            new composer("45", "Aaron", "Copland", "Post-Romantic"),
            new composer("46", "George", "Gershwin", "Post-Romantic"),
            new composer("47", "Sergey", "Prokofiev", "Post-Romantic"),
            new composer("48", "Maurice", "Ravel", "Post-Romantic"),
            new composer("49", "Igor", "Stravinsky", "Post-Romantic"),
            new composer("50", "Carl", "Orff", "Post-Romantic"),
        );
    }

}
