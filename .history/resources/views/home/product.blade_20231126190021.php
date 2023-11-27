@section('title', 'Store')
<x-home>

@foreach($products as $product)
<div class="box">
    <livewire:productlist/>
</div>

@endforeach

</x-home>
