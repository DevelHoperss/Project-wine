<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PublicController extends Controller
{
    public function home() {
 
        $recensioni = array(
            (object) [
                'img'=>'Recensione1',
                'testo'=>'Unica controindicazione, euforia irreversibile',
            ],
            (object) [
                'img'=>'Recensione2',
                'testo'=>'Ottimo anche sui dolci e per aperitivo!',
            ],
            (object) [
                'img'=>'Recensione3',
                'testo'=>'Rende il tavolo elegante',
            ],
            (object) [
                'img'=>'Recensione4',
                'testo'=>'Accostamento perfetto…',
            ],
            (object) [
                'img'=>'Recensione5',
                'testo'=>'Un vino maschio per donne di carattere',
            ],
            (object) [
                'img'=>'Recensione6',
                'testo'=>'Buono, anche oltre oceano..',
            ],
            (object) [
                'img'=>'Recensione7',
                'testo'=>'Perfetto, in ogni situazione',
            ],
        );

        return view('welcome', compact('recensioni'));
    }
    
    public function setLanguage($lang)
    {
        session()->put('locale',$lang);
        return redirect()->back();
    }
}
