<?php

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

  $f3->route('GET /exportTDTF', function($f3){
    $usernameCheck = $_SESSION['username'];
    $passwordCheck = $_SESSION['password'];
    if($usernameCheck == null || $passwordCheck == null){
      $f3->reroute('/login');
    }

    //Get the data from the global variable
    $exportData = $GLOBALS['memberDB']->allMembers();

    //Function to clean the data
    function cleanData(&$str)
    {
      $str = preg_replace("/\t/", "\\t", $str);
      $str = preg_replace("/\r?\n/", "\\n", $str);
      if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str). '"';
    }

    //Filename for download
    //$filename = "sorted_member_data_" . date('Ymd') . "_tdtf.txt";
    $filename = "CampMembersExport_" . date('Ymd-His') . ".tdtf.txt";
    header("Content-Disposition: attachment; filename=\"$filename\"");
    header("Content-Type: application/vnd.ms-excel");

    $flag = false;

    foreach($exportData as $row){
      if(!$flag) {
        //Display field/column names as first row
        echo implode("\t", array_keys($row)) . "\r\n";
        $flag = true;
      }
      array_walk($row, __NAMESPACE__ . '\cleanData');
      echo implode("\t", array_values($row)) . "\r\n";
    }
  });


  $f3->route('GET /exportExcel', function($f3){
    $usernameCheck = $_SESSION['username'];
    $passwordCheck = $_SESSION['password'];
    if($usernameCheck == null || $passwordCheck == null){
      $f3->reroute('/login');
    }

    //Get the data from the global variable
    $exportData = $GLOBALS['memberDB']->allMembers();


    require_once 'vendor/phpoffice/phpspreadsheet/src/Bootstrap.php';

    $helper = new Sample();
    if ($helper->isCli()) {
        $helper->log('This should only be run from a Web Browser' . PHP_EOL);
    
        return;
    }
    // Create new Spreadsheet object
    $spreadsheet = new Spreadsheet();

    // Set document properties
    $spreadsheet->getProperties()->setCreator('Camp Sambica')
      ->setLastModifiedBy('Camp Sambica')
      ->setTitle('Office 2007 XLSX Test Document')
      ->setSubject('Office 2007 XLSX Test Document')
      ->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
      ->setKeywords('office 2007 openxml php')
      ->setCategory('Result export file');

      $column = 1;
      $spreadsheet->setActiveSheetIndex(0)
      ->setCellValue("A$column","ID")
      ->setCellValue("B$column","FIRST")
      ->setCellValue("C$column","LAST")
      ->setCellValue("D$column","COUNSELOR")
      ->setCellValue("E$column","MONDAY")
      ->setCellValue("F$column","TUESDAY")
      ->setCellValue("G$column","WEDNESDAY")
      ->setCellValue("H$column","THURSDAY")
      ->setCellValue("I$column","FRIDAY")
      ->setCellValue("J$column","ACTIVITY 1")
      ->setCellValue("K$column","ACTIVITY 2")
      ->setCellValue("L$column","ACTIVITY 3")
      ->setCellValue("M$column","ACTIVITY 4")
      ->setCellValue("N$column","ACTIVITY 5")
      ->setCellValue("O$column","ACTIVITY 6")
      ->setCellValue("P$column","ACTIVITY 7")
      ->setCellValue("Q$column","ACTIVITY 8")
      ->setCellValue("R$column","ACTIVITY 9")
      ->setCellValue("S$column","ACTIVITY 10");

    
    // Add some data -- $exportData goes into here (foreach loop)
    $column = 2;
    foreach($exportData as $sub){
      $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue("A$column",$sub['member_id'])
        ->setCellValue("B$column",$sub['fname'])
        ->setCellValue("C$column",$sub['lname'])
        ->setCellValue("D$column",$sub['counselor'])
        ->setCellValue("E$column",$sub['monday'])
        ->setCellValue("F$column",$sub['tuesday'])
        ->setCellValue("G$column",$sub['wednesday'])
        ->setCellValue("H$column",$sub['thursday'])
        ->setCellValue("I$column",$sub['friday'])
        ->setCellValue("J$column",$sub['activityOne'])
        ->setCellValue("K$column",$sub['activityTwo'])
        ->setCellValue("L$column",$sub['activityThree'])
        ->setCellValue("M$column",$sub['activityFour'])
        ->setCellValue("N$column",$sub['activityFive'])
        ->setCellValue("O$column",$sub['activitySix'])
        ->setCellValue("P$column",$sub['activitySeven'])
        ->setCellValue("Q$column",$sub['activityEight'])
        ->setCellValue("R$column",$sub['activityNine'])
        ->setCellValue("S$column",$sub['activityTen']);
        $column++;
    }

        // Autofit column width
        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);


    // Rename worksheet
    $spreadsheet->getActiveSheet()->setTitle('CampMembersExport');

    // Set active sheet index to the first sheet, so Excel opens this as the first sheet
    $spreadsheet->setActiveSheetIndex(0);

    // Redirect output to a client’s web browser (Xlsx)
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    //header('Content-Disposition: attachment;filename="CamperMembersExport.xlsx"');
    header('Content-Disposition: attachment;filename="CampMembersExport_'.date("Ymd-His").'.xlsx"');
    header('Cache-Control: max-age=0');
    // If you're serving to IE 9, then the following may be needed
    header('Cache-Control: max-age=1');

    // If you're serving to IE over SSL, then the following may be needed
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
    header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
    header('Pragma: public'); // HTTP/1.0

    $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
    $writer->save('php://output');
    exit;
  });

  $f3->route('GET /exportExcelSchedule', function($f3){
    $usernameCheck = $_SESSION['username'];
    $passwordCheck = $_SESSION['password'];
    if($usernameCheck == null || $passwordCheck == null){
      $f3->reroute('/login');
    }

    //Get the data from the global variable
    $exportData = $GLOBALS['memberDB']->allMembers();


    require_once 'vendor/phpoffice/phpspreadsheet/src/Bootstrap.php';

    $helper = new Sample();
    if ($helper->isCli()) {
        $helper->log('This should only be run from a Web Browser' . PHP_EOL);
    
        return;
    }
    // Create new Spreadsheet object
    $spreadsheet = new Spreadsheet();

    // Set document properties
    $spreadsheet->getProperties()->setCreator('Camp Sambica')
      ->setLastModifiedBy('Camp Sambica')
      ->setTitle('Office 2007 XLSX Test Document')
      ->setSubject('Office 2007 XLSX Test Document')
      ->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
      ->setKeywords('office 2007 openxml php')
      ->setCategory('Result export file');

      $column = 1;
      $spreadsheet->setActiveSheetIndex(0)
      ->setCellValue("A$column","ID")
      ->setCellValue("B$column","FIRST")
      ->setCellValue("C$column","LAST")
      ->setCellValue("D$column","COUNSELOR")
      ->setCellValue("E$column","MONDAY")
      ->setCellValue("F$column","TUESDAY")
      ->setCellValue("G$column","WEDNESDAY")
      ->setCellValue("H$column","THURSDAY")
      ->setCellValue("I$column","FRIDAY");

    
    // Add some data -- $exportData goes into here (foreach loop)
    $column = 2;
    foreach($exportData as $sub){
      $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue("A$column",$sub['member_id'])
        ->setCellValue("B$column",$sub['fname'])
        ->setCellValue("C$column",$sub['lname'])
        ->setCellValue("D$column",$sub['counselor'])
        ->setCellValue("E$column",$sub['monday'])
        ->setCellValue("F$column",$sub['tuesday'])
        ->setCellValue("G$column",$sub['wednesday'])
        ->setCellValue("H$column",$sub['thursday'])
        ->setCellValue("I$column",$sub['friday']);
        $column++;
    }

    // Autofit column width
    $spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
    $spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
    $spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
    $spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
    $spreadsheet->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
    $spreadsheet->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
    $spreadsheet->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
    $spreadsheet->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
    $spreadsheet->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);

    // Rename worksheet
    $spreadsheet->getActiveSheet()->setTitle('CampMembersSchedule');

    // Set active sheet index to the first sheet, so Excel opens this as the first sheet
    $spreadsheet->setActiveSheetIndex(0);

    // Redirect output to a client’s web browser (Xlsx)
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    //header('Content-Disposition: attachment;filename="CamperMembersExport.xlsx"');
    header('Content-Disposition: attachment;filename="CampMembersSchedule_'.date("Ymd-His").'.xlsx"');
    header('Cache-Control: max-age=0');
    // If you're serving to IE 9, then the following may be needed
    header('Cache-Control: max-age=1');

    // If you're serving to IE over SSL, then the following may be needed
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
    header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
    header('Pragma: public'); // HTTP/1.0

    $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
    $writer->save('php://output');
    exit;
  });
