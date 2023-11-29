<?php

namespace App\Console\Commands;

use App\Models\Position;
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
        $worker = Worker::query()->find(3);
        $position = Position::query()->find(3);
        dd($position->workers->toArray());
    }

    public function prepareData() {

        $position = Position::query()->create([
            'title' => 'Developer',
        ]);

        $position2 = Position::query()->create([
            'title' => 'Manager',
        ]);

        $workerDate = [
            'name' => 'Lola',
            'surname' => 'Fine',
            'email' => 'lola@mail.com',
            'position_id' => $position2->id,
            'age' => '23',
            'description' => 'ffffff',
            'is_married' => false
        ];

        $workerDate1 = [
            'name' => 'Lola',
            'surname' => 'Fine',
            'email' => 'lola@mail.com',
            'position_id' => $position->id,
            'age' => '23',
            'description' => 'ffffff',
            'is_married' => false
        ];

        $workerDate2 = [
            'name' => 'Lola',
            'surname' => 'Fine',
            'email' => 'lola@mail.com',
            'position_id' => $position2->id,
            'age' => '23',
            'description' => 'ffffff',
            'is_married' => false
        ];

        $workerDate3 = [
            'name' => 'Lola',
            'surname' => 'Fine',
            'email' => 'lola@mail.com',
            'position_id' => $position2->id,
            'age' => '23',
            'description' => 'ffffff',
            'is_married' => false
        ];

        $worker = Worker::query()->create($workerDate);
        $worker1 = Worker::query()->create($workerDate1);
        $worker2 = Worker::query()->create($workerDate2);
        $worker3 = Worker::query()->create($workerDate3);

        $profileData = [
            'worker_id' => $worker->id,
            'city' => 'NY',
            'skill' => 'coder',
            'experience' => 6,
            'finished_study_at' => '2020-08-23',
        ];

        $profileData1 = [
            'worker_id' => $worker1->id,
            'city' => 'NY',
            'skill' => 'coder',
            'experience' => 6,
            'finished_study_at' => '2020-08-23',
        ];

        $profileData2 = [
            'worker_id' => $worker2->id,
            'city' => 'NY',
            'skill' => 'coder',
            'experience' => 6,
            'finished_study_at' => '2020-08-23',
        ];

        $profileData3 = [
            'worker_id' => $worker3->id,
            'city' => 'NY',
            'skill' => 'coder',
            'experience' => 6,
            'finished_study_at' => '2020-08-23',
        ];

        Profile::query()->create($profileData);
        Profile::query()->create($profileData1);
        Profile::query()->create($profileData2);
        Profile::query()->create($profileData3);
    }
}
