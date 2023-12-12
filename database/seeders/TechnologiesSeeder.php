<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use Illuminate\Support\Str;

class TechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $data = [
            [
                'name'=>'HTML',
                'link'=>'https://developer.mozilla.org/en-US/docs/Web/HTML',
                'logo'=> 'html-logo.png'
            ],
            [
                'name'=>'CSS',
                'link'=>'https://developer.mozilla.org/en-US/docs/Web/CSS',
                'logo'=> 'css-logo.png'
            ],
            [
                'name'=>'JavaScript',
                'link'=>'https://developer.mozilla.org/en-US/docs/Web/JavaScript',
                'logo'=> 'javascript-logo.png'
            ],
            [
                'name'=>'PHP',
                'link'=>'https://www.php.net/',
                'logo'=> 'php-logo.png'
            ],
            [
                'name'=>'Laravel',
                'link'=>'https://laravel.com/docs/10.x',
                'logo'=> 'laravel-logo.png'
            ],
            [
                'name'=>'VueJs',
                'link'=>'https://vuejs.org/guide/introduction.html',
                'logo'=> 'vue-logo.png'
            ],
            [
                'name'=>'React',
                'link'=>'https://react.dev/',
                'logo'=> 'react-logo.png'
            ],
            [
                'name'=>'Angular',
                'link'=>'https://angular.io/docs',
                'logo'=> 'angular-logo.png'
            ],
            [
                'name'=>'Bootstrap',
                'link'=>'https://getbootstrap.com/',
                'logo'=> 'bootstrap-logo.png'
            ],
            [
                'name'=>'Python',
                'link'=>'https://www.python.org/',
                'logo'=> 'python-logo.png'
            ],
            [
                'name'=>'Tailwind',
                'link'=>'https://tailwindcss.com/',
                'logo'=> 'tailwind-logo.png'
            ]
        ];

        foreach($data as $technology){
        $new_technology = new Technology();
        $new_technology->name = $technology['name'];
        $new_technology->slug = Str::slug($technology['name'], '-');
        $new_technology->link = $technology['link'];
        $new_technology->logo = $technology['logo'];
        $new_technology->save();
        }

    }
}
