<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lista de Tarefas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col items-center justify-center">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="{{route('login')}}">
            <input type="hidden" name="_token" value="{{$app_key}}" wfd-id="id0">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="username">Usuário:</label>
                <input name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Digite seu usuário">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2" for="password">Senha:</label>
                <input name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Digite sua senha">
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Entrar</button>
            </div>
        </form>

    </div>
</body>
</html>