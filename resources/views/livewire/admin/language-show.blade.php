<div class="bg-white p-6 rounded shadow mt-4">
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Percentual</th>
            <th scope="col">Detalhes</th>
        </tr>
        </thead>
        <tbody>
        @forelse($languages as $language)
            <tr>
                <td>{{$language->name}}</td>
                <td>{{$language->percent}}%</td>
                <td>@mdo</td>
            </tr>
            <span class=" inline-block text-white-500">
                <span class="top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none transform translate-x-1/2 -translate-y-1/2 bg-indigo-50 rounded-full">
                    <span class="mr-2"> </span>
                </span>
            </span>
        @empty
        @endforelse
        </tbody>
    </table>
</div>
