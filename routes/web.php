<?php

use App\Http\Controllers\Admin\About\AboutController;
use App\Http\Controllers\Admin\About\AboutGalleryController;
use App\Http\Controllers\Admin\About\DownloadableContentController;
use App\Http\Controllers\Admin\AjaxController;
use App\Http\Controllers\Admin\Blog\BlogCategoryController;
use App\Http\Controllers\Admin\Blog\BlogCommentController;
use App\Http\Controllers\Admin\Blog\BlogController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Category\SeriesController;
use App\Http\Controllers\Admin\Category\SubCategoryController;
use App\Http\Controllers\Admin\Category\SubCategorySonController;
use App\Http\Controllers\Admin\Contact\ContactRequestController;
use App\Http\Controllers\Admin\JobRequestFormController;
use App\Http\Controllers\Admin\Language\LanguageController;
use App\Http\Controllers\Admin\MainPage\MainPageController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Production\ProductionCategoryController;
use App\Http\Controllers\Admin\Production\ProductionController;
use App\Http\Controllers\Admin\Reference\ReferenceCategoryController;
use App\Http\Controllers\Admin\Reference\ReferenceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\Slider\SliderController;
use App\Http\Controllers\Admin\Team\TeamController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\Video\VideoController;
use App\Http\Controllers\FAboutController;
use App\Http\Controllers\FJobRequestFormController;
use App\Http\Controllers\FProductionController;
use App\Http\Controllers\FReferenceController;
use App\Http\Controllers\Frontend\FContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\NewsPaperController;
use App\Http\Controllers\SearchProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoadMapController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PaymentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::post('city', [HomeController::class, 'city'])->name('city');
Route::get('change-language/{language}', [HomeController::class, 'changeLanguage'])->name('changeLanguage');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::prefix('blog')->as('blog.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Frontend\FBlogController::class, 'index'])->name('index');
    Route::get('/{slug}', [\App\Http\Controllers\Frontend\FBlogController::class, 'detail'])->name('detail');
    Route::get('/category/{slug}', [\App\Http\Controllers\Frontend\FBlogController::class, 'category'])->name('category');
});

Route::prefix('contact')->as('contact.')->group(function () {
   Route::get('/', [FContactController::class, 'index'])->name('index');
   Route::post('/form', [FContactController::class, 'store'])->name('sendForm')->middleware('throttle:1,5');
});
Route::prefix('job-request-form')->as('jobRequest.')->group(function () {
    Route::get('/', [FJobRequestFormController::class, 'index'])->name('index');
    Route::post('/form', [FJobRequestFormController::class, 'store'])->name('sendForm')/*->middleware('throttle:1,5')*/;
});
Route::get('/about', [FAboutController::class, 'index'])->name('about.index');
Route::get('/faq', [FAboutController::class, 'faq'])->name('faq.index');
Route::get('team', [FAboutController::class, 'team'])->name('team');
Route::get('videos', [FAboutController::class, 'video'])->name('video');
Route::get('roadmap', [FAboutController::class, 'roadmap'])->name('roadmap');
Route::get('tokenomics', [FAboutController::class, 'tokenomics'])->name('tokenomics');
Route::get('info', [FAboutController::class, 'info'])->name('info');
Route::get('kvkk', [HomeController::class, 'kvkk'])->name('kvkk.index'); //kvkk
Route::post('subscribe', [HomeController::class, 'subscribe'])->name('subscribe')->middleware('throttle:1,5');// 5 Dakikada 1 istek

Route::prefix('search')->as('search.')->group(function () {
    Route::get('/{slug}', [SearchProductController::class, 'category'])->name('category');
    Route::get('/{slug}/category/{subCategory}', [SearchProductController::class, 'subCategory'])->name('subCategory');
    Route::get('/{slug}/category/{subCategory}/sub-category/{subCategorySon}', [SearchProductController::class, 'subCategorySon'])->name('subCategorySon');
    Route::get('/{slug}/category/{subCategory}/sub-category/{subCategorySon}/product/{product}', [SearchProductController::class, 'subCategoryProduct'])->name('subCategoryProduct');
});

Route::prefix('reference')->as('reference.')->group(function () {
    Route::get('/', [FReferenceController::class, 'index'])->name('index');
    Route::get('/category/{category}', [FReferenceController::class, 'category'])->name('category');
    Route::get('/category/{category}/{slug}', [FReferenceController::class, 'detail'])->name('detail');
});

Route::prefix('production')->as('production.')->group(function () {
    Route::get('/', [FProductionController::class, 'index'])->name('index');
    Route::get('/category/{category}', [FProductionController::class, 'category'])->name('category');
});

