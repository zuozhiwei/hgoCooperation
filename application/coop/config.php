<?php
//配置文件
return [
    'session'                => [
        'prefix'         => 'think',
        'type'           => '',
        'auto_start'     => true,
    ],
    //输出替换
    'view_replace_str'  =>  [
        '__STATIC__'=>'/static',
    ],
    // URL伪静态后缀
    'url_html_suffix'        => '',
];