<?php
    //자동으로 reqirde 해주는 기능
    // 이 기능을 등록해 준다.
    // 익명 함수로 저장
    spl_autoload_register(function($classname)){
        echo $classname;
        // exit;
        require "../Module/Database/".$classname.".php";

    }