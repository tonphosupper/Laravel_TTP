<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function delete($id, $id_bantin){
        $cm = Comment::find($id);
        $cm->delete();
        return redirect('admin/news/update/'.$id_bantin)->with('TB', 'Xóa Comment thành công');
    }
}
