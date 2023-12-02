<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Ville;
use App\Hotele;

class VilleController extends Controller
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
        $villes = Ville::all();

        return view("admin.ville", compact("villes"));
    }
    public function view()
    {
        $villes = Ville::all();
        $hoteles = Hotele::all();

        return view("ville.bobo", compact("villes", "hoteles"));
    }
    public function view2()
    {
        $villes = Ville::all();
        $hoteles = Hotele::all();

        return view("ville.ouaga", compact("villes", "hoteles"));
    }
    public function view3()
    {
        $villes = Ville::all();
        $hoteles = Hotele::all();

        return view("ville.koudougou", compact("villes", "hoteles"));
    }

    public function ajouter(Request $request)
    {
        $ville = new Ville();
        $ville->nom = $request->nom;
        $ville->bouton = $request->bouton;

        // Vérifiez si une image a été téléchargée
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put('images/' . $imageName, file_get_contents($image));
            $ville->photo = $imageName;
        }

        $ville->save();

        return redirect()->route('ville.liste')->with('success', 'Vous venez d\'ajouter un hôtel avec succès.');
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'bom' => 'required',
            'bouton' => 'required',
        ]);


        $ville = Ville::findOrFail($id);

        $ville->nom = $request->input('nom');
        $ville->bouton = $request->input('bouton');

        // Vérifiez si une image a été téléchargée
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put('images/' . $imageName, file_get_contents($image));
            $ville->photo = $imageName;
        }

        $ville->update($validateData);

        return redirect()->route('ville.liste')->with('success', 'Vous venez de modifier un hôtel avec succes.');

    }

    public function delete($id)
    {
        $ville = Ville::find($id);
        $ville->delete();

        return redirect('/ville/liste')->with('success', 'Vous avez supprimé un hôtel.');
    }
}
