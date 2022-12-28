<?php

namespace App\Main;

class SimpleMenu
{
    /**
     * List of simple menu items.
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
                    'layout' => 'simple-menu',
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
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'User Analytics'
                    ],
                    'user-accounts' => [
                        'icon' => '',
                        'route_name' => 'user-accounts',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'User Accounts'
                    ],
                    'group-account' => [
                        'icon' => '',
                        'route_name' => 'group-account',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Group Account'
                    ]
                ]
            ],
             'devider',
            'market-data' => [
                'icon' => 'banknote',
                'route_name' => 'market-news-data',
                'params' => [
                    'layout' => 'simple-menu'
                ],
                'title' => 'Market Data'
            ],
            'circuit-breaker' => [
                'icon' => 'signal',
                'route_name' => 'dse',
                'params' => [
                    'layout' => 'simple-menu'
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
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Stock Order'
                    ],
                    'order-report' => [
                        'icon' => '',
                        'route_name' => 'stock-order-report',
                        'params' => [
                            'layout' => 'simple-menu'
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
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Withdraw Request'
                    ],
                    'deposit-request' => [
                        'icon' => '',
                        'route_name' => 'deposit-request',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Deposit Request'
                    ]
                ]
            ],
             'devider',
            'bo' => [
                'icon' => 'folder',
                'title' => 'B.O',
                'sub_menu' => [
                    'oprn-bp-account' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Open B.O Account'
                    ],
                    'new-bo-request' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'New B.O Request'
                    ],
                    'bo_accounts' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'simple-menu'
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
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Ipo Setting'
                    ],
                    'ipo-application' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'user-accounts'
                        ],
                        'title' => 'Ipo Application'
                    ]
                ]
            ],
            'file-upload-download' => [
                'icon' => 'upload',
                'title' => 'File Upload/Download',
                'sub_menu' => [
                    'upload-bo-account' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Upload B.O Account'
                    ],
                    'upload-client-position' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Upload Client Position'
                    ],
                    'upload-client-limit' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Upload Client Limit'
                    ],
                    'upload-industry-data' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Upload Industry Data'
                    ],
                    'upload-market-data' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Upload Market Data'
                    ],
                    'download-upload-file' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Download File'
                    ],
                    'download-database' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Download Database'
                    ]
                ]
            ],
            'update-cash-limit' => [
                'icon' => 'banknote',
                'route_name' => 'dashboard-overview-1',
                'params' => [
                    'layout' => 'simple-menu'
                ],
                'title' => 'Update Cash Limit'
            ],
             'devider',
            'settings' => [
                'icon' => 'settings',
                'title' => 'Settings',
                'sub_menu' => [
                    'company-info' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Company Info'
                    ],
                    'site-setup' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Site Setup'
                    ],
                    'permissions' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Permission'
                    ],
                     'Password Setting' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'simple-menu'
                        ],
                        'title' => 'Password Setting'
                    ]
                ]
            ],
            'subscription' => [
                'icon' => 'anchor',
                'route_name' => 'dashboard-overview-1',
                'params' => [
                    'layout' => 'simple-menu'
                ],
                'title' => 'Subscription'
            ]
        ];
    }
}
