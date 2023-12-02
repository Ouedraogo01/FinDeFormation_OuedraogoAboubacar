<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Hotele;
use App\Ville;

class HoteleController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function liste()
    {
        $hoteles = Hotele::all();
        $villes = Ville::all();

        return view("admin.hotele", compact("hoteles", "villes"));
    }
    public function liste2()
    {
        $hoteles = Hotele::all();
        $villes = Ville::all();

        return view("admin.hotele2", compact("hoteles", "villes"));
    }
    public function liste3()
    {
        $hoteles = Hotele::all();
        $villes = Ville::all();

        return view("admin.hotele3", compact("hoteles", "villes"));
    }

    public function ajouter(Request $request)
    {
        $hotele = new Hotele();
        $hotele->nom = $request->nom;
        $hotele->localisation = $request->localisation;
        $hotele->bouton = $request->bouton;
        $hotele->small = $request->small;
        $hotele->ville_id = $request->ville_id;

        // Vérifiez si une image a été téléchargée
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put('images/' . $imageName, file_get_contents($image));
            $hotele->photo = $imageName;
        }

        $hotele->save();

        return redirect()->route('hotele.liste')->with('success', 'Vous avez ajouté un hôtel avec succès.');
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'nom' => 'required',
            'localisation' => 'required',
            'bouton' => 'required',
        ]);


        $hotele = Hotele::findOrFail($id);

        $hotele->nom = $request->input('nom');
        $hotele->localisation = $request->input('localisation');
        $hotele->bouton = $request->input('bouton');
        $hotele->small = $request->input('small');
        $hotele->ville_id = $request->input('ville_id');

        // Vérifiez si une image a été téléchargée
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put('images/' . $imageName, file_get_contents($image));
            $hotele->photo = $imageName;
        }

        $hotele->update($validateData);

        return redirect()->route('hotele.liste')->with('success', 'L\'hôtel a été modifier avec succes.');

    }

    public function delete($id)
    {
        $hotele = Hotele::find($id);
        $hotele->delete();

        return redirect()->route('hotele.liste')->with('success', 'Vous avez supprimé un hôtel.');
    }

    public function recherche()
    {
        $hoteles = Hotele::all();
        $villes = Ville::all();

        $q = request()->input('q');

        $resultats = Hotele::where('nom', 'like', "%$q%")
            ->orWhere('localisation', 'like', "%$q%");

        return view('resultats', compact("hoteles", "villes"))->with('resultats', $resultats);
    }

    // public function afficherResultats(Request $request)
    // {
    //     $query = $request->input('query');
    //     $resultats = $request->input('resultas');

    //     return view('resultats', ['query' => $query, 'resultats' => $resultats]);
    // }
}
