<?php

namespace App\Mail;

use App\Http\Resources\OrdersShowResource;
use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DispatchBatchOrderMail extends Mailable
{
    use Queueable, SerializesModels;
    public $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
         $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Order $order)
    {
        $orderResource = new OrdersShowResource($order);
        return $this->view('emails.batch.orderthanks')->with([
            'order' => $orderResource
        ]);
    }
}
