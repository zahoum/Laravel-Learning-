
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
            display: flex;
            flex-direction: column;
            align-items: center;
        }

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

        main:hover {
            background-color: #e9ecef;
            transition: background-color 0.3s ease;
        }

        h2:hover {
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
        <h1>About Us</h1>
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
        <div class="profile">
            <img src='/1.jpeg' alt="Profile Image">
            <h2>About Me</h2>
        </div>
        <div class="bio">
            <p>Hello! I'm a passionate web developer with a love for creating dynamic and user-friendly applications. With experience in Laravel and modern web technologies, I enjoy building projects that solve real-world problems. When not coding, I explore new technologies and contribute to open-source projects.</p>
            <p>Feel free to reach out if you'd like to collaborate or learn more about my work!</p>
        </div>
        <div class="links">
            <a href="https://github.com/yourusername" target="_blank">GitHub</a>
            <a href="https://linkedin.com/in/yourprofile" target="_blank">LinkedIn</a>
            <a href="mailto:your.email@example.com">Email</a>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 . All rights reserved.</p>
    </footer>
</body>
</html>
