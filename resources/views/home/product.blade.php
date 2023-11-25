@foreach($products as $product)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>
                        <a href="products/{{ $product->id }}/show" class="text-dark">{{ $product->name }}
                        </a></td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <img src="products/{{ $product->image }}" class="rounded-circle" width="40" height="40" />
                    </td>
                </tr>
@endforeach