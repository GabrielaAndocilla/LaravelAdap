<html>
<head>

<script src="{{asset('js/javit.js')}}"></script>


</head>

    <body>

        <h1>Eliga el personaje para jugar</h1>
        <p>1.Guerrero </p>
        <br>
        <p>2.Ladrón </p>
        <br>
        <p>3.Mago </p>
        <br>
        <p>4.Pistolero </p>
        <div id="demo"></div>

        <form action="{{route('vist')}}" method="POST" role="form"> 
            @csrf
            <div class="form-group">
            <input type=“text” name=name class="form-control" /> 
            <input type="submit" value="Send."/>
            </div>


        </form>

    
    </body>
</html>