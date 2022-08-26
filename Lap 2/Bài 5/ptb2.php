<?php
    $a = "";$b = "";$c = "";
    $ketqua = "";
    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])){
        $a = $_POST['a'];$b = $_POST['b'];$c = $_POST['c'];
        $ketqua = bac2($a,$b,$c);
    }
    function bac2($a , $b , $c){
        if($a == 0){
            if($b == 0){
                if($c == 0){
                    return "Vô số nghiệm";
                }else{
                    return "Vô nghiệm";
                }
            }else{
                return "X = ". -$c/$b;
            }
        }else{
            $delta = $b*$b - 4*$a*$c;
            if($delta < 0){
                return "Vô nghiệm";
            }else if($delta == 0){
                return "X = ". -$b/(2*$a);
            }else{
                return "X1 = ". round((-$b - sqrt($delta))/(2*$a),2) ." X2 = ". round((-$b + sqrt($delta))/(2*$a),2);
            }
        }
    }
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
    <form action="giai_pt_bac_2.php" method="post">
        <table width="806" border="1">
            <tr>
                <td colspan="4" bgcolor="#336699"><strong>Giải phương trình bậc 2</strong></td>
            </tr>
            <tr>
                <td width="83">Phương trình </td>
                <td width="236">
                    <input name="a" type="text" value="<?=htmlspecialchars($a);?>"/>
                    X^2 +
                </td>
                <td width="218"><label for="textfield3"></label>
                    <input type="text" name="b" id="textfield3" value="<?=htmlspecialchars($b);?>" />
                    X+
                </td>
                <td width="241"><label for="textfield"></label>
                    <input type="text" name="c" id="textfield" value="<?=htmlspecialchars($c);?>"/>
                    =0
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    Nghiệm
                    <label for="textfield2"></label>
                    <input name="textfield" type="text" id="textfield2" width="400" value="<?=htmlspecialchars($ketqua);?>" />
            </tr>
            <tr>
                <td colspan="4" align="center" valign="middle"><input type="submit" name="chao" id="chao"
                        value="Xuất" /></td>
            </tr>
        </table>
    </form>
</body>

</html>