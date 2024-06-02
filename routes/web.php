<?php

use App\Http\Controllers\FactureController;
use App\Livewire\Utilisateur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|n

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// ->middleware("can:superadmin");
// les route des Admins
// Route::get('/Admin', [App\Http\Controllers\Admin::class, 'index'])->name('Admin');
// Auth::routes();

// pour la ville

// Route::get('/admin', [App\Http\Controllers\Admin::class, 'index'])->name('admin');
Route::get('/sadmin', [App\Http\Controllers\Sadmin::class, 'index'])->name('sadmin');
// Route::get('/ajouter', [App\Http\Controllers\ajouter::class, 'index'])->name('ajouter');
Route::get('/ville={id}', [App\Http\Controllers\Sadmin::class, 'edit'])->name('edit_ville');
Route::put('/update_ville/{id}', [App\Http\Controllers\Sadmin::class, 'update'])->name('update_ville');
Route::delete('/delete/{ville}', [App\Http\Controllers\Sadmin::class, 'destroy'])->name('delete_ville');
Route::get('/ajouterville', [App\Http\Controllers\Sadmin::class, 'afficher'])->name('ajouterville');
Route::post('/enregistrerVille', [App\Http\Controllers\Sadmin::class, 'store'])->name('enregistrerVille');

// <-----------------POUR QUARTIER------------------------->
Route::get('/liste_Quartier', [App\Http\Controllers\Sadminquartier::class, 'index'])->name('liste_Quartier');
Route::post('/enregistrer_Quartier', [App\Http\Controllers\Sadminquartier::class, 'store'])->name('enregistrer_Quartier');
Route::delete('/delete_quartier/{quartier}', [App\Http\Controllers\Sadminquartier::class, 'destroy'])->name('delete_quartier');
Route::put('/update_quartier/{id}', [App\Http\Controllers\Sadminquartier::class, 'update'])->name('update_quartier');
Route::get('/quartier={id}', [App\Http\Controllers\Sadminquartier::class, 'edit'])->name('edit_quartier');
Route::get('/ajouter_Quartier', [App\Http\Controllers\Sadminquartier::class, 'afficher'])->name('ajouter_Quartier');

//  <-----------------POUR UTILISATEUR------------------------->
Route::get('/liste_utilisateur', [App\Http\Controllers\UserController::class, 'index'])->name('liste_utilisateur');
Route::post('/enregistrer_utilisateur', [App\Http\Controllers\UserController::class, 'store'])->name('enregistrer_utilisateur');
Route::delete('/delete/{utilisateur}', [App\Http\Controllers\UserController::class, 'destroy'])->name('delete_utilisateur');
// Route::put('/update_quartier/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('update_utilisateur');
// Route::get('/quartier={id}', [App\Http\Controllers\UserController::class, 'edit'])->name('edit_utilisateur');
Route::get('/ajouter_utilisateur', [App\Http\Controllers\UserController::class, 'affichage'])->name('ajouter_utilisateur');

// <-----------------POUR TYPE_UTILITEUR------------------------->
Route::get('/liste_Type_Utilisateur', [App\Http\Controllers\typeUtilisateurController::class, 'index'])->name('liste_Type_Utilisateur');
Route::post('/enregistrer_Type_Utilisateur', [App\Http\Controllers\typeUtilisateurController::class, 'store'])->name('enregistrer_Type_Utilisateur');
Route::delete('/delete/{Type_Utilisateur}', [App\Http\Controllers\typeUtilisateurController::class, 'destroy'])->name('delete_Type_Utilisateur');
Route::put('/update_Type_Utilisateur/{id}', [App\Http\Controllers\typeUtilisateurController::class, 'update'])->name('update_Type_Utilisateur');
Route::get('/Type_Utilisateur={id}', [App\Http\Controllers\typeUtilisateurController::class, 'edit'])->name('edit_Type_Utilisateur');
Route::post('/enregistrer_Type_Utilisateur', [App\Http\Controllers\typeUtilisateurController::class, 'store'])->name('enregistrer_Type_Utilisateur');

// <-----------------POUR LOGEMENT------------------------->

Route::get('/liste_logement', [App\Http\Controllers\logementController::class, 'index'])->name('liste_logement');
Route::post('/enregistrer_logement', [App\Http\Controllers\logementController::class, 'store'])->name('enregistrer_logement');
Route::delete('/delete/{logement}', [App\Http\Controllers\logementController::class, 'destroy'])->name('delete_logement');
Route::put('/update_logement/{id}', [App\Http\Controllers\logementController::class, 'update'])->name('update_logement');
Route::get('/Type_logement={id}', [App\Http\Controllers\logementController::class, 'edit'])->name('edit_Type_logement');
Route::get('/ajouter_logement', [App\Http\Controllers\logementController::class, 'create'])->name('ajouter_logement');
Route::put('/logements/{logement}/activer', [App\Http\Controllers\logementController::class, 'activer'])->name('logements.activer');
Route::put('/logements/{logement}/desactiver', [App\Http\Controllers\logementController::class, 'desactiver'])->name('logements.desactiver');

