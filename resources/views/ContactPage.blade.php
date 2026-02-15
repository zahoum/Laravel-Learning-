
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
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
            max-width: 800px;
            margin: 2rem auto;
            padding: 1rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .contact-form {
            display: flex;
            flex-direction: column;
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

        main:hover {
            background-color: #e9ecef;
            transition: background-color 0.3s ease;
        }

        h1:hover {
            color: #007bff;
            text-decoration: underline;
            transition: color 0.3s ease;
        }

        footer {
            text-align: center;
            padding: 1rem;
            background-color: #343a40;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        #back-to-home{
            align-self: flex-start;
            margin-bottom: 1rem;
            color: #007bff;
            font-weight: bold;
            padding: 0.5rem 1rem;
            border: 2px solid #007bff;
            border-radius: 4px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
    </style>
</head>
<body>
    <header>
        <h1>Contact Page</h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/About">About</a></li>
                <li><a href="/ContactPage">Contact</a></li>
                <li><a href="/Calcul">Calcul</a></li>  
                <li><a href="{{ route('dev') }}">dev</a></li>  
                <li><a href="{{ route('Tri') }}">Tri</a></li> 
            </ul>
        </nav>
    </header>

    <main>
        <a id="back-to-home" href='{{ route('home') }}' >Back to home</a>
        <h2>Get in Touch</h2>
        <p>Feel free to send me a message. I'll get back to you as soon as possible!</p>
        <form class="contact-form" action="/contact" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2025 .zahoum All rights reserved.</p>
    </footer>
</body>
</html>
