<?php


use App\Http\Controllers\Admin\daraja\DarajaConroller;
use App\Http\Controllers\Admin\dashboard\DashboardController;
use App\Http\Controllers\Admin\Guruh\GuruhController;
use App\Http\Controllers\Admin\kafedra\KafedraController;
use App\Http\Controllers\Admin\kafedraBoshligi\KafedraBoshligiController;

use App\Http\Controllers\Admin\Kurs\KurController;
use App\Http\Controllers\Admin\semestr\SemestrController;
use App\Http\Controllers\Admin\unvon\UnvonConroller;
use App\Http\Controllers\Admin\UserForAdminController;
use App\Http\Controllers\Admin\yonalish\YonalishController;


use App\Http\Controllers\JurnalController;
use App\Http\Controllers\Kafedra\DavomatController;
use App\Http\Controllers\Kafedra\FanBiriktirishController;
use App\Http\Controllers\Kafedra\FanController;
use App\Http\Controllers\Kafedra\KafTeacherContoller;
use App\Http\Controllers\Kafedra\MarkController;
use App\Http\Controllers\Kafedra\MyFanController;
use App\Http\Controllers\Kafedra\StatisticContoller;


use App\Http\Controllers\Kafedra\TaskController;
use Illuminate\Support\Facades\Route;

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
//
//Route::get('/task', function (){
//    return view('kafedraBoshligi.layouts.task.index');
//})->name('task');
//Route::get('/jurnal', function (){
//    return view('Teacher.layouts.jurnal.index');
//})->name('jurnal');

//Route::get('/jurnal/show', function (){
//    return view('kafedraBoshligi.layouts.jurnal.show');
//})->name('show');
//
//Route::get('/jurnal/change', function (){
//    return view('kafedraBoshligi.layouts.jurnal.change');
//})->name('change');
//
//
//
//Route::get('/jurnal/scroll', function (){
//    return view('kafedraBoshligi.layouts.jurnal.scroll');
//})->name('scroll');

//Route::get('/kafedraBoshligi/davomat', function (){
//    return view('kafedraBoshligi.layouts.teacher.davomat');
//})->name('davomat');
//
//



