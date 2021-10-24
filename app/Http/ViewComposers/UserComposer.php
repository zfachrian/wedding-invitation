<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\UserRepository;
// use App\Http\Models\Category;
// use App\Http\Models\Store;

class UserComposer
{
  public function compose(View $view)
  {
    // $categories = Category::get();
    // $stores = Store::first();

    // $view->with(compact('categories', 'stores'));
  }
}
