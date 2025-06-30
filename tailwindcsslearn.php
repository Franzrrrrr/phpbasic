<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col items-center justify-center h-screen p-6 md:p-6 overflow">
  <div class="flex flex-col w-full h-40 bg-gray-50 rounded-md border border-1 border-gray-200 p-2 px-4 blur-sm hover:blur-none hover:scale-105 transition-all hover:-translate-y-6 overflow-auto group hover:bg-gray-700">
    <h1 class="font-semibold group-hover:text-white
     group-hover:selection:bg-green-300 group-hover:selection:text-orange-600">Card 1</h1>
    <p class="group-hover:text-white group-hover:selection:bg-green-300  group-hover:selection:text-orange-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere modi asperiores ullam, earum, ducimus perspiciatis pariatur eveniet consequatur culpa similique nihil enim quod exercitationem, animi necessitatibus ex! Similique, mollitia quod, libero voluptatem accusantium amet quas ipsam fuga necessitatibus beatae nulla. Incidunt inventore at fugiat molestiae impedit iure soluta voluptas nulla suscipit, optio ex doloribus provident expedita necessitatibus, porro quas quo sint est! Nostrum, deleniti quod recusandae quam iste maiores nam?</p>
  </div>

  <hr class="my-20 border-2">

  <button class="py-1 px-4 bg-sky-500 rounded text-white border-2 border-gray-200 outline-1 outline-blue-300 shadow-md opacity-60 blur-sm hover:blur-none hover:opacity-100 focus:bg-green-500 active:transition-all  hover:bg-red-500">Save</button>

  <hr class="my-20">

  <div class="w-full p-5 border rounded-xl font-inter shadow-md">
    <form action="">
      <label for="email">
      <span class="text-gray-700 font-semibold after:content-['*'] after:text-pink-500 after:ml-0.5">Email</span>
      <input type="email" name="email" id="email" placeholder="Masukkan email..." class="border border-gray-300 rounded px-3 py-2 w-full shadow focus:outline-none   block placeholder:text-slate-400 invalid:text-pink-500 invalid:focus:ring-pink-500 invalid:focus:border-pink-700 peer">
      <p class="text-sm text-pink-700 m-1 invisible peer-invalid:visible">
        Email invalid
      </p>
      </label>
    </form>
  </div>

  <hr class="my-20">

  <div class="flex justify-center items-center space-x-2">
  <span class="text-sm">light</span>

  <input type="checkbox" id="toggle" class="sr-only peer">
  <label for="toggle" class="w-9 h-5 bg-gray-400 rounded-xl flex items-center p-1 cursor-pointer peer-checked:bg-green-400 transition-all peer-checked:justify-end">
    <div class="w-4 h-4 bg-white rounded-full transform peer-checked:translate-x-4 transition-all duration-300"></div>
  </label>

  <span class="text-sm">dark</span>
</div>


  <hr class="my-20">

</body>
</html>
