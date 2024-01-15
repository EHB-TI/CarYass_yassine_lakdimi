@extends('layouts.app')


<style>

    .div{
        background-color: #007bff;
    }
        .container {
            padding: 20px;
            padding-bottom: 100px;
            
        }

        .faq-list {
            list-style-type: none;
            padding: 0;
            position: relative;
            top: 100px;
            
        }

        .faq-item {
            margin-bottom: 20px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 15px;
        }

        .faq-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-question {
            font-weight: bold;
        }

        .edit-link, .delete-btn {
            text-decoration: none;
            color: #007bff;
            margin-left: 10px;
            cursor: pointer;
        }

        .delete-btn:hover {
            text-decoration: underline;
        }

        .add-faq-btn {
            display: inline-block;
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
        }

        .add-faq-btn:hover {
            background-color: #218838;
        }
        
        .alert{
            position: relative;
            top: 10px;
        }
        
    </style>

<div class="div">
    <div class="container">
        
<div class="alert">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        </div>

        <ul class="faq-list">
            @foreach ($faqs as $faq)
                <li class="faq-item">
                    <div class="faq-content">
                        <span class="faq-question">{{ $faq->question }}</span> -
                        <a href="{{ route('faq.edit', $faq->id) }}" class="edit-link">Edit</a> |
                        <form action="{{ route('faq.destroy', $faq->id) }}" method="POST" class="delete-form" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>

        <a href="{{ route('faq.create') }}" class="add-faq-btn">Add FAQ</a>
    </div>
    </div>


