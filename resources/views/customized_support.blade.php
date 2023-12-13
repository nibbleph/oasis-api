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
        <p style="text-decoration: underline; font-weight: bold">
            BASIC PROVIDER DETAILS
        </p>
        <p><span style="font-weight: bold">TYPE OF DENTAL PRACTICE:&nbsp; &nbsp; </span> {{$type_of_dental_practice}}</p>
        <p><span style="font-weight: bold">NAME OF THE PRACTICE:&nbsp; &nbsp; </span> {{$name_of_the_practice}} 
        <span style="font-weight: bold">PROVIDER'S NAME:&nbsp; &nbsp; </span> {{$provider_name}}</p>
        <p><span style="font-weight: bold">EMAIL ADDRESS: &nbsp; &nbsp; </span> {{$email_address}} &nbsp; &nbsp; &nbsp;
        </br>
        </br>
        <p style="text-decoration: underline; font-weight: bold">
            PRACTICE MANAGEMENT DETAILS
        </p>
        <p><span style="font-weight: bold">PRACTICE MANAGEMENT SOFTWARE:  &nbsp;&nbsp;</span>{{$practice_management_software}}</p>
        <p><span style="font-weight: bold">PRACTICE PHONE SYSTEM: &nbsp;&nbsp;</span>{{$practice_phone_system}}</p>
        <p><span style="font-weight: bold">INTERNET UPLOAD SPEED: &nbsp; &nbsp; </span> &nbsp; {{$internet_upload_speed}}</p>
        <p><span style="font-weight: bold">INTERNET DOWNLOAD SPEED: &nbsp; &nbsp; </span>{{$download_speed}}</p>

        </br>
        </br>
        <p style="text-decoration: underline; font-weight: bold">
            DENTAL INSURANCE DETAILS
        </p>
        <p><span style="font-weight: bold">DENTAL INSURANCE ACCEPTED:</span> {{implode(', ', $type_of_dental_insurance_accepted)}}</p>
        <p><span style="font-weight: bold">CLINICAL HOURS AND DAY:</span> {{implode(', ', $clinical_hours_and_day)}}</p>
        </br>
        </br>
        <p style="text-decoration: underline; font-weight: bold">
            APPROXIMATE NUMBERS PER
        </p>
        <p><span style="font-weight: bold">APPROXIMATE NUMBER OF PATIENTS PER DAY: {{$approximate_number_of_patients_per_day}}</span></p>
        <p><span style="font-weight: bold">APPROXIMATE NUMBER OF PATIENTS PER MONTH: {{$approximate_number_of_new_patients_per_month}}</span></p>
        <p><span style="font-weight: bold">NUMBER OF DOCTORS PER DAY:</span>{{$number_of_doctor_per_day ?? ''}} </p>
        <p><span style="font-weight: bold">NUMBER OF HYGENIST PER DAY:</span> {{$number_of_hygenist_per_day ?? ''}} &nbsp;
        <p><span style="font-weight: bold">NUMBER OF OPERATOR PER DAY:</span> {{$number_of_operator_per_day ?? ''}} &nbsp;
        <p><span style="font-weight: bold">HYBRID FUNCTIONS: {{$hybrid_function}}</span></p>
        </br>
        </br>
        <p style="text-decoration: underline; font-weight: bold">
            NUMBER OF ADMINISTRATIVE SUPPORT
        </p>


        <p><span style="font-weight: bold">NUMBER OF BILLER:</span> {{$biller ?? ''}}</p>
        <p><span style="font-weight: bold">NUMBER OF FRONT DESK:</span> {{$front_desk}}</p>
        <p><span style="font-weight: bold">NUMBER OF VERIFIER:</span> {{$verifier}}</p>
        <p><span style="font-weight: bold">NUMBER OF TREATMENT COORDINATOR:</span> {{$treatment_coordinator}}</p>
        <p><span style="font-weight: bold">NUMBER OF TREATMENT MANAGE:</span> {{$treatment_manager}}</p>
        </br>
        </br>
        <p>
            <span style="font-weight: bold">CONTACT INFO</span>
        </p>
        <p><span style="font-weight: bold">DESIRED DATE TO START SERVICE:</span> {{date("m-d-Y", strtotime($desired_date_to_start_service))}}</p>
        <p><span style="font-weight: bold">DESIRED SERVICE:</span> {{date("m-d-Y", strtotime($desired_date_service))}}</p>
        <p><span style="font-weight: bold">CONTACT NAME:</span> {{$contact_name}}</p>
        <p><span style="font-weight: bold">EMAIL:</span> {{$email}}</p>
        <p><span style="font-weight: bold">PHONE NUMBER:</span> {{$phone_number}}</p>
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