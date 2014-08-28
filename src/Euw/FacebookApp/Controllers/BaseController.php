<?php namespace Euw\FacebookApp\Controllers;

use App;
use Config;
use Controller;
use Euw\FacebookApp\Modules\Texts\Repositories\TextRepository;
use Laracasts\Utilities\JavaScript\Facades\JavaScript;
use View;

class BaseController extends Controller
{
    protected $tenant;
    protected $facebook;

    public function __construct()
    {
        $context = App::make('Euw\MultiTenancy\Contexts\Context');
        $this->tenant = $context->getOrThrowException();

        $this->facebook = App::make('Facebook');

        JavaScript::put([
            'appId'       => Config::get('facebook-app::appId'),
            'channelUrl'  => Config::get('facebook-app::channelUrl'),
            'pageId'      => $this->tenant->fb_page_id,
            'permissions' => Config::get('facebook-app::scope')
        ]);

        View::share('pageId', $this->tenant->fb_page_id);
    }

}
