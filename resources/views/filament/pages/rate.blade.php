<x-filament-panels::page>
    <table border>
        <thead>
            <tr>
                <th>Nama Guru</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach($output as $key => $value)
            <tr>
                <td>{{$key}}</td>
                <td>{{$value}}</td>
            </tr>
            @endforeach()
        </tbody>
    </table>
</x-filament-panels::page>
