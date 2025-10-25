@extends('layout.admin')

@section('title', 'My Dashboard')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

        <!-- Content Row -->
        <div class="row">

            <!-- Primary Card: Tổng danh mục -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Tổng danh mục</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalCategories }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-list fa-2x text-gray-300"></i> {{-- Icon cho Categories --}}
                            </div>
                        </div>
                        {{-- Đã xóa link "View Details" --}}
                    </div>
                </div>
            </div>

            <!-- Warning Card: Đơn hàng mới -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Đơn hàng mới</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $newOrdersCount }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-shopping-cart fa-2x text-gray-300"></i> {{-- Icon cho Orders --}}
                            </div>
                        </div>
                        {{-- Đã xóa link "View Details" --}}
                    </div>
                </div>
            </div>

            <!-- Success Card: Đơn hàng hoàn thành -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Đơn hàng hoàn thành</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $completedOrdersCount }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-check-circle fa-2x text-gray-300"></i> {{-- Icon cho Completed Orders --}}
                            </div>
                        </div>
                        {{-- Đã xóa link "View Details" --}}
                    </div>
                </div>
            </div>

            <!-- Danger Card: Sản phẩm gần hết hàng -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Sắp hết hàng</div>
                                {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $outOfStockProductsCount }}</div> --}}
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i> {{-- Icon cho Warnings --}}
                            </div>
                        </div>
                        {{-- Đã xóa link "View Details" --}}
                    </div>
                </div>
            </div>
        </div>

        <!-- Có thể thêm các biểu đồ hoặc thông tin tổng quan khác ở đây -->

    </div>
@endsection
