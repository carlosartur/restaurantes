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

Auth::routes();
Route::get('/', 'InitController@homePage');
Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('admin.home');
});

Route::get('/cardapio', 'CardapioController@index')->name('cardapio.index');
Route::any('/cardapio/category', 'CardapioController@category')->name('cardapio.category');
Route::get('/montar', 'MontaPizzaController@index')->name('montar.index');
Route::get('/pre_cadastro/{recomendante?}', 'OrderController@preCadastro')->name('pre_cadastro');
Route::get('/relatorio/pre_cadastro/{recomendante?}', 'OrderController@relatorioPreCadastro')->name('relatorio_pre_cadastro');
Route::post('/pre_cadastro_salvar', 'OrderController@preCadastroSalvar')->name('pre_cadastro_salvar');
Route::get('/pre_cadastro_sucesso', 'OrderController@preCadastroSucesso')->name('order.pre_cadastro_success');
Route::get('/pre_cadastro_sucesso', 'OrderController@preCadastroSucesso')->name('order.pre_cadastro_success');
Route::get('/autocomplete_postcode/{nome?}', 'OrderController@autocompletePostcode')->name('admin.autocomplete_postcode');
Route::get('/autocomplete_city/{nome?}', 'OrderController@autocompleteCity')->name('admin.autocomplete_city');
Route::get('/autocomplete_neighborhood/{nome?}', 'OrderController@autocompleteNeighborhood')->name('admin.autocomplete_neighborhood');

Route::middleware('auth')->middleware('role:admin')->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::get('/edit_home_page/{saved?}', 'HomepageController@editHomePageForm')->name('admin.homepage.editHomePageForm');
    Route::post('/edit_home_page', 'HomepageController@editHomePageEdit')->name('admin.homepage.editHomePageEdit');

    Route::middleware('permission:crud')->prefix('flavour')->group(function () {
        Route::any('/', 'FlavourController@index')->name('admin.flavour.retrieve');
        Route::get('/edit/{id}', 'FlavourController@edit')->name('admin.flavour.edit');
        Route::get('/add', 'FlavourController@add')->name('admin.flavour.add');
        Route::get('/delete/{id}', 'FlavourController@delete')->name('admin.flavour.delete');
        Route::post('/save/{id?}', 'FlavourController@save')->name('admin.flavour.save');
        Route::get('/get_ingredients/{id?}', 'FlavourController@getIngredients')->name('admin.flavour.get_ingredients');
    });

    Route::middleware('permission:crud')->prefix('ingredient')->group(function () {
        Route::any('/', 'IngredientController@index')->name('admin.ingredient.retrieve');
        Route::get('/edit/{id}', 'IngredientController@edit')->name('admin.ingredient.edit');
        Route::get('/add', 'IngredientController@add')->name('admin.ingredient.add');
        Route::get('/delete/{id}', 'IngredientController@delete')->name('admin.ingredient.delete');
        Route::post('/save/{id?}', 'IngredientController@save')->name('admin.ingredient.save');
    });

    Route::middleware('permission:crud')->prefix('category')->group(function () {
        Route::get('/', 'CategoryController@retrieve')->name('admin.category.retrieve');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('admin.category.edit');
        Route::get('/add', 'CategoryController@add')->name('admin.category.add');
        Route::get('/delete/{id}', 'CategoryController@delete')->name('admin.category.delete');
        Route::get('/get_sizes_prices/{id?}', 'CategoryController@getSizesPrices')->name('admin.category.getSizesPrices');
        Route::post('/save/{id?}', 'CategoryController@save')->name('admin.category.save');
    });
    
    Route::middleware('permission:crud')->prefix('size')->group(function () {
        Route::get('/', 'SizeController@index')->name('admin.size.retrieve');
        Route::get('/edit/{id}', 'SizeController@edit')->name('admin.size.edit');
        Route::get('/add', 'SizeController@add')->name('admin.size.add');
        Route::get('/delete/{id}', 'SizeController@delete')->name('admin.size.delete');
        Route::post('/', 'SizeController@index')->name('admin.size.retrieve');
        Route::post('/save/{id?}', 'SizeController@save')->name('admin.size.save');
    });

    Route::middleware('permission:cart')->prefix('person')->group(function () {
        Route::get('/autocomplete/{nome?}', 'OrderController@autocompletePeople')->name('admin.autocomplete_people');
        Route::post('/new', 'OrderController@newPerson')->name('admin.new_person');
        Route::get('/order', 'OrderController@orderPerson')->name('admin.order_person');
    });

    Route::middleware('permission:cart')->prefix('order')->group(function () {
        Route::get('/start', 'OrderController@startOrder')->name('admin.startOrder');
        Route::get('/restart', 'OrderController@restartOrder')->name('admin.restartOrder');
        Route::get('/step2/{size_id?}/{category_id?}', 'OrderController@step2')->name('admin.step2');
        Route::post('/step3', 'OrderController@step3')->name('admin.step3');
        Route::post('/ok', 'OrderController@order_ok')->name('admin.order_ok');
        Route::post('/get_new', 'OrderController@orderGetNew')->name('order.get_new_orders');
        Route::get('/list', 'OrderController@ordersList')->name('admin.orders');
    });

    Route::middleware('permission:cart')->prefix('cart')->group(function () {
        Route::get('/', 'OrderController@cart')->name('admin.cart');
        Route::get('/remove_item/{id}', 'OrderController@removeCartItem')->name('admin.remove_cart_item');
    });

    Route::middleware('permission:cart')->prefix('combo')->group(function () {
        Route::get('/', 'CombosController@index')->name('admin.combo.retrieve');
        Route::get('/edit/{id}', 'CombosController@edit')->name('admin.combo.edit');
        Route::get('/add', 'CombosController@create')->name('admin.combo.add');
        Route::get('/delete/{id}', 'CombosController@delete')->name('admin.combo.delete');
        Route::post('/save/{id?}', 'CombosController@store')->name('admin.combo.save');
    });
});

// Route::get('images/{filename}', function ($filename) {
//     $ds = DIRECTORY_SEPARATOR;
//     $path = storage_path() . "{$ds}app{$ds}public{$ds}images{$ds}" . $filename;

//     if (!File::exists($path)) {
//         abort(404);
//     }

//     $file = File::get($path);
//     $type = File::mimeType($path);

//     $response = Response::make($file, 200);
//     $response->header("Content-Type", $type);
//     return $response;
// });
