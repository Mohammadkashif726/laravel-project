<?php

namespace App\Console\Commands;

use App\Mail\RegisterSuccessMail;
use Illuminate\Console\Command;

use App\Http\Resources\OrdersShowResource;
use App\Mail\DispatchBatchOrderMail;
use App\Models\Dispatcher;
use Illuminate\Support\Facades\Mail;

class RegisterSuccessEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dispatcher:registersuccessemail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dispatcher register success email should send';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $dispatchers = Dispatcher::all()
            ->where('status', '=', Dispatcher::PENDING)
            ->where('type', '=', Dispatcher::REGISTER_SUCCESS);
        $dispatchersCount = count($dispatchers);
        $emails = [];
        if(sizeof($dispatchers) > 0){
            foreach ($dispatchers as $dispatcher)  {
                $email = $dispatcher->email;
                $id = $dispatcher->id;
                array_push($emails, $email);

                if($email) {
                    if($dispatcher->type === Dispatcher::REGISTER_SUCCESS){
                        Mail::to($email)->send(new RegisterSuccessMail($dispatcher->user));
                    }

                    $disp = Dispatcher::find($id);
                    $disp->status = Dispatcher::SUCCESS;
                    $disp->update();
                }
            }
            $response = 'Successfully sent emails to all pending register dispatchers -> ' . $dispatchersCount . ' ' . implode(", ", $emails);
        } else {
            $response = 'No email found';
        }
        $this->info($response);
    }
}
