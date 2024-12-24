@extends('layout.app')
@section('content')
    <div class="container mt-4">
        <h1>Mượn Sách Mới</h1>

        <form action="{{ route('borrow.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="reader_id" class="form-label">Độc Giả</label>
                <select class="form-select" id="reader_id" name="reader_id" required>
                    <option value="">Chọn Độc Giả</option>
                    @foreach ($readers as $reader)
                        <option value="{{ $reader->id }}">{{ $reader->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="book_id" class="form-label">Sách</label>
                <select class="form-select" id="book_id" name="book_id" required>
                    <option value="">Chọn Sách</option>
                    @foreach ($books as $book)
                        <option value="{{ $book->id }}">{{ $book->title }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Mượn Sách</button>
        </form>
    </div>
@endsection
