@extends('layouts.app')

@section('title', 'Contact Us')
@section('header-title', 'Contact Page')

@section('content')
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
@endsection