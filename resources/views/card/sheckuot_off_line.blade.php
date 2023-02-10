
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <title>Document</title>
    <style>
     .container{
        padding-top: 15%;
     }
   .cover{
        
    background-color: #f8f9fa;
   
    text-align: center;
    width: 50%;
    margin-top: 21%;
    margin: auto;
    position: relative;
    border: 2px solid;
    box-shadow: 2px 2px darkslategrey;

   }
   .cover p{
    font-size: 18px;
}



    </style>
</head>
<body>

  @php
      if(isset($_POST['pay_ofline'])){
          $total=$_POST['total'];
         
      }
  @endphp
    <div class="container">
        <!-- <script>
            function myFunction() {
  let text;
  if (confirm(" <p> المبلغ الكلي  بالجنيه المصري </p><p>مده التوصيل يوم  الي محافظه القاهرة  و 3 ايام للمحافظات الاخري</p><form action='delet.php' method='POST'><input type='submit' name='delet' value='تاكييد الطلب'></form>") == true) {
    text = "You pressed OK!";
  } else {
    text = "You canceled!";
  }
  document.getElementById("demo").innerHTML = text;
}
        
        </script> -->

            <div class="cover">
                <p>{{ $total.' '.' ' }} المبلغ الكلي  بالجنيه المصري </p>
                         <p>مده التوصيل من 4 الي 6 ايام عمل   تختلف من محافظه الي اخري</p>
                    <form action="deletall_itarm" method="POST">
                      @csrf
                      <input type="hidden" name="id" value="1">
                        <input type="submit" class="btn btn-primary" name="delet" value="تاكييد الطلب">
                    </form>
                    <br>
                    <a href="shop"><button class=" btn btn-danger">الغاء</button></a>
            </div>
    </div>

</body>
</html>
