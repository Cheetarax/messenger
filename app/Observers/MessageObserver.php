<?php

namespace App\Observers;

use App\Message;
use App\Conversation;

class MessageObserver
{
    /**
     * Handle to the Message "created" event.
     *
     * @param  \App\Message  $message
     * @return void
     */
    public function created(Message $message)
    {
        //Para el que envía el mensaje
        $conversation = Conversation::where('user_id', $message->from_id)
                                    ->where('contac_id', $message->to_id)->first();
        
        if($conversation) {
            $conversation->las_message= 'Tú: $message->content';
            $conversation->last_time = $message->created_at;
            $conversation->save();
        }

        //Para el que lo recibe
        $conversation = Conversation::where('contact_id', $message->from_id)
                                    ->where('user_id', $message->to_id)->first();

        if($conversation) {
            $conversation->las_message= '$conversation->contact_name: $message->content';
            $conversation->last_time = $message->created_at;
            $conversation->save();
        }
    }

}