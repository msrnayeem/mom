<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});


Broadcast::channel('course.{courseId}', function ($user, $courseId) {
    return $user !== null; // Allow only authenticated users
});