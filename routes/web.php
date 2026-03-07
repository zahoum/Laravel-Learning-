 <?php 

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MyController;

// Route::get('/', function () {
//     return view('HommePage');
// });

// Route::get('/ContactPage',function(){
//     return view('ContactPage');
// })->name('ContactPage');

// Route::get('/About',function(){
//     return view('About');
// }); 
// Route::get('/Stagaire/{filiere?}',function($filiere=null){
//     return '<h1> la filiere est :'.$filiere .'</h1>';
// });

// i use this lien http://127.0.0.1:8000/stagaire?filiere=gestion to see the first return that mean you can use query string to send parameter 
// Route::get('/stagaire',function(){
//     $p1 = request('filiere');
//     if(isset($p1)){
//         return 'Ceci e la page Stagaire avec la filiere : '.$p1; 
//     }else{
//         return 'tout les stagaire';
//     }
// });


// route pour calculler le somme de x et y et affichier le somme de x et y et = ...
// use the http://127.0.0.1:8000/somme?x=2&y=7 to see the result in navigator   
// Route::get('/somme', function(){
//     $x = request('x');
//     $y = request('y');   
    
//     if(!isset($x) || !isset($y)) {
//         return "Veuillez entrer x et y les deux ";
//     }
//     if(!is_numeric($x) || !is_numeric($y)) {
//         return "Veuillez entrer une valeur numérique pour x et y";
//     }
    
//     $somme = $x + $y;
//     return " $x + $y  = $somme" ;
// });


// Route::get('/Infos1/{nom?}/{age?}', function($nom = null, $age = 0){
//     if (!$nom) {
//         return "Aucun nom fourni";
//          }
//     return "Votre nom est : $nom et votre age est : $age";
// });
//using with
// Route::get('/Calcul',function(){
//     return view('Calcul')->with([ 
//         'x'=>200,
//         'y'=> 30,
//         'operation'=>'+'
//      ]);
// });

//using the method Compact
// Route::get('/Calcul',function(){
//     return view('Calcul',compact('x','y','operation'));
// });


// Route::get('/Calcul',function(){
//     return view('Calcul',['x'=>1,'y'=>9,'operation'=>'+']);
// })->name('Calcul') ;

// vieu href lien redirection to an other link

// Route::get('/HommePage',function(){
//     return view('HommePage');
// })->name('home') ;

// Route::get('/dev',function(){
//     return view('dev');
// })->name('dev') ;

// Route::get('Tri',function(){
//     return view('tri');
// })->name('Tri') ;

// Route::get('/dev',[MyController::class,'Afficher']
// );

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PostController;
// Home Routes
Route::get('/', function () {
    return view('HommePage');
})->name('home');

Route::get('/HommePage', function () {
    return view('HommePage');
})->name('home.alt');

// Page Routes
Route::get('/ContactPage', function () {
    return view('ContactPage');
})->name('ContactPage');

Route::get('/About', function () {
    return view('About');
})->name('about');

Route::get('/Calcul', function () {
    return view('Calcul', [
        'x' => 10,
        'y' => 5,
        'operation' => '+'
    ]);
})->name('Calcul');

// Dev Routes - Fixed duplicate route issue
Route::get('/dev', [MyController::class, 'Afficher']);

// Controller route for dev - Using different URI or removing duplicate
Route::get('/Tri', function () {
    return view('tri');
})->name('Tri');

// Query Parameter Routes
Route::get('/stagaire', function () {
    $filiere = request('filiere');
    if (isset($filiere)) {
        return 'This is the student page with filiere: ' . $filiere;
    } else {
        return 'All students';
    }
});

// Calculation Route
Route::get('/somme', function () {
    $x = request('x');
    $y = request('y');

    if (!isset($x) || !isset($y)) {
        return "Please enter both x and y values";
    }
    if (!is_numeric($x) || !is_numeric($y)) {
        return "Please enter numeric values for x and y";
    }

    $sum = $x + $y;
    return "$x + $y = $sum";
});

// Parameter Route
Route::get('/Infos1/{nom?}/{age?}', function ($nom = null, $age = 0) {
    if (!$nom) {
        return "No name provided";
    }
    return "Your name is: $nom and your age is: $age";
});

// Note: The default Laravel welcome page is still accessible at /welcome
Route::get('/dev',[MyController::class,'Afficher'])->name('dev') ;
Route::resource('produit', PostController::class)->names([
    'index' => 'articles.index',
    'create' => 'articles.create',
    'store' => 'articles.store',
    'show' => 'articles.show',
    'edit' => 'articles.edit',
    'update' => 'articles.update',
    'destroy' => 'articles.destroy',
]);   