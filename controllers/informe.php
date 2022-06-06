<?php

class Informe extends controller{


    public function __construct(){
        parent::__construct();
    }


    public function DetallesCliente(){
        $pdf = new TCPDF();
        ob_end_clean();
        $pdf->setHeaderMargin(10);
        $pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "Reporte #1","Cliente");
        $pdf->setMargins(10,30,20);
        $cliente= $this->getModel()->DetallesCliente();
        $contenido = '<table border="1" style=" padding: 2">
        <tr>
        <td>id</td>
        <td>nombre</td>
        <td>apellido</td>
        <td>informacion de contacto</td>
        </tr>
         ';
 
        foreach ($cliente as $key => $value) {
            $contenido.='<tr>
            <td>'.$value[0].'</td>
            <td>'.$value[1].'</td>
            <td>'.$value[2].'</td>
            <td>'.$value[3].'</td>
            </tr>';
 
 
        }
        $contenido.='</table>';
        
        $pdf-> addPage();
        $pdf->writeHtml($contenido);
        $pdf-> output("reporte de clientes.pdf");
 
         }



         public function pedidos() {
            $pdf = new TCPDF();
            ob_end_clean();
            $pdf->setHeaderMargin(10);
            $pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "Listado de pedidos ");
            $pdf->setMargins(1,30,1);
        $pedido= $this->getModel()->pedidos();
            //print_r($pedido);
        $contenido = '<table border="1" style="background-color: #fff">
        <tr>
        <td>id</td>
        <td>nombre producto</td>
        <td>cantidad</td>
        <td>precio</td>
        <td>total</td>
        <td>fecha pedido</td>
        <td>fecha entrega</td>
        <td>metodo pago</td>
        <td>direccion </td>
        </tr>
        ';
 
        foreach ($pedido as $key => $value) {
            $contenido.='<tr>
            <td>'.$value[0].'</td>
            <td>'.$value[1].'</td>
            <td>'.$value[2].'</td>
            <td>'.$value[3].'</td>
            <td>'.$value[4].'</td>
            <td>'.$value[5].'</td>
            <td>'.$value[6].'</td>
            <td>'.$value[7].'</td>
            <td>'.$value[8].'</td>
            
            
            
            
            </tr>';
 
 
        }
        $contenido.='</table>';


        $pdf-> addPage();
        $pdf->writeHtml($contenido);
        $pdf-> output("reporte de Pedido.pdf");
     
         }




         public function detalles(){
            
            if (!empty($_POST)) {
                
                $pdf = new TCPDF();
                
                //encabezado
                $pdf->setHeaderMargin(10);
                $pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "Reporte #5"," detalles");
            
                //contenido
                $pdf->setMargins(1,30,1);
                $detalles= $this->getModel()->detalles($_POST['txtCodigo']);
                
                //    
                
                $contenido='<table border="1">
                <tr>
                <td>nombre</td>
                <td>apellido</td>
                
                
                <td>producto</td>
                <td>cantidad</td>
                
                <td>total</td>
                <td>fecha pedido</td>
                <td>entrega</td>
                <td>metodo pago</td>
                <td>direccion entrega</td>
                </tr>
                <tr><td>'.$detalles[0][2].' </td>
                <td>'.$detalles[0][3].' </td>
                <td>'.$detalles[0][4].' </td>
                <td>'.$detalles[0][6].' </td>
                <td>'.$detalles[0][8].' </td>
                <td>'.$detalles[0][9].' </td>
                <td>'.$detalles[0][10].' </td>
                <td>'.$detalles[0][11].' </td>
                <td>'.$detalles[0][12].' </td>
                </tr></table>';
                
                
                
                $pdf-> addPage();
                $pdf->writeHtml($contenido);
                $pdf-> output("detalles por pedido.pdf");
            
            }else{
                $pagina="informes/reportedetalles";
                $this->getView()->loadView($pagina); 
            
            }
                
            }
        
        
        

            public function existencia (){
                $pdf = new TCPDF();
                ob_end_clean();
                $pdf->setHeaderMargin(10);
                $pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "Reporte #4","productos");
                $pdf->setMargins(10,30,20);
                $existencia = $this->getModel()->existencia();
                $contenido = '<table border="1" style=" padding: 2">
                <tr>
                <td>id</td>
                <td>nombre</td>
                <td>Proveedor</td>
                <td>tipo</td>
                <td>precio</td>
                <td>fecha de entrada</td>
                <td>fecha expiracion</td>
                
                </tr>
                 ';
         
                foreach ($existencia as $key => $value) {
                    $contenido.='<tr>
                    <td>'.$value[0].'</td>
                    <td>'.$value[1].'</td>
                    <td>'.$value[2].'</td>
                    <td>'.$value[4].'</td>
                    <td>'.$value[5].'</td>
                    <td>'.$value[6].'</td>
                    <td>'.$value[6].'</td>
                    
                    </tr>';
         
         
                }
                $contenido.='</table>';
                
                $pdf-> addPage();
                $pdf->writeHtml($contenido);
                $pdf-> output("reporte de productos.pdf");
         
                 }
        







 }


    ?>