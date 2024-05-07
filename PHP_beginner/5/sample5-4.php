<?php
    function job_set1($param){
        $param = "会社員";
    }

    function job_set2(&$param){
        $param = "自営業";
    }

    $taro_job = "公務員";
    $hanako_job = "公務員";

    job_set1($taro_job);
    job_set2($hanako_job);

    echo "太郎の職業は{$taro_job}です。<br>";
    echo "花子の職業は{$hanako_job}です。<br>";
?>