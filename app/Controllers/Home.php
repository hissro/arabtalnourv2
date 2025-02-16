<?php

namespace App\Controllers;
use App\Models\ExpenseRequestModel;

class Home extends BaseController
{
    public function index()  
    {

        $data = [];
        $session = session();
        $roleId  = $session->get('roleId') ;
        $user_id  = $session->get('id') ;
        
        $expenseRequestModel = new ExpenseRequestModel();

        
         // User use apps 
         if ( $roleId == 2)
         {
            $data['records'] = $expenseRequestModel->getExpenseRequestByUserId( $user_id );
             
         }
         else 
         {

            $statisct = $expenseRequestModel-> getRequestStatusCounts();
            $data['requests_reject']    = $statisct["requests_reject"] ;
			$data['requests_deferred']  = $statisct["requests_deferred"] ;
			$data['requests_complete']  = $statisct["requests_complete"] ;
			$data['requests_all']       =  $statisct["requests_all"] ;
			$data['requests_inprogress'] = $expenseRequestModel-> get_request_statistic_in_pgroress();

         }

       
        return view('general/__header').view('dashboard/dashboard_a' ,  $data ).view('general/__footer');
    }
}
