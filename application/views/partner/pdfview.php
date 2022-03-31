<?php
    $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
    $pdf->SetTitle('INVOICE');
    $pdf->SetHeaderMargin(30);
    $pdf->SetTopMargin(20);
    $pdf->setFooterMargin(20);
    $pdf->SetAutoPageBreak(true);
    $pdf->SetAuthor('Author');
    $pdf->SetDisplayMode('real', 'default');

    $pdf->AddPage();
    $CI =& get_instance(); $CI->load->model("MainModel","admin"); 
    $currency=$data["transaction"]->currency_id;
    $symbols=$CI->admin->getRawRow("Select * from tbl_currency where id='$currency'")->symbol;
    $pdf->Write(0, 'Invoice : #TRAVPAY'.$data['transaction']->id, '', 0, 'L', true, 0, false, false, 0);
    
    $tbl = '
    <table class="table table-bordered " cellspacing="5" cellpadding="5" border="1">
        <tr>
        <th>Transaction Type</th><td>'. $data['transaction']->type.'</td>
    </tr>
    <tr><th>Transaction Mode</th><td>'. $data['transaction']->mode.'</td></tr>
                                                
    <tr><th>Transaction Currency</th><td>'. $symbols.'</td></tr>
                                                
    <tr><th>Transaction Amount</th><td>'. $data['transaction']->amount.'</td></tr>
    <tr><th>Transaction Status</th><td>'. $data['transaction']->status.'</td></tr>
    <tr><th>Transaction For</th><td>'. $data['transaction_detail']->transaction_for.'</td></tr>
    <tr><th>Transaction Type</th><td>'. $data['transaction_detail']->transaction_type.'</td></tr>

    </table>
    ';
    

    $pdf->writeHTML($tbl, true, false, false, false, '');
    $pdf->Output('Invoice.pdf', 'I');
?>