<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $content = '<h1>Cảm ơn bạn đã tham gia phỏng vấn công ty chúng tôi</h1>
        <h2>Nếu bạn có thể phỏng vấn trước 6pm thì hãy confirm mail này và truy cập trang web để tạo tài khoản và apply lịch phỏng vấn</h2>
        <a href="http://localhost/Recruitment-Manager/index.php" class="btn btn-block btn-danger">
              Confirm
          </a>';
        return $this->from("admin@programmingfields.com")->view('email-template', ['content' => $content]);
    }
}
