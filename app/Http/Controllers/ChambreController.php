<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Chambre;
use App\Hotele;
use App\Ville;

class ChambreController extends Controller
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

    public function view()
    {
        $chambres = Chambre::all();
        $villes = Ville::all();
        $hoteles = Hotele::all();

        return view("hotel.ibahotel", compact("chambres", "villes", "hoteles"));
    }
    public function view2()
    {
        $chambres = Chambre::all();
        $villes = Ville::all();
        $hoteles = Hotele::all();

        return view("hotel.silmende", compact("chambres", "villes", "hoteles"));
    }
    public function view3()
    {
        $chambres = Chambre::all();
        $villes = Ville::all();
        $hoteles = Hotele::all();

        return view("hotel.splendid", compact("chambres", "villes", "hoteles"));
    }
    public function view4()
    {
        $chambres = Chambre::all();
        $villes = Ville::all();
        $hoteles = Hotele::all();

        return view("hotel.bravia", compact("chambres", "villes", "hoteles"));
    }
    public function view5()
    {
        $chambres = Chambre::all();
        $villes = Ville::all();
        $hoteles = Hotele::all();

        return view("hotel.lancastar", compact("chambres", "villes", "hoteles"));
    }
    public function view6()
    {
        $chambres = Chambre::all();
        $villes = Ville::all();
        $hoteles = Hotele::all();

        return view("hotel.saby", compact("chambres", "villes", "hoteles"));
    }
    public function view7()
    {
        $chambres = Chambre::all();
        $villes = Ville::all();
        $hoteles = Hotele::all();

        return view("hotel.pacific", compact("chambres", "villes", "hoteles"));
    }
    public function view8()
    {
        $chambres = Chambre::all();
        $villes = Ville::all();
        $hoteles = Hotele::all();

        return view("hotel.dima", compact("chambres", "villes", "hoteles"));
    }
    public function view9()
    {
        $chambres = Chambre::all();
        $villes = Ville::all();
        $hoteles = Hotele::all();

        return view("hotel.pousga", compact("chambres"));
    }

    public function liste()
    {
        $chambres = Chambre::all();
        $hoteles = Hotele::all();
        $villes = Ville::all();

        return view("admin.chambre", compact("chambres", "hoteles", "villes"));
    }
    public function liste2()
    {
        $chambres = Chambre::all();
        $hoteles = Hotele::all();
        $villes = Ville::all();

        return view("admin.chambre2", compact("chambres", "hoteles", "villes"));
    }
    public function liste3()
    {
        $chambres = Chambre::all();
        $hoteles = Hotele::all();
        $villes = Ville::all();

        return view("admin.chambre3", compact("chambres", "hoteles", "villes"));
    }
    public function lanListe()
    {
        $chambres = Chambre::all();
        $hoteles = Hotele::all();
        $villes = Ville::all();

        return view("admin.lancastar", compact("chambres", "hoteles", "villes"));
    }
    public function sabyListe()
    {
        $chambres = Chambre::all();
        $hoteles = Hotele::all();
        $villes = Ville::all();

        return view("admin.saby", compact("chambres", "hoteles", "villes"));
    }
    public function pacListe()
    {
        $chambres = Chambre::all();
        $hoteles = Hotele::all();
        $villes = Ville::all();

        return view("admin.pacific", compact("chambres", "hoteles", "villes"));
    }
    public function dimaListe()
    {
        $chambres = Chambre::all();
        $hoteles = Hotele::all();
        $villes = Ville::all();

        return view("admin.dima", compact("chambres", "hoteles", "villes"));
    }
    public function braListe()
    {
        $chambres = Chambre::all();
        $hoteles = Hotele::all();
        $villes = Ville::all();

        return view("admin.bravia", compact("chambres", "hoteles", "villes"));
    }
    public function pousListe()
    {
        $chambres = Chambre::all();
        $hoteles = Hotele::all();
        $villes = Ville::all();

        return view("admin.pousga", compact("chambres", "hoteles", "villes"));
    }

    public function ajouter(Request $request)
    {
        $chambre = new Chambre();
        $chambre->type = $request->type;
        $chambre->description = $request->description;
        $chambre->prix = $request->prix;
        $chambre->hotele_id = $request->hotele_id;
        $chambre->ville_id = $request->ville_id;

        // Vérifiez si une image a été téléchargée
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put('images/' . $imageName, file_get_contents($image));
            $chambre->image = $imageName;
        }

        $chambre->save();

        return redirect()->back()->with('success', 'Une chambre à été ajouté avec succès.');
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'type' => 'required',
            'description' => 'required',
            'prix' => 'required',
        ]);


        $chambre = Chambre::findOrFail($id);

        $chambre->type = $request->input('type');
        $chambre->description = $request->input('description');
        $chambre->prix = $request->input('prix');
        $chambre->hotele_id = $request->input('hotele_id');
        $chambre->ville_id = $request->input('ville_id');

        // Vérifiez si une image a été téléchargée
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->put('images/' . $imageName, file_get_contents($image));
            $chambre->image = $imageName;
        }

        $chambre->update($validateData);

        return redirect()->route('chambre.liste')->with('success', 'La chambre a été modifier avec succes.');

    }

    public function delete($id)
    {
        $chambre = Chambre::find($id);
        $chambre->delete();

        return redirect('/chambre/liste')->with('success', 'Vous avez supprimé une chambre.');
    }

}
