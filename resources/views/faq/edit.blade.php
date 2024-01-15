@extends('layouts.app')

<style>
        .container {
            padding: 20px;
            background-color: #0056b3;
            
        }

        .edit-faq-form {
            max-width: 600px;
            margin: auto;
            position: relative;
            top: 100px;
            margin-bottom: 500px;

        }

        .form-group {
            margin-bottom: 20px;
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
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="container">
        <h2>Edit FAQ</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('faq.update', $faq->id) }}" method="POST" class="edit-faq-form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="category_id">Category:</label>
                <select name="category_id" required class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $faq->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="question">Question:</label>
                <input type="text" name="question" value="{{ $faq->question }}" required class="form-control">
            </div>

            <div class="form-group">
                <label for="answer">Answer:</label>
                <textarea name="answer" required class="form-control">{{ $faq->answer }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    
