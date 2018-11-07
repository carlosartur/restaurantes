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

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::get('/edit_home_page/{saved?}', 'HomepageController@editHomePageForm')->name('admin.homepage.editHomePageForm');
    Route::post('/edit_home_page', 'HomepageController@editHomePageEdit')->name('admin.homepage.editHomePageEdit');

    Route::any('/retrieve_flavour', 'FlavourController@index')->name('admin.flavour.retrieve');
    Route::get('/edit_flavour/{id}', 'FlavourController@edit')->name('admin.flavour.edit');
    Route::get('/add_flavour', 'FlavourController@add')->name('admin.flavour.add');
    Route::get('/delete_flavour/{id}', 'FlavourController@delete')->name('admin.flavour.delete');
    Route::post('/save_flavour/{id?}', 'FlavourController@save')->name('admin.flavour.save');
    Route::get('/get_ingredients/{id?}', 'FlavourController@getIngredients')->name('admin.flavour.get_ingredients');

    Route::any('/retrieve_ingredient', 'IngredientController@index')->name('admin.ingredient.retrieve');
    Route::get('/edit_ingredient/{id}', 'IngredientController@edit')->name('admin.ingredient.edit');
    Route::get('/add_ingredient', 'IngredientController@add')->name('admin.ingredient.add');
    Route::get('/delete_ingredient/{id}', 'IngredientController@delete')->name('admin.ingredient.delete');
    Route::post('/save_ingredient/{id?}', 'IngredientController@save')->name('admin.ingredient.save');

    Route::get('/retrieve_category', 'CategoryController@retrieve')->name('admin.category.retrieve');
    Route::get('/edit_category/{id}', 'CategoryController@edit')->name('admin.category.edit');
    Route::get('/add_category', 'CategoryController@add')->name('admin.category.add');
    Route::get('/delete_category/{id}', 'CategoryController@delete')->name('admin.category.delete');
    Route::get('/get_sizes_prices/{id?}', 'CategoryController@getSizesPrices')->name('admin.category.getSizesPrices');
    Route::post('/retrieve_category', 'CategoryController@retrieve')->name('admin.category.retrieve');
    Route::post('/save_category/{id?}', 'CategoryController@save')->name('admin.category.save');

    Route::get('/retrieve_size', 'SizeController@index')->name('admin.size.retrieve');
    Route::get('/edit_size/{id}', 'SizeController@edit')->name('admin.size.edit');
    Route::get('/add_size', 'SizeController@add')->name('admin.size.add');
    Route::get('/delete_size/{id}', 'SizeController@delete')->name('admin.size.delete');
    Route::post('/retrieve_size', 'SizeController@index')->name('admin.size.retrieve');
    Route::post('/save_size/{id?}', 'SizeController@save')->name('admin.size.save');

    Route::get('/autocomplete_people/{nome?}', 'OrderController@autocompletePeople')->name('admin.autocomplete_people');
    Route::get('/order_start', 'OrderController@startOrder')->name('admin.startOrder');
    Route::get('/restart_order', 'OrderController@restartOrder')->name('admin.restartOrder');
    Route::get('/cart', 'OrderController@cart')->name('admin.cart');
    Route::get('/remove_cart_item/{id}', 'OrderController@removeCartItem')->name('admin.remove_cart_item');
    Route::get('/order_step2/{size_id?}/{category_id?}', 'OrderController@step2')->name('admin.step2');
    Route::post('/new_person', 'OrderController@newPerson')->name('admin.new_person');
    Route::get('/order_person', 'OrderController@orderPerson')->name('admin.order_person');
    Route::post('/order_step3', 'OrderController@step3')->name('admin.step3');
    Route::post('/order_ok', 'OrderController@order_ok')->name('admin.order_ok');
    Route::get('/orders_list', 'OrderController@ordersList')->name('admin.orders');


    Route::get('/retrieve_combo', 'CombosController@index')->name('admin.combo.retrieve');
    Route::get('/edit_combo/{id}', 'CombosController@edit')->name('admin.combo.edit');
    Route::get('/add_combo', 'CombosController@create')->name('admin.combo.add');
    Route::get('/delete_combo/{id}', 'CombosController@delete')->name('admin.combo.delete');
    Route::post('/retrieve_combo', 'CombosController@retrieve')->name('admin.combo.retrieve');
    Route::post('/save_combo/{id?}', 'CombosController@store')->name('admin.combo.save');
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
