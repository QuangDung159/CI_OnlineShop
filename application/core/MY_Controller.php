<?php
/**
 * Created by PhpStorm.
 * User: DungLQ7
 * Date: 12/2/2018
 * Time: 12:41 PM
 */

class MY_Controller extends CI_Controller
{
    // Biến gửi data
    public $data = array();

    function __construct()
    {
        // Kế thừa từ CI_Controller
        parent::__construct();
        $controller = $this->uri->segment(1);

        // Phân luồng đăng nhập
        switch ($controller) {
            case "admin":
                {
                    // Xử lý các dữ liệu khi truy cập vào trang admin
                    $this->check_login();
                    break;
                }
            default :
                {
                    // Xử lý dữ liệu ở trang ngoài
                }
        }
    }

    /*
     * Kiểm tra trạng thái đăng nhập của admin
     */
    private function check_login()
    {

    }
}