<?php 
 
if(!function_exists('ConvertImagea'))
{
    function ConvertImagea( $attachments )
    {

        $links = "";
        $images = json_decode ($attachments); 
         if ( $images != null)
         {
             $index = 1 ; 
            foreach ($images as $attachment) 
            {
                if ( $attachment != null ) 
                {
                    $links .=  '<a href="' . base_url('uploads/' . $attachment) . '"  style="text-decoration:none" target="_blank">' . $index . '.مرفق</a><br>'; 
                }
                $index++;
            }
            
         } 
         else 
         {
             $links = "لاتوجد";
         }
          
         return $links ;
        
        
    }
}