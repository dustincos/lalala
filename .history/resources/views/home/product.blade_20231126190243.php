@section('title', 'Store')
<x-home>

@foreach($products as $product)

    <livewire:productlist/>
</div>

@endforeach

</x-home>
