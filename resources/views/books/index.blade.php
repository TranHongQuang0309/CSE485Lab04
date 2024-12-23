<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Sách</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container my-5">
        <!-- Nút quay lại -->
        <a href="{{ route('home') }}" class="btn btn-success mb-3" style="float: left;">Quay lại</a>

        <!-- Nút Thêm sách -->
        <a href="{{ route('books.create') }}" class="btn btn-success mb-3" style="float: right;">Thêm Sách</a>

        <!-- Bảng danh sách sách -->
         <h1 class="text-center">Danh sách</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Sách</th>
                    <th>Tác Giả</th>
                    <th>Thể Loại</th>
                    <th>Năm</th>
                    <th>Số Lượng</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->category }}</td>
                        <td>{{ $book->year }}</td>
                        <td>{{ $book->quantity }}</td>
                        <td>
                            <!-- Nút Sửa -->
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                            
                            <!-- Nút Xóa -->
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bạn có chắc chắn muốn xóa không?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            <!-- Laravel phân trang -->
            {{ $books->links('pagination::bootstrap-4') }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>  