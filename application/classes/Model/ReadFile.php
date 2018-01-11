<?php

/**
 *
 * @author faraz
 *        
 */
class Model_ReadFile implements ReaderInterface
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
                    // remove tail space
                    $line = trim($line);
                    // echo $line;
                    // echo PHP_EOL;
                    // convert line to array
                    $array_line = explode(' ', $line);
                    // convert array values to int
                    $array_line_int = array_map(function ($val) {
                        return (int) $val;
                    }, $array_line);
                    $array[$x] = $array_line_int;
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

