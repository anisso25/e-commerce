<?php

use Illuminate\Support\Facades\Route;
use \Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;


Route::group([
    'prefix' => laravellocalization::setLocale(),
     'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        /* Start route theme 02 */
        Route::get('/',              'App\Http\Controllers\ClientController@home2')->name('home2');
        Route::get('/shop',          'App\Http\Controllers\ClientController@shop')->name('shop');
        Route::get('/detail',        'App\Http\Controllers\ClientController@detail')->name('detail');
        Route::get('/contact',       'App\Http\Controllers\ClientController@contact2')->name('contact2');
        Route::get('/cart',          'App\Http\Controllers\ClientController@cart')->name('cart');
        Route::get('/checkout',      'App\Http\Controllers\ClientController@checkout')->name('checkout');
        /* End route theme 02 */
        Route::get('viewP/{produit:id}',   [App\Http\Controllers\ClientController::class, 'viewP'])->name('viewP');
        Route::get('viewC/{Categorie:id}', [App\Http\Controllers\ClientController::class, 'viewC'])->name('viewC');
        Route::get('viewM/{Marque:id}',    [App\Http\Controllers\ClientController::class, 'viewM'])->name('viewM');

        Route::get('/panier/{add:id}',     'App\Http\Controllers\ShopController@add')->name('cart_add');
        Route::get('/panier',              'App\Http\Controllers\ClientController@cart')->name('cart_index');

        Route::post('/payer',              'App\Http\Controllers\ClientController@payer')->name('payer');

        Route::post('/modifier_qty/{id}', 'App\Http\Controllers\ShopController@update')->name('modifier_qty');
        Route::get('/retirer_p/{id}',     'App\Http\Controllers\ShopController@retirer')->name('retirer_p');

    Auth::routes( ['verify' => true] );

Route::group(['middleware' => ['auth', 'verified'/* , 'role:user' */]], function () {

    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');

    Route::controller(MarqueController::class)->prefix('marques')->group(function () {
        Route::get('/create',                   'create')->name('marques.create');
        Route::post('/store',                   'store') ->name('marques.store');
        Route::get('/indexMarque',              'indexMarque') ->name('marques.indexMarque');
        Route::get('/edit/{marque:id}',         'edit')  ->name('marque.edit');
        Route::put('/update',                   'update')->name('marques.update');
        Route::get('/destroy/{marque:id}',      'destroy')->name('marque.destroy');

        Route::get('/activer/{marque:id}',      'activer')->name('marque.activer');
        Route::get('/desactiver/{marque:id}',   'desactiver')->name('marque.desactiver');
    });

    Route::controller(CategorieController::class)->prefix('categories')->group(function () {
        Route::get('/create',                   'create')->name('categories.create');
        Route::post('/store',                   'store')->name('categories.store');
        Route::get('/indexCategorie',           'indexCategorie')->name('categories.indexCategorie');
        Route::get('/edit/{categorie:id}',      'edit')->name('categorie.edit');
        Route::put('/update',                   'update')->name('categories.update');
        Route::get('/destroy/{categorie:id}',   'destroy')->name('categorie.destroy');

        Route::get('/activer/{categorie:id}',   'activer')->name('categorie.activer');
        Route::get('/desactiver/{categorie:id}','desactiver')->name('categorie.desactiver');
    });

    Route::controller(ProduitController::class)->prefix('produits')->group(function () {
        Route::get('/create',                   'create')->name('produits.create');
        Route::post('/store',                   'store')->name('produits.store');
        Route::get('/indexProduit',             'indexProduit')->name('produits.indexProduit');
        Route::get('/edit/{produit:id}',        'edit')->name('produit.edit');
        Route::put('/update',                   'update')->name('produits.update');
        Route::get('/destroy/{produit:id}',     'destroy')->name('produit.destroy');

        Route::get('/activer/{produit:id}',     'activer')->name('produit.activer');
        Route::get('/desactiver/{produit:id}',  'desactiver')->name('produit.desactiver');

        });

    Route::controller(UserController::class)->prefix('users')->group(function () {
        Route::get('/create',                   'create')->name('users.create');
        Route::post('/store',                   'store')->name('users.store');
        Route::get('/affichierUsers',           'affichierUsers')->name('users.affichierUsers');
        Route::get('/edit/{user:id}',           'edit')->name('users.edit');
        Route::put('/update',                   'update')->name('users.update');
        Route::get('/destroy/{user:id}',        'destroy')->name('users.destroy');

        Route::get('/activer/{user:id}',        'activer')->name('user.activer');
        Route::get('/desactiver/{user:id}',     'desactiver')->name('user.desactiver');
        });
    });
});
