<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\OrganisationController;
use App\Http\Controllers\SubstationController;
use App\Http\Controllers\ImportandInformationController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\UserSide\MainPageController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserSide\AboutUsController;

// Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);


Auth::routes();

Route::get('/login', [SignController::class, 'login'])->name("login");
Route::post('/signinPost', [SignController::class, 'signInPost'])->name("signInPost");
Route::get('/resetPasswordPage', [SignController::class, 'resetPasswordPage'])->name("resetPasswordPage");
Route::post('/resetPasswordEmail', [SignController::class, 'resetPasswordEmail'])->name("resetPasswordEmail");
Route::get('/newPassword/{token}', [SignController::class, 'newPassword'])->name("newPassword");
Route::post('/newPasswordPost', [SignController::class, 'newPasswordPost'])->name("newPasswordPost");

/*User Panel Routes*/
Route::get('/', [MainPageController::class, 'mainPage'])->name("mainPage");
Route::get('/aboutUs', [AboutUsController::class, 'aboutUs'])->name("aboutUs");

Route::middleware(['auth', 'log'])->group(function () {

    //Route::get('/', [AdminController::class, 'admin_index'])->name('admin_index');
    Route::get('/admin_index', [AdminController::class, 'admin_index'])->name('admin_index');
    /*Duyuru */
    Route::post('/announcementupdate', [AnnouncementController::class, 'update'])->name('announcementupdate');
    Route::post('/announcementdelete', [AnnouncementController::class, 'delete'])->name('announcementdelete');
    Route::post('/announcementadd', [AnnouncementController::class, 'add'])->name('announcementadd');
    Route::get('/announcement', [AnnouncementController::class, 'announcement'])->name('announcement');
    Route::put('/announcement/{id}/activity', [AnnouncementController::class, 'updateActivity'])->name('announcement.updateActivity');
    /*Yönetici */
    Route::get('/manager', [ManagerController::class, 'manager'])->name('manager');
    Route::post('/managerupdate', [ManagerController::class, 'update'])->name('managerupdate');
    Route::post('/managerdelete', [ManagerController::class, 'delete'])->name('managerdelete');
    Route::post('/manageradd', [ManagerController::class, 'add'])->name('manageradd');
    /*Kurum */
    Route::get('/organisation', [OrganisationController::class, 'organisation'])->name('organisation');
    Route::put('/organisation/update/{id}', [OrganisationController::class, 'update'])->name('organisation.update');
    Route::put('/organisation/update/logo/{id}', [OrganisationController::class, 'updateLogo'])->name('organisation.updateLogo');
    Route::put('/organisation/update/banner_img/{id}', [OrganisationController::class, 'updateBannerImg'])->name('organisation.updateBannerImg');
    Route::put('/organisation/update/image/{id}', [OrganisationController::class, 'updateImage'])->name('organisation.updateImage');
    /*Şube */
    Route::get('/substation', [SubstationController::class, 'substation'])->name('substation');
    Route::post('/substationadd', [SubstationController::class, 'add'])->name('substationadd');
    Route::post('/substationupdate', [SubstationController::class, 'update'])->name('substationupdate');
    Route::post('/substationdelete', [SubstationController::class, 'delete'])->name('substationdelete');
    /*Önemli bilgiler */
    Route::post('/importand_informationupdate', [ImportandInformationController::class, 'update'])->name('importand_informationupdate');
    Route::post('/importand_informationdelete', [ImportandInformationController::class, 'delete'])->name('importand_informationdelete');
    Route::post('/importand_informationadd', [ImportandInformationController::class, 'add'])->name('importand_informationadd');
    Route::get('/importand_information', [ImportandInformationController::class, 'importand_information'])->name('importand_information');
    Route::put('/importand_information/{id}/activity', [ImportandInformationController::class, 'updateActivity'])->name('importand_information.updateActivity');
    /*Kaynak */
    Route::post('/resourceupdate', [ResourceController::class, 'update'])->name('resourceupdate');
    Route::post('/resourcedelete', [ResourceController::class, 'delete'])->name('resourcedelete');
    Route::post('/resourceadd', [ResourceController::class, 'add'])->name('resourceadd');
    Route::get('/resource', [ResourceController::class, 'resource'])->name('resource');
    Route::put('/resource/{id}/activity', [ResourceController::class, 'updateActivity'])->name('resource.updateActivity');
    Route::get('/download/{filename}', [ResourceController::class, 'download'])->name('download');
    /*Test */
    Route::post('/testupdate', [TestController::class, 'update'])->name('testupdate');
    Route::post('/testdelete', [TestController::class, 'delete'])->name('testdelete');
    Route::post('/testadd', [TestController::class, 'add'])->name('testadd');
    Route::get('/test', [TestController::class, 'test'])->name('test');
    Route::put('/test/{id}/activity', [TestController::class, 'updateActivity'])->name('test.updateActivity');
    /*Soru */
    Route::get('/question{id}', [QuestionController::class, 'question'])->name('question');
    Route::post('/questionadd', [QuestionController::class, 'add'])->name('questionadd');
    Route::post('/questionupdate', [QuestionController::class, 'update'])->name('questionupdate');
    Route::post('/questiondelete', [QuestionController::class, 'delete'])->name('questiondelete');
    /*Ders */
    Route::post('/lessonupdate', [LessonController::class, 'update'])->name('lessonupdate');
    Route::post('/lessonadd', [LessonController::class, 'add'])->name('lessonadd');
    Route::get('/lesson', [LessonController::class, 'lesson'])->name('lesson');
    Route::put('/lesson/{id}/activity', [LessonController::class, 'updateActivity'])->name('lesson.updateActivity');
    /*Sınıf */
    Route::post('/classupdate', [ClassController::class, 'update'])->name('classupdate');
    Route::post('/classadd', [ClassController::class, 'add'])->name('classadd');
    Route::get('/class', [ClassController::class, 'class'])->name('class');
    /*Öğrenci */
    Route::get('/student', [StudentController::class, 'student'])->name('student');
    Route::post('/studentupdate', [StudentController::class, 'update'])->name('studentupdate');
    Route::post('/studentdelete', [StudentController::class, 'delete'])->name('studentdelete');
    Route::post('/studentadd', [StudentController::class, 'add'])->name('studentadd');
    /*Eğitmen */
    Route::get('/teacher', [TeacherController::class, 'teacher'])->name('teacher');
    Route::post('/teacherupdate', [TeacherController::class, 'update'])->name('teacherupdate');
    Route::post('/teacherdelete', [TeacherController::class, 'delete'])->name('teacherdelete');
    Route::post('/teacheradd', [TeacherController::class, 'add'])->name('teacheradd');
    /* çıkış işlemleri */
    Route::get('/signout', [SignController::class, 'signout'])->name('signout');
});
