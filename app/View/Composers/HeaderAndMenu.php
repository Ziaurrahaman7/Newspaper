<?php
 
namespace App\View\Composers;

use App\Models\Category;
use App\Models\Post;
use App\Models\SiteSetting;
use Illuminate\View\View;

class HeaderAndMenu
{
    /**
     * The user repository implementation.
     *
     * @var \App\Repositories\UserRepository
     */

 
    /**
     * Create a new profile composer.
     *
     * @param  \App\Repositories\UserRepository  $users
     * @return void
     */
    public function __construct()
    {
       
    }
 
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $mainmenus = Category::where('status', 1)->get();
        $sitesettins = SiteSetting::get()->first();
        $view->with(['menus'=>$mainmenus, 'setting'=>$sitesettins], $mainmenus,$sitesettins);
    }
}