<?php

use App\Http\Controllers\FieldTripController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InnovationsController;
use App\Http\Controllers\KlinikInovasiController;
use App\Http\Controllers\MapsInnovationsController;
use App\Http\Controllers\TrainingController;
use App\Http\Middleware\AuthToHome;
use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin as AdminController;
use App\Http\Controllers\AnalisisController;
use App\Http\Controllers\HotlineController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProposalController;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/', [HomeController::class, 'showHome'])->name('home');

Route::get('/lumbung-inovasi', function () {
    return view('home/lumbung-inovasi');
});

Route::get('/lumbung-inovasi-list', function () {
    return view('home/lumbung-inovasi-list');
})->name('lumbung-inovasi-list');

Route::get('/lumbung-inovasi-map', [MapsInnovationsController::class, 'index'])->name('lumbung-inovasi-map');

Route::get('/maps/innovations', [MapsInnovationsController::class, 'listInnovations'])->name('maps.innovations');

Route::get('/profil-inovasi', function () {
    return view('home/profil-inovasi');
})->name('list-inovasi');

Route::get('/profil-inovasi/{id}', [InnovationsController::class, 'showInnovation'])->name('profile-inovasi');

Route::get('/forum-replikasi', function () {
    return view('home/forum-replikasi');
})->name('forum-replikasi-list');

Route::get('/forum-replikasi/{innovation_id}', function ($innovation_id) {
    return view('home/forum-replikasi-list-topic', [
        'innovation_id' => $innovation_id
    ]);
})->name("forum-replikasi-list-topic");

Route::get('/forum-replikasi/{innovation_id}/topic/{topic_id}', function ($innovation_id, $topic_id) {
    return view('home/forum-replikasi-show-topic', [
        'innovation_id' => $innovation_id,
        'topic_id' => $topic_id,
    ]);
})->name('forum-replikasi-show-topic');

Route::get('/forum-inovasi', function () {
    return view('home/forum-inovasi');
})->name('forum-inovasi');

Route::get('/forum-inovasi/{topic_id}', function ($topic_id) {
    return view('home/forum-inovasi-detail', [
        'topic_id' => $topic_id,
    ]);
})->name('forum-inovasi-show-topic');

Route::get('/artikel', function () {
    return view('home/training');
})->name('training-list');

Route::get('/artikel/{training}', [TrainingController::class, 'showTraining'])->name('training-show');
Route::get('/artikel/cat/{slug}', [TrainingController::class, 'showCategoryTraining'])->name('training-show-category');

Route::get('/kunjungan-lapangan', function () {
    return view('home/kunjungan-lapangan');
})->name('kunjungan-lapangan');

Route::get('/kunjungan-lapangan/{id}', [FieldTripController::class, 'showKunjungan'])->name('kunjungan-lapangan-show');

Route::prefix('hotline-inovasi')->group(function () {
    Route::get('/', [HotlineController::class, 'index'])->name('hotline-inovasi');
    Route::get('/klinik', [HotlineController::class, 'index'])->name('hotline-inovasi-klinik');
    Route::get('/tim-inkubator', [HotlineController::class, 'timInkubator'])->name('hotline-inovasi-tim-inkubator');

    Route::get('/doctor/{innovationDoctor}', [HotlineController::class, 'detail'])
        ->name('hotline-inovasi-detail');

    Route::get('/withDoctor/{innovationDoctor}', [HotlineController::class, 'withDoctor'])
        ->middleware('auth')
        ->name('hotline-inovasi.with-doctor');

    Route::get('/room/{chatRoom}', [HotlineController::class, 'show'])
        ->middleware('auth')
        ->name('hotline-inovasi.show');

    Route::get('/my-messages', [HotlineController::class, 'myMessages'])
        ->middleware('auth')
        ->name("hotline-inovasi.my-messages");
});

Route::get('/klinik-inovasi', function () {
    return view('home/klinik-inovasi');
})->name('klinik-inovasi');

Route::get('/klinik-inovasi/{id}', [KlinikInovasiController::class, 'showLearningMaterial'])->name('klinik-inovasi-show');

Route::get('/home/login', function () {
    return view('home/login');
})->middleware(AuthToHome::class)->name('home-login');

Route::get('/home/register', function () {
    return view('home.register');
})->middleware(AuthToHome::class)->name('home-register');

