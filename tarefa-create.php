<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/index.css">

</head>
<body>
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-md-9">
            <div class="card">

                <div class="container mt-5">
                    <h3>
                        Adicionar Tarefa <i class="bi bi-clipboard-plus-fill"></i>
                        <a href="index.php" class="btn btn-danger float-end"><i class="bi bi-arrow-counterclockwise"></i> Voltar</a>
                    </h3>
                </div>
                <div class="container mt-5 mb-5">
                    <form action="acoes.php" method="POST">
                        <div class="mb-3">
                            <label for="txtNome">Nome</label>
                            <input type="text" name="txtNome" id="txtNome" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtDescricao">Descrição</label>
                            <input type="text" name="txtDescricao" id="txtDescricao" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="txtStatus" class="form-label">Status</label>
                            <select class="form-select" id="txtStatus" name="txtStatus">
                                <option value="0">Não concluída</option>
                                <option value="1">Em andamento</option>
                                <option value="2">Concluída</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="txtDataLimite">Data de Limite</label>
                            <input type="date" name="txtDataLimite" id="txtDataLimite" class="form-control">
                        </div>
                        <div class="mb-3 mt-5">
                            <button type="submit" name="create_tarefa" class="btn btn-primary float-end">Salvar</button>
                        </div>
                    </form>
                </div>
            
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>