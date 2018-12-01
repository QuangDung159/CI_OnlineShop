<?php

/**
 * Created by PhpStorm.
 * User: DungLQ7
 * Date: 12/1/2018
 * Time: 8:18 PM
 */
class Home extends CI_Controller
{
    function index()
    {
        $data = array();
        $data["temp"] = "site/home/index";
        $this->load->view("site/layout", $data);
    }
}