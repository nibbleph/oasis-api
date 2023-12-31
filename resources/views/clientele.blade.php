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

        <p><span style="font-weight: bold">PRACTICE NAME:</span> {{$practice_name}}</p>
        <p><span style="font-weight: bold">Provider's Name:</span> {{$providers_name ?? $provider_name}} Email Address: {{$email}}</p>
        <p><span style="font-weight: bold">Provider's Contact Number: (Phone)</span> {{$tel_number}} &nbsp; &nbsp; &nbsp; <span style="font-weight: bold">(Mobile)</span> {{$mobile_number}}</p>
        <p><span style="font-weight: bold">Tax Number:</span> {{$tax_number}} <span style="font-weight: bold">NPI Number:</span> {{$npi_number}} <span style="font-weight: bold"> License Number:</span> {{$license_number}}</p>
        <p><span style="font-weight: bold">Clinic Address:</span> {{$clinic_address}}</p>
        <p style="text-decoration: underline; font-weight: bold">
            CONTACT PERSON (Dedicated Person to Communicate)
        </p>
        <p>
            <span style="font-weight: bold">Name: </span> {{$contact_person_name}}<span style="font-weight: bold"> Email Address: </span> {{$contact_person_email}}
            <span style="font-weight: bold">Contact Number:</span> {{$contact_person_number}}
        </p>
        <p>
            <span style="font-weight: bold">PRACTICE MANAGEMENT SOFTWARE:  &nbsp;&nbsp;</span>{{$practice_management_software}}
            
        </p>

        <p>
            <span style="font-weight: bold">PHONE SYSTEM</span>
        </p>

        <p><span style="font-weight: bold">INTERNET UPLOAD SPEED: </span> &nbsp; <span style="font-weight: bold">INTERNET DOWNLOAD SPEED: </span></p> -->
        <p><span style="font-weight: bold">APPROXIMATE NUMBER OF PATIENTS PER DAY:</span></p>
        <p><span style="font-weight: bold">NUMBER OF OPERATORY DOCTORS PER DAY:</span> &nbsp;<span style="font-weight: bold">NUMBER OF HYGIENISTS PER DAY:</span></p>
        <p><span style="font-weight: bold">APPROXIMATE NUMBER OF NEW PATIENTS PER MONTH:</span></p>
        <p><span style="font-weight: bold">TYPE OF PATIENT INSURANCE: </span> {{implode(', ', $type_of_patient_insurance)}}</p>
        <p><span style="font-weight: bold">CLINICAL HOURS AND DAY:</span> {{implode(', ', $clinical_hours_and_day)}}</p>
        <p><span style="font-weight: bold">Desired date to start service:</span></p>
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