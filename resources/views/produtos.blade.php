<html>
<head> 
    <link href="{{URL::to('css/app.css')}}" rel="stylesheet">
</head>
<body>
     
    @if(isset($produtos))
        <h1>Temos Produtos!<br><h1>
    @else
        <h2>Variavel Produtos não foi passado como parametro</h2>
    @endif
    
    <script src="{{URL::to('js/app.js')}}" type="text/javascript"></script>
</body>
</html>