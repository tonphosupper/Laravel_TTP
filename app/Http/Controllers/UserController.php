<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function view_list()
    {
        $list_user = User::all();
        return view('admin\account\user-list', compact('list_user'));
    }
    public function view_add()
    {
        return view('admin\account\user-add');
    }

    public function add(Request $request)
    {

        $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
                'repeatpassword' => 'required|same:password',
                'role' => 'required'
            ],
            [
                'name.required' => 'Bạn chưa nhập tên',
                'email.required' => 'Bạn chưa nhập email',
                'email.email' => 'Bạn chưa nhập đúng email',
                'email.unique' => 'email đã sử dụng',
                'password.required' => 'Bạn chưa nhập password',
                'repeatpassword.required' => 'Bạn chưa nhập lại password',
                'repeatpassword.same' => 'Nhap lai pass Không khớp',
                'role.required' => 'Bạn chưa thêm ảnh'

            ]
        );

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->save();

        return redirect('admin/users/add')->with('TB', 'Thêm thành công');
    }

    public function view_update($id)
    {
        $user = User::find($id);
        return view('admin\account\user-update', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
                'repeatpassword' => 'required|same:password',
                'role' => 'required'
            ],
            [
                'name.required' => 'Bạn chưa nhập tên',
                'email.required' => 'Bạn chưa nhập email',
                'email.email' => 'Bạn chưa nhập đúng email',
                'email.unique' => 'email đã sử dụng',
                'password.required' => 'Bạn chưa nhập password',
                'repeatpassword.required' => 'Bạn chưa nhập lại password',
                'repeatpassword.same' => 'Nhap lai pass Không khớp',
                'role.required' => 'Bạn chưa thêm ảnh'

            ]
        );
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->save();

        return redirect('admin/users/list')->with('TB', 'UPdate thành công');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/users/list')->with('TB', 'Xóa thành công');
    }

    public function view_login()
    {
        return view('login\index');
    }

    public function check(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            return redirect('admin/news/list');
        } else {
            return redirect('admin/dangnhap')->with('TB','khong thanh cong');
        }
    }

    public function view_register()
    {
        return view('login\register');
    }

    public function register(Request $request)
    {

        $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
                'repeatpassword' => 'required|same:password',
                'role' => 'required'
            ],
            [
                'name.required' => 'Bạn chưa nhập tên',
                'email.required' => 'Bạn chưa nhập email',
                'email.email' => 'Bạn chưa nhập đúng email',
                'email.unique' => 'email đã sử dụng',
                'password.required' => 'Bạn chưa nhập password',
                'repeatpassword.required' => 'Bạn chưa nhập lại password',
                'repeatpassword.same' => 'Nhap lai pass Không khớp',
                'role.required' => 'Bạn chưa thêm ảnh'

            ]
        );

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->save();

        return redirect('admin/dangnhap')->with('TB', 'Thêm thành công');
    }

    public function logout(){
        Auth::logout();
        return redirect('admin/dangnhap')->with('TB','Da dang xuat');
    }
}
