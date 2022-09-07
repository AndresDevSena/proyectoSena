<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
</head>
<body>
    <main>
        <!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<iv class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Registro ciudadano</h3>
        <p class="mt-1 text-sm text-gray-600">Por favor ingrese sus datos personales</p>
      </div>
    </div>
    <div class="mt-5 md:col-span-2 md:mt-0">
      <form action="#" method="POST">
        <div class="overflow-hidden shadow sm:rounded-md">
          <div class="bg-white px-4 py-5 sm:p-6">
            <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
                <label for="country" class="block text-sm font-medium text-gray-700">Tipo de documento</label>
                <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                  <option>Cedula de ciudadania</option>
                  <option>Tarjeta de identidad</option>
                  <option>Cedula de extranjeria</option>
                </select>
              </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">Numero de documento</label>
                <input type="text" name="first-name" id="first-name" required autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">Nombres completos</label>
                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium text-gray-700">Apellidos</label>
                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="country" class="block text-sm font-medium text-gray-700">Sexo</label>
                <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                  <option>Hombre</option>
                  <option>Mujer</option>
                  <option>Intersexual</option>
                  <option>Indefinido</option>
                  <option>Prefiero no decirlo</option>
                </select>
              </div>
              
                            <div class="col-span-6">
                              <label for="street-address" class="block text-sm font-medium text-gray-700">Telefono celular</label>
                              <input type="number" name="street-address" id="street-address" autocomplete="street-address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-6">
                              <label for="street-address" class="block text-sm font-medium text-gray-700">Telefono fijo</label>
                              <input type="number" name="street-address" id="street-address" autocomplete="street-address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6">
                              <label for="street-address" class="block text-sm font-medium text-gray-700">Correo electronico
                              </label>
                              <input type="email" name="street-address" id="street-address" autocomplete="street-address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>


              <div class="col-span-6 sm:col-span-4">
                <label for="email-address" class="block text-sm font-medium text-gray-700">Municipio</label>
                <input type="text" name="email-address" id="email-address" autocomplete="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>

              
              <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                  <label for="city" class="block text-sm font-medium text-gray-700">Direccion</label>
                  <input type="text" name="city" id="city" autocomplete="address-level2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>
                
                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="region" class="block text-sm font-medium text-gray-700">Barrio - vereda</label>
                <input type="text" name="region" id="region" autocomplete="address-level1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="postal-code" class="block text-sm font-medium text-gray-700">Fecha de nacimiento</label>
                <input type="date" name="postal-code" id="postal-code" autocomplete="postal-code" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            

            
            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="postal-code" class="block text-sm font-medium text-gray-700">Etnia</label>
                <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            
            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="postal-code" class="block text-sm font-medium text-gray-700">Condicion de discapacidad</label>
                <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            
                  <div class="col-span-6 sm:col-span-3">
                <label for="country" class="block text-sm font-medium text-gray-700">Estrato</label>
                <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>       
</select>
</div>
<div class="col-span-6 sm:col-span-3">
                <label for="country" class="block text-sm font-medium text-gray-700">Ultimo nivel educativo</label>
                <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    <option>Primaria</option>
                    <option>Secundaria</option>
                    <option>Superior</option>
                           
</select>
</div>
<div class="col-span-6">
                              <label for="street-address" class="block text-sm font-medium text-gray-700">¿Cuenta usted con dispositivos tecnologicos?
                              </label>
                              <label for="push-email" class="ml-3 block text-sm font-medium text-gray-700">Si</label>
                              <input type="radio" name="street-address" id="street-address" autocomplete="street-address" class="">
                              <label for="push-email" class="ml-3 block text-sm font-medium text-gray-700">No</label>
                              <input  type="radio" name="street-address" id="street-address" autocomplete="street-address" class="">
                            </div>
                            <div class="col-span-6">
                              <label for="street-address" class="block text-sm font-medium text-gray-700">Si la respuesta anterior es afirmativa, indique cuales.
                              </label>
                              <label for="push-email" class="ml-3 block text-sm font-medium text-gray-700">Movil</label>
                              <input type="checkbox" name="street-address" id="street-address" autocomplete="street-address" class="">
                              <label for="push-email" class="ml-3 block text-sm font-medium text-gray-700">Computador</label>
                              <input  type="checkbox" name="street-address" id="street-address" autocomplete="street-address" class="">
                              <label for="push-email" class="ml-3 block text-sm font-medium text-gray-700">Tablet</label>
                              <input  type="checkbox" name="street-address" id="street-address" autocomplete="street-address" class="">
                              <label for="push-email" class="ml-3 block text-sm font-medium text-gray-700">Otro</label>
                              <input  type="text" name="street-address" id="street-address" autocomplete="street-address" class="">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                <label for="country" class="block text-sm font-medium text-gray-700">Tipo de regimen de afiliacion</label>
                <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                    <option>Subsidiado</option>
                    <option>Contributivo</option>
                    
                           
</select>
</div>
          <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
              <a href="{{route('login')}}" class="font-medium text-indigo-600 hover:text-indigo-500">¿Ya tienes cuenta? Inicia sesion aqui</a>
            </div>
            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
            </div>
         

        </div>
      </form>
    </div>



    </main>
</body>
</html>