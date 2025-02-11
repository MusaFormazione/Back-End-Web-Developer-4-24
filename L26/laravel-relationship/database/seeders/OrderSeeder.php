<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = User::all();
        $products = Product::all();

        foreach($users as $user){

            //Ciclo di creazione ordini
            for($i = 0; $i < 2; $i++){

                $order = Order::create([
                    'user_id' => $user->id,
                    'status' => 'In attesa'
                ]);

                $orderProducts = $products->random(rand(1,3));

                foreach($orderProducts as $product){
                    //attach() Identifica la tabella pivot in automatico in base alle regole di naming e genera un nuovo entry.
                    // Qualora volessimo anche valorizzare colonne aggiuntive che non sono chiavi esterne e che quindi non sono prese in causa automaticamente con la join allora è possibile passare un array di ulteriori colonne ad attach
                    //products() => Metodo che definisce la relazione tra prodotti e ordini esistente all'interno della classe modello order (Ho dovuto prima a definire quel metodo per poi poter terminare il seeder. )
                    $order->products()->attach($product->id,[
                        'quantity' => rand(1,5)
                    ]);
                }

            }

        }
    }
}
