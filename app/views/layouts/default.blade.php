
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="es">
    <head> 

        <title>@section('title') 
       		Portafolio Juan2Ramos 
        @show</title>

        <!-- Meta -->
        <meta charset="UTF-8" />
        <meta name="author" content="juan2ramos" />       
        <meta name="description" content="Inicio" />       
        <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1" />

        
        <!-- Estilos -->
        <?php echo HTML::script('js/prefixfree.js') ?>
        <?php echo HTML::style('css/style.css') ?>
        @yield('css')

        <!-- Humans -->


    </head>
    <body>
    	@section('contend')
            This is the master sidebar.
        @show
        <div id="content">
        	@yield('content')
        </div>
    </body>
    <!-- JavaScript -->
    <?php echo HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') ?>
    @yield('javascript')
</html>