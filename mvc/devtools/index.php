<?php
$dir = "/home/hkit/code/projects/quanlyhocphan/mvc";
$text = "dangKyHocPhan";
$actions = ["index" => "Đăng ký học phần", "chonhocky" => "Chọn học kỳ", "sua" => "Sửa học kỳ", "xoa" => "Xóa học kỳ"];
$controller = strtolower($text);
$model = $text . 'Model';


//
$txt_controller = file_get_contents(__DIR__ . '/controller.txt');
$txt_controller_action = file_get_contents(__DIR__ . '/controller_action.txt');
$controller_action = "";

$txt_model = file_get_contents(__DIR__ . '/model.txt');
$txt_model_action = file_get_contents(__DIR__ . '/model_action.txt');
$model_action = "";

$txt_view = file_get_contents(__DIR__ . '/view.txt');

mkdir($dir . '/views/' . $controller, 0777);
foreach ($actions as $action => $title) {
    $controller_action .= str_replace(array('[nameaction]', '[title]', '[model]', '[controller]'), array($action, $title, $model, $controller), $txt_controller_action);

    $model_action .= str_replace(array('[nameaction]'), array($action), $txt_model_action);

    file_put_contents($dir . '/views/' . $controller . '/' . $action . '.php', str_replace(array('[title]'), array($title), file_get_contents(__DIR__ . '/view.txt')));
}

//controller


file_put_contents($dir . '/controllers/' . $controller . '.php',  str_replace(array('[controller]', '[action]'), array($controller, $controller_action), $txt_controller));


//Model
file_put_contents($dir . '/models/' . $model . '.php',  str_replace(array('[model]', '[action]'), array($model, $model_action), $txt_model));
