<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\DB;
use App\Contact;


class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view ('ViewContact');
    }

    //envoyer le message dans la base de données 
    public function store(ContactRequest $request)
    {
        $contact = new Contact;
        $contact->contact_name = $request->contact_name;
        $contact->contact_email = $request->contact_email;
        $contact->contact_message = $request->contact_message;
        $contact->post_date = date('Y-m-d H:i:s');
        $contact->save();

        //récupérer le id du dernier message enregistré
        $last_id = Contact::get()->last()->id;
        /*récupérer toutes informations concernant les trois derniers messages enregistrés 
        dans la variable $liste*/
        $liste = Contact::find([$last_id, $last_id-1, $last_id-2]);
        //si l'ajout du message a été réussi on envoie à la vue deux variable $listes et $name
        if ($contact->save()){
            return view('ViewContact',[
                'name' => $request->contact_name,
                'listes' => $liste
            ]);
        }
        
    }

    public function AfficheListeContact(){
        /*cette fonction affiche les trois derniers messages enregistrés quand on est dans
        la page contact, elle fait pas le meme boulot que store, mais elle affiche d'une manière
        constante les derniers messages meme si on ajoute pas de message */
        $last_id = Contact::get()->last();
        $id = $last_id['id'];
        $liste = Contact::find([$id, $id - 1, $id - 2]);
        return view('ViewContact',[
            'listes' => $liste
        ]);

    }
}
