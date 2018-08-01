<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Etudiant;


class EtudiantController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    //ajout d'un etudiant
     public function add(Request $request)
    {
        Etudiant::create($request->all());

        return back()->with('status' ,trans('etudiant.msgenregistrementok'));
    }

    
     public function show($id)
    {
        $etudiant = Etudiant::findorfail($id);

         return view('etudiant.show' , compact('etudiant'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //foction qui permet la modification d'un etudiant
    public function edit($id)
    {
      $etudiant =  Etudiant::findorfail($id);

         return view('etudiant.edit' , compact('etudiant'));
    }


    //suppression d'un etudiant
    public function delete($id)
    {
           

        Etudiant::destroy($id);

         return Redirect('home')->with('status' ,trans('etudiant.msgsuppressionok'));;
    }

   //modification d'un etudiant
    public function update(Request $request , $id)
    {
        $etudiant = Etudiant::findorfail($id);
        $etudiant->nom= $request->input('nom');
        $etudiant->prenom= $request->input('prenom');
        $etudiant->save();
        return back()->with('status' ,trans('etudiant.msgmiseajourok'));
    }
}
