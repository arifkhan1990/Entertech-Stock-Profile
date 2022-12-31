
<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use DB;

class MasterDataComposer
{
    public function cardData()
    {
        $card_data = DB::select("SELECT (SELECT COUNT(*) FROM users WHERE role=1) AS TOT_USER, (SELECT COUNT(*) FROM users WHERE role=1 AND user_type='Free') AS FREE_USER, (SELECT COUNT(*) FROM users WHERE role=1 AND user_type='Premium') AS PREMIUM_USER, (SELECT COUNT(*) FROM users WHERE role=0) AS ADMIN_USER FROM users LIMIT 1")[0];
        dd($card_data);
        return $card_data;
    }


    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $masterData = [
            'card_data' => $this->cardData(),
        ];

        // dd($fakerData);
        $view->with('masterData', $masterData);
    }
}
