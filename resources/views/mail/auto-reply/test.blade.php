ola {{ $request['first_name'] }} <br>email: {{ $request['email'] }}<br>
{{$product->slug}}
<br>
{{$currency}}
<br>
{{$coin}}
<br>
<br>
@if($product->slug == "bun-van" || $product->slug == "bubble-gum-bed")
                  starting from
                  @endif
                  @if($product->product_currencies->where('currency_id', '=', $coin)->first()->prices != null)
                  <br> <b>{!! $product->product_currencies->where('currency_id', '=', $coin)->first()->prices !!}</b>
                  @else
                  <b>{{ $product->product_currencies->where('currency_id', '=', $coin)->first()->price }} {{ $currency }}</b>
                  @endif