Route::prefix('user')->as('user.')->group(function (){
   Route::get('login', [\App\Http\Controllers\User\Auth\LoginController::class, 'showLoginForm'])->name('login');
   Route::get('register', [\App\Http\Controllers\User\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
   Route::post('register', [\App\Http\Controllers\User\Auth\RegisterController::class, 'register'])->name('register');
   Route::post('login', [\App\Http\Controllers\User\Auth\LoginController::class, 'login'])->name('login');
   Route::post('logout', [\App\Http\Controllers\User\Auth\LoginController::class, 'logout'])->name('logout');
    Route::middleware('auth:user')->prefix('dashboard')->as('panel.')->group(function () {
        Route::get('/', [\App\Http\Controllers\User\HomeController::class, 'index'])->name('index');
        Route::get('/settings', [\App\Http\Controllers\User\SettingController::class, 'settings'])->name('setting.index');
        Route::post('/settings', [\App\Http\Controllers\User\SettingController::class, 'settingUpdate'])->name('setting.update');
        Route::get('/buy', [\App\Http\Controllers\User\SettingController::class, 'buy'])->name('buy.index');
        Route::post('/buy', [\App\Http\Controllers\User\SettingController::class, 'buyToken'])->name('buy.token');
        Route::get('/notification', [\App\Http\Controllers\User\SettingController::class, 'notification'])->name('notification.index');
        Route::post('/notification-detail', [\App\Http\Controllers\User\SettingController::class, 'notificationDetail'])->name('notification.detail');
        Route::get('faq', [\App\Http\Controllers\User\SettingController::class, 'faq'])->name('faq.index');
    });
});

Auth::routes();

Route::post('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::middleware('auth')->prefix('dashboard')->as('admin.')->group(function (){
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');

    /*------------------------------Customer Routes-----------------------------------*/
    Route::resource('customer', \App\Http\Controllers\Admin\CustomerController::class);
    Route::controller(\App\Http\Controllers\Admin\CustomerController::class)->prefix('customer')->as('customer.')->group(function (){
        Route::post('update/phone', 'updatePhone')->name('updatePhone');
        Route::post('update/phone/verify', 'verifyPhone')->name('verifyPhone');
        Route::post('update/password', 'updatePassword')->name('updatePassword');
        Route::post('send/notification', 'sendNotification')->name('sendNotification');
    });
    Route::resource('user', UserController::class);
    Route::resource('slider', SliderController::class); // Sliderlar
    Route::resource('production', ProductionController::class); // Sliderlar
    Route::resource('language', LanguageController::class);// Diller
    Route::resource('main-page',MainPageController::class);//Anasayfa Bölümleri
    Route::resource('contact-request',ContactRequestController::class);//Anasayfa Bölümleri
    Route::resource('reference', ReferenceController::class); //referanslar
    Route::resource('team', TeamController::class); //Ekip
    Route::resource('video', VideoController::class); //videolar
    Route::resource('newspaper', NewsPaperController::class); //haberler
    Route::resource('roadmap', RoadMapController::class); //roadmap
    Route::resource('jobRequestForm', JobRequestFormController::class); //iş başvuruları
    Route::resource('faq', FaqController::class); //ss
    Route::resource('payment', PaymentController::class); //ss
    Route::get('kvkk', [\App\Http\Controllers\Admin\HomeController::class, 'kvkk'])->name('kvkk.index'); //kvkk
    Route::get('info', [\App\Http\Controllers\Admin\HomeController::class, 'info'])->name('info.index'); //kvkk


    Route::get('mobile-app', [\App\Http\Controllers\Admin\HomeController::class, 'mobileApp'])->name('mobileApp.index'); //mobileApp
    Route::get('tokenomics', [\App\Http\Controllers\Admin\HomeController::class, 'tokenomics'])->name('tokenomics.index'); //mobileApp
    Route::get('footer-top', [\App\Http\Controllers\Admin\HomeController::class, 'footerTop'])->name('footerTop.index'); //mobileApp

    /*------------------------------Bloglar-----------------------------------*/
    Route::resource('blog-category', BlogCategoryController::class);
    Route::resource('blog-comment', BlogCommentController::class);
    Route::resource('blog', BlogController::class);

    /*------------------------------Hakkımızda-----------------------------------*/
    Route::resource('about', AboutController::class);
    Route::resource('about-gallery', AboutGalleryController::class);
    Route::resource('downloadable-content', DownloadableContentController::class);
    /*------------------------------Kategoriler-----------------------------------*/
  /*  Route::resource('category', CategoryController::class);
    Route::resource('subcategory', SubCategoryController::class);
    Route::resource('subCategorySon', SubCategorySonController::class);
    Route::resource('series', SeriesController::class);
    Route::resource('product', ProductController::class);
    Route::resource('reference-category', ReferenceCategoryController::class);
    Route::resource('productionCategory', ProductionCategoryController::class);*/

    /*------------------------------Ajax Commands-----------------------------------*/
    Route::controller(AjaxController::class)->as('ajax.')->prefix('ajax')->group(function () {
        Route::post('/update-featured', 'updateFeatured')->name('updateFeatured');
        Route::post('/delete/object', 'deleteFeatured')->name('deleteFeatured');
        Route::post('/delete/all/object', 'deleteAllFeatured')->name('deleteAllFeatured');
        Route::post('/get/district', 'getDistrict')->name('getDistrictUrl');
        Route::post('/variant/option', 'getVariantOption')->name('getVariantOption');
    });
    /*------------------------------Ayarlar-----------------------------------*/
    Route::controller(SettingController::class)->prefix('settings')->as('settings.')->group(function (){
        Route::get('/customer', [SettingController::class, 'customer'])->name('customer');
        Route::post('update/main', [SettingController::class, 'updateMain'])->name('updateMain');
        Route::post('/', [SettingController::class, 'update'])->name('update');
    });
});
