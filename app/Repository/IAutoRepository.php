<?php

    namespace App\Repository;

    interface IAutoRepository {

        public function getAllAuto();

        public function createAnnuncio(array $data);
    }

    

?>