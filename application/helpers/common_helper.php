<?php
/**
 * Created by PhpStorm.
 * User: DungLQ7
 * Date: 12/1/2018
 * Time: 8:06 PM
 */
function public_url($url = "")
{
    // base_url đã được config trong config.php
    return base_url("public/" . $url . "/");
}