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

        <!-- BASIC PROVIDER DETAILS -->
        <p>
            <span style="font-weight: bold">BASIC PROVIDER DETAILS</span>
        </p>
        <p><span style="font-weight: bold">TYPE OF DENTAL PRACTICE:</span> {{$type_of_dental_practice}}</p>
        <p><span style="font-weight: bold">NAME OF THE PRACTICE:</span> {{$name_of_the_practice}}</p>
        <!-- <p><span style="font-weight: bold">Provider's Name:</span> {{$provider_name ?? ''}}  -->
        <span style="font-weight: bold">EMAIL ADDRESS:</span> {{$email_address}}</p>
        <p><span style="font-weight: bold">DENTAL CLINIC ADDRESS:</span> {{$dental_clinic_address}}</p>


        </br>
        </br>
        <!-- PRACTICE MANAGEMENT DETAILS -->
        <p>
            <span style="font-weight: bold">PRACTICE MANAGEMENT DETAILS</span>
        </p>
        <p>
            <span style="font-weight: bold">PRACTICE MANAGEMENT SOFTWARE:  &nbsp;&nbsp;</span>{{$practice_management_software}}
        </p>
        <p>
            <span style="font-weight: bold">PRACTICE PHONE SYSTEM:  &nbsp;&nbsp;</span>{{$practice_phone_name}}
        </p>
        <p><span style="font-weight: bold">INTERNET UPLOAD SPEED: {{$internet_upload_speed}}</span> &nbsp; </p>
        <p><span style="font-weight: bold">INTERNET DOWNLOAD SPEED: {{$download_speed}}</span></p>

        </br>
        </br>
        <!-- DENTAL INSURANCE DETAILS -->
        <p>
            <span style="font-weight: bold">DENTAL INSURANCE DETAILS</span>
        </p>
        <p><span style="font-weight: bold">DENTAL INSURANCE ACCEPTED:</span> {{implode(', ', $type_of_dental_insurance_accepted)}}</p>
        <p><span style="font-weight: bold">CLINICAL HOURS AND DAY:</span> {{implode(', ', $clinical_hours_and_day)}}</p>

        </br>
        </br>
        <!-- APPROXIMATE NUMBERS PER -->
        <p>
            <span style="font-weight: bold">APPROXIMATE NUMBERS PER</span>
        </p>
        <p><span style="font-weight: bold">APPROXIMATE NUMBER OF PATIENTS PER DAY: {{$approximate_number_of_patients_per_day}}</span></p>
        <p><span style="font-weight: bold">NUMBER OF DOCTOR PER DAY:</span> {{ $number_of_doctor_per_day ?? '' }}</p>
        <p><span style="font-weight: bold">NUMBER OF HYGIENISTS PER DAY: {{$number_of_hygienist_per_day}}</span></p>
        <p><span style="font-weight: bold">APPROXIMATE NUMBER OF NEW PATIENTS PER MONTH: {{$approximate_number_of_new_patients_per_month}}</span></p>
       
        </br>
        </br>
        <!-- CONTACT INFO -->
        <p>
            <span style="font-weight: bold">CONTACT INFO</span>
        </p>
        <p><span style="font-weight: bold">DESIRED DATE TO START SERVICE: {{date("m-d-Y", strtotime($desired_date_to_start_service)) }}</span></p>
        <p><span style="font-weight: bold">CONTACT NAME: {{$contact_name}}</span></p>
        <p><span style="font-weight: bold">EMAIL: {{$email}}</span></p>
        <p><span style="font-weight: bold">PHONE NUMBER: {{$phone_number}}</span></p>


        <!-- <p>
            <span style="font-weight: bold">PHONE SYSTEM</span>
        </p>

       


        <p><span style="font-weight: bold">NUMBER OF OPERATORY DOCTORS PER DAY:</span> &nbsp;</p> -->

        
        </br>
        </br>
        <p>
            <span style="font-weight: bold">REFFERAL</span>
        </p>
        <p><span style="font-weight: bold">REFFERER NAME:</span> {{$name_referrer ?? ''}}</p>
        <p><span style="font-weight: bold">REFFERER EMAIL:</span> {{$email_referrer ?? ''}}</p>
        <p><span style="font-weight: bold">REFFERER CONTACT NUMBER:</span> {{$contact_number_referrer ?? ''}}</p>
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