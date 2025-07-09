<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h1 class="mb-4">Nossos Produtos</h1>

        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Categoria</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($produtos as $produto)
                    <tr>
                        <td>
                            {{ $produto->id }}
                        </td>
                        <td>
                            {{ $produto->nome }}
                        </td>
                        <td>
                            {{ number_format($produto->preco, 2, ',', '.') }}
                        </td>
                        <td>
                            {{ $produto->categoria?->nome }}
                        </td>
                    </tr>
                @empty
                    <tr><td>colspan="4">nenhum produto cadastrado.</td>
                    </tr>
                @endforelse


            </tbody>
        </table>
    </div>

</body>

</html>
