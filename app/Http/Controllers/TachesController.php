<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tache;
use Illuminate\Http\Request;

class TachesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $user = User::findOrFail(auth()->id());
        if ($user->hasAnyRole(['parent'])) {
            $taches = Tache::all();
        }else {
            $taches = auth()->user()->taches;
        }
        return view('Admin.Taches.index', compact('taches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Taches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $taches = Tache::create([
            'nom' => $request->nom, 
            'ended_at' => $request->ended_at,
            'description' => $request->description,
        ]);
        return redirect()->route('admin.taches.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $taches = Tache::findOrFail($id);
        return view('Admin.Taches.edit', compact('taches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $taches = Tache::findOrFail($id);
        $taches->update([
            'nom'=>$request->nom,
            'ended_at'=>$request->ended_at,
            'description'=>$request->description,
        ]);
        return redirect()->route('admin.taches.index', compact('taches'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tache = Tache::findOrFail($id);
        $tache->delete();
        return redirect()->route('admin.taches.index');
    }
}
