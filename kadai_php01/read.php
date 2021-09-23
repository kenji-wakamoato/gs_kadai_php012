<style type="text/css">
    th,td {
        border: solid 1px;              /* 枠線指定 */
    }
    table {
        border-collapse:  collapse;     /* セルの線を重ねる */
    }
</style>

<?php
ini_set('display_errors', "On");

$file = "data.csv";
$handle = fopen($file, "r");
echo "<table>\n";
// １行MAX1000バイトづつ読み込む データの区切りはカンマ、文字は”を指定
$row = 0;
$sum = 0;
while (($data = fgetcsv($handle, 1000, ",", '"')) !== false ) {

    echo "\t<tr>\n";
    $tag = "td";
    // 1行目はヘッダーなので、thで囲む
    if ($row == 0) {
        $tag = "th";
    }
    for ($i = 0; $i < count($data); $i++) {
        echo "\t\t<{$tag}>{$data[$i]}</{$tag}>\n";
        if ($i == 4 && $row <>0) {
            $sum += $data[$i];
        }
    }
    echo "\t</tr>\n";
    $row++;
}
echo "\t<tr>\n";
echo "\t\t<td colspan='4'>合計</td>\n";
echo "\t\t<td>{$sum}</td>\n";
echo "\t</tr>\n";
echo "</table>\n";
    fclose($handle);
    ?>