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
                {{$title}} FORM
            </h4>
        </center>

        <p>
            <span style="font-weight: bold">Name: </span> {{$name}}
        </p>
        <p>
        <span style="font-weight: bold">Email Address: </span> {{$email}}
        </p>
        <p>
        <span style="font-weight: bold">Contact Number:</span> {{$phone_number}}
        </p>
        <p>
            <span style="font-weight: bold">Company Name:  &nbsp;&nbsp;</span>{{$company}}
        </p>
        <p>
        <span style="font-weight: bold">Project Name:  &nbsp;&nbsp;</span>{{$project}}
        </p>
        <p>
        <span style="font-weight: bold">Project URL:  &nbsp;&nbsp;</span>{{$url_project}}
        </p>
        <p>
            <span style="font-weight: bold">Project Details</span>
        </p>

        <p><span style="font-weight: bold">Project Description: </span>{{$project_description}}</p>
        </br>
        </br>
        <p><span style="font-weight: bold">Project Budget: </span>{{$budget}}</p>

        <!-- </br>
        </br>
        <p>
            <span style="font-weight: bold">REFFERAL</span>
        </p>
        <p><span style="font-weight: bold">REFFERER NAME:</span> {{$name_referrer ?? ''}}</p>
        <p><span style="font-weight: bold">REFFERER EMAIL:</span> {{$email_referrer ?? ''}}</p>
        <p><span style="font-weight: bold">REFFERER CONTACT:</span> {{$contact_number_referrer ?? ''}}</p> -->
        </br>
        </br>
        </br>
        <p style="font-weight: bold">OASIS DENTAL CALL CENTER CONTACT INFORMATION</p>
        <p>OFFICE HOURS: MONDAY TO SATURDAY 8AM – 6PM (PH TIME)   </p>       
    </body>
</html>