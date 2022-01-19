@props(['brand' => ''])

@if ($brand === 's8')
    <div {{ $attributes->merge(['class' => 'align-middle min-w-full overflow-x-auto shadow overflow-hidden'])
        }}>
        <table class="min-w-full">
            <thead class="bg-beige">
                <tr>
                    {{ $head }}
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
                {{ $body }}
            </tbody>

            <tfoot class="bg-beige">
                <tr>
                    {{ $foot }}
                </tr>
            </tfoot>
        </table>
    </div>
@else
    <div {{ $attributes->merge(['class' => 'min-w-full overflow-hidden overflow-x-auto align-middle shadow sm:rounded-lg']) }}>
        <table class="min-w-full divide-y divide-cool-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    {{ $head }}
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-cool-gray-200">
                {{ $body }}
            </tbody>

            <tfoot class="bg-gray-100">
                <tr>
                    {{ $foot }}
                </tr>
            </tfoot>
        </table>
    </div>
@endif