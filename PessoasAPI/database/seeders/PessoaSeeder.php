<?php

namespace Database\Seeders;

use App\Models\Pessoa;
use Illuminate\Database\Seeder;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pessoa::create([
            'nome' => 'Shinichi',
            'sobrenome' => 'Izumi',
            'imagem' => 'https://64.media.tumblr.com/f8afbaeea0193b7239c528c7521591d2/8befdec7c5203cdc-f1/s1280x1920/2cc2b18ad2f90c410da2670f9a1e5ffe63919db2.jpg',
        ]);

        Pessoa::create([
            'nome' => 'Yami',
            'sobrenome' => 'Yugi',
            'imagem' => 'https://i.pinimg.com/originals/36/cf/08/36cf08ee5b3119389842b5c2e42dfff1.jpg',
        ]);

        Pessoa::create([
            'nome' => 'Drawnbringer',
            'sobrenome' => 'Nidalee',
            'imagem' => 'https://cdnb.artstation.com/p/assets/images/images/023/223/387/large/camilla-ferrari-dawnbringer-nidalee-1.jpg?1578508304',
        ]);
    }
}
