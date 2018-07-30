<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $values = [
            'titulo_principal' => 'Porto da tapioca',
            'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquam est sed ligula pretium placerat. Integer consectetur scelerisque aliquet. Aliquam in lacinia augue. Donec accumsan sem nisi, ut pulvinar augue sollicitudin non. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non neque nibh. Vivamus tincidunt velit ac lacus vulputate facilisis. Aenean blandit faucibus diam sed eleifend. Nunc vel pretium velit, nec facilisis felis. Pellentesque lectus diam, fringilla id maximus sit amet, elementum eu nunc. Phasellus aliquam massa blandit, sodales ipsum ac, ullamcorper felis. In sodales risus nunc, quis tincidunt arcu porttitor a.',
            'texto_botao' => 'Próximo',
            'titulo_contato' => str_random(10),
            'descricao_contato' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquam est sed ligula pretium placerat.',
            'telefone' => '(51)9 1234-5678',
            'email' => str_random(10).'@teste.com',
            'titulo_sobre_nos' => str_random(10),
            'descricao_sobre_nos' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquam est sed ligula pretium placerat.',
            'texto_botao_sobre_nos' => str_random(10),
            'titulo_promocoes' => str_random(10),
            'texto_botao_promocoes' => str_random(10),
        ];
        foreach ($values as $key => $value) {
            DB::table('cache')->insert([
                'key' => $key,
                'value' => $value,
                'expiration' => 0
            ]);
        }
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('1234'),
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
