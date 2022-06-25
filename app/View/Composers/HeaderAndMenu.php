<?php
 
namespace App\View\Composers;

use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\View\View;
use App\Models\SiteSetting;

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
        $topstories = Post::take(4)->whereNull('vedio')->where('status', 1)->with('user','category')->get()->sortDesc();
        $vedios = Post::take(5)->whereNotNull('vedio')->where('status', 1)->with('user','category')->get()->sortDesc();
        $view->with(['menus'=>$mainmenus, 'setting'=>$sitesettins,'topstories'=>$topstories,'vedios'=>$vedios,], $mainmenus,$sitesettins,$topstories,$vedios);
    }
}