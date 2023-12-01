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

        <p><span style="font-weight: bold">PRACTICE NAME:</span> {{$name_of_the_practice}}</p>
        <p><span style="font-weight: bold">Provider's Name:</span> {{$provider_name}} 
        <span style="font-weight: bold">Email Address:</span> {{$email}}</p>
        <p><span style="font-weight: bold">Provider's Contact Number: (Phone)</span> {{$phone_number}} &nbsp; &nbsp; &nbsp;
        <p><span style="font-weight: bold">Clinic Address:</span> {{$dental_clinic_address}}</p>
        <p style="text-decoration: underline; font-weight: bold">
            CONTACT PERSON (Dedicated Person to Communicate)
        </p>
        <p>
            <span style="font-weight: bold">Name: </span> {{$contact_name}}
            <span style="font-weight: bold">Email Address: </span> {{$email_address}}
            <span style="font-weight: bold">Contact Number:</span> {{$phone_number}}
        </p>
        <p>
            <span style="font-weight: bold">PRACTICE MANAGEMENT SOFTWARE:  &nbsp;&nbsp;</span>{{$practice_management_software}}
            
        </p>

        <p>
            <span style="font-weight: bold">PHONE SYSTEM</span>
        </p>

        <p><span style="font-weight: bold">INTERNET UPLOAD SPEED: {{$internet_upload_speed}}</span> &nbsp; <span style="font-weight: bold">INTERNET DOWNLOAD SPEED: {{$download_speed}}</span></p>
        <p><span style="font-weight: bold">APPROXIMATE NUMBER OF PATIENTS PER DAY: {{$approximate_number_of_patients_per_day}}</span></p>
        <p><span style="font-weight: bold">NUMBER OF OPERATORY DOCTORS PER DAY:</span> &nbsp;<span style="font-weight: bold">NUMBER OF HYGIENISTS PER DAY: {{$number_of_per_hygienist_per_day}}</span></p>
        <p><span style="font-weight: bold">APPROXIMATE NUMBER OF NEW PATIENTS PER MONTH: {{$approximate_number_of_new_patients_per_month}}</span></p>
        <p><span style="font-weight: bold">CLINICAL HOURS AND DAY:</span> {{implode(', ', $clinical_hours_and_day)}}</p>
        <p><span style="font-weight: bold">DENTAL INSURANCE ACCEPTED:</span> {{implode(', ', $type_of_dental_insurance_accepted)}}</p>

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