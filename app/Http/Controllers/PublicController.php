<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public $struments = [
        [
            "id" => 1,
            "name" => "Chitarra elettrica",
            "img" => "chitarra_elettrica.jpg",
            "abstract" => "La chitarra elettrica è uno strumento musicale a corde amplificato elettricamente. È molto utilizzata nel rock e nel pop.",
            "category" => "Cordofoni"
        ],
          
          [
            "id" => 2,
            "name" => "Pianoforte a coda",
            "img" => "pianoforte_a_coda.jpg",
            "abstract" => "Il pianoforte a coda è uno strumento a tastiera con corde che vengono colpite da martelletti. È molto utilizzato nella musica classica.",
            "category" => "Cordofoni"
            
          ],
        
          [
            "id"=> 3,
            "name"=> "Batteria",
            "img" => "batteria.jpg",
            "abstract" => "La batteria è uno strumento musicale a percussione composto da tamburi, piatti e pedali. È molto utilizzata nella musica rock e jazz.",
            "category" => "Percussioni"
          ],
          
          [
            "id"=> 4,
            "name"=> "Sassofono",
            "img"=> "sassofono.jpg",
            "abstract" => "Il sassofono è uno strumento musicale a fiato con una caratteristica forma a tubo. È utilizzato in vari generi musicali come il jazz e il pop.",
            "category"=> "Fiati"
          ],
          
          [
            "id"=> 5,
            "name"=> "Violino",
            "img"=> "violino.jpg",
            "abstract"=> "Il violino è uno strumento musicale a corda suonato con un archetto. È molto utilizzato nella musica classica e nel folk.",
            "category"=> "Cordofoni"
          ],
          
          [
            "id"=> 6,
            "name" => "Tromba",
            "img" => "tromba.jpg",
            "abstract" => "La tromba è uno strumento musicale a fiato con un suono metallico e brillante. È utilizzata principalmente nella musica jazz e nelle orchestre.",
            "category" => "Fiati"
          ],
          
          [
            "id" => 7,
            "name" => "Flauto traverso",
            "img" =>"flauto_traverso.jpg",
            "abstract" =>"Il flauto traverso è uno strumento musicale a fiato con un suono dolce e cristallino. È utilizzato in vari generi musicali come la musica classica e il folk.",
            "category" =>"Fiati"
          ],
         
          [
            "id" => 8,
            "name" => "Pianoforte digitale",
            "img" => "pianoforte_digitale.jpg",
            "abstract" => "Il pianoforte digitale è uno strumento musicale elettronico che emula il suono e la tastiera di un pianoforte acustico. È utilizzato in diverse situazioni, dalla pratica individuale all'esecuzione in performance dal vivo.",
            "category" => "Tastiere"
          ],
    
        ];
        
        public function showHomePage() {
        return view('welcome', ['struments' => $this->struments]);
       }
}
