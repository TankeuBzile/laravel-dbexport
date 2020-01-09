<?php

namespace Bzilee\LaraDBExport;

use Illuminate\Http\Request;

class LaraDBExport{

    private static $options = null;

     /**
     *
     */
    public static function setOptions($options)
    {
       self::$options = $options;
    }
    /**
     *
     */
    public static function vcf(String $name_file, array $data)
    {
        $path = config('laraexport.path_to_export');

        $vcf_file = fopen($name_file.'.vcf', 'a+');

        foreach ($data as $value) {
            fputs($vcf_file,"BEGIN:VCARD\r\n");
            fputs($vcf_file,"VERSION:2.1\r\n");
            fputs($vcf_file,"N:".LaraDBExport::explodedName($value['fullname'])."\r\n");
            fputs($vcf_file,"FN:".$value['fullname']."\r\n");
            fputs($vcf_file,"TEL;CELL:".$value['phone_number']."\r\n");
            fputs($vcf_file,"END:VCARD\r\n");
        }

        fclose($vcf_file);
    }

     /**
     *
     */
    public static function explodedName($name)
    {
        $lastnames = explode(' ', $name);
        $result = [];
        foreach ($lastnames as  $key => $lastname) {
            if ($key <= 4){
                $result[] = $lastname;
            } else {
                break;
            }
        }
        return implode(";", $result);
    }
}
