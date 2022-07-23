<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class EmailNotif extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from websitepercobaan.com')->view('EmailNotif')->attach(storage_path('/app/Laravel/2021-12-15-16-59-02.zip'), [
                         'as' => '2021-12-15-16-59-02.zip',
                         'mime' => 'application/zip',
                         ]);
    }
}