Route::get('/home/forgot-password', function () {
    return view('home.forgot-password');
})->middleware(AuthToHome::class)->name('home-forgot-password');

Route::get('/home/reset-password', function () {
    return view('home.reset-password');
})->middleware(AuthToHome::class)->name('home-reset-password');

Route::get('/my-profile', function () {
    return view('home/profile-edit');
})->middleware('auth')->name('my-profile');

Route::get('/notifikasi', [NotificationController::class, 'showNotifications'])
    ->middleware('auth')
    ->name('notification');

Route::get('/home/logout', function () {
    Auth::logout();

    request()->session()->invalidate();

    request()->session()->regenerateToken();

    return redirect('/');
})->name('home-logout');

Route::get('/logincek', function () {
    dd(Auth::user());
});

Route::prefix('/admin')->middleware(['auth'])->middleware(AuthAdmin::class)->group(function () {
    Route::get('/', [AdminController\HomeController::class, 'index'])->name('admin.home');

    Route::prefix('innovation')->group(function () {
        Route::get('/', [AdminController\InnovationController::class, 'index'])->name('admin.innovation');
        Route::get('new', [AdminController\InnovationController::class, 'create'])->name('admin.innovation.new');
        Route::post('new', [AdminController\InnovationController::class, 'create'])->name('admin.innovation.create');
        Route::get('show/{innovation}', [AdminController\InnovationController::class, 'show'])->name('admin.innovation.show');
        Route::get('edit/{innovation}', [AdminController\InnovationController::class, 'edit'])->name('admin.innovation.edit');
        Route::post('edit/{innovation}', [AdminController\InnovationController::class, 'edit'])->name('admin.innovation.update');
        Route::post('delete/{innovation}', [AdminController\InnovationController::class, 'delete'])->name('admin.innovation.delete');
    });

    Route::prefix('innovation-doctor')->group(function () {
        Route::get('/', [AdminController\InnovationDoctorController::class, 'index'])->name('admin.innovation-doctor');
        Route::get('new', [AdminController\InnovationDoctorController::class, 'create'])->name('admin.innovation-doctor.new');
        Route::post('new', [AdminController\InnovationDoctorController::class, 'create'])->name('admin.innovation-doctor.create');
        Route::get('show/{innovationDoctor}', [AdminController\InnovationDoctorController::class, 'show'])->name('admin.innovation-doctor.show');
        Route::get('edit/{innovationDoctor}', [AdminController\InnovationDoctorController::class, 'edit'])->name('admin.innovation-doctor.edit');
        Route::post('edit/{innovationDoctor}', [AdminController\InnovationDoctorController::class, 'edit'])->name('admin.innovation-doctor.update');
    });

    Route::prefix('innovator')->group(function () {
        Route::get('/', [AdminController\InnovatorController::class, 'index'])->name('admin.innovator');
        Route::get('new', [AdminController\InnovatorController::class, 'create'])->name('admin.innovator.new');
        Route::post('new', [AdminController\InnovatorController::class, 'create'])->name('admin.innovator.create');
        Route::get('show/{innovator}', [AdminController\InnovatorController::class, 'show'])->name('admin.innovator.show');
        Route::get('edit/{innovator}', [AdminController\InnovatorController::class, 'edit'])->name('admin.innovator.edit');
        Route::post('edit/{innovator}', [AdminController\InnovatorController::class, 'edit'])->name('admin.innovator.update');
    });

    Route::prefix('user')->group(function () {
        Route::get('/', [AdminController\UserController::class, 'index'])->name('admin.user');
        Route::get('new', [AdminController\UserController::class, 'create'])->name('admin.user.new');
        Route::post('new', [AdminController\UserController::class, 'create'])->name('admin.user.create');
        Route::get('show/{user}', [AdminController\UserController::class, 'show'])->name('admin.user.show');
        Route::get('edit/{user}', [AdminController\UserController::class, 'edit'])->name('admin.user.edit');
        Route::post('edit/{user}', [AdminController\UserController::class, 'edit'])->name('admin.user.update');
    });

    Route::prefix('klinik-inovasi')->group(function () {
        Route::get('/', [AdminController\KlinikInovasiController::class, 'index'])->name('admin.klinik-inovasi');
        Route::get('new', [AdminController\KlinikInovasiController::class, 'create'])->name('admin.klinik-inovasi.new');
        Route::post('new', [AdminController\KlinikInovasiController::class, 'create'])->name('admin.klinik-inovasi.create');
        Route::get('show/{learningMaterial}', [AdminController\KlinikInovasiController::class, 'show'])->name('admin.klinik-inovasi.show');
        Route::get('edit/{learningMaterial}', [AdminController\KlinikInovasiController::class, 'edit'])->name('admin.klinik-inovasi.edit');
        Route::post('edit/{learningMaterial}', [AdminController\KlinikInovasiController::class, 'edit'])->name('admin.klinik-inovasi.update');
        Route::post('delete/{learningMaterial}', [AdminController\KlinikInovasiController::class, 'delete'])->name('admin.klinik-inovasi.delete');
    });

    Route::prefix('artikel')->group(function () {
        Route::get('/', [AdminController\TrainingController::class, 'index'])->name('admin.training');
        Route::get('new', [AdminController\TrainingController::class, 'create'])->name('admin.training.new');
        Route::post('new', [AdminController\TrainingController::class, 'create'])->name('admin.training.create');
        Route::get('show/{training}', [AdminController\TrainingController::class, 'show'])->name('admin.training.show');
        Route::get('edit/{training}', [AdminController\TrainingController::class, 'edit'])->name('admin.training.edit');
        Route::post('edit/{training}', [AdminController\TrainingController::class, 'edit'])->name('admin.training.update');
        Route::post('delete/{training}', [AdminController\TrainingController::class, 'delete'])->name('admin.training.delete');
    });

    Route::prefix('fieldtrip')->group(function () {
        Route::get('/', [AdminController\FieldtripController::class, 'index'])->name('admin.fieldtrip');
        Route::get('new', [AdminController\FieldtripController::class, 'create'])->name('admin.fieldtrip.new');
        Route::post('new', [AdminController\FieldtripController::class, 'create'])->name('admin.fieldtrip.create');
        Route::get('show/{fieldtrip}', [AdminController\FieldtripController::class, 'show'])->name('admin.fieldtrip.show');
        Route::get('edit/{fieldtrip}', [AdminController\FieldtripController::class, 'edit'])->name('admin.fieldtrip.edit');
        Route::post('edit/{fieldtrip}', [AdminController\FieldtripController::class, 'edit'])->name('admin.fieldtrip.update');
        Route::post('delete/{fieldtrip}', [AdminController\FieldtripController::class, 'delete'])->name('admin.fieldtrip.delete');
    });

	Route::prefix('setting')->group(function() {
        Route::get('/analytic', [AdminController\SettingAnalyticController::class, 'google'])->name('admin.setting.analytic.google');

	});

	Route::prefix('proposal')->group(function() {
		Route::get('/', [AdminController\ProposalController::class, 'index'])->name('admin.proposal');
		Route::get('/proposal/export/excel', [AdminController\ProposalController::class, 'exportExcel'])->name('admin.proposal.export.excel');
	});
});

