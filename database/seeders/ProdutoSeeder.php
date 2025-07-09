// database/seeders/ProdutoSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria; // Importe o model Categoria
use App\Models\Produto;   // Importe o model Produto

class ProdutoSeeder extends Seeder
{
    public function run(): void
    {
        // Criar algumas categorias
        $eletronicos = Categoria::create(['nome' => 'Eletrônicos']);
        $livros = Categoria::create(['nome' => 'Livros']);
        $moveis = Categoria::create(['nome' => 'Móveis']);

        // Criar alguns produtos e associá-los às categorias
        Produto::create([
            'nome' => 'Smart TV 50"',
            'preco' => 2500.00,
            'categoria_id' => $eletronicos->id
        ]);

        Produto::create([
            'nome' => 'Headphone Bluetooth',
            'preco' => 350.00,
            'categoria_id' => $eletronicos->id
        ]);

        Produto::create([
            'nome' => 'O Guia do Mochileiro das Galáxias',
            'preco' => 59.90,
            'categoria_id' => $livros->id
        ]);
        
        Produto::create([
            'nome' => 'Cadeira de Escritório',
            'preco' => 600.00,
            'categoria_id' => $moveis->id
        ]);
    }
}