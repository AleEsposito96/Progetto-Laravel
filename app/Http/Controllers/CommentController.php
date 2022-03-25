<?php

namespace App\Http\Controllers;

use App\Models\Recensioni;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function addComment(Request $request, $id) {

        Recensioni::create([
            'auto_id' => $id,
            'comment' => $request->comment,
            'rating' => $request->rating
        ]);
    }


}

