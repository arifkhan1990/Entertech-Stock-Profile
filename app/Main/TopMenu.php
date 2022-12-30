<?php

namespace App\Main;

class TopMenu
{
    /**
     * List of top menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function menu()
    {
        return [
            'dashboard' => [
                'icon' => 'home',
                'title' => 'Dashboard',
                'route_name' => 'admin-dashboard',
                'params' => [
                    'layout' => 'top-menu',
                ],
                'title' => 'Dashboard'
            ],
            'user' => [
                'icon' => 'users',
                'title' => 'User',
                'sub_menu' => [
                    'user-analytics' => [
                        'icon' => '',
                        'route_name' => 'user-analytics',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'User Analytics'
                    ],
                    'user-accounts' => [
                        'icon' => '',
                        'route_name' => 'user-accounts',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'User Accounts'
                    ],
                    'group-account' => [
                        'icon' => '',
                        'route_name' => 'group-account',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Group Account'
                    ]
                ]
            ],

            'market-data' => [
                'icon' => 'banknote',
                'route_name' => 'market-news-data',
                'params' => [
                    'layout' => 'top-menu'
                ],
                'title' => 'Market Data'
            ],
            'circuit-breaker' => [
                'icon' => 'signal',
                'route_name' => 'dse',
                'params' => [
                    'layout' => 'top-menu'
                ],
                'title' => 'Circuit Breaker'
            ],
            'market-order' => [
                'icon' => 'credit-card',
                'title' => 'Trade',
                'sub_menu' => [
                    'stock-order' => [
                        'icon' => '',
                        'route_name' => 'stock-order',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Stock Order'
                    ],
                    'order-report' => [
                        'icon' => '',
                        'route_name' => 'stock-order-report',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Order Report'
                    ]
                ]
            ],
            'transactions' => [
                'icon' => 'wallet',
                'title' => 'Transaction',
                'sub_menu' => [
                    'withdraw-request' => [
                        'icon' => '',
                        'route_name' => 'withdraw-request',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Withdraw Request'
                    ],
                    'deposit-request' => [
                        'icon' => '',
                        'route_name' => 'deposit-request',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Deposit Request'
                    ]
                ]
            ],

            'bo' => [
                'icon' => 'folder',
                'title' => 'B.O',
                'sub_menu' => [
                    'open-bo-account' => [
                        'icon' => '',
                        'route_name' => 'open-bo-account',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Open B.O Account'
                    ],
                    'new-bo-request' => [
                        'icon' => '',
                        'route_name' => 'new-bo-request',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'New B.O Request'
                    ],
                    'bo_accounts' => [
                        'icon' => '',
                        'route_name' => 'bo-account',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'B.O Accounts'
                    ]
                ]
            ],
            'IPO' => [
                'icon' => 'codesandbox',
                'title' => 'IPO',
                'sub_menu' => [
                    'ipo-setting' => [
                        'icon' => '',
                        'route_name' => 'ipo-setting',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Ipo Setting'
                    ],
                    'ipo-application' => [
                        'icon' => '',
                        'route_name' => 'ipo-application',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Ipo Application'
                    ]
                ]
            ],
            'settings' => [
                'icon' => 'settings',
                'title' => 'Settings',
                'sub_menu' => [
                    'company-info' => [
                        'icon' => '',
                        'route_name' => 'company-setup',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Company Info'
                    ],
                    'site-setup' => [
                        'icon' => '',
                        'route_name' => 'menus',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Site Setup'
                    ],
                    'permissions' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Permission'
                    ],
                     'password-policy' => [
                        'icon' => '',
                        'route_name' => 'password-policy',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Password Policy'
                    ]
                ]
            ],
        ];
    }
}
