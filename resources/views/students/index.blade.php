<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>students</title>
</head>
<body>
<div class="container  border-gray m-5 rounded-lg">


<div class="flex min-h-full flex-col justify-center  border-gray m-5 rounded-lg px-6 py-12 lg:px-8 ">

    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Students</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <table class="table-auto w-full">
          <thead>
              <tr>
                  <th class="px-4 py-2">First Name</th>
                  <th class="px-4 py-2">Last Name</th>
                  <th class="px-4 py-2">Age</th>
                  <th class="px-4 py-2">Sex</th>
              </tr>
          </thead>
          <tbody>
              @foreach($persones as $person)
                  <tr>
                      <td class="border px-4 py-2">{{ $person['nom'] }}</td>
                      <td class="border px-4 py-2">{{ $person['prenom'] }}</td>
                      <td class="border px-4 py-2">{{ $person['age'] }}</td>
                      <td class="border px-4 py-2">{{ $person['sexe'] }}</td>

                  </tr>
              @endforeach
          </tbody>
      </table>
  </div>
</div>
</body>
</html>
