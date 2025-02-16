<?php

namespace App\Models;

use CodeIgniter\Model;

class ExpenseRequestModel extends Model
{
    protected $table = 'expense_requests';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'categories_id', 'user_id', 'account_number', 'request_date',
        'request_type', 'attachments', 'amount_numbers', 'amount_words',
        'previous_balance', 'reasons', 'issuer_name', 'manager_name',
        'requests_status', 'status', 'isDeleted'
    ];
    
    // Automatically set created_at and updated_at timestamps
    protected $useTimestamps = false; 



     // Fetch all expense requests with category details
     public function getExpenseRequests()
     {
         return $this->select('expense_requests.*, categories.name as category_name')  
                     ->join('categories', 'categories.id = expense_requests.categories_id', 'left')  
                     ->where('expense_requests.isDeleted', 0)  
                     ->findAll();
     }
 
     // Fetch a single expense request by ID
     public function getExpenseRequestById($id)
     {
         return $this->select('expense_requests.*, categories.name as category_name')
                     ->join('categories', 'categories.id = expense_requests.categories_id', 'left')
                     ->where('expense_requests.id', $id)
                     ->where('expense_requests.isDeleted', 0)
                     ->first();
     }



     // Fetch a single expense request by User id 
     public function getExpenseRequestByUserId($user_id)
     {
         return $this->select('expense_requests.*, categories.name as category_name , request_types.name as typename')
                     ->join('categories', 'categories.id = expense_requests.categories_id', 'left')
                     ->join('request_types', 'request_types.id = expense_requests.request_type')
                     ->where('expense_requests.user_id', $user_id)
                     ->where('expense_requests.isDeleted', 0)
                     ->asObject()
                     ->findAll();
     }



    
     // Custom method to get the count of requests grouped by status
     public function getRequestStatusCounts()
     {
         // Define the mapping for status codes to their names
         $statusMapping = [
             -1 => 'requests_reject',
             -2 => 'requests_deferred',
             5  => 'requests_complete',
         ];
 
         // Initialize counts for the different statuses
         $counts = [
             'requests_reject' => 0,
             'requests_deferred' => 0,
             'requests_complete' => 0,
             'requests_all' => 0,
         ];
 
         // Query to count the different status occurrences
         $results = $this->select('requests_status, COUNT(*) as count') ->groupBy('requests_status') ->findAll();
 
         // Loop through the results and update the counts
         foreach ($results as $row) 
         {

             $statusCode = $row['requests_status'];
             $count = $row['count'];
 
             if (array_key_exists($statusCode, $statusMapping)) 
             {
                 $counts[$statusMapping[$statusCode]] = $count;
             }
 
             // Count all requests as well
             $counts['requests_all'] += $count;
         }
 
         return $counts;
     }


     public function get_request_statistic_in_pgroress(  ) 
     {
          
        $sql = "
        SELECT * 
        FROM expense_requests
        WHERE requests_status IN (1, 2, 3, 4)
         ";

        // Execute the raw query
        $query = $this->query($sql);

        // Return the number of rows in the result
        return $query->getNumRows();
        
      }

     

}
