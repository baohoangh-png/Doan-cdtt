<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category; // Giả sử bạn muốn đếm số lượng danh mục
use App\Models\Brand;    // Giả sử bạn muốn đếm số lượng thương hiệu
use App\Models\Product;  // Giả sử bạn muốn đếm số lượng sản phẩm
use App\Models\User;     // Giả sử bạn muốn đếm số lượng người dùng
use App\Models\Order;


class DashboardController extends Controller
{
    public function index()
    {
        // Lấy dữ liệu cho các card
        $totalCategories = Category::count();
        $totalBrands = Brand::count();
        $totalProducts = Product::count();
        $totalUsers = User::where('role', 'user')->count(); // Đếm người dùng client

        // Giả sử:
        // Warning Card: Số lượng đơn hàng mới/chưa xử lý
        $newOrdersCount = Order::where('status', 'pending')->count(); // Giả sử có cột 'status' trong bảng orders
        // Success Card: Tổng doanh thu (hoặc số lượng đơn hàng đã hoàn thành)
        $completedOrdersCount = Order::where('status', 'completed')->count(); // Giả sử có cột 'status'
        // Danger Card: Số lượng sản phẩm hết hàng hoặc gần hết hàng
        // $outOfStockProductsCount = Product::where('quantity', '<=', 5)->count(); // Giả sử quantity <= 5 là gần hết

        return view('admin.dashboard', compact(
            'totalCategories',
            'totalBrands',
            'totalProducts',
            'totalUsers',
            'newOrdersCount', // Đổi tên biến cho rõ ràng
            'completedOrdersCount', // Đổi tên biến cho rõ ràng
            // 'outOfStockProductsCount' // Đổi tên biến cho rõ ràng
        ));
    }
    // Bạn vẫn có thể giữ getData nếu muốn dùng AJAX sau này
    public function getData()
    {
        $users = \App\Models\User::all(); // hoặc bất kỳ dữ liệu nào bạn muốn
        return response()->json($users);
    }
}
