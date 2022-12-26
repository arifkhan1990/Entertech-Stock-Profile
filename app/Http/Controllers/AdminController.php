<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('pages/admin_panel/dashboard', [
            // Specify the base layout.
            // Eg: 'side-menu', 'simple-menu', 'top-menu', 'login'
            // The default value is 'side-menu'

            // 'layout' => 'side-menu'
        ]);
    }

    public function userAnalytics()
    {
        return view('pages/admin_panel/user_activity/user_analytics');
    }

    public function userAccounts()
    {
        return view('pages/admin_panel/user_activity/user_accounts');
    }

    public function groupAccount()
    {
        return view('pages/admin_panel/user_activity/group_account');
    }

    public function marketNewsData()
    {
        return view('pages/admin_panel/market_data/news_data');
    }

    public function marketEventsData()
    {
        return view('pages/admin_panel/market_data/events_data');
    }

    public function marketCategoryData()
    {
        return view('pages/admin_panel/market_data/category_data');
    }

    public function marketIndustryData()
    {
        return view('pages/admin_panel/market_data/industry_data');
    }

    public function marketCompanyData()
    {
        return view('pages/admin_panel/market_data/company_data');
    }

    public function dseData()
    {
        return view('pages/admin_panel/circuit_breaker/dse');
    }

    public function cseData()
    {
        return view('pages/admin_panel/circuit_breaker/cse');
    }

    public function stockOrder()
    {
        return view('pages/admin_panel/trade/stock_order');
    }

    public function stockOrderReport()
    {
        return view('pages/admin_panel/trade/order_report');
    }
}
