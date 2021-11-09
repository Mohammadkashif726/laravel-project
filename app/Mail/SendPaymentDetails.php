<?php

namespace App\Mail;

use App\Models\Order;
use App\Models\PaymentType;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPaymentDetails extends Mailable
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
    public function build()
    {
        $paymentOptions = PaymentType::all()->where('active', true);
        return $this
                ->subject('Thank you for choosing ilmyst.com')
                ->view('emails/payment_details', ['payment_options' => $paymentOptions]);
    }
}
