<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เกี่ยวกับเรา</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background-color: #4facfe;
            background-image: linear-gradient(135deg, #4facfe, #00f2fe);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 90%;
            max-width: 850px;
            background: #ffffff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .2);
            text-align: center;
        }

        h2 {
            color: #0d6efd;
            font-size: 36px;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            line-height: 1.8;
            font-size: 18px;
            margin-bottom: 30px;
        }

        .info-box {
            background: #f5f5f5;
            border-left: 6px solid #0d6efd;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            text-align: left;
        }

        .info-box h3 {
            color: #0d6efd;
            margin-bottom: 10px;
        }

        .info-box ul {
            padding-left: 20px;
            color: #555;
            line-height: 1.8;
        }

        .btn-group {
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
            opacity: .9;
            transform: scale(1.05);
        }
    </style>
</head>

<body>

    <div class="container">

        <h2>👤 เกี่ยวกับเรา</h2>

        <p>
            เว็บไซต์นี้ถูกพัฒนาด้วย <strong>Laravel Framework</strong>
            เพื่อใช้ศึกษาการสร้างเว็บแอปพลิเคชันตามหลัก MVC
            และเรียนรู้การใช้งาน Routing, Blade Template และ Controller
        </p>

        <div class="info-box">
            <h3>📌 จุดประสงค์ของเว็บไซต์</h3>
            <ul>
                <li>ศึกษาการใช้งาน Laravel Framework</li>
                <li>เรียนรู้การสร้างหน้าเว็บด้วย Blade Template</li>
                <li>ทดลองการใช้งาน Routing และ MVC</li>
                <li>พัฒนาเว็บไซต์ให้มีความสวยงามและใช้งานง่าย</li>
            </ul>
        </div>

        <div class="btn-group">
            <a href="/" class="btn home">🏠 หน้าแรก</a>
            <a href="/about" class="btn about">👤 เกี่ยวกับเรา</a>
            <a href="/blog" class="btn blog">📰 บทความทั้งหมด</a>
        </div>

    </div>

</body>

</html>
