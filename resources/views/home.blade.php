@extends('layout.app')
@section('content')
    <div class="container mt-4">
        <h1>Chào mừng đến với Thư viện</h1>
        <p>Trang chủ của ứng dụng quản lý thư viện.</p>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Quản lý Sách</h5>
                        <p class="card-text">Xem và quản lý sách trong thư viện.</p>
                        <a href="{{ route('books.index') }}" class="btn btn-primary">Xem Sách</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Quản lý Độc Giả</h5>
                        <p class="card-text">Quản lý thông tin độc giả trong thư viện.</p>
                        <a href="{{ route('readers.index') }}" class="btn btn-primary">Quản lý Độc Giả</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Mượn và Trả Sách</h5>
                        <p class="card-text">Quản lý việc mượn và trả sách của độc giả.</p>
                        <a href="{{ route('borrows.index') }}" class="btn btn-primary">Mượn/Trả</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
