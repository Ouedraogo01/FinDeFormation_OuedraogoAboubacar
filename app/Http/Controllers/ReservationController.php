<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationApprouvee;
use App\Reservation;
use App\Chambre;
use App\Contact;
use App\Hotele;
use App\Ville;

use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
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
    public function liste1()
    {
        $reservations = Reservation::all();
        $chambres = Chambre::all();
        $hoteles = Hotele::all();
        $villes = Ville::all();

        return view("admin.lanReserve", compact("chambres", "hoteles", "reservations", "villes"));
    }
    public function liste2()
    {
        $reservations = Reservation::all();
        $chambres = Chambre::all();
        $hoteles = Hotele::all();
        $villes = Ville::all();

        return view("admin.silReserve", compact("chambres", "hoteles", "reservations", "villes"));
    }
    public function liste3()
    {
        $reservations = Reservation::all();
        $chambres = Chambre::all();
        $hoteles = Hotele::all();

        return view("admin.braviaReserve", compact("chambres", "hoteles", "reservations"));
    }
    public function liste4()
    {
        $reservations = Reservation::all();
        $chambres = Chambre::all();
        $hoteles = Hotele::all();

        return view("admin.ibaReserve", compact("chambres", "hoteles", "reservations"));
    }
    public function liste5()
    {
        $reservations = Reservation::all();
        $chambres = Chambre::all();
        $hoteles = Hotele::all();

        return view("admin.sabyReserve", compact("chambres", "hoteles", "reservations"));
    }
    public function liste6()
    {
        $reservations = Reservation::all();
        $chambres = Chambre::all();
        $hoteles = Hotele::all();

        return view("admin.pacificReserve", compact("chambres", "hoteles", "reservations"));
    }
    public function liste7()
    {
        $reservations = Reservation::all();
        $chambres = Chambre::all();
        $hoteles = Hotele::all();

        return view("admin.splenReserve", compact("chambres", "hoteles", "reservations"));
    }
    public function liste8()
    {
        $reservations = Reservation::all();
        $chambres = Chambre::all();
        $hoteles = Hotele::all();

        return view("admin.pousReserve", compact("chambres", "hoteles", "reservations"));
    }
    public function liste9()
    {
        $reservations = Reservation::all();
        $chambres = Chambre::all();
        $hoteles = Hotele::all();

        return view("admin.dimaReserve", compact("chambres", "hoteles", "reservations"));
    }
    public function reserve(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'date' => 'required|date',
            'dates' => 'required|date',
        ]);

        $user_id = auth()->user()->id;

        $reservations = new Reservation();
        $reservations->nom = $request->nom;
        $reservations->prenom = $request->prenom;
        $reservations->dateArriver = $request->date;
        $reservations->dateDepart = $request->dates;
        $reservations->statut = 'en_attente';
        $reservations->user_id = $user_id;
        $reservations->chambre_id = $request->chambre_id;
        $reservations->hotele_id = $request->hotele_id;

        $reservations->save();

        return redirect()->back()->with('success', 'Réservation effectuée avec succès !');
    }

    public function viewReserve()
    {
        $chambres = Chambre::all();
        $user = Auth::user();
        $reservations = Reservation::where('user_id', $user->id)->get();
        return view('mesReservations', compact("chambres"))->with('reservations', $reservations);

    }

    public function approuverReservation($id)
    {
        $reservations = Reservation::find($id);

        $reservations->statut = 'approuvé';
        $reservations->save();

        // Mail::to($reservations->user->email)->send(new ReservationApprouvee($reservations));

        return redirect()->back()->with('success', 'La réservation a été approuvée avec succès!');
    }

    public function delete($id)
    {
        $reservations = Reservation::find($id);
        $reservations->delete();

        return redirect()->back()->with('success', 'Vous avez supprimé une reservation.');
    }
}
