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
    public function Afficher()
{
    return view('dev', [
        'message' => 'Welcome to the developer page!',
        'devMessage' => 'This is a custom message from the route.',
        'msg' => 'Golden Number'
    ]);
}
}
