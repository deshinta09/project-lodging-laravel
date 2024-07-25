<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Lodging</title>
</head>
<body>
    <h1 class="text-center mt-4 text-xl font-semibold">page detail lodging {{ $lodging['id'] }}</h1>
    <div class="container mt-10">
        <div class="w-screen px-10 grid content-evenly">
          <div class="flex p-5 items-center rounded border border-slate-200 shadow-sm">
            <img
              src={{$lodging['image']}}
              alt="image-profile"
              class="w-20 rounded-full"
            />
            <h1 class="text-2xl font-semibold ml-5">{{ $lodging['name'] }}</h1>
          </div>
          <div class="flex p-8 rounded border border-slate-200 shadow-sm mt-10 text-slate-700">
            <div class="w-1/2">
              <div class="flex gap-10 w-6/7">
                <div class="w-32">
                  <h1 class="text-xl font-semibold">Name</h1>
                  <h4 class="text-xl">{{ $lodging['name'] }}</h4>
                </div>
                <div class="w-32">
                    <h1 class="text-xl font-semibold">Category</h1>
                    <h4 class="text-xl">{{ $lodging['category_id'] }}</h4>
                  </div>
                <div>
                  <h1 class="text-xl font-semibold">Created</h1>
                  <h4 class="text-xl">{{ $lodging->created_at->format('j F Y') }}</h4>
                </div>
            </div>
            <div class="w-11/12 mt-10">
                <div class="w-32">
                    <h1 class="text-xl font-semibold">Description</h1>
                    <h4 class="text-xl">{{ $lodging['description'] }}</h4>
                </div>
                <div class="w-32">
                  <h1 class="text-xl font-semibold">Price</h1>
                  <h4 class="text-xl">{{ $lodging['price'] }}</h4>
                </div>
                <div class="w-32">
                  <h1 class="text-xl font-semibold">User</h1>
                  <h4 class="text-xl">{{ $lodging['user_id'] }}</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>