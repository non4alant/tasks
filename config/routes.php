<?php

return array(

    'task/([0-9]+)' => 'task/view/$1', // TaskController actionView
    'admin/([0-9]+)' => 'admin/get/$1',
    'admin' => 'admin/admin',
    'task/page-([0-9]+)' => 'task/list/$1/',
    'task' => 'task/list',
    '' => 'task/list',
);