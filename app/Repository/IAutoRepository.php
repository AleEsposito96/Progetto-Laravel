<?php

    namespace App\Repository;

    interface IAutoRepository {

        public function getAllAuto();

        public function createAnnuncio(array $data);

        public function getSingleAnnuncio($id);

        public function editAnnuncio($id);

        public function updateAnnuncio($id, array $data);

    }

    

?>