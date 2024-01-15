<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <!-- Include common stylesheets -->
    @include('includes.styles')

    <!-- Additional head content goes here -->
</head>

<body>

    <!-- Navigation -->
    @include('includes.navbar')

    <!-- Content Container -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Include Footer -->
    @include('includes.footer')

    <!-- Additional scripts go here -->
    @include('includes.scripts')

</body>

</html>
