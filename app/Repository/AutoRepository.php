<?php

    namespace App\Repository;

use App\Models\Annunci;

    class AutoRepository implements IAutoRepository{

        public function getAllAuto()
        {
            return Annunci::all();
        }

        public function createAnnuncio(array $data)
        {
            Annunci::insert([
                'picture' => $data['picture'],
                'title' => $data['title'],
                'price' => $data['price'],
                'description' => $data['description'],
            ]);
        }

        public function getSingleAnnuncio($id)
        {
            return Annunci::find($id);
        }

        public function editAnnuncio($id)
        {
             return Annunci::find($id);
        }

        public function updateAnnuncio($id, array $data)
        {
            Annunci::find($id)->update([
                'picture' => $data['picture'],
                'title' => $data['title'],
                'price' => $data['price'],
                'description' => $data['description'],
            ]);
        }




    } 

    

?>