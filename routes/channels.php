<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('real-time-app', function ($user) {
    return $user->auth()->check();
});
