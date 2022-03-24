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
    } 

    

?>