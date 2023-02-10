<!DOCTYPE html> <!---pagina ou Arquivo Principal de inicio---->
<html lang="en" class="no-js">
<head>
    <!--- Arquivos de configuracao e titulo seo do site --->
    @include('base.include-seo')

    <!--- Arquivos de CSS --->
    @include('base.include-css')
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap">
        <!--- Header --->
        @include('base.include-header')
        <!--- fim do header --->

       <!--- Main --->
       @include('base.include-main')
       <!--- fim do main --->

       <!--- Footer ---->
       @include('base.include-footer')
       <!--- fim do footer --->
        
    </div>

    <!-- Arquivo JAVASCRIPT--->
    @include('base.include-js')
</body>
</html>
