<!DOCTYPE html>
<html>

<head>
    <title>รายการสินค้า</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <h2>รายการสินค้า</h2>

        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">
            เพิ่มสินค้า
        </a>

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>รหัส</th>
                    <th>ชื่อสินค้า</th>
                    <th>ราคา</th>
                    <th>คงเหลือ</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product['id'] }}</td>
                        <td>{{ $product['name'] }}</td>
                        <td>{{ number_format($product['price']) }} บาท</td>
                        <td>{{ $product['stock'] }}</td>
                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>

</body>

</html>
