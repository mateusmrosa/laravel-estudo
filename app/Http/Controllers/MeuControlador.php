<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function produtos(){
        echo "<h1>Produtos</h1>
                <ol>
                    <li>Notebook</li>
                    <li>Impressora</li>
                    <li>Mouse</li>
                </ol>";
    }
}
