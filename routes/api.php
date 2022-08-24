<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

// Importing User Models
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function() {
    return response("It is here");
});

Route::post('/user/register', function(Request $request) {
    

    $fields = $request->validate([
        'firstName' => 'required|string',
        'lastName' => 'required|string',
        'middleName' => 'string',
        'email' => 'required|unique:users,email',
        'nationality' => 'required|string',
        'gender' => 'required|string|in:M,F',
        'dob' => 'required|string',
        'address' => 'required|string',
        'phoneNumber' => 'required|string',
        'password' => 'required'
    ]);

    // Formats Number
    function phoneFormatter($number) {
         // Formating the number
        if(  preg_match( '/^\+\d(\d{3})(\d{3})(\d{4})$/', $number,  $matches ) ){

            return response(gettype($number));
            // $result = $matches[1] . '-' .$matches[2] . '-' . $matches[3];
            // return $result;
        }
    }
    $phoneNumber = phoneFormatter($fields['phoneNumber']);
       
    // convert names to Camel Case
    $firstName = Str::camel('firstName');
    $lastName = Str::camel('lastName');
    $middleName = Str::camel('middleName');

    // Creating the user the user
    $user = User::create([
        'firstName' => $firstName,
        'lastName' => $lastName,
        'middleName' => $middleName,
        'email' => $fields['email'],
        'phoneNumber' => $fields['phoneNumber'],
        'nationality' => $fields['nationality'],
        'gender'  => $fields['gender'] ,
        'dob'  => $fields['dob'],
        'address' =>  $fields['address'],
        'password' => bcrypt($fields['password'])
    ]);

    // generating the response data
    $response = [
        "msg" => "USER_CREATED",
        "status" => true,
        "user" => $user,
    ];

    return response($response, 201);

});


Route::post('/user/login', function(Request $request) {
    
    // Validating the user inputs
    $fields = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    // Check email
    $user = User::where('email', $fields['email'])->first();

    // Check Password
    if(!$user || !Hash::check($fields['password'], $user->password)) {

        // returning the response
        return response([
            'msg' => 'INVALID_CREDENTIALS',
            'status' => false,
            'message' => "Bad Credentials"
        ], 401);
    }

    // Creating a Session Here
    $session = session(['userId' => bcrypt($user->id)]);

    // Setting the response
    $response = [
        "msg" => "SUCCESS_LOGIN",
        "status" => true,
        'user' => $user,
        'session' => session('userId')
    ];

    return response($response, 200);
});