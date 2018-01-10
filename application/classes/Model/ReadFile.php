<?php

/**
 *
 * @author faraz
 *        
 */
class Model_ReadFile implements Reader
{

    protected $file;

    /**
     */
    public function __construct($file)
    {
        $this->file = $file;
    }

    public function file_to_array(): array
    {
        $array = [];
        if ($this->file) {
            $fp = fopen(APPPATH . "input/{$this->file}", 'r');
            if ($fp) {
                $x = 0;
                while (($line = fgets($fp)) !== false) {
                    // echo $line;
                    // echo PHP_EOL;
                    $array[$x] = explode(' ', $line);
                    $x ++;
                }
                fclose($fp);
                return $array;
            }
            throw new Exception('can not open file: ' . $this->file);
        }
        throw new Exception('File not set');
    }
}

