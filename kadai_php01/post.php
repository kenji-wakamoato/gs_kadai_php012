<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1200, initial-scale=1.0">
    <!-- css読み込み -->
    <link rel="stylesheet" href="css/style.css">
    <title>データ入力</title>
</head>

<body>
    <form action="write.php" method="post" enctype="multipart/form-data">
        <table>
            <thead>
                <tr>
                    <th>案件名</th>
                    <th>担当</th>
                </tr>
                <tr>
                    <td><input type="text" name="anken"></td>
                    <td><input type="text" name="tanto"></td>
                </tr>
                <tr>
                    <th>施工項目</th>
                    <th>数量</th>
                    <th>金額</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                <!-- 配列-->
                
                    <td><input type="text" name="koumoku[]"></td>
                    <td><input type="text" name="suuryou[]"></td>
                    <td><input type="text" name="kingaku[]"></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td><button id="add" type="button">追加</button></td>
                </tr>
            </tfoot>
        </table>
        <input type="submit" name="send" value="送信">
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
    
    // クリックイベント
    $(function () {
        $('button#add').click(function () {
            var tr_form = '' +
                '<tr>' +
                '<td><input type="text" name="koumoku[]"></td>' +
                '<td><input type="text" name="suuryou[]"></td>' +
                '<td><input type="text" name="kingaku[]"></td>' +
                '</tr>';
            $(tr_form).appendTo($('table > tbody'))
        });
    });
</script>

</html>