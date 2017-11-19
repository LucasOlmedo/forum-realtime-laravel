<?php

use Illuminate\Database\Seeder;
use App\Reply;
use App\Thread;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $threads = factory(Thread::class, 10)->create();
        $threads->each(function($thread){
            factory(Reply::class, rand(5, 10))->create([
                'thread_id' => $thread->id,
                'user_id' => $thread->user_id
            ]);
        });
    }
}
