<h1>Rooms</h1>
@foreach ($rooms as $room)
    <ol>
        <li>{{ $room['name']}}</li>
        <ul>
            <li>Number: {{ $room['id'] }}</li>
            <li>Price: ${{ $room['rate'] }}</li>
            <li>Discount: {{ $room['discount'] }}%</li>
        </ul>
    </ol>
@endforeach