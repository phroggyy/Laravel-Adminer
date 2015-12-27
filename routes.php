<?php

Route::any('adminer', function() {
    require base_path() . '/adminer.php';
    return new \Phroggyy\LaravelAdminer\EmptyResponse();
});
