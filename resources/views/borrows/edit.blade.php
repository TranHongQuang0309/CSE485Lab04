@extends('layout.app')

@section('content')
    <div class="container mt-4">
        <h1>Sửa Phiếu Mượn</h1>

        <form action="{{ route('borrow.update', $borrow->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="reader_id" class="form-label">Độc Giả</label>
                <select class="form-select" id="reader_id" name="reader_id" required>
                    @foreach ($readers as $reader)
                        <option value="{{ $reader->id }}" {{ $borrow->reader_id == $reader->id ? 'selected' : '' }}>
                            {{ $reader->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="book_id" class="form-label">Sách</label>
                <select class="form-select" id="book_id" name="book_id" required>
                    @foreach ($books as $book)
                        <option value="{{ $book->id }}" {{ $borrow->book_id == $book->id ? 'selected' : '' }}>
                            {{ $book->title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Cập Nhật</button>
        </form>
    </div>
@endsection
