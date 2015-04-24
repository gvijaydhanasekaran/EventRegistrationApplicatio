<style type="text/css">
    body {
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font-size: 9pt;
        font-family:"Lohit Tamil" important;
    }
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 21cm;
        /*min-height: 29.7cm;*/
        padding: 1cm;
        margin: 1cm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        /*padding: 0.5cm;*/
        /*border: 1px red solid;*/
        height: 257mm;
        /*outline: 1cm #FFEAEA solid;*/
    }
    @page {
        /*size: A4;*/
        margin: 0;
    }
    @media print {
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }   
    
    .print_new_centered_text{
        text-align:center;
    }

    .heading_print{
        margin-top:10px;
        margin-bottom:0px;
        font-size:24px;
        font-weight:bold;
    }
    
    .subheading_print{
        margin-top:10px;
        margin-bottom:5px;
        font-size:16px;
        font-weight:bold;
    }

    .box {
        background: white;
        box-shadow: 6px 6px 6px 0px rgba(0,0,0,0.15);
        border-radius: 5px;
        position: relative;
    }
    
    .tables{
        padding: 10px;
        padding-top: 10px;
    }
    
    .table{
        padding-bottom: 0px;
        font-size: 9pt;
    } 
    
    .table td{
        padding-top: 3px;
    }
    
    td.dotborder{
        border-bottom:1px dashed #000000;
    }
    
    .bold{
        font-weight: bold;
    }
    
    .jTable{
        font-size:8.5pt;    
    }
    
    .jTable .cell_center{
        vertical-align:middle;
        text-align:center; 
        padding: 3pt;
    }
    
    .jTable td{
        border:1px solid black;     
        height: 20px;
        overflow: hidden;
        height:60;           
    }
    
    .note{
        font-size: 8pt;
        padding-left: 25px;        
        padding-right: 25px;
        text-align: justify;
    }
    
    #border_remove{
        border-bottom:none;
    }
    
    #border_remove1{
        border-top:none;
    }
    
    .tablemodel td, .tablemodel th {
        border:1px solid #000;
    }
    
    #mprint{
        font-size:20px !important;
        float: right;
        padding: 5px; 
        margin-top: -5px;
        background-color:#00F0FF;
        color:red;
    }
</style>
<div class="page">
<?php echo $content; ?>
</div>

