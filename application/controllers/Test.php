<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{

    /**
     * Constructor for Test Class
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Send sms
     * Sends a request to the gateway api to send a message
     *
     *@access public
     */
    public function send_sms()
    {
        //load the library
        $this->load->library('smsgateway');

        //mobile phone device number
        $deviceID = 1;
        $number = '+254xxxxxxxxx';
        //make it shorter than 161 characters
        $message = 'Your message goes here';

        //this is optional
        $options = [
            'send_at' => strtotime('+10 minutes'), // Send the message in 10 minutes
            'expires_at' => strtotime('+1 hour'), // Cancel the message in 1 hour if the message is not yet sent
        ];
        //GOOD to GO!!! send sms to a number
        $this->smsgateway->sendMessageToNumber($to, $message, $device, $options = []);
    }
}
