<?php

Route::any('adminer', function() {
    require 'adminer.php';
    return new \Phroggyy\LaravelAdminer\EmptyResponse();
});