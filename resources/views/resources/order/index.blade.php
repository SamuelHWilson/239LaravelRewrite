@extends('layouts.main')

@section('content')

<div class="col-lg-9">
    <h1 class="display-4">Orders</h1>
    <table class="table table-md table-hover table-striped table-responsive">
        <thead>
            <tr>
                <th>id#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Order Date</th>
                <th>Shipped</th>
            </tr>
        </thead>
        </tbody>   
            <?php foreach($orders as $order): ?>
            <tr onclick="window.location='/orders/<?=$order->id?>';">
                <td><?=$order->id?></td>
                <td><?=$order->customer->name?></th>
                <td><?=$order->customer->email?></th>
                <td><?= \Carbon\Carbon::parse($order->order_date)->format('M jS \'y') ?></th>
                <td>
                    <?php if($order->ship_date != NULL) echo '<i class="fa fa-cube fa-lg" style="color:#4b2f06"></i>';?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="col-lg-3">
    <h1 class="display-4">Filter</h1>
    <form>

        <div class="form-check mt-2">
            <input class="form-check-input" type="radio" name="shipped" id="shipped1" value="all" <?php if($filterShipped == "all" || $filterShipped == NULL) echo "checked"?>>
            <label class="form-check-label" for="shipped1">All Orders</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="shipped" id="shipped2" value="shipped" <?php if($filterShipped == "shipped") echo "checked"?>>
            <label class="form-check-label" for="shipped1">Shipped Orders</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="shipped" id="shipped3" value="unshipped" <?php if($filterShipped == "unshipped") echo "checked"?>>
            <label class="form-check-label" for="shipped1">Unshipped Orders</label>
        </div>

        <input class="btn btn-outline-primary mt-4" type="submit" value="Filter Results">
    </form>
    <a class="btn btn-outline-danger" href="/index.php">Clear All Filters</a>
</div>


@endsection