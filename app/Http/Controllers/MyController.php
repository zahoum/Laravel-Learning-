<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class MyController extends Controller
// {
//     public function Afficher()
//     {
//         if (!session()->has('affiche')) {

//             $N = rand(1, 10);

//             if ($N === 3) {
//                 $message = "Golden Number";
//                 session(['affiche' => true]);
//             } else {
//                 $message = "Pas encore Trouver ...";
//             }

//         } else {
//             $message = "Vous avez déjà trouvé le nombre d'or !";
//         }

//         return view('dev', ['msg' => $message]);
//     }
// }
class MyController extends Controller
{
    public function Affichier()
    {
        $N = rand(1, 10);
        
        if ($N === 9)
            {
                $message = "Golden Number";
                $_SESSION['affiche'] = true;
                if(isset($_SESSION['affiche']) && $_SESSION['affiche'] == true){
                    $message = "Vous avez déjà trouvé le nombre d'or !";
                }
            }else
            {
                $message = "Pas encore Trouver ...";
            }
            return view('dev',['msg' => $message]);
    }
}
