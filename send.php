<?php
    // ارسال بيانات النموذج عبر البريد الإلكتروني
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $to = "aitidlsb@gmail.com";
        $subject = "رسالة من موقع الاتصال";
        $body = "اسم المرسل: $name\n\nالبريد الإلكتروني: $email\n\nالرسالة:\n$message";
        mail($to, $subject, $body);
        echo "<p>تم إرسال رسالتك بنجاح، شكراً لتواصلك معنا.</p>";
    }
	// تحديد عنوان صفحة المشاريع
    if (isset($_POST["project_title"])) {
        $project_title = $_POST["project_title"];
        header("Location: /projects.php?title=$project_title");
        exit();
    }
	// استخراج عنوان صفحة المشروع من العنوان
    if (isset($_GET["title"])) {
        $project_title = $_GET["title"];
        echo "<h1>$project_title</h1>";
    }
?>