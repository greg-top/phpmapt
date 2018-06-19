<?php
//old implementation
class Printer
{
    public function print()
    {
        echo 'printing..';
    }
}

class Document
{
    public function  setPrinter( $printer )
    {
        $this->printer = $printer;
    }

    public function print()
    {
        $this->printer->print();
    }

    //other functions
}

$document = new Document();
$document->setPrinter( new Printer() );
$document->print();

//new implementation with Anonymous class - for small classes up to 30 lines of code

#Below class is not required as anonymous class in line 57 will take over this functionality
//class NetworkPrinter
//{
//    public function print()
//    {
//        echo 'printing..';
//    }
//}

class PdfDocument
{
    public function  setPrinter( $printer )
    {
        $this->printer = $printer;
    }

    public function print()
    {
        $this->printer->print();
    }

    //other functions
}

$pdfDocument = new PdfDocument();
$printer = new class {
    public function print()
    {
        echo 'printing..';
    }
};
$pdfDocument->setPrinter( $printer );
$pdfDocument->print();