@extends('layouts.main')

@section('content')

<div class="col-md-8">
    <h1 class="display-4">Products</h1>
    <table class="table table-md table-hover table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
            </tr>
        </thead>
        </tbody>   
            <?php foreach($products as $product): ?>
            <tr onclick="window.location='/products/<?=$product->id;?>'">
                <td><?=$product->name?>
                <td><?="$".number_format($product->price,2)?></th>
                <td><?=$product->category->name?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

@endsection