<?php
return array(
    'actions' => array(
        'list_infoblock' => array(
            'name' => 'Логотип',
            'defaults' => array(
                '!pagination' => false,
                '!limit' => 1,
                '!sorting' => 'manual',
                '!sorting_dir' => 'asc',
                '!parent_type' => 'certain_page'
            ),
            'default_scope' => 'all'
        ),
        'list_filtered, list_selected' => array(
            'disabled' => true
        )
    )
);