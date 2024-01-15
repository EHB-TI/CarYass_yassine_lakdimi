@extends('layouts.app')


    <style>
        .div{
            padding-bottom: 1000px;
            background-color: #0056b3;
        }
        .category-form-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
            top: 200px;
            background-color: #fff;
        }

        .alert {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="div">

    <div class="category-form-container">
        <h2>Create FAQ Category</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('faq-categories.store') }}" method="POST">
            @csrf
            <label for="name">Category Name:</label>
            <input type="text" name="name" required>
            <button type="submit">Save</button>
        </form>
    </div>
    </div>
