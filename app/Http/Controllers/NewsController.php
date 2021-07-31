<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BanTin;
use App\LoaiTin;
use App\Comment;

class NewsController extends Controller
{
    public function index()
    {
        return view('admin\home');
    }
    public function view_list()
    {
        $list_news = BanTin::paginate(3);
        return view('admin\bantin\news-list', compact('list_news'));
    }
    public function view_add()
    {
        $list_kind = LoaiTin::all();
        return view('admin\bantin\news-add', compact('list_kind'));
    }

    public function add(Request $request)
    {
        $this->validate(
            $request,
            [
                'title' => 'required|unique:BanTin,title',
                'description' => 'required|unique:BanTin,description',
                'content' => 'required|unique:BanTin,content',
                'images' => 'required|unique:BanTin,images'
            ],
            [
                'title.required' => 'Bạn chưa nhập tiêu đề',
                'title.unique' => 'Tiêu đề đã tồn tại',
                'description.required' => 'Bạn chưa nhập mô tả',
                'content.required' => 'Bạn chưa nhập nội dung',
                'images.required' => 'Bạn chưa thêm ảnh'
            ]
        );
        $news = new Bantin();
        $news->title = $request->title;
        $news->description = $request->description;
        $news->content = $request->content;
        $news->images = $request->images;
        $news->id_loaitin = $request->id_loaitin;
        $news->save();

        return redirect('admin/news/add')->with('TB', 'Thêm thành công');
    }

    public function view_update($id)
    {
        $news = BanTin::find($id);
        $list_kind = LoaiTin::all();
        $list_comment = Comment::where('id_bantin',$id)->get();
        return view('admin\bantin\news-update', compact('news','list_comment','list_kind'));
    }

    public function update(Request $request, $id)
    {
        $news = BanTin::find($id);
        $this->validate(
            $request,
            [
                'title' => 'required'
            ],
            [
                'title.required' => 'Bạn chưa nhập tiêu đề'
            ]
        );

        $news->title = $request->title;
        $news->description = $request->description;
        $news->content = $request->content;
        $news->images = $request->images;
        $news->id_loaitin = $request->id_loaitin;
        $news->save();

        return redirect('admin/news/list')->with('TB', 'Update thành công');
    }

    public function delete($id){
        $news = BanTin::find($id);
        $news->delete();
        return redirect('admin/news/list')->with('TB', 'Xóa thành công');
    }
}
