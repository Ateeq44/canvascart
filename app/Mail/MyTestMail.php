<?php
namespace App\Mail;
  
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
  
class MyTestMail extends Mailable
{
    use Queueable, SerializesModels;
  
    public $cus_details;
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($cus_details)
    {
        $this->cus_details = $cus_details;
    }
  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from MultiKart')->view('user.emails.myTestMail');
    }
}