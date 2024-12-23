<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
</head>
<body>
    <header>
        <h1>Chào mừng đến với Thư viện</h1>
    </header>

    <main>
        <p>Trang chủ của ứng dụng quản lý thư viện.</p>

        <a href="{{ route('books.index') }}">Xem Sách</a>
        <a href="{{ route('readers.index') }}">Quản lý độc Giả</a>
    </main>

    <footer>
        <p>&copy; 2024 Thư viện ABC</p>
    </footer>
</body>
</html>
