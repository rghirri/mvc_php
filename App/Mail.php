<?php

namespace App;

use App\Config;
use Mailgun\Mailgun;

/**
 * Mail
 *
 * PHP version 7.0
 */
class Mail
{

    /**
     * Send a message
     *
     * @param string $to Recipient
     * @param string $subject Subject
     * @param string $text Text-only content of the message
     * @param string $html HTML content of the message
     *
     * @return mixed
     */
    public static function send($to, $subject, $text, $html)
    {
        # Instantiate the client.
        $mgClient = Mailgun::create(Config::MAILGUN_API_KEY);
        $domain = Config::MAILGUN_DOMAIN;
        # Make the call to the client.
        $mgClient->messages()->send($domain, array(
            'from'	=> 'rghirri@gmail.com',
            'to'      => $to,
            'subject' => $subject,
            'text'    => $text,
            'html'    => $html
        ));

        // $mg = new Mailgun(Config::MAILGUN_API_KEY);
        // $domain = Config::MAILGUN_DOMAIN;

        // $mg->sendMessage($domain, ['from'    => 'rghirri@gmail.com',
        //                            'to'      => $to,
        //                            'subject' => $subject,
        //                            'text'    => $text,
        //                            'html'    => $html
        //                         ]);
    }
}