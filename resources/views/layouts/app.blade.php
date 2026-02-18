<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: #007bff;
            color: white;
            padding: 1rem;
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 1rem 0 0 0;
        }

        nav li {
            display: inline;
            margin: 0 1rem;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        a {
            text-decoration: none;
            cursor: pointer;
        }

        main {
            flex: 1;
            max-width: 800px;
            margin: 2rem auto;
            padding: 1rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        main:hover {
            background-color: #e9ecef;
            transition: background-color 0.3s ease;
        }

        h1:hover, h2:hover {
            color: #007bff;
            text-decoration: underline;
            transition: color 0.3s ease;
        }

        footer {
            text-align: center;
            padding: 1rem;
            background-color: #343a40;
            color: white;
            margin-top: auto;
        }

        #back-to-home {
            display: inline-block;
            margin-bottom: 1rem;
            color: #007bff;
            font-weight: bold;
            padding: 0.5rem 1rem;
            border: 2px solid #007bff;
            border-radius: 4px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        #back-to-home:hover {
            background-color: #007bff;
            color: white;
        }

        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            border: 2px solid #007bff;
            border-radius: 4px;
            color: #007bff;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #007bff;
            color: white;
        }

        /* Contact Form Styles */
        .contact-form {
            display: flex;
            flex-direction: column;
            max-width: 500px;
            margin: 0 auto;
        }

        .contact-form label {
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .contact-form input,
        .contact-form textarea {
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
            width: 100%;
        }

        .contact-form textarea {
            resize: vertical;
            min-height: 100px;
        }

        .contact-form button {
            padding: 0.75rem;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #0056b3;
        }

        /* Profile Styles */
        .profile {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 2rem;
        }

        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #007bff;
            margin-bottom: 1rem;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .profile img:hover {
            transform: scale(1.05);
        }

        .bio {
            text-align: center;
            margin-bottom: 2rem;
        }

        .links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 1rem;
        }

        .links a {
            color: #007bff;
            font-weight: bold;
            padding: 0.5rem 1rem;
            border: 2px solid #007bff;
            border-radius: 4px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .links a:hover {
            background-color: #007bff;
            color: white;
        }

        .result-box {
            background-color: #e9ecef;
            padding: 1rem;
            border-radius: 4px;
            margin: 1rem 0;
            text-align: center;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .info-message {
            background-color: #d4edda;
            color: #155724;
            padding: 0.75rem;
            border-radius: 4px;
            margin: 1rem 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>@yield('header-title', 'Welcome to My Laravel App')</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('ContactPage') }}">Contact</a></li>
                <li><a href="{{ route('Calcul') }}">Calcul</a></li>
                <li><a href="{{ route('dev') }}">Dev</a></li>
                <li><a href="{{ route('Tri') }}">Tri</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <a id="back-to-home" href="{{ route('home') }}">←</a>
        
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025. All rights reserved.</p>
        @hasSection('footer-message')
            @yield('footer-message')
        @endif
    </footer>
</body>
</html>