Route::get('/analisis-inovasi', [AnalisisController::class, 'show'])->name('analisis-inovasi');

/* run artisan commands from browser/curl */
Route::prefix('artisan')->group(function () {
    /* run storage link */
    Route::get('storagelink', function () {
        Artisan::call('storage:link');
        echo 'ok';
    });

    /* run migrate */
    Route::get('migrate', function () {
        Artisan::call('migrate');
        // echo 'ok';
    });

    /* run add role for mentor inovasi */
    Route::get('add-role-mentor-inovasi', function () {
        Artisan::call('db:seed MentorInovasiSeeder');
    });

    Route::get('attachmenttypeseeder', function () {
        Artisan::call('db:seed AttachmentTypeSeeder');
    });

    Route::get('userkotaseeder', function () {
        Artisan::call('db:seed adminInovasiKabupatenProvinsiSeeder');
    });
});

Route::get('/submit-proposal', [ProposalController::class, 'create'])->name('proposal.index')->middleware('auth');
Route::post('/submit-proposal', [ProposalController::class, 'store'])->name('proposal.store')->middleware('auth');
// Route::resource('proposal', ProposalController::class)->middleware('auth');
// Route::get('submit-proposal', [ProposalController::class, 'create'])->middleware('auth')->name('proposal.submit');
