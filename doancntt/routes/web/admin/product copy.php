<?php

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách sản phẩm']], function () {
Route::get('/danh-sach-san-pham', [ProductController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Xem mô tả chi tiết sản phẩm']], function () {
Route::get('/chi-tiet-mo-ta/{product}', [ProductController::class, 'descriptionDetails'])->name('descriptionDetails');
Route::put('/chi-tiet-mo-ta/{product}', [ProductController::class, 'updateDescriptionDetails'])->name('updateDescriptionDetails');
});

Route::group(['middleware' => ['permission:Thêm sản phẩm']], function () {
Route::get('/tao-moi', [ProductController::class, 'create'])->name('create');
Route::post('/tao-moi', [ProductController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa sản phẩm']], function () {
Route::get('/chinh-sua/{product}', [ProductController::class, 'edit'])->name('edit');
Route::put('/chinh-sua/{product}', [ProductController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa sản phẩm']], function () {
Route::delete('/xoa/{product}', [ProductController::class, 'destroy'])->name('destroy');
});

#imageItem
Route::group(['middleware' => ['permission:Thêm hình ảnh liên quan sản phẩm']], function () {
Route::get('/hinh-anh-san-pham/{product}', [ProductController::class, 'imageItems'])->name('imageItems');
Route::post('/hinh-anh-san-pham/{product}', [ProductController::class, 'uploadImageItems'])->name('uploadImageItems');
});

Route::group(['middleware' => ['permission:Xóa hình ảnh liên quan sản phẩm']], function () {
Route::delete('/hinh-anh-san-pham/{imageItem}', [ProductController::class, 'deleteImageItems'])->name('deleteImageItems');
});

Route::group(['middleware' => ['permission:Xem đánh giá sản phẩm']], function () {
Route::get('/danh-gia-san-pham/{product}', [ProductController::class, 'comments'])->name('comments');
});

Route::group(['middleware' => ['permission:Xóa đánh giá sản phẩm']], function () {
Route::delete('/xoa-danh-gia-san-pham/{comment}', [ProductController::class, 'destroyComment'])->name('destroyComment');
});

Route::group(['middleware' => ['permission:Sao chép thông tin sản phẩm']], function () {
Route::post('/sao-chep-thong-tin', [ProductController::class, 'copy'])->name('copy');
});
