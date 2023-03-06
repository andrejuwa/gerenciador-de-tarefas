<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tarefas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-4xl font-bold text-center mb-8">Lista de Tarefas</h1>
        <form class="flex mb-4">
            <label class="block text-gray-700 text-sm font-bold mr-4" for="nova-tarefa">Adicionar nova tarefa:</label>
            <input class="flex-grow px-4 py-2 border border-gray-400 rounded-lg shadow-sm focus:outline-none focus:shadow-outline-blue" type="text" id="nova-tarefa">
            <button class="ml-4 px-4 py-2 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75" type="submit">Adicionar</button>
        </form>
        <ul class="divide-y divide-gray-400">
            <li class="py-4 flex items-center justify-between">
                <div class="flex items-center">
                    <input class="form-checkbox h-6 w-6 text-green-600" type="checkbox" id="tarefa1">
                    <label class="ml-4 text-gray-700 text-sm font-bold" for="tarefa1">Tarefa 1</label>
                </div>
                <div class="flex items-center">
                    <button class="mr-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue" type="button">Editar</button>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-red" type="button">Remover</button>
                </div>
            </li>
            <li class="py-4 flex items-center justify-between">
                <div class="flex items-center">
                    <input class="form-checkbox h-6 w-6 text-green-600" type="checkbox" id="tarefa2">
                    <label class="ml-4 text-gray-700 text-sm font-bold" for="tarefa2">Tarefa 2</label>
                </div>
                <div class="flex items-center">
                    <button class="mr-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue" type="button">Editar</button>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-red" type="button">Remover</button>
                </div>
            </li>
            <!-- Adicione mais itens aqui -->
        </ul>
    </div>
</body>
</html>