<?php

Route::group(array('before' => 'handleRequests|handleMainApp'), function() {
    $mainAppRoutes = function () {
        Route::any('/', function () {
            return "generic route for main app.";
        });
    };

    Route::group(array('domain' => 'www.' . Config::get('app.domain')), $mainAppRoutes );
    Route::group(array('domain' => Config::get('app.domain')), $mainAppRoutes );
});