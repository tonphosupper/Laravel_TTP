<?php

namespace App\Http\Controllers;

use App\BanTin;
use App\Comment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $list_news = BanTin::all();
        $list_tg = BanTin::where('id_loaitin',1)->get();
        $list_sp = BanTin::where('id_loaitin',2)->get();
        $list_cn = BanTin::where('id_loaitin',4)->get();
        $list_ts = BanTin::where('id_loaitin',3)->get();
        return view('user\home',compact('list_news','list_tg','list_sp','list_cn','list_ts'));
    }
    public function view()
    {
        $list_news = BanTin::all();
        $list_tg = BanTin::where('id_loaitin',1)->get();
        $list_sp = BanTin::where('id_loaitin',2)->get();
        $list_cn = BanTin::where('id_loaitin',4)->get();
        $list_ts = BanTin::where('id_loaitin',3)->get();
        $list_comment = Comment::all();
        return view('user\newone',compact('list_news','list_tg','list_sp','list_cn','list_ts','list_comment'));
    }
}