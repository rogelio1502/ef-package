# EF PACKAGE

Requisitos para la correcta función del paquete:

1. Instalar laravel-mix
2. Contar con el archivo webpack.mix.js

Pasos para la instalación:

`composer require rogelio1502/ef-package`

Agregar las siguientes líneas de código a tu archivo webpack

`.js('vendor/rogelio1502/ef-package/resources/js/app.js', 'public/js')
 .css(
        'vendor/rogelio1502/ef-package/resources/css/tom-select.default.css',
        'public/css'
    )`

Realizar build a public

`npm run production`