// <-----------------POUR TYPE_LOGEMENT------------------------->
Route::get('/liste_type_logement', [App\Http\Controllers\typeLogementController::class, 'index'])->name('liste_type_logement');
Route::post('/enregistrer_type_logement', [App\Http\Controllers\typeLogementController::class, 'store'])->name('enregistrer_type_logement');
Route::delete('/delete_type_logement/{type_logement}', [App\Http\Controllers\typeLogementController::class, 'destroy'])->name('delete_type_logement');
Route::put('/update_type_logement/{id}', [App\Http\Controllers\typeLogementController::class, 'update'])->name('update_type_logement');
Route::get('/type_logement={id}', [App\Http\Controllers\typeLogementController::class, 'edit'])->name('type_logement');
Route::get('/ajouter_type_logement', [App\Http\Controllers\typeLogementController::class, 'affichage'])->name('ajouter_type_logement');

// <-----------------POUR LOCATION------------------------->
Route::get('/liste_logementLOCO', [App\Http\Controllers\locationController::class, 'create'])->name('liste_logementLOCO');
Route::get('/listeFinContrat', [App\Http\Controllers\locationController::class, 'ListeFinContrat'])->name('listeFinContrat');
Route::get('/listeFinContratEffectuer', [App\Http\Controllers\locationController::class, 'ListeFinContratefectuer'])->name('listeFinContratEffectuer');
Route::get('/liste_location', [App\Http\Controllers\locationController::class, 'index'])->name('liste_location');
Route::post('/enregistrerlocation', [App\Http\Controllers\locationController::class, 'store'])->name('enregistrerlocation');
Route::delete('/delete/{locationt}', [App\Http\Controllers\locationController::class, 'destroy'])->name('delete_location');
Route::put('/update_location/{id}', [App\Http\Controllers\locationController::class, 'update'])->name('update_location');
Route::get('/location={id}', [App\Http\Controllers\locationController::class, 'edit'])->name('edit_location');
Route::get('/location_contrat={id}', [App\Http\Controllers\locationController::class, 'contrat'])->name('location_contrat');
Route::get('/DTFin_contrat={DFid}', [App\Http\Controllers\locationController::class, 'DetailFinContrat'])->name('DTFin_contrat');
Route::put('/contrat_location/{contrat}', [App\Http\Controllers\locationController::class, 'updateFinContrat'])->name('contrat_location');

// Route::get('/location', [App\Http\Controllers\locationController::class, 'create'])->name('location');

// <-----------------POUR CLIENT------------------------->
Route::get('/liste_client', [App\Http\Controllers\clientController::class, 'index'])->name('liste_client');
Route::get('/ajouterClient', [App\Http\Controllers\clientController::class, 'affichage'])->name('ajouterClient');
Route::delete('/delete/{client}', [App\Http\Controllers\clientController::class, 'destroy'])->name('delete_client');
Route::put('/update_client/{id}', [App\Http\Controllers\clientController::class, 'update'])->name('update_client');
Route::get('/client={id}', [App\Http\Controllers\clientController::class, 'edit'])->name('edit_client');
Route::post('/enregistrerClient', [App\Http\Controllers\clientController::class, 'store'])->name('enregistrerClient');

// <----------------- POUR type clients ------------------------->
Route::get('/liste_typeclient', [App\Http\Controllers\typeclientsController::class, 'index'])->name('liste_typeclient');
Route::get('/ajoutertypeClient', [App\Http\Controllers\typeclientsController::class, 'affichage'])->name('ajoutertypeClient');
// Route::delete('/delete/{client}', [App\Http\Controllers\clientController::class, 'destroy'])->name('delete_client');
// Route::put('/update_client/{id}', [App\Http\Controllers\clientController::class, 'update'])->name('update_client');
// Route::get('/client={id}', [App\Http\Controllers\clientController::class, 'edit'])->name('edit_client');
Route::post('/enregistrer_typeclient', [App\Http\Controllers\typeclientsController::class, 'store'])->name('enregistrer_typeclient');

// <----------------- POUR LA PAGE D'ACCUIEL ------------------------->

Route::get('/cc', [App\Http\Controllers\index::class, 'index'])->name('cc');
Route::get('/login', [App\Http\Controllers\index::class, 'create'])->name('login');
// Route::get('/vis', [App\Http\Controllers\index::class, 'visite'])->name('vis');
Route::get('/visiter/{id}', [App\Http\Controllers\index::class, 'edit'])->name('vis');
// Route::get('/visiter/{id}', [App\Http\Controllers\index::class, 'edit'])->name('vis');

Route::post('/enregistrerVisite', [App\Http\Controllers\index::class, 'EnreVisite'])->name('enregistrerVisite');



// <-----------------POUR LA PAGE SUPER_ADMIN------------------------->

Route::get('/utilisateur', [App\Http\Controllers\UserController::class, 'index'])->name('utilisateur')->middleware("auth.superadmin");

