<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <title>Patient {{$patient->patient->fullname}}</title>
  </head>

  <style>
    table, td 
    {
      border: 1px solid black;
        border-collapse: collapse;
    }

    table
    {
     margin: auto;
    }

    /* th
    {
      font-size: 10px;
    } */

    /* body
    {
      background-color: aquamarine;
    } */
    img{
      width: 70px;
      /* margin-left: 50%; */
    }

    .div{
      margin-left: 45%;
    }
  </style>

  <body>
  <div class="div"> <img src="uploads/medicine.png" alt=""></div>
  <div class=" text-primary text-center"> <h4>GoodHealth Hospital</h4> </div>
     

      <table class="table table-bordered mt-5" style="">
         
            <caption><h3>Patient {{$patient->patient->fullname}} Report</h3></caption>
            <tr>
              <td scope=""> 
                <div style="width: 300px">Name of Admitted Patient:</div>
              </td>
              <td>
                <div style="width: 300px"> {{$patient->patient->fullname}}</td></div>
            </tr>
          
            <tr>
              <td scope="col">Doctor in Charge:</td>
              <td scope="col">Doctor {{$patient->doctor->user->name}}</td>
            </tr>

            <tr>
              <td scope="col">Room:</td>
              <td scope="col">{{$patient->room}}</td>
            </tr>

            <tr>
              <td scope="col">Gender:</td>
              <td scope="col">{{$patient->patient->gender}}</td>
            </tr>

            <tr>
              <td scope="col">D.O.B:</td>
              <td scope="col">{{$patient->patient->dob}}</td>
            </tr>

            <tr>
              <td scope="col">Patient Condition:</td>
              <td scope="col">{{$patient->case_type}}</td>
            </tr>

            <tr>
              <td scope="col">City:</td>
              <td scope="col">{{$patient->patient->city}}</td>
            </tr>

            <tr>
              <td scope="col">Phone No:</td>
              <td scope="col">{{$patient->patient->phone}}</td>
            </tr>
         
            <tr>
              <td scope="col">Email:</td>
              <td scope="col">{{$patient->patient->email}}</td>
            </tr>


            <tr>
              <td scope="col">Address:</td>
              <td scope="col">{{$patient->patient->address1}}</td>
            </tr>

           
          
      </table>


    <footer class="text-danger">copyright@GoodHealthHospital</footer>
  </body>
</html>