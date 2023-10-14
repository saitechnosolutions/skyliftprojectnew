<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PHPMailerController extends Controller
{
    //


    public function mail(Request $request)
    {

        $username = $request->username;
        $phnumber = $request->input('phnumber');
        $email = $request->email;
        $location = $request->input('location');
        $textarea = $request->input('textarea');


        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {

            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = 'nvikram.sts@gmail.com';   //  sender username
            $mail->Password = 'aobrybjlsgxjrkxr';       // sender password
            $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
            $mail->Port = 587;                          // port - 587/465

            $mail->setFrom('nvikram.sts@gmail.com', 'vikram');
            $mail->addAddress('nvikram.sts@gmail.com');

            $mail->addReplyTo('nvikram.sts@gmail.com', 'vikram');


            $mail->isHTML(true);                // Set email content format to HTML

            $mail->Subject = $request->emailSubject;
            $mail->Body    = "<html>
            <head>
            <title>Enquiry Form</title>
            </head>
            <body>
            <h2>Hello Sir / Madam</h2>
            <p style='font-size:16px;'>Contact Enquiries
            </p>
            <h4 style='background-color:#e0e0eb;padding: 5px;'>Contact Details:</h4>
            <table style='border:2px solid;width:50%;border-collapse: collapse;'>
            <tr>
            <td style='border:1px solid;padding: 10px;text-align: left;'><h4>Name</h4></td>
            <td style='border:1px solid;padding: 10px;text-align: left;'>$username</td>
            </tr>


            <tr>
            <td style='border:1px solid;padding: 10px;text-align: left;'><h4>Phone Number</h4></td>
            <td style='border:1px solid;padding: 10px;text-align: left;'>$phnumber</td>
            </tr>
            <tr>
            <td style='border:1px solid;padding: 10px;text-align: left;'><h4>E-mail</h4></td>
            <td style='border:1px solid;padding: 10px;text-align: left;'>$email</td>
            </tr>
            <tr>
            <td style='border:1px solid;padding: 10px;text-align: left;'><h4>Location</h4></td>
            <td style='border:1px solid;padding: 10px;text-align: left;'>$location</td>
            </tr>
            <tr>
            <td style='border:1px solid;padding: 10px;text-align: left;'><h4>Message</h4></td>
            <td style='border:1px solid;padding: 10px;text-align: left;'>$textarea</td>
            </tr>


            </table>
            </body>
            </html>
            ";




            // $mail->AltBody = plain text version of email body;

            if( !$mail->send() ) {
                return back()->with("error", "Email not sent.")->withErrors($mail->ErrorInfo);
            }

            else {
                return back()->with("success", "Email has been sent.");
            }

        } catch (Exception $e) {
             return back()->with('error','Message could not be sent.');
        }
        return back()->with("success", "Email has been sent.");
    }





}
