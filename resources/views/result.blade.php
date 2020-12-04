<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Laravel</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">    
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="rectangle">
            <p class="question">Are you happy?</p>
            <div class="answer">
                <span>Disagree</span>
                <div class="radio-answer">
                    <input type="radio" id="answer" name="answer" value="1">
                </div>
                <div class="radio-answer">
                    <input type="radio" id="answer" name="answer" value="2">
                </div>
                <div class="radio-answer">
                    <input type="radio" id="answer" name="answer" value="3">
                </div>
                <div class="radio-answer">
                    <input type="radio" id="answer" name="answer" value="4">
                </div>
                <div class="radio-answer">
                    <input type="radio" id="answer" name="answer" value="5">
                </div>
                <div class="radio-answer">
                    <input type="radio" id="answer" name="answer" value="6">
                </div>
                <div class="radio-answer">
                    <input type="radio" id="answer" name="answer" value="7">
                </div>
                <span>Agree</span>
            </div>
        </div> 
        <div class="rectangle">  
            <p>Your email</p>
            <div>
                <input type="type" name="email" placeholder="you@example.com" required>
            </div>
        </div>           
    </body>
</html>
