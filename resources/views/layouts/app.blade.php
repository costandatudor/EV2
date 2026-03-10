<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #6366f1;
            --secondary-color: #ec4899;
            --success-color: #10b981;
            --danger-color: #ef4444;
            --warning-color: #f59e0b;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .navbar {
            background: linear-gradient(90deg, var(--primary-color) 0%, var(--secondary-color) 100%) !important;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            padding: 1rem 0;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: white !important;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .navbar-brand i {
            font-size: 2rem;
        }
        
        main {
            padding: 2rem 0;
        }
        
        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 2rem;
            margin-top: 2rem;
        }
        
        h1, h2 {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            font-weight: 700;
        }
        
        .btn {
            border-radius: 10px;
            padding: 0.6rem 1.2rem;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(99, 102, 241, 0.4);
            color: white;
        }
        
        .btn-info {
            background: #0891b2;
            color: white;
        }
        
        .btn-info:hover {
            background: #0e7490;
            transform: translateY(-2px);
            color: white;
        }
        
        .btn-success {
            background: var(--success-color);
            color: white;
        }
        
        .btn-success:hover {
            background: #059669;
            transform: translateY(-2px);
            color: white;
        }
        
        .btn-danger {
            background: var(--danger-color);
            color: white;
        }
        
        .btn-danger:hover {
            background: #dc2626;
            transform: translateY(-2px);
            color: white;
        }
        
        .alert {
            border-radius: 10px;
            border: none;
            margin-bottom: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .alert-success {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
        }
        
        .table {
            border-collapse: collapse;
        }
        
        .table thead th {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            border: none;
            padding: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
        }
        
        .table tbody tr {
            border-bottom: 1px solid #e5e7eb;
            transition: all 0.3s ease;
        }
        
        .table tbody tr:hover {
            background: #f8fafc;
            transform: scale(1.01);
        }
        
        .table tbody td {
            padding: 1rem;
            vertical-align: middle;
        }
        
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
        }
        
        .card-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            border: none;
            padding: 1.5rem;
            font-weight: 600;
        }
        
        .form-control, .form-select {
            border-radius: 10px;
            border: 2px solid #e5e7eb;
            padding: 0.75rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
        }
        
        .badge {
            border-radius: 20px;
            padding: 0.5rem 1rem;
        }
        
        .event-status {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }
        
        .btn-group-sm .btn {
            padding: 0.4rem 0.8rem;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('events.index') }}">
                <i class="fas fa-calendar-alt"></i>
                Event Manager
            </a>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>