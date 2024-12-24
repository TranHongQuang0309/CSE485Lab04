@extends('layout.app')
@section('content')
    <div class="container mt-4">
        <h1>Danh Sách Phiếu Mượn</h1>

        <a href="{{ route('borrows.create') }}" class="btn btn-success mb-3">Mượn Sách Mới</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Độc Giả</th>
                    <th>Sách</th>
                    <th>Ngày Mượn</th>
                    <th>Ngày Trả</th>
                    <th>Trạng Thái</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($borrows as $borrow)
                    <tr>
                        <td>{{ $borrow->id }}</td>
                        <td>{{ $borrow->reader->name }}</td>
                        <td>{{ $borrow->book->title }}</td>
                        <td>{{ $borrow->borrow_date}}</td>
                        <td>
                                {{ $borrow->return_date ? $borrow->return_date : 'Chưa trả' }}
                        </td>
                        <td>{{ $borrow->status == 1 ? 'Đã trả' : 'Chưa trả' }}</td>
                        <td>
                            <a href="{{ route('borrows.edit', $borrow->id) }}" class="btn btn-warning">Sửa</a>
                            <form action="{{ route('borrows.destroy', $borrow->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">

        {{ $borrows->links('pagination::bootstrap-4') }}

        </div>
    </div>
@endsection
