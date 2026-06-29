<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บทความทั้งหมด</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background-color: #6a11cb;
            background-image: linear-gradient(135deg, #6a11cb, #2575fc);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 90%;
            max-width: 900px;
            background: #ffffff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            color: #2575fc;
            margin-bottom: 30px;
        }

        .article {
            background: #f5f5f5;
            border-left: 6px solid #2575fc;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            transition: 0.3s;
        }

        .article:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, .2);
        }

        .article h3 {
            color: #333;
            margin-bottom: 10px;
        }

        .article p {
            color: #555;
            line-height: 1.8;
        }

        .btn-group {
            margin-top: 30px;
            text-align: center;
        }

        .btn {
            display: inline-block;
            margin: 5px;
            padding: 12px 25px;
            text-decoration: none;
            color: white;
            border-radius: 30px;
            font-weight: bold;
            transition: 0.3s;
        }

        .home {
            background: #ff9800;
        }

        .about {
            background: #2196f3;
        }

        .blog {
            background: #28a745;
        }

        .btn:hover {
            opacity: 0.9;
            transform: scale(1.05);
        }
    </style>
</head>

<body>

    <div class="container">

        <h2>📰 บทความทั้งหมด</h2>

        <div class="article">
            <h3>Laravel Framework คืออะไร?</h3>
            <p>
                Laravel เป็น PHP Framework ที่ได้รับความนิยมสูง
                ใช้รูปแบบ MVC ช่วยให้พัฒนาเว็บไซต์ได้ง่าย เป็นระเบียบ
                และสามารถดูแลโค้ดได้สะดวก
            </p>
        </div>

        <div class="article">
            <h3>Blade Template Engine</h3>
            <p>
                Blade เป็นระบบ Template ของ Laravel
                ที่ช่วยให้เขียน HTML ร่วมกับ PHP ได้ง่าย
                และลดการเขียนโค้ดซ้ำ
            </p>
        </div>

        <div class="article">
            <h3>Laravel Routing</h3>
            <p>
                Routing ใช้กำหนดเส้นทางของเว็บไซต์
                เช่น หน้าแรก หน้าเกี่ยวกับ และหน้าบทความ
                ผ่านไฟล์ <strong>routes/web.php</strong>
            </p>
        </div>

        <div class="btn-group">
            <a href="/" class="btn home">🏠 หน้าแรก</a>
            <a href="/about" class="btn about">👤 เกี่ยวกับเรา</a>
            <a href="/blog" class="btn blog">📰 บทความทั้งหมด</a>
        </div>

    </div>

</body>

</html>
