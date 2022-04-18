
<form method="post" action="">
    <select name = "cmd">
        <option value="zip">zip</option>
        <option value="tar">tar</option>
        <option value="7z">7z</option>
    </select>
    文件名<input type="text" name="filename">
    <input type="submit">
</form>
<?php

    $outpath="/media/sda1/unzip";
    if (array_key_exists("filename", $_POST)) {
        $cmd = $_POST["cmd"];
        $filename = $_POST["filename"];
        switch ($cmd)
        {
            case "tar":
            $rawcmd = "tar -zxvf ".$filename." -C ".$outpath;
            break;
            case "zip":
            $rawcmd = "unzip -n -d ".$outpath." ".$filename;
            break;
            case "7z":
            $rawcmd = "7z x ".$filename." -o".$outpath." -aou";
            break;
            default:
            $rawcmd = "echo error cmd";
            break;
        }

        $fullcmd = "nohup ".$rawcmd." > ".$outpath."/../unzip.txt 2>&1 &";

        exec($fullcmd);

        echo  $fullcmd;
    } else {
        $str = file_get_contents($outpath."/../unzip.txt");
        $str = str_replace ( "\n" , "<br/>" , $str);
        echo  $str;
    }
?>