<?php

class FileUtility {
    
    public static function writeFile($fname, $data) {
        $file = fopen($fname, 'w');
        foreach ($data as $row) {
            fputcsv($file, $row);
        }
        fclose($file);
    }

    public static function readFileContent($fname) {
        $file = fopen($fname, 'r');
        $data = [];
        while (($row = fgetcsv($file)) !== false) {
            $data[] = $row;
        }
        fclose($file);
        return $data;
    }
}
?>