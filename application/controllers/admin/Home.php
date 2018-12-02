<?php

/**
 * Created by PhpStorm.
 * User: DungLQ7
 * Date: 12/2/2018
 * Time: 7:40 PM
 */
class Home extends MY_Controller
{
    function index()
    {
        $this->data["temp"] = "admin/main/index";
        $this->load->view("admin/main", $this->data);
    }
}