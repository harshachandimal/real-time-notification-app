<?php

use App\Events\NotificationEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/send-notification', function (Request $request) {
   broadcast(new NotificationEvent())->toOthers();
});
