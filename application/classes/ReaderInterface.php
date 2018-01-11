<?php

/**
 *
 * @author faraz
 *        
 */
interface ReaderInterface
{

    /**
     * Read given source and return a 2D array
     *
     * @return array
     */
    public function file_to_array(): array;
}

