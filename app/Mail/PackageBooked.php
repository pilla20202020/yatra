<?php

namespace App\Mail;

use App\Models\Package\Package;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PackageBooked extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, Package $package)
    {
        $this->data = $data;
        $this->package = $package;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $package = $this->package;
        $data = $this->data;
        return $this->from($this->data['email'], $this->data['fullname'])->view('mail.packagebooked',compact('package','data'));
    }
}
