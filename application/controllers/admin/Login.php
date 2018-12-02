<?php
/**
 * Created by PhpStorm.
 * User: DungLQ7
 * Date: 12/2/2018
 * Time: 12:46 PM
 */

class Login extends MY_Controller
{
    function index()
    {
        $this->load->view("admin/login/index");
    }
}