<?php

namespace Database\Seeders;

use App\Models\Mobile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MobileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Apple
        Mobile::create([
            'marca' => 'Apple',
            'modelo' => 'iPhone 13 Pro Max',
            'precio' => 1259.00,
            'stock' => 50,
            'color' => 'Negro',
            'almacenamiento' => '256GB',
            'pantalla' => 'Pantalla Super Retina XDR con ProMotion
                            Pantalla OLED de 6,7 pulgadas (16,95 cm) en diagonal
                            Resolución de 2.778 por 1.284 píxeles a 458 p/p',
            'chip' => 'Chip A15 Bionic
                        Nueva CPU de 6 núcleos con 2 núcleos de rendimiento y 4 de eficiencia
                        Nueva GPU de 5 núcleos
                        Nuevo Neural Engine de 16 núcleos',
            'image' => 'mobile/iphone13promax.png'

        ]);
        Mobile::create([
            'marca' => 'Apple',
            'modelo' => 'iPhone 13 Pro',
            'precio' => 1159.00,
            'stock' => 70,
            'color' => 'Blanco',
            'almacenamiento' => '128GB',
            'pantalla' => 'Pantalla Super Retina XDR con ProMotion
                            Pantalla OLED de 6,1 pulgadas (15,4 cm) en diagonal
                            Resolución de 2.532 por 1.170 píxeles a 460 p/p',
            'chip' => 'Chip A15 Bionic
                        Nueva CPU de 6 núcleos con 2 núcleos de rendimiento y 4 de eficiencia
                        Nueva GPU de 5 núcleos
                        Nuevo Neural Engine de 16 núcleos',
            'image' => 'mobile/iphone13pro.png'

        ]);
        Mobile::create([
            'marca' => 'Apple',
            'modelo' => 'iPhone 12',
            'precio' => 809.00,
            'stock' => 40,
            'color' => 'Púrpura',
            'almacenamiento' => '256GB',
            'pantalla' => 'Super Retina XDR
                            Pantalla OLED de 6,1 pulgadas (en diagonal)
                            Resolución de 2.532 por 1.170 píxeles a 460 p/p',
            'chip' => 'Chip A14 Bionic
                        CPU de 6 núcleos (2 núcleos de rendimiento y 4 de eficiencia)
                        GPU de 4 núcleos
                        Neural Engine de 16 núcleos',
            'image' => 'mobile/iphone12.png'

        ]);
        Mobile::create([
            'marca' => 'Apple',
            'modelo' => 'iPhone 12 mini',
            'precio' => 689.00,
            'stock' => 45,
            'color' => 'Rojo',
            'almacenamiento' => '128GB',
            'pantalla' => 'Super Retina XDR
                            Pantalla OLED de 5,4 pulgadas (en diagonal)
                            Resolución de 2.340 por 1.080 píxeles a 476 p/p',
            'chip' => 'Chip A14 Bionic
                        CPU de 6 núcleos (2 núcleos de rendimiento y 4 de eficiencia)
                        GPU de 4 núcleos
                        Neural Engine de 16 núcleos',
            'image' => 'mobile/iphone12mini.png'

        ]);
        Mobile::create([
            'marca' => 'Apple',
            'modelo' => 'iPhone 11 Pro Max',
            'precio' => 1159.00,
            'stock' => 50,
            'color' => 'Negro',
            'almacenamiento' => '256GB',
            'pantalla' => 'Pantalla Super Retina XDR con ProMotion
                            Pantalla OLED de 6,7 pulgadas (16,95 cm) en diagonal
                            Resolución de 2.778 por 1.284 píxeles a 458 p/p',
            'chip' => 'Chip A15 Bionic
                        Nueva CPU de 6 núcleos con 2 núcleos de rendimiento y 4 de eficiencia
                        Nueva GPU de 5 núcleos
                        Nuevo Neural Engine de 16 núcleos',
            'image' => 'mobile/iphone11promax.jpg'

        ]);
        Mobile::create([
            'marca' => 'Apple',
            'modelo' => 'iPhone 11 Pro',
            'precio' => 1159.00,
            'stock' => 50,
            'color' => 'Negro',
            'almacenamiento' => '256GB',
            'pantalla' => 'Pantalla Super Retina XDR con ProMotion
                            Pantalla OLED de 6,7 pulgadas (16,95 cm) en diagonal
                            Resolución de 2.778 por 1.284 píxeles a 458 p/p',
            'chip' => 'Chip A15 Bionic
                        Nueva CPU de 6 núcleos con 2 núcleos de rendimiento y 4 de eficiencia
                        Nueva GPU de 5 núcleos
                        Nuevo Neural Engine de 16 núcleos',
            'image' => 'mobile/iphone13pro.jpg'

        ]);

        //Samsung
        Mobile::create([
            'marca' => 'Samsung',
            'modelo' => 'Galaxy S8 Plus',
            'precio' => 400.00,
            'stock' => 50,
            'color' => 'Negro',
            'almacenamiento' => '256GB',
            'pantalla' => 'Tipo de pantalla Super AMOLED
                            Tamaño de la pantalla 6.2" / 15,75 cm
                            Resolución de 2960 por 1.440 píxeles',
            'chip' => 'Modelo Exyanos 8895
                        Núcleos del procesador 8
                        Velocidad del procesador 4x2.3 GHz & 4x1.7 GHz
                        Procesador gráfico Mali-G71',
            'image' => 'mobile/galaxyS8plus.jpg'

        ]);
        Mobile::create([
            'marca' => 'Samsung',
            'modelo' => 'Galaxy S8',
            'precio' => 300.00,
            'stock' => 50,
            'color' => 'Plata',
            'almacenamiento' => '64GB',
            'pantalla' => 'Tipo de pantalla Super AMOLED
                            Tamaño de la pantalla 5.8" / 14,73 cm
                            Resolución de 2960 por 1440 píxeles',
            'chip' => 'Modelo Exyanos 8895
                        Núcleos del procesador 8
                        Velocidad del procesador 4x2.3 GHz & 4x1.7 GHz
                        Procesador gráfico Mali-G71',
            'image' => 'mobile/galaxyS8.jpg'

        ]);
        Mobile::create([
            'marca' => 'Samsung',
            'modelo' => 'Galaxy S9 Plus',
            'precio' => 600.00,
            'stock' => 50,
            'color' => 'Púrpura',
            'almacenamiento' => '64GB',
            'pantalla' => 'Tipo de pantalla Super AMOLED
                            Tamaño de la pantalla 6.2" / 15,75 cm
                            Resolución de 2960 por 1440 píxeles',
            'chip' => 'Modelo Exyanos 9180
                        Núcleos del procesador 8
                        Velocidad del procesador 4x2.7 GHz & 4x1.7 GHz
                        Procesador gráfico Mali-G71',
            'image' => 'mobile/galaxyS9plus.jpg'

        ]);
        Mobile::create([
            'marca' => 'Samsung',
            'modelo' => 'Galaxy S9',
            'precio' => 500.00,
            'stock' => 50,
            'color' => 'Plata',
            'almacenamiento' => '64GB',
            'pantalla' => 'Tipo de pantalla Super AMOLED
                            Tamaño de la pantalla 5.8" / 14,73 cm
                            Resolución de 2960 por 1440 píxeles',
            'chip' => 'Modelo Exyanos 9180
                        Núcleos del procesador 8
                        Velocidad del procesador 4x2.7 GHz & 4x1.7 GHz
                        Procesador gráfico Mali-G71',
            'image' => 'mobile/galaxyS9.jpg'

        ]);
        Mobile::create([
            'marca' => 'Samsung',
            'modelo' => 'Galaxy S10 Plus',
            'precio' => 660.00,
            'stock' => 50,
            'color' => 'Azul',
            'almacenamiento' => '128GB',
            'pantalla' => 'Tipo de pantalla Dynamic AMOLED
                            Tamaño de la pantalla 6.4" / 16,26 cm
                            Resolución de 3040 por 1440 píxeles',
            'chip' => 'Modelo Exyanos 9820
                        Núcleos del procesador 8
                        Velocidad del procesador 2.7GHz, 2.3GHz y 1.9GHz
                        Procesador gráfico Mali-G76',
            'image' => 'mobile/galaxyS10plus.jpg'

        ]);
        Mobile::create([
            'marca' => 'Samsung',
            'modelo' => 'Galaxy S10e',
            'precio' => 499.00,
            'stock' => 50,
            'color' => 'Plata',
            'almacenamiento' => '128GB',
            'pantalla' => 'Tipo de pantalla Dynamic AMOLED
                            Tamaño de la pantalla 5.8" / 14,73 cm
                            Resolución de 2280 por 1080 píxeles',
            'chip' => 'Modelo Exyanos 9820
                        Núcleos del procesador 8
                        Velocidad del procesador 2.7GHz, 2.3GHz y 1.9GHz
                        Procesador gráfico Mali-G76',
            'image' => 'mobile/galaxyS10e.jpg'

        ]);
        Mobile::create([
            'marca' => 'Samsung',
            'modelo' => 'Galaxy S10',
            'precio' => 540.00,
            'stock' => 50,
            'color' => 'Plata',
            'almacenamiento' => '128GB',
            'pantalla' => 'Tipo de pantalla Dynamic AMOLED
                            Tamaño de la pantalla 6.1" / 15,17 cm
                            Resolución de 3040 por 1440 píxeles',
            'chip' => 'Modelo Exyanos 9820
                        Núcleos del procesador 8
                        Velocidad del procesador 2.7GHz, 2.3GHz y 1.9GHz
                        Procesador gráfico Mali-G76',
            'image' => 'mobile/galaxyS10.jpg'

        ]);

        //Xiaomi
        Mobile::create([
            'marca' => 'Xiaomi',
            'modelo' => 'Xiaomi 12 Pro',
            'precio' => 999.99,
            'stock' => 50,
            'color' => 'Azul',
            'almacenamiento' => '128GB',
            'pantalla' => 'Tipo de pantalla DotDisplay AMOLED WQHD+ 
                            Tamaño de la pantalla 6.73" / 16,36 cm
                            Resolución de 3200 por 1440 píxeles',
            'chip' => 'Modelo Snapdragon 8 Gen 1
                        Núcleos del procesador 8
                        Velocidad del procesador 3GHz, 2.5GHz y 1.8GHz
                        Procesador gráfico Qualcomm Adreno',
            'image' => 'mobile/xiaomi12pro.jpg'

        ]);
        Mobile::create([
            'marca' => 'Xiaomi',
            'modelo' => 'Xiaomi 12',
            'precio' => 799.99,
            'stock' => 50,
            'color' => 'Azul',
            'almacenamiento' => '256GB',
            'pantalla' => 'Tipo de pantalla DotDisplay AMOLED FHD+
                            Tamaño de la pantalla 6.28" / 15,27 cm
                            Resolución de 2400 por 1080 píxeles',
            'chip' => 'Modelo Snapdragon 8 Gen 1
                        Núcleos del procesador 8
                        Velocidad del procesador 3GHz, 2.5GHz y 1.8GHz
                        Procesador gráfico Qualcomm Adreno',
            'image' => 'mobile/xiaomi12.jpg'

        ]);
        Mobile::create([
            'marca' => 'Xiaomi',
            'modelo' => 'Xiaomi 12 X',
            'precio' => 699.99,
            'stock' => 50,
            'color' => 'Azul',
            'almacenamiento' => '128GB',
            'pantalla' => 'Tipo de pantalla DotDisplay AMOLED FHD+
                            Tamaño de la pantalla 6.28" / 15,27 cm
                            Resolución de 2400 por 1080 píxeles',
            'chip' => 'Modelo Snapdragon 870
                        Núcleos del procesador 8
                        Velocidad del procesador 3,2GHz, 2.4GHz y 1.8GHz
                        Procesador gráfico Qualcomm Adreno 650',
            'image' => 'mobile/xiaomi12x.jpg'

        ]);
        Mobile::create([
            'marca' => 'Xiaomi',
            'modelo' => 'Xiaomi 11T Pro',
            'precio' => 649.99,
            'stock' => 50,
            'color' => 'Azul',
            'almacenamiento' => '256GB',
            'pantalla' => 'Tipo de pantalla DotDisplay AMOLED
                            Tamaño de la pantalla 6.67" / 16,41 cm
                            Resolución de 2400 por 1080 píxeles',
            'chip' => 'Modelo Snapdragon 888
                        Núcleos del procesador 8
                        Velocidad del procesador 2,84GHz 
                        Procesador gráfico Qualcomm Adreno 660',
            'image' => 'mobile/xiaomi11tpro.jpg'

        ]);
        Mobile::create([
            'marca' => 'Xiaomi',
            'modelo' => 'Xiaomi 11T',
            'precio' => 499.99,
            'stock' => 50,
            'color' => 'Azul',
            'almacenamiento' => '128GB',
            'pantalla' => 'Tipo de pantalla DotDisplay AMOLED
                            Tamaño de la pantalla 6.73" / 16,41 cm
                            Resolución de 2400 por 1080 píxeles',
            'chip' => 'Modelo Snapdragon 8 Gen 1
                        Núcleos del procesador 8
                        Velocidad del procesador 3GHz, 2.6GHz y 2GHz
                        Procesador gráfico ARM Mali',
            'image' => 'mobile/xiaomi11t.jpg'

        ]);
        Mobile::create([
            'marca' => 'Xiaomi',
            'modelo' => 'Xiaomi 11 Lite 5G NE',
            'precio' => 369.99,
            'stock' => 50,
            'color' => 'Azul',
            'almacenamiento' => '256GB',
            'pantalla' => 'Tipo de pantalla DotDisplay AMOLED FHD+
                            Tamaño de la pantalla 6.55" / 16,05 cm
                            Resolución de 2400 por 1080 píxeles',
            'chip' => 'Modelo Snapdragon 778G
                        Núcleos del procesador 8
                        Velocidad del procesador 2,4GHz
                        Procesador gráfico Qualcomm Adreno 642L',
            'image' => 'mobile/xiaomi11lite.jpg'

        ]);

        //Huawei
        Mobile::create([
            'marca' => 'Huawei',
            'modelo' => 'P50 Pocket',
            'precio' => 1599.00,
            'stock' => 50,
            'color' => 'Oro',
            'almacenamiento' => '512GB',
            'pantalla' => 'Tipo de pantalla OLED FHD+
                            Tamaño de la pantalla 6.90" / 17,00 cm
                            Resolución de 2790 por 1188 píxeles',
            'chip' => 'Modelo Snapdragon 888 4G
                        Núcleos del procesador 8
                        Velocidad del procesador 2,84GHz, 2.42GHz y 1.8GHz
                        Procesador gráfico Qualcomm Adreno 660',
            'image' => 'mobile/p50pocket.jpg'

        ]);
        Mobile::create([
            'marca' => 'Huawei',
            'modelo' => 'P50 Pro',
            'precio' => 1199.00,
            'stock' => 50,
            'color' => 'Negro',
            'almacenamiento' => '256GB',
            'pantalla' => 'Tipo de pantalla OLED FHD+
                            Tamaño de la pantalla 6.60" / 15,80 cm
                            Resolución de 2700 por 1228 píxeles',
            'chip' => 'Modelo Snapdragon 888 4G
                        Núcleos del procesador 8
                        Velocidad del procesador 2,84GHz, 2.42GHz y 1.8GHz
                        Procesador gráfico Qualcomm Adreno 660',
            'image' => 'mobile/p50pro.jpg'

        ]);
        Mobile::create([
            'marca' => 'Huawei',
            'modelo' => 'P40 Pro+',
            'precio' => 1199.00,
            'stock' => 50,
            'color' => 'Blanco',
            'almacenamiento' => '256GB',
            'pantalla' => 'Tipo de pantalla OLED
                            Tamaño de la pantalla 6.58" / 15,82 cm
                            Resolución de 2640 por 1200 píxeles',
            'chip' => 'Modelo Huawei Kirin 990 5G
                        Núcleos del procesador 8
                        Velocidad del procesador 2,86GHz, 2.36GHz y 1.95GHz
                        Procesador gráfico Mali-G76',
            'image' => 'mobile/p40proplus.jpg'

        ]);
        Mobile::create([
            'marca' => 'Huawei',
            'modelo' => 'P40 Pro',
            'precio' => 1099.00,
            'stock' => 50,
            'color' => 'Negro',
            'almacenamiento' => '256GB',
            'pantalla' => 'Tipo de pantalla OLED
                            Tamaño de la pantalla 6.58" / 15,82 cm
                            Resolución de 2640 por 1200 píxeles',
            'chip' => 'Modelo Huawei Kirin 990 5G
                        Núcleos del procesador 8
                        Velocidad del procesador 2,86GHz, 2.36GHz y 1.95GHz
                        Procesador gráfico Mali-G76',
            'image' => 'mobile/p40pro.jpg'

        ]);
        Mobile::create([
            'marca' => 'Huawei',
            'modelo' => 'P40',
            'precio' => 1099.00,
            'stock' => 50,
            'color' => 'Negro',
            'almacenamiento' => '256GB',
            'pantalla' => 'Tipo de pantalla OLED
                            Tamaño de la pantalla 6.10" / 14,89 cm
                            Resolución de 2340 por 1080 píxeles',
            'chip' => 'Modelo Huawei Kirin 990 5G
                        Núcleos del procesador 8
                        Velocidad del procesador 2,86GHz, 2.36GHz y 1.95GHz
                        Procesador gráfico Mali-G76',
            'image' => 'mobile/p40.jpg'

        ]);
    }
}
