<div>
    <h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">
        Trabalho de Banco de Dados
    </h1>
    <div class="mx-auto grid grid-cols-1 max-w-xl my-5">
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Resultados</label>
        <textarea
            id="message"
            rows="4"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Aqui serão impressos os resultados das queires"
        >@if($result != null)@json($result)@endif</textarea>
        <hr class="my-5">
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Queries/Comandos</label>
        <textarea
                wire:model.defer="query"
                id="message"
                rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Aqui você deve escrever suas queries"
        >@if($query != null)@json($query)@endif</textarea>
        <button
            wire:click="makeQuery"
            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded my-3 w-32 mx-auto">
            Executar
        </button>
    </div>

</div>
