<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

    <h1>書き込みしました。</h1>
    <h2> data.csvを確認してください</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="post.php">戻る</a></li>
    </ul>
<?php
ini_set('display_errors', "On");
/**
 * Undocumented function
 *
 * @param $data_list array
 *
 * @return void
 */
// 案件と担当者が必須の処理
if (isset($_POST['anken']) && isset($_POST['tanto'])) {

    
    
    // ファイル名
    $csvFileName = 'data.csv';
    // 書き込み専用でファイルを開く
    $res = fopen($csvFileName, 'w');
    $header = ["案件名", "担当者", "項目", "数量", "金額"];
    fputcsv($res, $header);

    for ($i = 0; $i < count($_POST['koumoku']); $i++) {
        $data = array();
        array_push($data, $_POST['anken']);
        array_push($data, $_POST['tanto']);
        array_push($data, $_POST['koumoku'][$i]);
        array_push($data, $_POST['suuryou'][$i]);
        array_push($data, $_POST['kingaku'][$i]);
        
        // ファイルに書き出しをする
        fputcsv($res, $data);
    }

    

    // ファイルを閉じる
    fclose($res);
}
?>