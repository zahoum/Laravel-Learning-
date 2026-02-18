@extends('layouts.app')

@section('title', 'Calculation Page')
@section('header-title', 'Calculation')

@section('content')
    <div class="text-center">
        <h2>Calculation Result</h2>
        
        @isset($operation)
            <div class="result-box">
                @switch($operation)
                    @case('+')
                        <p>The result of addition is: <strong>{{ $x }} + {{ $y }} = {{ $x + $y }}</strong></p>
                        @break
                    @case('-')
                        <p>The result of subtraction is: <strong>{{ $x }} - {{ $y }} = {{ $x - $y }}</strong></p>
                        @break
                    @case('/')
                        @if($y != 0)
                            <p>The result of division is: <strong>{{ $x }} / {{ $y }} = {{ $x / $y }}</strong></p>
                        @else
                            <p class="text-danger">Error: Division by zero is not allowed</p>
                        @endif
                        @break
                    @case('*')
                        <p>The result of multiplication is: <strong>{{ $x }} * {{ $y }} = {{ $x * $y }}</strong></p>
                        @break
                    @default
                        <p class="text-danger">Invalid operation</p>
                @endswitch
            </div>
        @else
            <p>No calculation parameters provided.</p>
        @endisset
    </div>
@endsection

@section('footer-message')
    <p>To change the calculation, modify the values in web.php</p>
@endsection