<?php
    $mang_so = [];
    if(isset($_POST['so_phan_tu'])){
        $count = $_POST['so_phan_tu'];
        $mang_so = randArray($count);
    }

    function randArray($count){
        $arr = [];
        for($i = 0; $i < $count; $i++){
            array_push($arr, rand(1, 100));
        }
        return $arr;
    }
    function xuat_mang($mang){
        $str = "";
        for($i = 0 ; $i < count($mang); $i++){
            $str .= $mang[$i] . " ";
        }
        echo $str;
    }
    function tim_max($mang){
        $max = $mang[0];
        for($i = 0; $i < count($mang); $i++){
            if($max < $mang[$i]){
                $max = $mang[$i];
            }
        }
        echo $max;
    }
    function tim_min($mang){
        $min = $mang[0];
        for($i = 0; $i < count($mang); $i++){
            if($min > $mang[$i]){
                $min = $mang[$i];
            }
        }
        echo $min;
    }
    function tinh_tong($mang){
        $tong = 0;
        for($i = 0; $i < count($mang); $i++){
            $tong += $mang[$i];
        }
        echo $tong;
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHÁT SINH MẢNG VÀ TÍNH TOÁN</title>
	<meta charset="utf-8">
	<style>
	*{
    font-family: Tahoma;
	}
	table{
	    width: 400px;
	    margin: 100px auto;
	}
	table th{
	    background: #66CCFF;
	    padding: 10px;
	    font-size: 18px;
	}
	</style>
</head>
<body>
	<form action="mang-2.php" method="POST">
		<table>
			<thead>
				<tr>
					<th colspan="2">PHÁT SINH MẢNG VÀ TÍNH TOÁN</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Nhập số phần tử:</td>
					<td><input type="text" name="so_phan_tu" width="100%" value="<?=$count;?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Phát sinh và tính toán"></td>
				</tr>
				<tr>
					<td>Mảng: </td>
					<td><input type="text" name="mang_so" disabled="disabled" value="<?php xuat_mang($mang_so); ?>"></td>
				</tr>
				<tr>
					<td>GTLN ( MAX ) trong mảng: </td>
					<td><input type="text" name="gtln" disabled="disabled" value="<?php tim_max($mang_so); ?>"></td>
				</tr>
				<tr>
					<td>GTNN ( MIN ) trong mảng: </td>
					<td><input type="text" name="ttnn" disabled="disabled" value="<?php tim_min($mang_so); ?>"></td>
				</tr>
				<tr>
					<td>Tổng mảng: </td>
					<td><input type="text" name="tong" disabled="disabled" value="<?php tinh_tong($mang_so); ?>"></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>