<?php

namespace App\Http\Controllers;

use App\Repository\IAdminRepository;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public $admin;

    public function __construct(IAdminRepository $admin)
    {
        $this->admin = $admin;
    }

    public function adminGetAllAuto()
    {
        $auto = $this->admin->adminGetAllAuto();
        return view('admin.auto')->with('auto', $auto);
    }

    public function adminGetAllComments()
    {
        $comments = $this->admin->adminGetAllComments();
        return view('admin.comments')->with('comments', $comments);
    }

    // delete a single auto
    public function adminDeleteAuto($id)
    {
        $this->admin->adminDeleteAuto($id);
        return redirect('/admin/auto');
    }

    // delete a single comment
    public function adminDeleteComments($id)
    {
        $this->admin->adminDeleteComments($id);
        return redirect('/admin/auto/comments');
    }
}
