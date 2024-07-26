<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lodging</title>
</head>
<body>
  <x-navbar></x-navbar>
    <h1 class="text-2xl text-center my-10 font-bold">List Lodgings</h1>
    <div class="container mx-auto flex flex-wrap gap-8 justify-around">
@foreach ($lodgings as $data)
<div class="w-80 rounded-lg shadow-lg border border-slate-200 p-3 mb-8">
    <img
      src={{ $data['image'] }}
      alt="image-profile"
      class="rounded w-11/12 m-auto"
    />
    <div class="flex gap-2 pl-3">
        <h1 class="text-xl font-semibold">{{ $data['name'] }}</h1>
        <p class="text-slate-500 text-base">${{ $data['price'] }}</p>
    </div>
    <h5 class="text-slate-500 text-base pl-3">{{ $data->created_at->format('j F Y') }}</h5>
    <h5 class="mt-4 pl-3">{{ Str::limit($data['description'], 50) }}</h5>
    <div class="flex justify-around p-3">
      <a href="/lodgings/{{ $data['id'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
    </div>
  </div>
@endforeach
</div>
</body>
</html>