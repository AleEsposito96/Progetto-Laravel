<?php

    namespace App\Repository;

use App\Models\Annunci;
use App\Models\Recensioni;

    class AdminRepository implements IAdminRepository{


        // auto admin page
        public function adminGetAllAuto()
        {
            return Annunci::all();
        }

        // comments admin page
        public function adminGetAllComments()
        {
            return Recensioni::all();
        }

        public function adminDeleteAuto($id)
        {
            return Annunci::find($id)->delete();
        }

        public function adminDeleteComments($id)
        {
            return Recensioni::find($id)->delete();
        }

    } 

    

?>