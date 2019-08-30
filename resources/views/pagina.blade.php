<html>
<head>
    
    <!--outra maneira de chamar os arquivos do bootstrap-->
    <!--link href="{{asset('css/app.css')}}" rel="stylesheet"-->
    
<link href="{{URL::to('css/app.css')}}" rel="stylesheet">
</head>
<body>
   
     @alerta([
        'tipo'=>'danger',
        'titulo'=>'Erro Fatal'
      ])
        <strong>Erro: </strong> Sua mensagem!
     @endcomponent

     @alerta([
        'tipo'=>'warning',
        'titulo'=>'Erro Fatal'
      ])
        <strong>Erro: </strong> Sua mensagem!
     @endcomponent

     @alerta([
        'tipo'=>'success',
        'titulo'=>'Erro Fatal'
      ])
        <strong>Erro: </strong> Sua mensagem!
     @endcomponent

     @alerta([
        'tipo'=>'primary',
        'titulo'=>'Erro Fatal'
      ])
        <strong>Erro: </strong> Sua mensagem!
     @endcomponent

     @alerta([
        'tipo'=>'secondary',
        'titulo'=>'Erro Fatal'
      ])
        <strong>Erro: </strong> Sua mensagem!
     @endcomponent

     @alerta([
        'tipo'=>'info',
        'titulo'=>'Erro Fatal'
      ])
        <strong>Erro: </strong> Sua mensagem!
     @endcomponent

     @alerta([
        'tipo'=>'dark',
        'titulo'=>'Erro Fatal'
      ])
        <strong>Erro: </strong> Sua mensagem!
     @endcomponent

     
    
    
<script src="{{URL::to('js/app.js')}}" type="text/javascript"></script>
<!--outra maneira de chamar os arquivos do bootstrap-->
<!--script src="{{asset('js/app.js')}}" type="text/javascript"></script-->
</body>
</html>