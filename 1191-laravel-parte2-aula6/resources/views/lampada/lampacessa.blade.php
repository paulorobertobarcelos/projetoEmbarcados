<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Lâmpada</title>
</head>
<body>


    <div>
        <img src="https://cdn.leroymerlin.com.br/products/lampada_led_de_filamento_luz_amarela_4w_bivolt_90568933_330c_600x600.jpeg">
        <form method="post" class="btn btn-dark mb-2">
            @csrf
            <a href="{{ route('apagar_lampada') }}" class="btn btn-dark mb-2">Apagar Lâmpada</a>
            <div class="col col-6">
                <label for="nome">Status</label>
                <input type="text" class="form-control" name="status" id="status">
            </div>
        </form>
    </div>


</body>
</html>
