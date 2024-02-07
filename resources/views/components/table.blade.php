<div class="relative overflow-x-auto py-5">
    <h3 class="py-4">{!!__('form.escorts') !!}</h3>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    {!!__('form.name') !!}
                </th>
                <th scope="col" class="px-6 py-3">
                    {!!__('form.job') !!}
                </th>

            </tr>
        </thead>
        <tbody>
            {{$body}}
        </tbody>
    </table>
</div>
