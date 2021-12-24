<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AKbQxXxqQE5AWwfl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/signup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qo2QHqmf2Fobrd9h',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t8PJRLIDCcHQMOz2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qF2spKa9XIdvrzOe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hJwXsAnWF9EEHq9p',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/auth/check-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Vi1BOlaONypOXri5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/cabinet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gaX0nfSL08VfRoiT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/cabinet/candidate/change-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VnFHaaCUyEjQbuj4',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/cabinet/candidate/change-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vEm4uiuGAxemlLnY',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/cabinet/consultant/buy-candidate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QZeBq0kEqeqlLtaQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rAn5ZEAmM1cUkMgA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/cabinet/consultant/get-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::egqxY6PYEXz4o0B6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/cabinet/consultant/buy-mailing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AI54qtooqdhyozE0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/cabinet/consultant/cancel-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2yjxKli4beq8idDG',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/cabinet/consultant/vip/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5xhFBlhpdXctygTP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/cabinet/consultant/vip/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5qKdyO5sjQv9U1D3',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/cabinet/consultant/vip' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C7SKyJsKPgztGW2h',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/cabinet/connection/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fhOqtRq2vXsX8TUA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/cabinet/connection/finished' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UZwqKAUid27aO7Bg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/cabinet/connection/in-work' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vRKHHzRW0c6zUNnk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/cabinet/catalog/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3v7YsjJV8hs6EFPl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/cabinet/support' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cw4sq71p5KyNnRpF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/cabinet/support/message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lnRRVMS4plRMRnkC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/cabinet/resume' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gyxi3BpQ49Yn152D',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9YkSDN6Spcy2DOlk',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IAtXrEpnTMMvG9yh',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
    ),
    3 => 
    array (
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::AKbQxXxqQE5AWwfl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::AKbQxXxqQE5AWwfl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qo2QHqmf2Fobrd9h' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/signup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\SignupController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\SignupController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Auth',
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::qo2QHqmf2Fobrd9h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t8PJRLIDCcHQMOz2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/auth/signup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\GetBeginDataController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\GetBeginDataController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Auth',
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::t8PJRLIDCcHQMOz2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qF2spKa9XIdvrzOe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\LoginController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\LoginController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Auth',
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::qF2spKa9XIdvrzOe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hJwXsAnWF9EEHq9p' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\ResetController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\ResetController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Auth',
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::hJwXsAnWF9EEHq9p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vi1BOlaONypOXri5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/check-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\CheckCodeController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\CheckCodeController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Auth',
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::Vi1BOlaONypOXri5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gaX0nfSL08VfRoiT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/cabinet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\IndexController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\IndexController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Cabinet',
        'prefix' => 'api/v1/cabinet',
        'where' => 
        array (
        ),
        'as' => 'generated::gaX0nfSL08VfRoiT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VnFHaaCUyEjQbuj4' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/cabinet/candidate/change-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Candidate\\ChangeStatusController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Candidate\\ChangeStatusController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Cabinet\\Candidate',
        'prefix' => 'api/v1/cabinet/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::VnFHaaCUyEjQbuj4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vEm4uiuGAxemlLnY' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/cabinet/candidate/change-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Candidate\\ChangeTypeController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Candidate\\ChangeTypeController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Cabinet\\Candidate',
        'prefix' => 'api/v1/cabinet/candidate',
        'where' => 
        array (
        ),
        'as' => 'generated::vEm4uiuGAxemlLnY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QZeBq0kEqeqlLtaQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/cabinet/consultant/buy-candidate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Consultant\\ModerationController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Consultant\\ModerationController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Cabinet\\Consultant',
        'prefix' => 'api/v1/cabinet/consultant',
        'where' => 
        array (
        ),
        'as' => 'generated::QZeBq0kEqeqlLtaQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::egqxY6PYEXz4o0B6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/cabinet/consultant/get-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Consultant\\GetListController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Consultant\\GetListController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Cabinet\\Consultant',
        'prefix' => 'api/v1/cabinet/consultant',
        'where' => 
        array (
        ),
        'as' => 'generated::egqxY6PYEXz4o0B6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rAn5ZEAmM1cUkMgA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/cabinet/consultant/buy-candidate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Consultant\\BuyCandidateController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Consultant\\BuyCandidateController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Cabinet\\Consultant',
        'prefix' => 'api/v1/cabinet/consultant',
        'where' => 
        array (
        ),
        'as' => 'generated::rAn5ZEAmM1cUkMgA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AI54qtooqdhyozE0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/cabinet/consultant/buy-mailing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Consultant\\BuyMailingController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Consultant\\BuyMailingController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Cabinet\\Consultant',
        'prefix' => 'api/v1/cabinet/consultant',
        'where' => 
        array (
        ),
        'as' => 'generated::AI54qtooqdhyozE0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2yjxKli4beq8idDG' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/cabinet/consultant/cancel-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Consultant\\CancelSearchController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Consultant\\CancelSearchController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Cabinet\\Consultant',
        'prefix' => 'api/v1/cabinet/consultant',
        'where' => 
        array (
        ),
        'as' => 'generated::2yjxKli4beq8idDG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5xhFBlhpdXctygTP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/cabinet/consultant/vip/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Consultant\\VipProfile\\CreateVipProfileController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Consultant\\VipProfile\\CreateVipProfileController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Cabinet\\Consultant\\VipProfile',
        'prefix' => 'api/v1/cabinet/consultant/vip',
        'where' => 
        array (
        ),
        'as' => 'generated::5xhFBlhpdXctygTP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5qKdyO5sjQv9U1D3' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/cabinet/consultant/vip/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Consultant\\VipProfile\\UpdateVipProfileController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Consultant\\VipProfile\\UpdateVipProfileController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Cabinet\\Consultant\\VipProfile',
        'prefix' => 'api/v1/cabinet/consultant/vip',
        'where' => 
        array (
        ),
        'as' => 'generated::5qKdyO5sjQv9U1D3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C7SKyJsKPgztGW2h' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/cabinet/consultant/vip',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Consultant\\VipProfile\\IndexVipProfileController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Consultant\\VipProfile\\IndexVipProfileController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Cabinet\\Consultant\\VipProfile',
        'prefix' => 'api/v1/cabinet/consultant/vip',
        'where' => 
        array (
        ),
        'as' => 'generated::C7SKyJsKPgztGW2h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fhOqtRq2vXsX8TUA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/cabinet/connection/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Connection\\GetNewController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Connection\\GetNewController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Cabinet\\Connection',
        'prefix' => 'api/v1/cabinet/connection',
        'where' => 
        array (
        ),
        'as' => 'generated::fhOqtRq2vXsX8TUA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UZwqKAUid27aO7Bg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/cabinet/connection/finished',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Connection\\GetFinishedController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Connection\\GetFinishedController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Cabinet\\Connection',
        'prefix' => 'api/v1/cabinet/connection',
        'where' => 
        array (
        ),
        'as' => 'generated::UZwqKAUid27aO7Bg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vRKHHzRW0c6zUNnk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/cabinet/connection/in-work',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Connection\\GetInWorkController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Connection\\GetInWorkController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Cabinet\\Connection',
        'prefix' => 'api/v1/cabinet/connection',
        'where' => 
        array (
        ),
        'as' => 'generated::vRKHHzRW0c6zUNnk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3v7YsjJV8hs6EFPl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/cabinet/catalog/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Catalog\\CreateCatalogResumeController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Catalog\\CreateCatalogResumeController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Cabinet\\Catalog',
        'prefix' => 'api/v1/cabinet/catalog',
        'where' => 
        array (
        ),
        'as' => 'generated::3v7YsjJV8hs6EFPl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cw4sq71p5KyNnRpF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/cabinet/support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Support\\CreateAppealController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Support\\CreateAppealController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Cabinet\\Support',
        'prefix' => 'api/v1/cabinet/support',
        'where' => 
        array (
        ),
        'as' => 'generated::cw4sq71p5KyNnRpF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lnRRVMS4plRMRnkC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/cabinet/support/message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Support\\CreateMessageController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Support\\CreateMessageController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Cabinet\\Support',
        'prefix' => 'api/v1/cabinet/support',
        'where' => 
        array (
        ),
        'as' => 'generated::lnRRVMS4plRMRnkC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gyxi3BpQ49Yn152D' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/cabinet/resume',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\IndexController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\IndexController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Cabinet\\Resume',
        'prefix' => 'api/v1/cabinet/resume',
        'where' => 
        array (
        ),
        'as' => 'generated::gyxi3BpQ49Yn152D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9YkSDN6Spcy2DOlk' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/cabinet/resume',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Resume\\DestroyController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Resume\\DestroyController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Cabinet\\Resume',
        'prefix' => 'api/v1/cabinet/resume',
        'where' => 
        array (
        ),
        'as' => 'generated::9YkSDN6Spcy2DOlk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IAtXrEpnTMMvG9yh' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/cabinet/resume',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Resume\\UpdateController@action',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cabinet\\Resume\\UpdateController@action',
        'namespace' => 'App\\Http\\Controllers\\Api\\v1\\Cabinet\\Resume',
        'prefix' => 'api/v1/cabinet/resume',
        'where' => 
        array (
        ),
        'as' => 'generated::IAtXrEpnTMMvG9yh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
