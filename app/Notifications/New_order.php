<?php

namespace App\Notifications;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class New_order extends Notification
{
    use Queueable;
    private $order_id;
    private $client;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($order_id , $client )
    {
        $this->order_id=$order_id;
        $this->client=$client;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toDatabase($notifiable)
{
    return [
        //'data'=>$this->details['body']
        'id'=>$this->order_id,
        'title'=>'a new order hasbeen added by'.$this->client,
        'client'=>$this->client
        //Auth::user()->name,
        //$this->order->clients->name,
    ];
      
}
  
    
}
