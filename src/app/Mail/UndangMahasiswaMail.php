<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UndangMahasiswaMail extends Mailable
{
    use Queueable, SerializesModels;

        public $kodekelas;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($kode)
    {
        //
        $this->kodekelas = $kode;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.undang.mahasiswa');
    }
}
