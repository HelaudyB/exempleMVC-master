<?php
    class DbManager{
        protected $bdd;
        public function __construct()
        {
            try
            {
                $this->bdd = new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root', '');
                $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            }
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }
        }


    }
?>