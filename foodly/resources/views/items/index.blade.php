@foreach ($items as $item)
    <div>
        <h3>{{ $item->name }}</h3>
        <p>{{ $item->description }}</p>
        <img src="{{ $item->img }}" alt="{{ $item->name }}">
        <p>Price: {{ $item->price }}</p>
        <p>Category: {{ $item->category->name }}</p>
    </div>
@endforeach