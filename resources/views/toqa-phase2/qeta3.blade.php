<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <script type="application/javascript" src="../js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap-->
    <link href="../styles/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/responsive.css">
</head>
</head>
<body>
    
<div class="row" dir="rtl">
    <div id="first-container" class="container moftsh col-11 mt-3 p-0 pb-3">
        <div class="form-row mx-2 mb-2">
            <h3 class="pt-3 px-md-5 px-3">اضف قطاع</h3>
            <div class="input-group moftsh px-md-5 px-3 pt-3">
                <label class="pb-3" for="">ادخل اسم القطاع</label>
                <input type="text" id="" class="form-control" placeholder="قطاع واحد" />
            </div>
        </div>
        <div class="container col-11">
            <div class="form-row d-flex justify-content-end mt-4 mb-3">
                <button type="button" id="next-button" class="btn-blue">التالى</button>
            </div>
        </div>
    </div>
</div>

<div class="row" dir="rtl">
    <div id="second-container" class="container moftsh col-11 mt-3 p-0 pb-3 hidden">
        <h3 class="pt-3 px-md-5 px-3">اضف محافظات داخل قطاع</h3>
        <div class="form-row mx-2">
            <div class="form-group moftsh px-md-5 px-3 pt-3">
                <h4 style="color: #274373; font-size: 24px;">حدد المحافظات المراد اضافتها</h4>
            </div>
        </div>
        <div class="form-row col-11 mb-2 mt-3 mx-md-2">
            <div class="form-group col-3 d-flex mx-md-4">
                <input type="checkbox" name="" id="">
                <label for="">الجهراء</label>
            </div>
            <div class="form-group col-3 d-flex mx-4">
                <input type="checkbox" name="" id="">
                <label for="">الفروانية</label>
            </div>
            <div class="form-group col-3 d-flex">
                <input type="checkbox" name="" id="">
                <label for="">الأحمدى</label>
            </div>
        </div>
        <div class="form-row col-11 mb-2 mt-3 mx-md-2">
            <div class="form-group col-3 d-flex mx-md-4">
                <input type="checkbox" name="" id="">
                <label for="">مبارك الكبير</label>
            </div>
            <div class="form-group col-3 d-flex mx-4">
                <input type="checkbox" name="" id="">
                <label for="">حولى</label>
            </div>
            <div class="form-group col-3 d-flex">
                <input type="checkbox" name="" id="">
                <label for="">مدينة الكويت</label>
            </div>
        </div>
        <div class="container col-11">
            <div class="form-row d-flex justify-content-end mt-4 mb-3">
                <button type="submit" class="btn-blue">
                    <img src="../images/white-add.svg" alt="img" height="20px" width="20px"> اضافة
                </button>
                <button type="button" id="back-button" class="btn-back mx-2">  
                     <img src="../images/previous.svg" alt="img" height="20px" width="20px"> السابق</button>
              
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('next-button').addEventListener('click', function() {
        document.getElementById('first-container').classList.add('hidden');
        document.getElementById('second-container').classList.remove('hidden');
    });

    document.getElementById('back-button').addEventListener('click', function() {
        document.getElementById('second-container').classList.add('hidden');
        document.getElementById('first-container').classList.remove('hidden');
    });
</script>
</body>

</html>