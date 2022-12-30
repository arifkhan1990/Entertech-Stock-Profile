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

    public function withdrawRequest()
    {
        return view('pages/admin_panel/transaction/withdraw_request');
    }

    public function depositRequest()
    {
        return view('pages/admin_panel/transaction/deposite_request');
    }

    public function boAccount()
    {
        return view('pages/admin_panel/bo/bo_account');
    }

    public function newBoRequest()
    {
        return view('pages/admin_panel/bo/new_bo_request');
    }

    public function openBoAccount()
    {
        return view('pages/admin_panel/bo/open_bo_account');
    }

    public function ipoSetting()
    {
        return view('pages/admin_panel/ipo/ipo_setting');
    }

    public function ipoApplication()
    {
        return view('pages/admin_panel/ipo/ipo_application');
    }

    public function uploadBoAccount()
    {
        return view('pages/admin_panel/upload_file/bo_account');
    }

    public function uploadClientPosition()
    {
        return view('pages/admin_panel/upload_file/client_position');
    }

    public function uploadClientLimit()
    {
        return view('pages/admin_panel/upload_file/client_limit');
    }

    public function uploadMarketData()
    {
        return view('pages/admin_panel/upload_file/market_data');
    }

    public function uploadIndustryData()
    {
        return view('pages/admin_panel/download_file/industry_data');
    }

    public function downloadUploadFile()
    {
        return view('pages/admin_panel/download_file/download_upload_file');
    }

    public function downloadDatabase()
    {
        return view('pages/admin_panel/download_file/download_database');
    }

    public function updateCashLimit()
    {
        return view('pages/admin_panel/cash_limit/update_cash_limit');
    }

    public function subscriptionlList()
    {
        return view('pages/admin_panel/subscription/subscriptionl_list');
    }

    public function companySetup()
    {
        return view('pages/admin_panel/settings/company_setup');
    }

    public function passwordPolicy()
    {
        return view('pages/admin_panel/settings/password_policy');
    }

    public function menus()
    {
        return view('pages/admin_panel/site_setup/menus');
    }

    public function subMenus()
    {
        return view('pages/admin_panel/site_setup/sub_menus');
    }

    public function permission()
    {
        return view('pages/admin_panel/site_setup/permission');
    }

    public function appMasterData()
    {
        return view('pages/admin_panel/site_setup/app_master_data');
    }

    public function footerData()
    {
        return view('pages/admin_panel/site_setup/footer_data');
    }
}
