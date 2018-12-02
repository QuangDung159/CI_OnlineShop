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
        // gán đường dẫn vào biến temp
        $data["temp"] = "site/home/index";
        // truyền biến temp qua "views/site/layout"
        $this->load->view("site/layout", $data);
    }
}