@extends('layouts.app')


    <style>
        .div{
            padding-bottom: 1000px;
            background-color: #0056b3;
        }
        .edit-category-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            position: relative;
            top: 200px;
        }

        .alert {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="div">

    <div class="edit-category-container">
        <h2>Edit FAQ Category</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('faq-categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Category Name:</label>
            <input type="text" name="name" value="{{ $category->name }}" required>
            <button type="submit">Update</button>
        </form>
    </div>
    </div>

