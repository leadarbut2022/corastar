
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/marcket.css"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/card.css">
    <title>Document</title>

    <style>
        form{
            margin: auto;
    position: relative;
    width: 600px;
    top: 101px;
        }

        body{
            background-color: #B7C4CF;
            
        }
    </style>
</head>
<body>
    

<div class="container">
    <div>





<br><br><br>

<div class="d-flex flex-row align-items-center"><a style="  color: black; " href="/news"><i class="fa fa-long-arrow-left"></i><span class="ml-2">  الصفحه الرئيسية </span></a></div>

<br><br>

<div class="d-flex flex-row align-items-center"><a style="  color: black; " href="signoutPoster"><i class="fa fa-long-arrow-left"></i><span class="ml-2"> log out </span></a></div>


<div><a href="allpost"> <button class="btn red  btn-block">جميع الاخبار الخاصه بك</button> </a></div>


        <form action="Newscreate" method="POST" enctype="multipart/form-data">
                      @csrf   



  
                <input name="addres_post" type="text" class="btn-block form-control" placeholder="عنوان الخبر">

                <input name="name_poster" type="hidden"value="{{ Session::get('section')}}" class="btn-block form-control" placeholder="عنوان الخبر">
                <input name="id_Poster" type="hidden" value="{{ Session::get('logednewsPoster')}}" class="btn-block form-control" placeholder="عنوان الخبر">
                <input name="day" type="text" class="btn-block form-control" placeholder=" اليوم">
                <br>
             
                  <select name="type_">
                    <option value="1">اخبار عاجلة</option>
                    
                    
                  </select>

                 <div class="custom-file">
                        <input type="file" class="custom-file-input" name="img" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">اختار صوره</label>
              <br><br>
                    </div><div class="custom-file">
                         <input type="file" class="custom-file-input" value="" name="vedo" id="inputGroupFile01">
                         <label class="custom-file-label" for="inputGroupFile01">اختار فديو</label>
                    </div>
               <br><br><br>
               <textarea name="discription" id="" cols="80" rows="10" placeholder="محتوي الخبر">

               </textarea>
<br><br>
               <input type="submit" value="add" name="add" class="btn btn-primary  btn-block">
        </form>
        <br><br><br><br>
    </div>
</div>


<br><br>



</body>
</html>
