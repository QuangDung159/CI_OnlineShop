<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php $this->load->view("admin/main/head") ?>
</head>

<body>

<!-- Left side content -->
<div id="left_content">
    <div id="leftSide" style="padding-top:30px;">
        <?php
        $this->load->view("admin/main/left_content");
        ?>
    </div>
    <div class="clear"></div>
</div>


<!-- Right side -->
<div id="rightSide">

    <!-- Account panel top -->
    <?php $this->load->view("admin/main/right_content") ?>
    <div class="clear mt30"></div>
    <?php $this->load->view($temp, $this->data) ?>
    <!-- Footer -->
    <div id="footer">
        <?php $this->load->view("admin/main/footer") ?>
    </div>
</div>
<div class="clear"></div>
</body>
</html>