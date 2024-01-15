@extends('layouts.app')
<link href="{{ asset('css/messages.css') }}" rel="stylesheet">

@section('content')
<section>
 <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>

        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->subject }}</td>
                <td>{{ $contact->message }}</td>
            </tr>
        @endforeach
    </table>
</section>

@endsection