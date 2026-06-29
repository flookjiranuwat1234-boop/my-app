<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ยินดีต้อนรับสู่เว็บไซต์ของเรา</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 90%;
            max-width: 900px;
            background: #fff;
            padding: 50px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 15px 35px rgba(0, 0, 0, .2);
        }

        h2 {
            color: #0072ff;
            font-size: 40px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #666;
            line-height: 1.8;
            margin-bottom: 40px;
        }

        .cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .card {
            width: 220px;
            padding: 20px;
            border-radius: 15px;
            background: #f8f9fa;
            transition: .3s;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .1);
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .2);
        }

        .card h3 {
            color: #0072ff;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 15px;
            margin: 0;
            color: #555;
        }

        .btn-group {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            text-decoration: none;
            color: white;
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: bold;
            transition: .3s;
        }

        .home {
            background: #fd7e14;
        }

        .about {
            background: #0d6efd;
        }

        .blog {
            background: #198754;
        }

        .btn:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 15px rgba(0, 0, 0, .2);
        }
    </style>
</head>

<body>

    <div class="container">

        <h2>🎉 ยินดีต้อนรับสู่เว็บไซต์ของเรา</h2>

        <p>
            เว็บไซต์นี้สร้างขึ้นด้วย <strong>Laravel Framework</strong>
            เพื่อใช้ศึกษาการพัฒนาเว็บแอปพลิเคชันตามหลัก MVC
            พร้อมเรียนรู้การใช้งาน Routing, Blade Template และ Controller
        </p>

        <div class="cards">
            <div class="card">
                <h3>📰 บทความ</h3>
                <p>รวมบทความและเนื้อหาความรู้เกี่ยวกับ Laravel และการพัฒนาเว็บไซต์</p>
            </div>

            <div class="card">
                <h3>👤 เกี่ยวกับเรา</h3>
                <p>แนะนำเว็บไซต์ วัตถุประสงค์ และข้อมูลผู้พัฒนา</p>
            </div>

            <div class="card">
                <h3>🚀 Laravel</h3>
                <p>เรียนรู้การสร้างเว็บไซต์ด้วย Framework ที่ได้รับความนิยมมากที่สุดตัวหนึ่งของ PHP</p>
            </div>
        </div>

        <div class="btn-group">
            <a href="/" class="btn home">🏠 หน้าแรก</a>
            <a href="/about" class="btn about">👤 เกี่ยวกับเรา</a>
            <a href="/blog" class="btn blog">📰 บทความทั้งหมด</a>
        </div>

    </div>

</body>

</html>
