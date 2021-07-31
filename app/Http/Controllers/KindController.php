<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiTin;
class KindController extends Controller
{
    public function view_list()
    {
        $list_kind = LoaiTin::all();
        return view('admin\loaitin\kind-list', compact('list_kind'));
    }
    public function view_add()
    {
        return view('admin\loaitin\kind-add');
    }

    public function add(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|unique:LoaiTin,name'
            ],
            [
                'name.required' => 'Bạn chưa nhập tên thể loại',
                'name.unique' => 'Tên thể loại đã tồn tại'
            ]
        );
        $kind = new LoaiTin();
        $kind->name = $request->name;
        $kind->save();

        return redirect('admin/kind/add')->with('TB', 'Thêm thành công');
    }

    public function view_update($id)
    {
        $kind = LoaiTin::find($id);
        return view('admin\loaitin\kind-update', ['kind' => $kind]);
    }

    public function update(Request $request, $id)
    {
        $kind = LoaiTin::find($id);
        $this->validate(
            $request,
            [
                'name' => 'required|unique:LoaiTin,name'
            ],
            [
                'name.required' => 'Bạn chưa nhập tên thể loại',
                'name.unique' => 'Tên thể loại đã tồn tại'
            ]
        );

        $kind->name = $request->name;
        $kind->save();

        return redirect('admin/kind/list')->with('TB', 'Update thành công');
    }

    public function delete($id){
        $kind = LoaiTin::find($id);
        $kind->delete();
        return redirect('admin/kind/list')->with('TB', 'Xóa thành công');
    }
}
