<!DOCTYPE html>
<html>

<head>
    <title>ลงทะเบียนสินค้า</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <h2>ลงทะเบียนสินค้า</h2>

        <form>

            <div class="mb-3">
                <label class="form-label">ชื่อสินค้า</label>
                <input type="text" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">ราคา</label>
                <input type="number" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">จำนวนคงเหลือ</label>
                <input type="number" class="form-control">
            </div>

            <button class="btn btn-success">
                บันทึกข้อมูล
            </button>

            <a href="{{ route('products.index') }}" class="btn btn-secondary">
                กลับ
            </a>

        </form>

    </div>

</body>

</html>
