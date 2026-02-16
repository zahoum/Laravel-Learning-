<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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
            a{
                text-decoration:none ;
                cursor:pointer ;
            }
            main {
                max-width: 800px;
                margin: 2rem auto;
                padding: 1rem;
                background-color: white;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }

            section {
                margin-bottom: 2rem;
                text-align:center ;
                
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
        </style>
</head>
<body>
    <header>
        <h1>Welcome </h1>
        <nav>
            <ul>
                <li><a href="{{ route('home',['from'=>'dev'] )}}">home</a></li>
                <li><a href="/About">About</a></li>
                <li><a href="/ContactPage">Contact</a></li>
                <li><a href="/Calcul">Calcul</a></li>  
                <li><a href="{{ route('dev')}}">dev</a></li>
                <li><a href="{{ route('Tri',['from'=>'dev'] )}}">Tri</a></li>  
            </ul>  
        </nav>
    </header>
    <main>
        <section>
            @if(request('from'))
             <p>I come from the SPECEFIQUE page {{ request('from') }}</p>
            @endif
        </section>
    </main>

    <footer>
        <p>&copy; 2025 . All rights reserved.</p>
    </footer>
    
</body>
</html>
