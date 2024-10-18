<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;

Route::get('/', function () {
    return view('login');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/register', function () {
    return view('register');
});

Route::get("/contact", function () {
    $contacts = [];
    $faker = Faker::create();
    for ($i = 1; $i <= 10; $i++) {
        $contacts[] = [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'phone' => $faker->phoneNumber
        ];
    };
    return view("contact-table", ['contacts' => $contacts]);
});

