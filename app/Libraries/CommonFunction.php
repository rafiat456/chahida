<?php

namespace App\Libraries;
use App\EmailQueue;
use App\Category;


class CommonFunction
{

    public static function getParentCategory(){
        $parentcategory = Category::where('parent_id', '=', 0)
        ->where('cat_status',1)->get();
        return $parentcategory;
    }

    public static function  getAllCategory(){
         $allCategories = Category::where('cat_status',1)->pluck('cat_name','id')->all();
         return $allCategories;
    }

	public static function sendMessageFromSystem($param = array())
    {
        $emailYes = (empty($param[0]['emailYes']) ? '1' : $param[0]['emailYes']);
        $emailBody = (empty($param[0]['emailBody']) ? 'No Email Body' : $param[0]['emailBody']);
        $emailHeader = (empty($param[0]['emailHeader']) ? '0' : $param[0]['emailHeader']);
        $emailAdd = (empty($param[0]['emailAdd']) ? 'base@gmail.com' : $param[0]['emailAdd']);
        $emailSubject = (empty($param[0]['emailSubject']) ? 'No Subject' : $param[0]['emailSubject']);

        if ($emailYes == 1) {

            $email_content_html = <<<HERE
          <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Chahida</title>
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <style type="text/css">
        *{
            font-family: Vollkorn;
        }
    </style>
</head>


<body>
<table width="80%" style="background-color:#D2E0E8;margin:0 auto; height:50px; border-radius: 4px;">
    <thead>
    <tr>
        <td style="padding: 10px; border-bottom: 1px solid rgba(0, 102, 255, 0.21);">
            
            <h4 style="text-align:center">
               Chahida
            </h4>
        </td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="margin-top: 20px; padding: 15px;">
            <!--Dear Applicant,-->
            Dear User,
            <br/><br/>
          $emailBody

            <br/><br/>
        </td>
    </tr>
    <tr style="margin-top: 15px;">
        <td style="padding: 1px; border-top: 1px solid rgba(0, 102, 255, 0.21);">
            <h5 style="text-align:center">All right reserved by Chahida Framework 2019.</h5>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
HERE;

            $emailQueue = new EmailQueue();
            $emailQueue->email_content = $email_content_html;
            $emailQueue->email_to = $emailAdd;
            $emailQueue->email_subject = $emailSubject;
            $emailQueue->attachment = '';
            $emailQueue->secret_key = '';
            $emailQueue->save();
        }
       
    }
}