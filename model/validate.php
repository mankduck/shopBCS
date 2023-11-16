<?php
    function isGmail($email) {
        // Sử dụng biểu thức chính quy để kiểm tra định dạng
        $pattern = '/^[a-zA-Z0-9._%+-]+@gmail\.com$/';
        
        // Sử dụng hàm preg_match để kiểm tra
        if (preg_match($pattern, $email)) {
            return true; // Địa chỉ email hợp lệ
        } else {
            return false; // Địa chỉ email không hợp lệ
        }
    }

    function isName($name) {
        $pattern = '/[0-9]/';
        if (!preg_match($pattern, $name)) {
            return true;
        } else {
            return false;
        }
    }

?>