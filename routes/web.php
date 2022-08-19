<?php

use App\Models\Searches;
use App\Models\Services;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Dashboard\NewsController;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\UsersController;
use App\Http\Controllers\Dashboard\GroupsController;
use App\Http\Controllers\Dashboard\SliderController;
use App\Http\Controllers\Dashboard\PartnersController;
use App\Http\Controllers\Dashboard\SearchesController;
use App\Http\Controllers\Dashboard\ServicesController;
use App\Http\Controllers\Dashboard\MarketingController;
use App\Http\Controllers\Dashboard\MessageController;
use App\Http\Controllers\Dashboard\OrderController as DashboardOrderController;
use App\Http\Controllers\Dashboard\PhoneMessageController;
use App\Http\Controllers\Dashboard\SettingsController;
use App\Http\Controllers\Dashbord\MailController;
use App\Http\Controllers\Front\AboutusController;
use App\Http\Controllers\Front\MailingListController;
use App\Http\Controllers\Front\MessagesController;
use App\Http\Controllers\Front\NewsController as FrontNewsController;
use App\Http\Controllers\Front\OrderController;
use App\Http\Controllers\Front\PartnerController;
use App\Http\Controllers\Front\ServicesController as FrontServicesController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::get('/',[HomeController::class,'index'])->prefix(LaravelLocalization::setLocale())
->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('home');
Route::get('/soon',[HomeController::class,'soon'])->prefix(LaravelLocalization::setLocale())
->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('soon');

Route::post('/a',[HomeController::class,'a']);
Route::post('/b',[HomeController::class,'b']);

Route::get('/dashboard',function ()
{
    return view('admin.dashboard/index');
})->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('dashboard');

Route::post('/mailing-list-subscribre', [MailingListController::class,'subscribe'])->prefix(LaravelLocalization::setLocale())
->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('maillist-sub');



Route::get('/dashboard/website-content', [SettingsController::class,'index'])->prefix(LaravelLocalization::setLocale())
->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('settings');


Route::get('/dashboard/sendMessage/{id}', [MailController::class,'index'])->prefix(LaravelLocalization::setLocale())
->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('sendMessagePage');

Route::post('/mail', [MailController::class,'sendMail'])->prefix(LaravelLocalization::setLocale())
->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('sendMail');



Route::get('/dashboard/sendMailMessage/{id}', [MailController::class,'index2'])->prefix(LaravelLocalization::setLocale())
->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('sendMessagePage2');


Route::post('/send-mail', [MailController::class,'sendMail2'])->prefix(LaravelLocalization::setLocale())
->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('sendMail2');



Route::get('/dashboard/sendPhoneMessage/{number}', [PhoneMessageController::class,'index'])->prefix(LaravelLocalization::setLocale())
->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('sendPhoneMessagePage');


Route::post('/send-phone-message', [PhoneMessageController::class,'send'])->prefix(LaravelLocalization::setLocale())
->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('sendPhoneMessage');



Route::get('/dashboard/mailinglist', [MailController::class,'mailinglist'])->prefix(LaravelLocalization::setLocale())
->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('mailinglist');


Route::post('/group-mail', [MailController::class,'sendGroupMail'])->prefix(LaravelLocalization::setLocale())
->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('sendGroupMail');

Route::get('/dashboard/messages', [MessageController::class,'index'])->prefix(LaravelLocalization::setLocale())
->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('dashboard.messages');



Route::get('/dashboard/show-message/{id}', [MessageController::class,'show'])->prefix(LaravelLocalization::setLocale())
->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('dashboard.show-messages');



Route::post('/dashboard/write-message', [MailController::class,'toGroupMailPage'])->prefix(LaravelLocalization::setLocale())
->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('toGroupMailPage');


Route::post('/dashboard/website-content-add-brief-1/', [SettingsController::class,'brief1'])->prefix(LaravelLocalization::setLocale())
->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('brief1');

