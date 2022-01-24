<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;

class HomeController
{
    public function index()
    {
        //return '<h1>INDEX PAGE</h1>';
        $user = User::query()->where('id', 2)->first();
        $userTask = $user->tasks->first();

        $task = Task::query()->where('creator_id', 1)->first();
        $taskUser = $task->user->first();

        return 'task: ' . $userTask . PHP_EOL . 'user: ' . $taskUser;
    }
}
