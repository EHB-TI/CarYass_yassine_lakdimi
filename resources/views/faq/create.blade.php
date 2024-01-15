<!-- resources/views/faq/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <h2>Create FAQ</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('faq.store') }}" method="POST">
                @csrf
                <label for="category_id">Category:</label>
                <select name="category_id" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select><br>
                <label for="question">Question:</label>
                <input type="text" name="question" required><br>
                <label for="answer">Answer:</label>
                <textarea name="answer" required></textarea><br>
                <button type="submit">Save</button>
            </form>
        </div>
    </div>

    <style>


.container{
    padding-bottom: 100px;
    background-color: blue;


}
        .card {
            position: relative;
            top: 150px;
            margin-bottom: 300px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        select,
        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
@endsection
