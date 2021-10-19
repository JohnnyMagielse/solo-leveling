<?php

class ContentSelector {

    function __construct() {
        
    }

    function handleRequest() {
        try {

            $read = isset($_REQUEST['read']) ? $read = $_REQUEST['read'] : $read = NULL;

            switch ($read) {
                case 'About':
                    $this->readAbout();
                    break;
                case 'Relationships':
                    $this->readRelationships();
                    break;
                case 'Skills':
                    $this->readSkills();
                    break;
                case 'Troops':
                    $this->readTroops();
                    break;
                case 'Equipment':
                    $this->readEquipment();
                    break;
                default: // about
                    $this->readAbout();//parameter voor specifiek persoon
            }

        }catch (Exeption $e){
            throw $e;
        }
    }

    function readAbout() {
        echo "<h3 id='rank'>S Rank</h3>";
        echo "<h6>Shadow Monarch A.K.A</h6>";
        echo "<h1><b>SUNG JIN WOO</b></h1>";
        echo "<article>";
        echo "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>";
        echo "</article>";
    }

    function readRelationships() {
        echo "<h3>Relation</h3>";
        echo "<p>um has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>";
        echo "<h3>Relation</h3>";
        echo "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen b</p>";
        echo "<h3>Relation</h3>";
        echo "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen b</p>";
    }

    function readSkills() {
        echo "<h3>Skills</h3>";
        echo "<p>um has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>";
        echo "<h3>Skills</h3>";
        echo "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen b</p>";
        echo "<h3>Skills</h3>";
        echo "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen b</p>";
    }

    function readTroops() {
        echo "<h3>Troops</h3>";
        echo "<p>um has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>";
        echo "<h3>Troops</h3>";
        echo "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen b</p>";
        echo "<h3>Troops</h3>";
        echo "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen b</p>";
    }

    function readEquipment() {
        echo "<h3>Equipment</h3>";
        echo "<p>um has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>";
        echo "<h3>Equipment</h3>";
        echo "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen b</p>";
        echo "<h3>Equipment</h3>";
        echo "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen b</p>";
    }

    function __destruct() {
        $this->conn = null;
    }
}

$new = new ContentSelector();
$new->handleRequest();

?>