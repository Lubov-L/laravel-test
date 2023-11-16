<?php

namespace App\Http\Controllers;

use App\Models\Worker;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();

        return view('worker.index', compact('workers'));
    }

    public function show(Worker $worker)
    {
        dd($worker);
    }

    public function create()
    {
        $worker = [
            'name' => 'Lilya',
            'surname' => 'Sunshine',
            'email' => 'lilya@gmail.com',
            'age' => '23',
            'description' => 'I am Lilya',
            'is_married' => false,
        ];

        Worker::create($worker);

        return 'Lilya was created';
    }

    public function update()
    {
        $worker = Worker::find(2);

        $worker->update([
            'name' => 'Karla'
        ]);

        return "Was updated";
    }

    public function delete()
    {
        $worker = Worker::find(2);

        $worker->delete();

        return 'Worker was deleted';
    }
}
