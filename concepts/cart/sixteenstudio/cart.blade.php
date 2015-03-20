<h1>Basket</h1>

@if($cart->hasItems())
<table>
    <tr>
        <th>Description</th>
        <th>Unit Price</th>
        <th>Quantity</th>
        <th>Net Price</th>
    </tr>
    @foreach($cart->items() as $item)
        <tr>
            <td>{{ $item->image() }} {{ $item->description() }}</td>
            <td>{{ $item->unitPrice() }}</td>
            <td><input type="text" name="basket[{{ $item->id() }}][quantity]" value="{{ $item->quantity() }}"></td>
            <td>{{ $item->net() }}</td>
        </tr>
    @endforeach
    <tr>
        <td colspan="2" style="text-align: right;">Shipping: </td>
        <td>{{ $cart->shipping()->net() }}</td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: right;">Tax: </td>
        <td>{{ $cart->tax() }}</td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: right;">Total: </td>
        <td>{{ $cart->gross() }}</td>
    </tr>
</table>
@else
Your have no items in your basket.
@endif