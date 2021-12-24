<?php

use App\Http\Controllers\Api\V1\Auth\CheckCodeController;
use App\Http\Controllers\Api\V1\Auth\LoginController;
use App\Http\Controllers\Api\V1\Auth\ResetController;
use App\Http\Controllers\Api\V1\Auth\SignupController;
use App\Http\Controllers\Api\V1\Auth\GetBeginDataController;
use App\Http\Controllers\Api\V1\Cabinet\Candidate\ChangeStatusController;
use App\Http\Controllers\Api\V1\Cabinet\Candidate\ChangeTypeController;
use App\Http\Controllers\Api\V1\Cabinet\Consultant\BuyCandidateController;
use App\Http\Controllers\Api\V1\Cabinet\Consultant\BuyMailingController;
use App\Http\Controllers\Api\V1\Cabinet\IndexController;
use App\Http\Controllers\Api\V1\Cabinet\Resume\DestroyController;
use App\Http\Controllers\Api\V1\Cabinet\Resume\UpdateController;
use App\Http\Controllers\Api\V1\Cabinet\Consultant\ModerationController;
use App\Http\Controllers\Api\V1\Cabinet\Consultant\GetListController;
use App\Http\Controllers\Api\V1\Cabinet\Consultant\VipProfile\CreateVipProfileController;
use App\Http\Controllers\Api\V1\Cabinet\Consultant\VipProfile\UpdateVipProfileController;
use App\Http\Controllers\Api\V1\Cabinet\Consultant\VipProfile\IndexVipProfileController;
use App\Http\Controllers\Api\V1\Cabinet\Support\CreateAppealController;
use App\Http\Controllers\Api\V1\Cabinet\Support\CreateMessageController;
use App\Http\Controllers\Api\V1\Cabinet\Catalog\CreateCatalogResumeController;
use App\Http\Controllers\Api\V1\Cabinet\Consultant\CancelSearchController;
use App\Http\Controllers\Api\V1\Cabinet\Connection\GetNewController;
use App\Http\Controllers\Api\V1\Cabinet\Connection\GetFinishedController;
use App\Http\Controllers\Api\V1\Cabinet\Connection\GetInWorkController;

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Api\v1'], function (){
    Route::group(['namespace' => 'Auth','prefix' => 'auth'], function (){
        Route::post('/signup', [SignupController::class, 'action']);
        Route::get('/signup', [GetBeginDataController::class, 'action']);
        Route::post('/login', [LoginController::class, 'action']);
        Route::post('/reset', [ResetController::class, 'action']);
        Route::post('/check-code', [CheckCodeController::class, 'action']);
    });

    Route::group(['namespace' => 'Cabinet','middleware' => 'jwt.verify', 'prefix' => 'cabinet'], function (){

        Route::get('/', [IndexController::class, 'action']);

        Route::group(['namespace' => 'Candidate', 'prefix' => 'candidate'], function () {
            Route::put('/change-status', [ChangeStatusController::class, 'action']);
            Route::put('/change-type', [ChangeTypeController::class, 'action']);
        });

        Route::group(['namespace' => 'Consultant', 'prefix' => 'consultant'], function () {
            Route::get('/buy-candidate', [ModerationController::class, 'action']);
            Route::get('/get-list', [GetListController::class, 'action']);
            Route::post('/buy-candidate', [BuyCandidateController::class, 'action']);
            Route::post('/buy-mailing', [BuyMailingController::class, 'action']);
            Route::delete('/cancel-search', [CancelSearchController::class, 'action']);

            Route::group(['namespace' => 'VipProfile', 'prefix' => 'vip'], function () {
                Route::post('/create', [CreateVipProfileController::class, 'action']);
                Route::put('/update', [UpdateVipProfileController::class, 'action']);
                Route::get('/', [IndexVipProfileController::class, 'action']);
            });
        });

        Route::group(['namespace' => 'Connection', 'prefix' => 'connection'], function () {
            Route::get('/new', [GetNewController::class, 'action']);
            Route::get('/finished', [GetFinishedController::class, 'action']);
            Route::get('/in-work', [GetInWorkController::class, 'action']);
        });

        Route::group(['namespace' => 'Catalog', 'prefix' => 'catalog'], function () {
            Route::post('/create', [CreateCatalogResumeController::class, 'action']);
        });

        Route::group(['namespace' => 'Support', 'prefix' => 'support'], function () {
            Route::post('/', [CreateAppealController::class, 'action']);
            Route::post('/message', [CreateMessageController::class, 'action']);
        });

        Route::group(['namespace' => 'Resume','prefix' => 'resume'], function (){
            Route::get('/', [IndexController::class, 'action']);
            Route::delete('/', [DestroyController::class, 'action']);
            Route::put('/', [UpdateController::class, 'action']);
        });
    });

});

// 'middleware' => 'jwt.verify'
