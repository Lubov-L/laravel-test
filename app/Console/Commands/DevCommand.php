<?php

namespace App\Console\Commands;

use App\Models\Profile;
use App\Models\Worker;
use Illuminate\Console\Command;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'develop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Some develop';

    /**
     * Execute the console command.
     */
    public function handle()
    {
//       $this->prepareData();

        $worker = Worker::query()->find(15);
        $profile = Profile::query()->find(1);

        dd($worker->profile->toArray());

    }

    public function prepareData() {

        $workerDate = [
            'name' => 'Lola',
            'surname' => 'Fine',
            'email' => 'lola@mail.com',
            'age' => '23',
            'description' => 'ffffff',
            'is_married' => false
        ];

        $worker = Worker::query()->create($workerDate);

        $profileData = [
            'worker_id' => $worker->id,
            'city' => 'NY',
            'skill' => 'coder',
            'experience' => 6,
            'finished_study_at' => '2020-08-23',
        ];

        Profile::query()->create($profileData);
    }
}
