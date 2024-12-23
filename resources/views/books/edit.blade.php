<!-- Form sửa sách -->
<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')  <!-- Để Laravel biết đây là yêu cầu PUT -->
    <div class="form-group">
        <label for="name">Tên sách</label>
        <input type="text" name="name" id="name" value="{{ $book->name }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="author">Tác giả</label>
        <input type="text" name="author" id="author" value="{{ $book->author }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="category">Danh mục</label>
        <input type="text" name="category" id="category" value="{{ $book->category }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="year">Năm</label>
        <input type="number" name="year" id="year" value="{{ $book->year }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="quantity">Số lượng</label>
        <input type="number" name="quantity" id="quantity" value="{{ $book->quantity }}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật Sách</button>
</form>
