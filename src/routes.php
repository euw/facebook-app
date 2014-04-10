<?php

Route::group(array('domain' => 'www.' . Config::get('app.domain'), 'before' => 'handleRequests|handleMainApp'), function () {
    Route::any('/', function () {
        return "generic route for main app.";
    });
});