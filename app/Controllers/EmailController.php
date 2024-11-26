<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class EmailController extends Controller
{
    public function fetchEmails()
    {
        // Your IMAP server connection details (Gmail in this case)
        $mailbox = '{imap.gmail.com:993/imap/ssl}INBOX'; // For Gmail
        $username = 'youremail@domain.com'; // Replace with your email
        $password = '123456'; // Replace with your email password

        // Open the IMAP connection
        $inbox = imap_open($mailbox, $username, $password);

        if ($inbox) {
            // Search for all emails in the inbox
            $emails = imap_search($inbox, 'ALL'); // Or 'UNSEEN' for unread emails only

            if ($emails) {
                rsort($emails); // Sort emails by date (newest first)
                $emailData = [];

                // Loop through each email and get the metadata
                foreach ($emails as $email_number) {
                    $overview = imap_fetch_overview($inbox, $email_number, 0);
                    $message = imap_fetchbody($inbox, $email_number, 2); // Fetch email body

                    // Save the email details into an array (you can save them in a database)
                    $emailData[] = [
                        'subject' => $overview[0]->subject,
                        'from' => $overview[0]->from,
                        'date' => $overview[0]->date,
                        'message' => $message,
                    ];
                }

                // You can now display the emails or store them in the database
                return view('email_list', ['emails' => $emailData]);
            } else {
                return 'No emails found.';
            }

            // Close the IMAP connection
            imap_close($inbox);
        } else {
            return 'Failed to connect to the email server.';
        }
    }
}
