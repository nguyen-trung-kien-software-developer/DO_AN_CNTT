<?php

use App\Http\Controllers\Admin\PermissionController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Thêm vai trò']], function () {
    Route::get('/them-vai-tro', [PermissionController::class, 'addRole'])->name('addRole');
    Route::post('/them-vai-tro', [PermissionController::class, 'storeRole'])->name('storeRole');
});

Route::group(['middleware' => ['permission:Hiển thị danh sách vai trò']], function () {
    Route::get('/danh-sach-vai-tro', [PermissionController::class, 'roleList'])->name('roleList');
});

Route::group(['middleware' => ['permission:Chỉnh sửa vai trò']], function () {
    Route::get('/chinh-sua-vai-tro/{role}', [PermissionController::class, 'editRole'])->name('editRole');
    Route::put('/chinh-sua-vai-tro/{role}', [PermissionController::class, 'updateRole'])->name('updateRole');
});

Route::group(['middleware' => ['permission:Xóa vai trò']], function () {
    Route::delete('/xoa/{role}', [PermissionController::class, 'deleteRole'])->name('deleteRole');
});

Route::group(['middleware' => ['permission:Cấp tác vụ cho vai trò']], function () {
    Route::get('/chi-dinh-tac-vu/{role}', [PermissionController::class, 'assignPermission'])->name('assignPermission');
    Route::put('/chi-dinh-tac-vu/{role}', [PermissionController::class, 'assignPermissionToRole'])->name('assignPermissionToRole');
});

Route::group(['middleware' => ['permission:Hiển thị danh sách tác vụ']], function () {
    Route::get('/danh-sach-tac-vu', [PermissionController::class, 'permissionList'])->name('permissionList');
});