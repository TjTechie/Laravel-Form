<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PostsController {
  public function execute($post) {
      $arrobjPosts = DB::select('select * from posts where name = :name', ['name' => $post]);
      if( !$arrobjPosts ) {
          dd('Sorry, your post is not found');
      }
      $objPost = current($arrobjPosts);
      return view( 'fresh', [ 'my_post' => $objPost ] );
  }

}
