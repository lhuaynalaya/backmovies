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
Route::get('test', function() {
  phpinfo();
});

Route::get('/', function () {
  return view('index');
});

Route::get('/factura-template', function () {
  return view('templates.facturas.standard');
});

Route::get('/welcome', function () {
  return view('welcome');
});

Route::get('/privado', function () {
  return 'zona privada';
})->middleware('auth');


//Route::post('login', 'LoginController@login');
//Route::post('refresh', 'LoginController@refresh');
//Route::post('logout', 'LoginController@logout');
//Route::post('login', [ 'as' => 'login', 'uses' => function () {
//  return 'No permitido';
//}]);


Route::get('/redirect', function () {
  if (!env('API_CLIENT_ID') || !env('API_URL') || !env('API_CLIENT_SECRET')) {
    return "Please fill API fields in env file";
  }

  $query = http_build_query([
      'client_id' => env('API_CLIENT_ID'),
      'response_type' => 'code',
      'scope' => '',
  ]);

  return redirect(env('API_URL').'/oauth/authorize?'.$query);
});

Route::get('/callback', function () {
  $http = new GuzzleHttp\Client;
  $code = request()->code;
  $response = $http->post(env('API_URL').'/oauth/token', [
      'form_params' => [
          'grant_type' => 'authorization_code',
          'client_id' => env('API_CLIENT_ID'),
          'client_secret' => env('API_CLIENT_SECRET'),
          'code' => $code,
      ],
  ]);
  $apiResponse = json_decode((string) $response->getBody(), true);
  $response_callback = [
    'api' => $apiResponse,
    'api-token' => $apiResponse['access_token'],
    'code' => $code
  ];

  session(['api'=> $apiResponse]);
  session(['api-token'=> $apiResponse['access_token']]);
  //return $response_callback;
  return redirect('/welcome');
});

Route::get('/{path?}', function($path = null){
  return view('index');
})->where('path', '.*');