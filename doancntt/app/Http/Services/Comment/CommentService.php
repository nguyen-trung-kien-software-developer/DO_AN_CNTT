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
            $product_id = $request->input('product_id');
            $fullname = $request->input('review_name');
            $email = $request->input('review_email');
            $mobile = $request->input('review_phone');
            $created_date = date('Y-m-d h:m:s', strtotime($request->input('created_date')));
            $star = $request->input('rating');
            $description = $request->input('review_body');

            $comment = Comment::create([
                'fullname' => $fullname,
                'email' => $email,
                'mobile' => $mobile,
                'star' => $star,
                'description' => $description,
                'product_id' => $product_id,
                'created_date' => $created_date,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            Session::flash('success', 'Tạo đánh giá thành công');
            return $comment;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo đánh giá thất bại. Vui lòng thử lại !');
        }
    }

    public function create($request)
    {
        try {
            $product_id = $request->input('product_id');
            $fullname = $request->input('review_name');
            $email = $request->input('review_email');
            $mobile = $request->input('review_phone');
            $created_date = Carbon::now()->format("Y-m-d H:i:s");
            $star = $request->input('rating');
            $description = $request->input('review_body');

            $comment = Comment::create([
                'fullname' => $fullname,
                'email' => $email,
                'mobile' => $mobile,
                'star' => $star,
                'description' => $description,
                'product_id' => $product_id,
                'created_date' => $created_date,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            Session::flash('success', 'Tạo đánh giá thành công');
            return $comment;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo đánh giá thất bại. Vui lòng thử lại !');
        }
    }

    public function saveCommentByProduct($request, $product)
    {
        try {
            $product_id = $product->id;
            $fullname = $request->input('fullname');
            $email = $request->input('email');
            $mobile = $request->input('mobile');
            $created_date = date('Y-m-d h:m:s', strtotime($request->input('created_date')));
            $star = $request->input('star');
            $description = $request->input('description');

            $comment = Comment::create([
                'fullname' => $fullname,
                'email' => $email,
                'mobile' => $mobile,
                'star' => $star,
                'description' => $description,
                'product_id' => $product_id,
                'created_date' => $created_date,
                'created_at' => Carbon::now()->format("Y-m-d H:i:s"),
            ]);

            Session::flash('success', 'Tạo đánh giá thành công');
            return $comment;
        } catch (\Exception $error) {
            Session::flash('error', 'Tạo đánh giá thất bại. Vui lòng thử lại !');
        }
    }

    function update($request, $comment)
    {
        try {
            $product_id = $request->input('product');
            $fullname = $request->input('fullname');
            $email = $request->input('email');
            $mobile = $request->input('mobile');
            $created_date = date('Y-m-d h:m:s', strtotime($request->input('created_date')));
            $star = $request->input('star');
            $description = $request->input('description');

            $comment->fullname = $fullname;
            $comment->product_id = $product_id;
            $comment->mobile = $mobile;
            $comment->email = $email;
            $comment->created_date = $created_date;
            $comment->description = $description;
            $comment->star = $star;
            $comment->save();

            Session::flash('success', 'Cập nhật đánh giá sản phẩm thành công !');
            return true;
        } catch (\Exception $err) {
            Session::flash('error', 'Cập nhật đánh giá sản phẩm thất bại !');
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