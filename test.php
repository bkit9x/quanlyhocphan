<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\IReadFilter;

$inputFileType = 'Xlsx';
$inputFileName = __DIR__ . '/upload/file.xlsx';
$sheetname = 'Mau DT05b';
$rowstart = 6;
$rowend = 76;

$range = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG', 'AH', 'AI', 'AJ', 'AK', 'AL', 'AM', 'AN', 'AO', 'AP', 'AQ', 'AR', 'AS', 'AT', 'AU', 'AV', 'AW', 'AX', 'AY', 'AZ', 'BA', 'BB', 'BC', 'BD', 'BE', 'BF', 'BG', 'BH', 'BI', 'BJ', 'BK', 'BL', 'BM', 'BN', 'BO', 'BP', 'BQ', 'BR', 'BS', 'BT', 'BU', 'BV', 'BW', 'BX', 'BY', 'BZ', 'CA', 'CB', 'CC', 'CD', 'CE', 'CF', 'CG', 'CH', 'CI', 'CJ', 'CK', 'CL', 'CM', 'CN', 'CO', 'CP', 'CQ', 'CR', 'CS', 'CT', 'CU', 'CV', 'CW', 'CX', 'CY', 'CZ', 'DA', 'DB', 'DC', 'DD', 'DE', 'DF', 'DG', 'DH', 'DI', 'DJ', 'DK', 'DL', 'DM', 'DN', 'DO', 'DP', 'DQ', 'DR', 'DS', 'DT', 'DU', 'DV', 'DW', 'DX', 'DY', 'DZ', 'EA', 'EB', 'EC', 'ED', 'EE', 'EF', 'EG', 'EH', 'EI', 'EJ', 'EK', 'EL', 'EM', 'EN', 'EO', 'EP', 'EQ');

class MyReadFilter implements IReadFilter
{
    private $startRow;

    private $endRow;

    private $range;

    public function __construct($startRow, $endRow, $range)
    {
        $this->startRow = $startRow;
        $this->endRow = $endRow;
        $this->range = $range;
    }

    public function readCell($column, $row, $worksheetName = '')
    {
        if ($row >= $this->startRow && $row <= $this->endRow) {
            if (in_array($column, $this->range)) {
                return true;
            }
        }

        return false;
    }
}

$filterSubset = new MyReadFilter($rowstart, $rowend, $range);

$reader = IOFactory::createReader($inputFileType);
$reader->setReadFilter($filterSubset);
$spreadsheet = $reader->load($inputFileName);

$sheetData = $spreadsheet->getActiveSheet()->toArray();

$diem = array();
for ($row = 9; $row <= $rowend; $row++) {
    if ($sheetData[$row][1]) {
        $mssv = $sheetData[$row][1];
        $diem[$mssv] = array();

        for ($col = 3; $col < count($sheetData[$row]) - 1; $col++) {
            $value = $sheetData[$row][$col];
            if (is_numeric($value)) {
                $mamon = $sheetData[5][$col - 1];
                $mamon = explode(' ', $mamon)[0];
                $diem[$mssv][$mamon] = $value;
            }
        }
    }
}
var_dump($diem);
