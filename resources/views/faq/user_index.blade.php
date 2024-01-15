@extends('layouts.app')


    <style>

        .div{
            background-color: #007bff;
        }
        .faq-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            padding-bottom: 1000px;
            position: relative;
            top: 100px;
            
        }

        .faq-item {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            margin-bottom: 10px;
            padding: 15px;
            border-radius: 5px;
        }

        .faq-item strong {
            color: #007bff;
        }

        .alert {
            margin-top: 20px;
        }
    </style>

    <div class="div">

    <div class="faq-container">
        <h2>FAQs</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <ul>
            @foreach ($faqs as $faq)
                <li class="faq-item">
                    <strong>Question:</strong> {{ $faq->question }} <br>
                    <strong>Answer:</strong> {{ $faq->answer }}
                </li>
            @endforeach
        </ul>
    </div>

    </div>