<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <title>Doctor {{$doctor->user->name}}</title>
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
         
            <caption><h3>Doctor {{$doctor->user->name}} Report</h3></caption>
            <tr>
              <td scope=""> 
                <div style="width: 300px">Name of Doctor:</div>
              </td>
              <td>
                <div style="width: 300px"> {{$doctor->user->name}}</td></div>
            </tr>
          
            <tr>
              <td scope="col">Specialization:</td>
              <td scope="col">{{$doctor->specialization}}</td>
            </tr>

            <tr>
              <td scope="col">Date Employed</td>
              <td scope="col">{{$doctor->employed}}</td>
            </tr>

            <tr>
              <td scope="col">Gender:</td>
              <td scope="col">{{$doctor->gender}}</td>
            </tr>

            <tr>
              <td scope="col">D.O.B:</td>
              <td scope="col">{{$doctor->dob}}</td>
            </tr>

            <tr>
              <td scope="col">Doctor's Salary:</td>
              <td scope="col">{{$doctor->salary}}</td>
            </tr>

            <tr>
                <td scope="col">Doctor's Department:</td>
                <td scope="col">{{$doctor->department->name}}</td>
              </tr>

            <tr>
              <td scope="col">City:</td>
              <td scope="col">{{$doctor->city}}</td>
            </tr>

            <tr>
              <td scope="col">Phone No:</td>
              <td scope="col">{{$doctor->phone_number}}</td>
            </tr>
         
            <tr>
              <td scope="col">Email:</td>
              <td scope="col">{{$doctor->user->email}}</td>
            </tr>


            <tr>
              <td scope="col">Address:</td>
              <td scope="col">{{$doctor->address}}</td>
            </tr>

           
          
      </table>


    <footer class="text-info">copyright@GoodHealthHospital</footer>
  </body>
</html>