// <----------------- POUR MODE DE PAYEMENT ------------------------->
Route::get('/liste_mode_payement', [App\Http\Controllers\modepayementsController::class, 'index'])->name('liste_mode_payement');
Route::get('/ajouter_Mode_Payement', [App\Http\Controllers\modepayementsController::class, 'afficher'])->name('ajouter_Mode_Payement');
// Route::post('/enregistreModePayement', [App\Http\Controllers\ModePayementController::class, 'store'])->name('enregistreModePayement');
Route::post('/enregistremodepayement', [App\Http\Controllers\modepayementsController::class, 'store'])->name('enregistremodepayement');


// <----------------- Facture ------------------------->
Route::get('/listeFacture', [App\Http\Controllers\FactureController::class, 'index'])->name('listeFacture');
Route::get('/ajouterfacture', [App\Http\Controllers\FactureController::class, 'create'])->name('ajouterfacture');
Route::get('/facture={id}', [App\Http\Controllers\FactureController::class, 'edit'])->name('edit_facture');
Route::post('/enregistrefacture', [App\Http\Controllers\FactureController::class, 'store'])->name('enregistrefacture');
// Route::post('/enregistrefacture/{contrat}', [FactureController::class, 'store'])->name('enregistrefacture');
Route::get('/ListesF', [App\Http\Controllers\FactureController::class, 'affichage'])->name('ListesF');

// <-------------------------Detail -------------------------------------------------->
// <-----------------POUR MMAISON ------------------------->
Route::get('/listeMaison', [App\Http\Controllers\MaisonController::class, 'index'])->name('listeMaison');
Route::post('/enregistrer_maison', [App\Http\Controllers\MaisonController::class, 'store'])->name('enregistrer_maison');
// Route::post('/enregistrer_Quartier', [App\Http\Controllers\Sadminquartier::class, 'store'])->name('enregistrer_Quartier');
// Route::delete('/delete_quartier/{quartier}', [App\Http\Controllers\Sadminquartier::class, 'destroy'])->name('delete_quartier');
// Route::put('/update_quartier/{id}', [App\Http\Controllers\Sadminquartier::class, 'update'])->name('update_quartier');
// Route::get('/quartier={id}', [App\Http\Controllers\Sadminquartier::class, 'edit'])->name('edit_quartier');
// Route::get('/ajouter_Quartier', [App\Http\Controllers\Sadminquartier::class, 'afficher'])->name('ajouter_Quartier');


// <-----------------POUR PROPRIETAIRE------------------------->
Route::get('/listeProprietaire', [App\Http\Controllers\ProprietaireController::class, 'index'])->name('listeProprietaire');
Route::post('/enregistrerProprietaire', [App\Http\Controllers\ProprietaireController::class, 'store'])->name('enregistrerProprietaire');
Route::delete('/delete_Proprietaire/{Proprietaire}', [App\Http\Controllers\ProprietaireController::class, 'destroy'])->name('delete_Proprietaire');
Route::put('/update_Proprietaire/{id}', [App\Http\Controllers\ProprietaireController::class, 'update'])->name('update_quartier');
Route::get('/Proprietaire={id}', [App\Http\Controllers\ProprietaireController::class, 'edit'])->name('edit_Proprietaire');
Route::get('/ProprietaireModifi={id}', [App\Http\Controllers\ProprietaireController::class, 'editModification'])->name('editMdification');
// Route::get('/afiche', [App\Http\Controllers\ProprietaireController::class, 'affi'])->name('afiche');
Route::get('/ajouterProprietaire', [App\Http\Controllers\ProprietaireController::class, 'afficher'])->name('ajouterProprietaire');

// <-----------------POUR propreitaire maison ------------------------->
Route::get('/ajouter_P_M', [App\Http\Controllers\ProprioMaisonController::class, 'index'])->name('ajouter_P_M');
Route::get('/liste_maisonProprie', [App\Http\Controllers\ProprioMaisonController::class, 'affiche'])->name('liste_maisonProprie');
Route::post('/enregistrer_Pmaison', [App\Http\Controllers\ProprioMaisonController::class, 'store'])->name('enregistrer_Pmaison');
// Route::delete('/delete_quartier/{quartier}', [App\Http\Controllers\Sadminquartier::class, 'destroy'])->name('delete_quartier');
// Route::put('/update_quartier/{id}', [App\Http\Controllers\Sadminquartier::class, 'update'])->name('update_quartier');
// Route::get('/quartier={id}', [App\Http\Controllers\Sadminquartier::class, 'edit'])->name('edit_quartier');
// Route::get('/ajouter_Quartier', [App\Http\Controllers\Sadminquartier::class, 'afficher'])->name('ajouter_Quartier');



// <----------------EMAIL------------------------->

Route::get('/hugues',  function () {
    Mail::raw('bonjours bro', function ($message) {
        $message->to('kyram027@gmail.com')
            ->subject('Test Email');
    });

    return 'Test email sent';
});

// Route::get('/test-email', function () {
//     Mail::raw('bonjour bro', function ($message) {
//         $message->to('kyram027@gmail.com')
//             ->subject('Test Email');
//     });

//     return 'Test email sent';
// });