//Route::get('/register', function (){
//    return view('auth.register');
//})->name('all.register');



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function (){
    //admin bolimi
    Route::prefix('admin')->middleware('admin')->as('admin.')->group(function (){
        Route::resource('users', UserForAdminController::class);
        Route::get('/home', [DashboardController::class, 'index'])->name('home');

// CREATE METHOD

        Route::get('register/kafedraboshligi',[\App\Http\Controllers\Admin\UserForKafedraboshligi::class, 'create'])->middleware('admin')->name('kafedrabosh.create');
        Route::get('register/teacher',[\App\Http\Controllers\Admin\UserForTeacher::class, 'create'])->middleware('admin')->name('teach.create');
        Route::get('register/kursant',[\App\Http\Controllers\Admin\UserForKursant::class, 'create'])->middleware('admin')->name('kursant.create');





// STORE METHOD
        Route::post('register/kafedraboshligi', [\App\Http\Controllers\Admin\UserForKafedraboshligi::class, 'store'])->middleware('admin')->name('kafedrabosh.store');
        Route::post('register/teacher', [\App\Http\Controllers\Admin\UserForTeacher::class, 'store'])->middleware('admin')->name('teach.store');
        Route::post('register/kursant', [\App\Http\Controllers\Admin\UserForKursant::class, 'store'])->middleware('admin')->name('kursant.store');



//INDEX METHOD

        Route::get('kafedrabosh',[\App\Http\Controllers\Admin\UserForKafedraboshligi::class, 'index'])->middleware('admin')->name('kafedrabosh.index');
        Route::get('teach',[\App\Http\Controllers\Admin\UserForTeacher::class, 'index'])->middleware('admin')->name('teach.index');
        Route::get('kursant',[\App\Http\Controllers\Admin\UserForKursant::class, 'index'])->middleware('admin')->name('kursant.index');


//Edit
        Route::get('edit/kafedraboshligi/{user}',[\App\Http\Controllers\Admin\UserForKafedraboshligi::class, 'edit'])->middleware('admin')->name('kafedrabosh.edit');
        Route::get('edit/kursant/{user}',[\App\Http\Controllers\Admin\UserForKursant::class, 'edit'])->middleware('admin')->name('kursant.edit');



//Update
        Route::post('update/kafedraboshligi/{user}',[\App\Http\Controllers\Admin\UserForKafedraboshligi::class, 'update'])->middleware('admin')->name('kafedrabosh.update');
        Route::post('update/kursant/{user}',[\App\Http\Controllers\Admin\UserForKursant::class, 'update'])->middleware('admin')->name('kursant.update');







        Route::resource('kafedra', KafedraController::class);
        Route::resource('kafedraboshligi', KafedraBoshligiController::class);
        Route::resource('kurs', KurController::class);
        Route::resource('guruh', GuruhController::class );
        Route::resource('semestr', SemestrController::class );
        Route::resource('unvon', UnvonConroller::class );
        Route::resource('daraja', DarajaConroller::class );
        Route::resource('yonalish', YonalishController::class );

    });

    //Kursant bolimi
    Route::prefix('kursant')->middleware('kursant')->as('kursant.')->group(function (){
        Route::get('/home', function (){
            return view('kursant.home');
        })->name('home');
        Route::resource('fanlarim', \App\Http\Controllers\Kursant\FanlarimController::class);
        Route::resource('davomat', \App\Http\Controllers\Kursant\DavomatController::class);
        Route::post('/davomat/fordavomat/getdavomat', [\App\Http\Controllers\Kursant\DavomatController::class, 'getDavomat'])->name('davomat.fordavomat.getdavomat');
        Route::resource('task', \App\Http\Controllers\Kursant\TaskController::class);
        Route::get('mark/markGroup/{task_id}/{fan_id}/{group_id}/{teach_id}',[\App\Http\Controllers\Kursant\MarkController::class , 'showGroupMark'])->name('markgroup');
    });




    //O'qituvchi bolimi
    Route::prefix('teacher')->middleware('teacher')->as('teacher.')->group(function (){
        Route::get('/home', [\App\Http\Controllers\Teacher\StatisticController::class, 'home'])->name('home');

        Route::resource('myfanlarim', \App\Http\Controllers\Teacher\MyFanController::class);
        Route::resource('task', \App\Http\Controllers\Teacher\TaskController::class);
        Route::resource('jurnal', \App\Http\Controllers\Teacher\StatisticController::class);
        Route::resource('mark', \App\Http\Controllers\Teacher\MakController::class);
        Route::resource('davomat', \App\Http\Controllers\Teacher\DavomatController::class);
        Route::get('mark/markGroup/{task_id}/{fan_id}/{group_id}/{teach_id}',[\App\Http\Controllers\Teacher\MakController::class , 'showGroupMark'])->name('markgroup');
        Route::get('mark/marking/{task_id}/{fan_id}/{group_id}/{teach_id}',[\App\Http\Controllers\Teacher\MakController::class , 'marking'])->name('marking');

        Route::get('/teacher/statistika', [\App\Http\Controllers\Teacher\StatisticController::class, 'kafedraTeacerIndex'])->name('kafteacher.index');
        Route::get('/davomat/fordavomat/{fan_id}/{guruh_id}', [\App\Http\Controllers\Teacher\DavomatController::class, 'fordavomat'])->name('davomat.fordavomat');
        Route::post('/davomat/fordavomat/getdavomat', [\App\Http\Controllers\Teacher\DavomatController::class, 'getDavomat'])->name('davomat.fordavomat.getdavomat');


    });

    //Kafedra boshligi
    Route::prefix('kafedraboshligi')->middleware('kafedraboshligi')->as('kafedraboshligi.')->group(function (){
        Route::get('/home', [StatisticContoller::class, 'home'])->name('home');

        Route::resource('KafedraTeacher', KafTeacherContoller::class);
        Route::resource('davomat', DavomatController::class);
        Route::resource('fanlar', FanController::class);
        Route::resource('fanbiriktirish', FanBiriktirishController::class);
        Route::resource('myfanlarim', MyFanController::class);
        Route::resource('task', TaskController::class);
        Route::resource('jurnal', JurnalController::class);
        Route::resource('mark', MarkController::class);
        Route::get('mark/markGroup/{task_id}/{fan_id}/{group_id}/{teach_id}',[MarkController::class , 'showGroupMark'])->name('markgroup');
        Route::get('mark/marking/{task_id}/{fan_id}/{group_id}/{teach_id}',[MarkController::class , 'marking'])->name('marking');

        Route::get('/teacher/statistika', [StatisticContoller::class, 'kafedraTeacerIndex'])->name('kafteacher.index');
        Route::get('/davomat/fordavomat/{fan_id}/{guruh_id}', [DavomatController::class, 'fordavomat'])->name('davomat.fordavomat');
        Route::post('/davomat/fordavomat/getdavomat', [DavomatController::class, 'getDavomat'])->name('davomat.fordavomat.getdavomat');
    });


});
Auth::routes();