Route::post('/dashboard/website-content-add-brief-2', [SettingsController::class,'brief2'])->prefix(LaravelLocalization::setLocale())
->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('brief2');


Route::get('/dashboard/home-content', [SettingsController::class,'home_content'])->prefix(LaravelLocalization::setLocale())
->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('home_content');


Route::post('/dashboard/website-content-add-description', [SettingsController::class,'tif_desc'])->prefix(LaravelLocalization::setLocale())
->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('tif_desc');

Route::get('/dashboard/website-content/aboutus-page', [SettingsController::class,'aboutus'])->prefix(LaravelLocalization::setLocale())
->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('aboutus');

Route::post('/dashboard/website-content/aboutus-content', [SettingsController::class,'content'])->prefix(LaravelLocalization::setLocale())
->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('imagecontent');


Route::post('/dashboard/website-content/aboutus-content2', [SettingsController::class,'aboutuscontent'])->prefix(LaravelLocalization::setLocale())
->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('aboutuscontent');


Route::get('/dashboard/orders', [DashboardOrderController::class,'index'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('orders');
Route::get('/dashboard/show-orders/{id}', [DashboardOrderController::class,'show'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('show-orders');
Route::post('/dashboard/change-order-status/{id}', [DashboardOrderController::class,'changeOrderStatus'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('change-status');
Route::get('/dashboard/orders/{status}', [DashboardOrderController::class,'custom_order'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('custom_order');
Route::get('/dashboard/add-order', [DashboardOrderController::class,'add_order'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('add_order');
Route::post('/orders/store',[DashboardOrderController::class,'store'] )->name('dashboard.storeorder');


Route::get('/dashboard/sliders', [SliderController::class,'index'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('sliders');
Route::get('/dashboard/add-slider', [SliderController::class,'add'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('slider.add');
Route::post('/dashboard/store-slider', [SliderController::class,'store'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('slider.store');
Route::get('/dashboard/edit-slider/{id}', [SliderController::class,'edit'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('slider.edit');
Route::post('/dashboard/update-slider/{id}', [SliderController::class,'update'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('slider.update');
Route::get('/dashboard/delete-slider/{id}', [SliderController::class,'destroy'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('slider.destroy');



Route::get('/dashboard/news', [NewsController::class,'index'])->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->prefix(LaravelLocalization::setLocale())->name('news');
Route::get('/dashboard/add-news', [NewsController::class,'add'])->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->prefix(LaravelLocalization::setLocale())->name('news.add');
Route::post('/dashboard/store-news', [NewsController::class,'store'])->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->prefix(LaravelLocalization::setLocale())->name('news.store');
Route::get('/dashboard/edit-news/{id}', [NewsController::class,'edit'])->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->prefix(LaravelLocalization::setLocale())->name('news.edit');
Route::post('/dashboard/update-news/{id}', [NewsController::class,'update'])->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->prefix(LaravelLocalization::setLocale())->name('news.update');
Route::get('/dashboard/delete-news/{id}', [NewsController::class,'destroy'])->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->prefix(LaravelLocalization::setLocale())->name('news.destroy');


Route::get('/dashboard/parteners', [PartnersController::class,'index'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('parteners');
Route::get('/dashboard/add-parteners', [PartnersController::class,'add'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('parteners.add');
Route::post('/dashboard/store-parteners', [PartnersController::class,'store'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('parteners.store');
Route::get('/dashboard/edit-parteners/{id}', [PartnersController::class,'edit'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('parteners.edit');
Route::post('/dashboard/update-parteners/{id}', [PartnersController::class,'update'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('parteners.update');
Route::get('/dashboard/delete-parteners/{id}', [PartnersController::class,'destroy'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('parteners.destroy');
Route::get('/dashboard/image/destroy', [PartnersController::class,'destroyImage'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('parteners.destroyImage');

Route::get('/dashboard/searches', [SearchesController::class,'index'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('searches');
Route::get('/dashboard/add-search', [SearchesController::class,'add'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('search.add');
Route::post('/dashboard/store-search', [SearchesController::class,'store'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('search.store');
Route::get('/dashboard/edit-search/{id}', [SearchesController::class,'edit'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('search.edit');
Route::post('/dashboard/update-search/{id}', [SearchesController::class,'update'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('search.update');
Route::get('/dashboard/delete-search/{id}', [SearchesController::class,'destroy'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('search.destroy');



Route::get('/dashboard/services', [ServicesController::class,'index'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('services');
Route::get('/dashboard/add-service', [ServicesController::class,'add'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('service.add');
Route::post('/dashboard/store-service', [ServicesController::class,'store'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('service.store');
Route::get('/dashboard/edit-service/{id}', [ServicesController::class,'edit'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('service.edit');
Route::post('/dashboard/update-service/{id}', [ServicesController::class,'update'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('service.update');
Route::get('/dashboard/delete-service/{id}', [ServicesController::class,'destroy'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('service.destroy');



Route::get('/dashboard/users', [UsersController::class,'index'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('users');
Route::get('/dashboard/edit_user/{id}', [UsersController::class,'edit'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('user.edit');
Route::post('/dashboard/update_user/{id}', [UsersController::class,'update'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('user.update');
Route::get('/dashboard/delete-user/{id}', [UsersController::class,'destroy'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('user.destroy');


Route::get('/dashboard/add-roles/{id}', [RoleController::class,'index'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('user.roles');
Route::post('/dashboard/stor-roles/{id}', [RoleController::class,'store'])->middleware(['auth'])->name('user.store_roles');

Route::get('/dashboard/groups/{name?}', [GroupsController::class,'index'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('groups');
Route::get('/dashboard/add-group', [GroupsController::class,'create'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('group.create');
Route::post('/dashboard/store-group', [GroupsController::class,'store'])->middleware(['auth'])->name('group.store');
Route::get('/dashboard/edit-group/{id}', [GroupsController::class,'edit'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('group.edit');
Route::post('/dashboard/update-group/{id}', [GroupsController::class,'update'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('group.update');
Route::get('/dashboard/destroy-group/{id}', [GroupsController::class,'destroy'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('group.destroy');



Route::get('/dashboard/marketing', [MarketingController::class,'index'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('marketing');
Route::get('/dashboard/add-application', [MarketingController::class,'add'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('app.add');
Route::post('/dashboard/store-application', [MarketingController::class,'store'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('app.store');
Route::get('/dashboard/delete-application/{id}', [MarketingController::class,'destroy'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('app.destroy');
Route::post('/dashboard/store-application-code', [MarketingController::class,'add_code'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('app.add_code');
Route::post('/dashboard/store-sms-data', [MarketingController::class,'add_sms_data'])->prefix(LaravelLocalization::setLocale())->middleware(['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->name('app.smsp');


Route::prefix(LaravelLocalization::setLocale())->group(function () {
    Route::get('/blog',[FrontNewsController::class,'index'] )->name('blog');
    Route::get('/blog-detail/{id}',[FrontNewsController::class,'show'] )->name('blog-detaile');

    Route::get('/partners',[PartnerController::class,'index'] )->name('front.partners');
    Route::get('/partner/{id}',[PartnerController::class,'show'] )->name('front.partners-show');


    Route::get('/contact_us',[MessagesController::class,'index'] )->name('front.contact_us');
    Route::post('/contact_us/store-message',[MessagesController::class,'store'] )->name('front.storemessage');


    Route::get('/solutions',[FrontServicesController::class,'index'] )->name('front.services');
    Route::get('/solutions/{id}',[FrontServicesController::class,'show'] )->name('front.services-show');


    Route::get('/about-us',[AboutusController::class,'index'] )->name('front.aboutus');

    Route::get('/sales-contact/{id}',[OrderController::class,'index'] )->name('front.salescontact');
    Route::post('/sales-contact/store',[OrderController::class,'store'] )->name('front.storeorder');

});
require __DIR__.'/auth.php';
