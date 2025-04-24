<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Models\Job;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');

Route::get('test', function (){
    $job = Job::first();
    TranslateJob::dispatch($job);
    return 'done';
});

// Route::get('test', function (){
//     Mail::to('razie@gmail.com')->send(
//         new \App\Mail\JobPosted()
//     );
//     return 'done';
// });

//מקצר הכל
// Route::resource('jobs', JobController::class)->middleware('auth');

Route::view('/contact', 'contact');


Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);



Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);




Route::controller(JobController::class)->group(function(){
    //index give all jobs
    Route::get('/jobs',  'index'); 
    //create
    Route::get('/jobs/create',  'create');     
    //show some job
    Route::get('/jobs/{job}', 'show');  
    //store
    Route::post('/jobs', 'store')->middleware('auth'); 

    //edit the job
    Route::get('/jobs/{job}/edit',  'edit')
    ->middleware('auth')
    ->can('edit', 'job');  

    //Update
    Route::patch('/jobs/{job}',  'update');  
    //Destroy
    Route::delete('/jobs/{job}',  'destroy');
});    


