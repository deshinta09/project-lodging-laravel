<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <div class="w-screen h-screen flex justify-center items-center">
        <div class="w-1/5 rounded shadow p-3">
            <h1 class="text-center text-2xl font-bold mb-8">Register</h1>
            <form action="" class="grid gap-5 justify-center mb-5">
                <div class="grid">
                    <label class="text-xl" for="email">Email</label>
                    <input type="email" class="rounded border border-sky-200 active:border-sky-300 p-3">
                </div>
                <div class="grid">
                    <label class="text-xl" for="password">Password</label>
                    <input type="password" class="rounded border border-sky-200 active:border-sky-300 p-3">
                </div>
                <button class="py-4 font-bold rounded bg-sky-600 hover:bg-sky-800 text-white" type="submit">Sign Up</button>
            </form>
        </div>
    </div>
</body>
</html>