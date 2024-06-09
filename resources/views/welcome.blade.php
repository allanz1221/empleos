@extends('layouts.app1')

@section('content')

 <div class="flex w-full flex-col items-center">
    <header class="w-full bg-gray-900 py-6 text-white">
      <div class="container mx-auto flex justify-center"><div class="text-2xl font-bold">Buscadores de Empleo</div></div>
    </header>
    {{-- <img src="https://www.navojoa.gob.mx/wp-content/uploads/2024/06/LOGO_2.fw_.png" width="200px"/> --}}
    <main class="container mx-auto my-12 w-full max-w-4xl">
      <div class="flex flex-col items-center gap-6">
        <div class="flex w-full items-center gap-4"><input type="text" placeholder="Busca por puesto, empresa, descripción..." class="flex-1 rounded-md border border-gray-300 px-4 py-2 focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500" /><button class="rounded-md bg-blue-500 px-6 py-2 text-white hover:bg-blue-600">Buscar</button></div>
        <div class="grid grid-cols-2 gap-4"><button class="rounded-md bg-green-500 px-6 py-2 text-white hover:bg-green-600">Registro Empresarial</button><button class="rounded-md bg-purple-500 px-6 py-2 text-white hover:bg-purple-600">Registro para Solicitantes</button></div>
      </div>
      <div class="mt-12 grid grid-cols-1 gap-4">
        <div class="flex flex-col items-start gap-4 rounded-md bg-white p-6 shadow-md">
          <div class="flex h-12 w-12 items-center justify-center rounded-full bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-gray-600">
              <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
              <rect width="20" height="14" x="2" y="6" rx="2"></rect>
            </svg>
          </div>
          <h3 class="text-lg font-medium">Software Engineer</h3>
          <p class="text-gray-500">Develop and maintain web applications.</p>
          <button class="self-end rounded-md bg-blue-500 px-4 py-2 text-white hover:bg-blue-600">Detalles</button>
        </div>
        <div class="flex flex-col items-start gap-4 rounded-md bg-white p-6 shadow-md">
          <div class="flex h-12 w-12 items-center justify-center rounded-full bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-gray-600">
              <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
              <rect width="20" height="14" x="2" y="6" rx="2"></rect>
            </svg>
          </div>
          <h3 class="text-lg font-medium">UI/UX Designer</h3>
          <p class="text-gray-500">Design intuitive and visually appealing user interfaces.</p>
          <button class="self-end rounded-md bg-blue-500 px-4 py-2 text-white hover:bg-blue-600">Detalles</button>
        </div>
        <div class="flex flex-col items-start gap-4 rounded-md bg-white p-6 shadow-md">
          <div class="flex h-12 w-12 items-center justify-center rounded-full bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-gray-600">
              <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
              <rect width="20" height="14" x="2" y="6" rx="2"></rect>
            </svg>
          </div>
          <h3 class="text-lg font-medium">Data Analyst</h3>
          <p class="text-gray-500">Analyze and interpret complex data sets.</p>
          <button class="self-end rounded-md bg-blue-500 px-4 py-2 text-white hover:bg-blue-600">Detalles</button>
        </div>
        <div class="flex flex-col items-start gap-4 rounded-md bg-white p-6 shadow-md">
          <div class="flex h-12 w-12 items-center justify-center rounded-full bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-gray-600">
              <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
              <rect width="20" height="14" x="2" y="6" rx="2"></rect>
            </svg>
          </div>
          <h3 class="text-lg font-medium">Marketing Manager</h3>
          <p class="text-gray-500">Develop and implement effective marketing strategies.</p>
          <button class="self-end rounded-md bg-blue-500 px-4 py-2 text-white hover:bg-blue-600">Detalles</button>
        </div>
        <div class="flex flex-col items-start gap-4 rounded-md bg-white p-6 shadow-md">
          <div class="flex h-12 w-12 items-center justify-center rounded-full bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-gray-600">
              <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
              <rect width="20" height="14" x="2" y="6" rx="2"></rect>
            </svg>
          </div>
          <h3 class="text-lg font-medium">Project Manager</h3>
          <p class="text-gray-500">Coordinate and oversee the successful completion of projects.</p>
          <button class="self-end rounded-md bg-blue-500 px-4 py-2 text-white hover:bg-blue-600">Detalles</button>
        </div>
        <div class="flex flex-col items-start gap-4 rounded-md bg-white p-6 shadow-md">
          <div class="flex h-12 w-12 items-center justify-center rounded-full bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 text-gray-600">
              <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
              <rect width="20" height="14" x="2" y="6" rx="2"></rect>
            </svg>
          </div>
          <h3 class="text-lg font-medium">Sales Representative</h3>
          <p class="text-gray-500">Engage with customers and close sales.</p>
          <button class="self-end rounded-md bg-blue-500 px-4 py-2 text-white hover:bg-blue-600">Detalles</button>
        </div>
      </div>
      <div class="mt-8 flex items-center justify-between">
        <p>
          Mostrar
          <!-- -->1<!-- -->
          a
          <!-- -->6<!-- -->
          de
          <!-- -->30<!-- --> Registros
        </p>
        <div class="flex gap-2"><button class="rounded-md bg-blue-500 px-3 py-1 text-white">1</button><button class="rounded-md bg-gray-200 px-3 py-1 text-gray-700">2</button><button class="rounded-md bg-gray-200 px-3 py-1 text-gray-700">3</button><button class="rounded-md bg-gray-200 px-3 py-1 text-gray-700">4</button><button class="rounded-md bg-gray-200 px-3 py-1 text-gray-700">5</button></div>
      </div>
    </main>
    <footer class="w-full bg-gray-900 py-6 text-white">
      <div class="container mx-auto flex items-center justify-between">
        <p>© 2024 Buscadores de empleo. Todos los Derechos Reservados.</p>
        <nav>
          <ul class="flex space-x-4">
            <li><a href="#">Proyecto</a></li>
            <li><a href="#">Politicas de privacidad</a></li>
          </ul>
        </nav>
      </div>
    </footer>
  </div>

@endsection
