<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            table {
                border-collapse: collapse;
            }
            table td {
                padding: 0px;
            }

        </style>
    </head>
    <body>
        <center>
            <p style="text-decoration: underline; font-weight: bold">
                By reading this form, you have agreed to keep this form
                confidential. It should not be sold, copied, distributed, or
                used in any form without ODCCLLC consent.
            </p>
            <h4 style="text-decoration: underline">
                Insurance Verification Form
            </h4>
        </center>
        <p style="text-decoration: underline; font-weight: bold">
            PROVIDER/PRACTICE
        </p>
        <p><span style="font-weight: bold">NAME OF THE PRACTICE:</span>&nbsp; {{$name_of_the_practice}}</p>
        <p><span style="font-weight: bold">Contact Name</span> &nbsp; {{$contact_name}}</p>
        <p><span style="font-weight: bold">Practice Address</span> &nbsp; {{$address_of_practice}}</p>
        <p><span style="font-weight: bold">Phone Number</span> &nbsp; {{$phone_number}}</p>
        <p><span style="font-weight: bold">Dental Practice Type</span> &nbsp; {{$type_of_dental_practice}}</p>
        </br>
        </br>
        <p>
            <span style="font-weight: bold">REFFERAL</span>
        </p>
        <p><span style="font-weight: bold">REFFERER NAME:</span> {{$name_referrer ?? ''}}</p>
        <p><span style="font-weight: bold">REFFERER EMAIL:</span> {{$email_referrer ?? ''}}</p>
        <p><span style="font-weight: bold">REFFERER CONTACT:</span> {{$contact_number_referrer ?? ''}}</p>
        </br>
        </br>
        </br>
        <p style="font-weight: bold">OASIS DENTAL CALL CENTER CONTACT INFORMATION</p>
        <p>WEBSITE: www.oasisdentalcallcenter.com</p>
        <p>EMAIL: JOEGABUCAN@PROTONMAIL.COM </p>
        <p>PHONE: (408) 307‐2633 </p>
        <p>OFFICE HOURS: MONDAY TO SATURDAY 8AM – 6PM (CALIFORNIA TIME)   </p>       
    </body>
</html>