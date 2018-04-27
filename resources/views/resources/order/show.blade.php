@extends('layouts.main')

@section('content')

<div class="col-lg-6">
    <h1 class="display-4">General Information</h1>
    <table class="table table-sm table-hover table-striped">
        </tbody>   
            <tr>
                <th>Order Date</th>
                <td><?=$order->order_date?></td>
            </tr>
            <tr>
                <th>Ship Date</th>
                <td><?=$order->shipDate != null ? $order->ship_date : "N/A"?></td>
            </tr>
            <tr>
                <th>CCN</th>
                <td><?=$order->creditCard->number?></td>
            </tr>
            <?php /* Readable Address */
                $address = $order->address;
                $stringAddress = $address->line_1.'<br>'.$address->city.', '.$address->state.' '.$address->zip;
            ?>
            <tr>
                <th>Billing Address</th>
                <td><?=$stringAddress?></td>
            </tr>

            <?php /* Totaling */
                $products = $order->products;

                $totalCost = $products->sum('price');
                $totalDiscount = $totalCost * ($order->discount_percent/100);

                $total = $totalCost + $order->tax_amount + $order->shipping_cost - $totalDiscount;
            ?>
            <tr>
                <th>Total Product Cost</th>
                <td><?="$".number_format($totalCost, 2)?></td>
            </tr>
            <tr>
                <th>Tax</th>
                <td><?="$".number_format($order->tax_amount, 2)?></td>
            </tr>
            <tr>
                <th>Shipping</th>
                <td><?="$".number_format($order->shipping_cost, 2)?></td>
            </tr>
            <tr>
                <th>Total Discount</th>
                <td><?="$".number_format($totalDiscount, 2)?></td>
            </tr>
            <tr>
                <th>Total</th>
                <td><?="$".number_format($total, 2)?></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="col-lg-6">
    <h1 class="display-4">Ordered Items</h1>
    <table class="table table-sm table-hover table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price After Discount</th>
            </tr>
        </thead>
        </tbody>   
            <?php foreach($products as $prod): ?>
            <tr>
                <td><?=$prod->name?></td>
                <td><?="$".number_format($prod->price, 2)?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="col-12">
    <a class="btn btn-outline-primary" href="/orders/">Go Back</a>
</div>

@endsection