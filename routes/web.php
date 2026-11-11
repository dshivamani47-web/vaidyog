<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.salary')->name('Salary');

Route::view('/careers', 'pages.careers')->name('careers');
Route::get('/careers/{job}', function ($job) {
    return view('pages.careers', [
        'selectedJobSlug' => $job
    ]);
})->name('careers.show');


// AYUSH Guides Listing Page
Route::view('/ayush', 'pages.ayush')->name('ayush');

// AYUSH Individual Guide Detail Pages
Route::get('/ayush/{guide}', function ($guide) {
    return view('pages.ayush', [
        'guideSlug' => $guide
    ]);
})->name('ayush.show');


// Healthcare Jobs by City

Route::view('/cities', 'pages.cities')->name('cities');

Route::get('/cities/{city}', function ($city) {

    return view('pages.cities', [
        'citySlug' => $city
    ]);

})->name('cities.show');




// ========================================
// ABROAD CAREERS LISTING PAGE
// ========================================

Route::view('/abroad', 'pages.abroad')
    ->name('abroad');


// ========================================
// ABROAD INDIVIDUAL CAREER DETAIL PAGES
// ========================================

Route::get('/abroad/{career}', function ($career) {

    return view('pages.abroad', [
        'careerSlug' => $career
    ]);

})->name('abroad.show');


// Resume & Interview Listing
Route::view('/resume-interview', 'pages.resume-interview')
    ->name('resume-interview');

// Resume & Interview Individual Guides
Route::get('/resume-interview/{guide}', function ($guide) {
    return view('pages.resume-interview', [
        'guideSlug' => $guide
    ]);
})->name('resume-interview.show');



Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog.index');

Route::get('/blog/{slug}', function ($slug) {
    return view('pages.blog-single', compact('slug'));
})->name('blog.show');


// Exams & Licensing Main Page
Route::get('/exams-licensing', function () {
    return view('pages.exams-licensing');
})->name('exams');

// Exams & Licensing Inner Pages
Route::get('/exams-licensing/{slug}', function ($slug) {
    return view('pages.exams-licensing', [
        'selectedExamSlug' => $slug
    ]);
})->name('exams.show');






Route::view('/about', 'pages.about');
Route::view('/services', 'pages.services');
Route::view('/products', 'pages.products');
Route::view('/contact', 'pages.contact');

Route::view('/salary/mbbs-doctor-salaryindia', 'pages.mbbs-salary')
    ->name('salary.mbbs');




use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

Route::post('/newsletter/subscribe', function (Request $request) {

    $request->validate([
        'email' => 'required|email|max:255',
    ]);

    try {

        $email = $request->email;

        Mail::raw(
            "New Vaidyog newsletter subscription:\n\nEmail: " . $email,
            function ($message) use ($email) {
                $message->to('contact@vaidyog.com')
                        ->subject('New Newsletter Subscription - Vaidyog');
            }
        );

        return back()->with(
            'success',
            'Thank you for subscribing!'
        );

    } catch (\Throwable $e) {

        Log::error('Newsletter subscription email failed: ' . $e->getMessage());

        return back()->with(
            'error',
            'Subscription could not be completed. Please try again later.'
        );
    }

})->middleware('throttle:5,1')->name('newsletter.subscribe');

