@extends('layouts.app')


    <style>
        .div{
            
            background-color: #007bff;
        }
        .categories-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
            top: 200px;
            margin-bottom: 1000px;
        }

        .alert {
            margin-bottom: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        a {
            text-decoration: none;
            color: #007bff;
            margin-left: 10px;
        }

        .delete-btn {
            background: none;
            border: none;
            color: #dc3545;
            cursor: pointer;
        }

        .delete-btn:hover {
            text-decoration: underline;
        }
    </style>

    <div class="div">

    <div class="categories-container">
        <h2>FAQ Categories</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <ul>
            @foreach ($categories as $category)
                <li>
                    {{ $category->name }}
                    <span>
                        <a href="{{ route('faq-categories.edit', $category->id) }}">Edit</a>
                        |
                        <form action="{{ route('faq-categories.destroy', $category->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </span>
                </li>
            @endforeach
        </ul>

        <a href="{{ route('faq-categories.create') }}">Add Category</a>
    </div>
    </div>

