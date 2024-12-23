<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sách</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container my-5">
        <h1>Thêm Sách Mới</h1>

        <!-- Hiển thị thông báo lỗi nếu có -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Thêm sách -->
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Tên Sách</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label for="author" class="form-label">Tác Giả</label>
                <input type="text" name="author" id="author" class="form-control" value="{{ old('author') }}" required>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Thể Loại</label>
                <input type="text" name="category" id="category" class="form-control" value="{{ old('category') }}" required>
            </div>

            <div class="mb-3">
                <label for="year" class="form-label">Năm</label>
                <input type="number" name="year" id="year" class="form-control" value="{{ old('year') }}" required>
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Số Lượng</label>
                <input type="number" name="quantity" id="quantity" class="form-control" value="{{ old('quantity') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Thêm Sách</button>
        </form>

        <!-- Nút quay lại -->
        <a href="{{ route('books.index') }}" class="btn btn-danger mt-3">Quay lại</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
