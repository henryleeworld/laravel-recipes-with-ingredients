<?php

return [
    'userManagement' => [
        'title'          => '使用者管理',
        'title_singular' => '使用者管理',
    ],
    'permission'     => [
        'title'          => '權限',
        'title_singular' => '權限',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'title'             => '標題',
            'title_helper'      => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => '角色',
        'title_singular' => '角色',
        'fields'         => [
            'id'                    => '編號',
            'id_helper'             => '',
            'title'                 => '標題',
            'title_helper'          => '',
            'permissions'           => '權限',
            'permissions_helper'    => '',
            'created_at'            => '建立時間',
            'created_at_helper'     => '',
            'updated_at'            => '更新時間',
            'updated_at_helper'     => '',
            'deleted_at'            => '刪除時間',
            'deleted_at_helper'     => '',
        ],
    ],
    'user'           => [
        'title'          => '使用者',
        'title_singular' => '使用者',
        'fields'         => [
            'id'                       => '編號',
            'id_helper'                => '',
            'name'                     => '名稱',
            'name_helper'              => '',
            'email'                    => '電子郵件',
            'email_helper'             => '',
            'email_verified_at'        => '電子郵件驗證時間',
            'email_verified_at_helper' => '',
            'password'                 => '密碼',
            'password_helper'          => '',
            'roles'                    => '角色',
            'roles_helper'             => '',
            'remember_token'           => '記住令牌',
            'remember_token_helper'    => '',
            'created_at'               => '建立時間',
            'created_at_helper'        => '',
            'updated_at'               => '更新時間',
            'updated_at_helper'        => '',
            'deleted_at'               => '刪除時間',
            'deleted_at_helper'        => '',
        ],
    ],
    'ingredient'     => [
        'title'          => '食材',
        'title_singular' => '食材',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => ' ',
            'name'              => '名稱',
            'name_helper'       => ' ',
            'created_at'        => '建立時間',
            'created_at_helper' => ' ',
            'updated_at'        => '更新時間',
            'updated_at_helper' => ' ',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => ' ',
        ],
    ],
    'recipe'         => [
        'title'          => '食譜',
        'title_singular' => '食譜',
        'fields'         => [
            'id'                 => '編號',
            'id_helper'          => ' ',
            'name'               => '名稱',
            'name_helper'        => ' ',
            'ingredients'        => '食材',
            'ingredients_helper' => ' ',
            'created_at'         => '建立時間',
            'created_at_helper'  => ' ',
            'updated_at'         => '更新時間',
            'updated_at_helper'  => ' ',
            'deleted_at'         => '刪除時間',
            'deleted_at_helper'  => ' ',
        ],
    ],
];
