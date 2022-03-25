<?php

namespace App\Http\Controllers;

use App\Repository\IAutoRepository;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;

class AutoController extends Controller
{
    public $auto;

    public function __construct(IAutoRepository $auto)
    {
        $this->auto = $auto;
    }
    
    public function index() {

       $auto =  $this->auto->getAllAuto();

       return view('auto.index')->with('auto', $auto);
    }

    public function create() {
        return view('auto.create'); 
    }

    public function store(Request $request) {
        $request->validate([
            'picture' => 'required',
            'title' => 'required',
            'price' => 'required',
        ]);

        $data = $request->all();

        // picture upload

        if($image = $request->file('picture')) {
            $name = time() . "." . $image->getClientOriginalName();
            $image->move(public_path('images'), $name);
            $data['picture'] = "$name";  
        }

        $this->auto->createAnnuncio($data);

        return redirect('/auto');
    }


    public function show($id) {
        $auto = $this->auto->getSingleAnnuncio($id);
        return view('auto.show')->with('auto', $auto);
    }

    public function edit($id) {
        $auto = $this->auto->editAnnuncio($id);
        return view('auto.edit')->with('auto', $auto);
    }

    public function update($id, Request $request) {

        $request->validate([
            'picture' => 'required',
            'title' => 'required',
            'price' => 'required',
        ]);

        $data = $request->all();

        // picture upload

        if($image = $request->file('picture')) {
            $name = time() . "." . $image->getClientOriginalName();
            $image->move(public_path('images'), $name);
            $data['picture'] = "$name";  
        }


        $this->auto->updateAnnuncio($id, $data);
        return redirect('/auto');
    }




}
