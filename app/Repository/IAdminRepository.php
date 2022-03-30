<?php

    namespace App\Repository;

    interface IAdminRepository {

        public function adminGetAllAuto();

        public function adminGetAllComments();

        public function adminDeleteAuto($id);

        public function adminDeleteComments($id);

    }

    

?>