@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-warning">
                <ol>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ol>
            </div>
        @endif

        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label for="">Body</label>
                <input type="text" class="form-control" name="body">
            </div>
            <div class="mb-3">
                <label for="">Category</label>
                <select name="category_id" class="form-select" id="">
                    @foreach ($categories as $category)
                        <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                    @endforeach
                </select>

            </div>

            <div>
                <input type="submit" class="btn btn-primary " value="Add Article">
                <a href="{{ url('/articles') }}" class="btn btn-secondary float-end">Back</a>
            </div>
        </form>
    </div>
@endsection
