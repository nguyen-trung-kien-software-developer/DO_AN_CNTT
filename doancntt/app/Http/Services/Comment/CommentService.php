<?php

namespace App\Http\Services\Comment;

use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class CommentService
{
    function getAllComments()
    {
        $comments = Comment::all();

        return $comments;
    }

    function getCommentListByProductIdOrderByCreatedDateDesc($product_id)
    {
        $comments = Comment::where('product_id', $product_id)->orderBy('created_date', 'desc')->get();

        return $comments;
    }

    public function save($request)
    {
        try {
            $fullname = $request->input('review_name');
            $email = $request->input('review_email');
            $mobile = $request->input('review_phone');
            $star = $request->input('rating');
            $description = $request->input('review_body');
            $product_id = $request->input('product_id');

            $comment = Comment::create([
                'fullname' => $fullname,
                'email' => $email,
                'mobile' => $mobile,
                'star' => $star,
                'description' => $description,
                'product_id' => $product_id,
                'created_date' => Carbon::now()->format("Y-m-d H:i:s"),
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            return $comment;
        } catch (\Exception $error) {
            return false;
        }
    }

    function deleteById($comment_id)
    {
        try {
            Comment::where('id', $comment_id)->delete();

            Session::flash('success', 'Xóa bình luận thành công');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Xóa bình luận thất bại. Vui lòng thử lại !');
            return false;
        }
    }
}