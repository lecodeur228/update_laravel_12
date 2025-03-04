<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>students</title>
</head>
<body class="bg-gray-100">

<div class="container  border-gray m-5 rounded-lg">


<div class="flex min-h-full flex-col justify-center  border-gray m-5 rounded-lg px-6 py-12 lg:px-8 ">

    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create students</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" method="POST" action="{{ route('students.store') }}">
        @csrf

      <div>
        <label for="email" class="block text-sm/6 font-medium text-gray-900">First Name</label>
        <div class="mt-2">
          <input type="text" name="firstname" id="firstname" autocomplete="firstname" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>
      </div>

       <div>
        <label for="email" class="block text-sm/6 font-medium text-gray-900">Last Name</label>
        <div class="mt-2">
          <input type="text" name="lastname" id="lastname" autocomplete="lastname" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>
      </div>

       <div>
        <label for="email" class="block text-sm/6 font-medium text-gray-900">Age</label>
        <div class="mt-2">
          <input type="number" min="1"  name="age" id="age" autocomplete="age" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>
      </div>

       <div>
        <label for="number" class="block text-sm/6 font-medium text-gray-900">phone number</label>
        <div class="mt-2">
            <input type="number" name="number" id="number" autocomplete="number" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>
      </div>
      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create Student</button>
      </div>
    </form>
  </div>
</div>
</div>

</body>
</html>
