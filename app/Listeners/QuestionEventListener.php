<?php

namespace App\Listeners;

use App\Events\SomeEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\QuestionViewCount;

class QuestionEventListener
{
    /**
     * 同一post最大访问次数,再刷新数据库
     */
    const postViewLimit = 30;

    /**
     * 同一用户浏览同一post过期时间
     */
    const ipExpireSec   = 300;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SomeEvent  $event
     * @return void
     */
    public function handle(QuestionViewCount $event)
    {
        $question = $event->question;
        $client_ip = $event->client_ip;
        $ques_id = $question->id;
    }
}