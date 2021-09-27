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
        <img src="https://www.lumitecfoto.com.br/media/catalog/product/cache/1/image/650x/9df78eab33525d08d6e5fb8d27136e95/l/a/lampada-incandescente-100w-1_1.jpg">
        <form method="post" class="btn btn-dark mb-2">
            @csrf
            <a href="{{ route('acender_lampada') }}" class="btn btn-dark mb-2">Ligar Lâmpada</a>
            <div class="col col-6">
                <label for="nome">Status</label>
                <input type="text" class="form-control" name="status" id="status">
            </div>
        </form>

    </div>


</body>
</html>
