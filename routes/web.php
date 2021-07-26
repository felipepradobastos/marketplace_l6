<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/model', function () {

    //$user = \App\User::find(4);

    $user = \App\User::find(3);

    //Criar uma loja para um usuario
//    $store =  $user->store()->create([
//        'name' => 'Loja Teste',
//        'description' => 'Descrição teste',
//        'phone' => 'XX-XXXX-XXXX',
//        'mobile_phone' => '71993580614',
//        'slug' => 'loja-teste'
//    ]);

    //Criar um produto para uma loja;

//    $store = \App\Store::find(41);
//
//    $product = $store->products()->create([
//        'name' =>'Produto Teste',
//        'description' => 'Descrição teste',
//        'body' => 'Teste',
//        'price' => 5.50,
//        'slug' => 'produto-teste',
//    ]);
//
//    dd($product);

//    \App\Category::create([
//        'name'=> 'Games',
//        'description' => null,
//        'slug' => 'games'
//    ]);
//
//    \App\Category::create([
//        'name'=> 'Notebooks',
//        'description' => null,
//        'slug' => 'games'
//    ]);

    // Adicionar um produto para uma categoria

//    $product = \App\Product::find(30);
//    dd($product->categories()->attach(1)); //detach remove
//    dd($product->categories()->sync([1,2])); //Adiciona mais de uma vez, mesmo se ja tiver alguma propiedade.
//
//
//    return \App\Category::all();
//


    //return $store->products;


    //dd($user->store()->count()); // Quando chamo  o metodo ele retorna a instancia de conexão com o banco
    //return $user->store;// Quando chama a propiedade e não o metodo ele retorna direto a relação para 1:1 o Objeto e 1:N uma Collection.



});


//Stores Routes

Route::prefix('admin')->name('admin.')->namespace('admin')->group(function (){

//    Route::prefix('stores')->name('stores.')->group(function (){
//        Route::get('/', 'StoreController@index')->name('index');
//        Route::get('/create', 'StoreController@create')->name('create');
//        Route::post('/store', 'StoreController@store')->name('store');
//        Route::get('/{store}/edit', 'StoreController@edit')->name('edit');
//        Route::post('/update/{store}', 'StoreController@update')->name('update');
//        Route::get('/destroy/{store}', 'StoreController@destroy')->name('destroy');
//    });

    Route::resource('stores', 'StoreController');
    Route::resource('products', 'ProductController');

});


//Route::get Pegar
//Route::post Enviar
//Route::put Atualizaçao
//Route::patch Atualização
//Route::delete Remoção
//Route::options Cabeçalhos
