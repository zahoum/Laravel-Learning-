@extends('layouts.app')

@section('title', 'About Us')
@section('header-title', 'About Us')

@section('content')
    <div class="profile">
        <img src="/1.jpeg" alt="Profile Image" onerror="this.src='https://via.placeholder.com/150'">
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
@endsection