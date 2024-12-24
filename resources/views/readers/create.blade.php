<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Độc Giả</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container my-5">
        <h1>Thêm Độc Giả Mới</h1>
        <form action="{{ route('readers.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="name">Tên</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="birthday">Ngày Sinh</label>
                <input type="text" name="birthday" id="birthday" class="form-control" value="{{ old('birthday') }}">
                @error('birthday')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="address">Địa Chỉ</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
                @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="phone">Số Điện Thoại</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}">
                @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Thêm Độc Giả</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
