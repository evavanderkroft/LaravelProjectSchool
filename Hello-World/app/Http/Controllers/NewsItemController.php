<?php

namespace App\Http\Controllers;

use App\NewsItem;
use Illuminate\Http\Request;

class NewsItemController extends Controller
{
//    public function show() {
//    return view('newsItem');
//}

public function index()
{
$newsItems = NewsItem::all();
return view('news-items.index', [
    'newsItems' => $newsItems

]);
}


public function create()
{
    return view('news-items.create');
}

public function show($id)
{
try{
    $newsItem = newsItem::find($id);
    $error = null;
} catch(\Exception $e) {
    $newsItem = null;
    $error = $e-> getMessage();
}
return view('news-items.show', [
    'newsItem' => $newsItem,
    'error' => $error
]);
}


}

