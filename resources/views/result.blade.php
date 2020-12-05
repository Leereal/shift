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
        <div class="container">
            <div class="left-side">
                <h3>Your Perspective</h3>
                <p>Your perspective type is ENTJ</p>
            </div>
            <div class="right-side">
               <div>
                   <div><p>Introversion(I)</p></div>
                   <div><p>Color White</p></div>
                   <div><p>Color Purple</p></div>
                   <div><p>Extraversion(E)</p></div>
                </div> 
                <div>
                    <div><p>Sensing(S)</p></div>
                    <div><p>Color White</p></div>
                    <div><p>Color Purple</p></div>
                    <div><p>Intuition(N)</p></div>
                 </div> 
                 <div>
                    <div><p>Thinking(T)</p></div>
                    <div><p>Color White</p></div>
                    <div><p>Color Purple</p></div>
                    <div><p>Feeling(F)</p></div>
                 </div> 
                 <div>
                    <div><p>Judging(J)</p></div>
                    <div><p>Color White</p></div>
                    <div><p>Color Purple</p></div>
                    <div><p>Perceiving(P)</p></div>
                 </div> 
            </div>
        </div> 
    </body>
</html>
