<?php namespace Euw\FacebookApp\Controllers;

use App;
use Config;
use Controller;
use Laracasts\Utilities\JavaScript\Facades\JavaScript;
use View;

class BaseController extends Controller
{

    protected $tenant;

    public function __construct()
    {
        $context = App::make('Euw\MultiTenancy\Contexts\Context');
        $this->tenant = $context->getOrThrowException();

        JavaScript::put([
            'appId'       => Config::get('facebook-app::appId'),
            'channelUrl'  => Config::get('facebook-app::channelUrl'),
            'pageId'      => $this->tenant->fb_page_id,
            'permissions' => Config::get('facebook-app::scope')
        ]);

        View::share('pageId', $this->tenant->fb_page_id);
    }

}
