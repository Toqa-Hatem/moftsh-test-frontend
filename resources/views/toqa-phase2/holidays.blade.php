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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/responsive.css">
</head>

<body>
    <div class="row col-11" dir="rtl">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="#">الرئيسيه</a></li>
                <li class="breadcrumb-item"><a href=""># </a></li>
                <li class="breadcrumb-item active" aria-current="page"> <a href=""> #</a></li>
            </ol>
        </nav>
    </div>
    <div class="row ">
        <div class="container welcome col-11">
<div class="d-flex justify-content-between">
    <p> الاجازات </p>

    <!-- <h2 style="color: #274373;"> مجموعة (أ)</h2> -->
</div>
        </div>
    </div>
    <br>

<div class="row" >
    <div class="container  col-11 mt-3 p-0 ">
        <div class="row d-flex justify-content-between " dir="rtl">
            <div class="form-group moftsh mt-4 mx-4  d-flex">
                <p class="filter" style="font-size:35px;"> عدد الاجازات :8</p> 
            </div> </div>
        <div class="row d-flex justify-content-between " dir="rtl">
            <div class="form-group moftsh  mx-4  d-flex">
                <p class="filter "> تصفية حسب:</p>
                <button class="btn-all px-3 mx-3" style="color: #274373;">
                    متجاوز
                </button>
                <button class="btn-all px-3 mx-3" style="color: #274373;">
                    الاجازات المنتهية
                </button>
                <button class="btn-all px-3 mx-3 " style="color:#ffffff ; background-color: #274373;">
                    الاجازات الحالية
                </button>
                <button class="btn-all px-3 mx-3" style="color: #274373;">
                    اجازات لم تبدا
                </button>
            </div>
            
            <!-- <div class="form-group mt-4 mx-3  d-flex justify-content-end ">
                <button class="btn-all px-3 " style="color: #FFFFFF; background-color: #274373;" onclick="window.print()">
                     <img src="../images/print.svg" alt=""> طباعة
                </button>
        </div> -->
    </div>
    <div class="row d-flex justify-content-between " dir="ltr">
        <div class="input-group mx-2 mb-4">
            <button type="button" class="btn  mt-2" data-mdb-ripple-init>
                <i class="fas fa-search"></i>
            </button>
            <div class="form-outline mt-2" style="    width: 55%;">
                <input type="search" id="" class="form-control " placeholder="بحث"
                    style="width: 100% !important; border-radius: 0px !important; height: 44px;" />
            </div>
           

        </div>
    </div>
        <div class="col-lg-12" dir="rtl">
            <div class="bg-white ">
                <div>
                    <table id="users-table" class="display table table-responsive-sm  table-bordered table-hover dataTable">
                        <thead>
                            <tr>
                                <th> رقم التسلسلى</th>
                                <th>الاسم</th>
                                <th>الاجازه </th>
                                <th>البداية </th>
                                <th>الانتهاء </th>
                                <th>الايام </th>
                                <th>متبقى </th>
                                <th>المباشرة </th>
                                <th style="width:150px !important;" id="actions">العمليات</th>
                            </tr>
                        </thead>
                            <tbody>
                           <tr>
                            <td>1</td>
                            <td>احمد بكر</td>
                            <td>سنويه</td>
                            <td>12:00 PM - 06-24</td>
                            <td>12:00AM - 07-28</td>
                            <td>10 </td>
                            <td>متجاوز </td>
                            <td>12:00 - 07-29 </td>
                            <td class="d-flex justify-content-center " >  
                                <a  class="btn btn-sm" style=" background-color:#30B0C7; " > 
                               <img src="../images/holidays-icon.svg" alt=""> باشر بعد التجاوز</a>
                                
                            </td>

                           </tr>
                           <tr>
                            <td>2</td>
                            <td>عبدالله</td>
                            <td>سنويه</td>
                            <td>12:00 PM - 06-24</td>
                            <td>12:00AM - 07-28</td>
                            <td>10 </td>
                            <td>2 </td>
                            <td>12:00 - 07-29 </td>
                            <td class="d-flex justify-content-center " >  
                                <a  class="btn btn-sm " style=" background-color:#C76530; " > 
                               <img src="../images/holidays-icon.svg" alt="">  قــطــع الاجــازة  <tr>
                            <td>3</td>
                            <td>احمد بكر</td>
                            <td>سنويه</td>
                            <td>12:00 PM - 06-24</td>
                            <td>12:00AM - 07-28</td>
                            <td>10 </td>
                            <td>متجاوز </td>
                            <td>12:00 - 07-29 </td>
                            <td class="d-flex justify-content-center " >  
                                <a  class="btn btn-sm" style=" background-color:#30B0C7; " > 
                               <img src="../images/holidays-icon.svg" alt=""> باشر بعد التجاوز</a>
                                
                            </td>

                           </tr></a>
                                
                            </td>

                           </tr>
                           <tr>
                            <td>4</td>
                            <td>محمود بكر</td>
                            <td>سنويه</td>
                            <td>12:00 PM - 06-24</td>
                            <td>12:00AM - 07-28</td>
                            <td>10 </td>
                            <td>5 </td>
                            <td>12:00 - 07-29 </td>
                            <td class="d-flex justify-content-center " >  
                                <a  class="btn btn-sm" style=" background-color:#30B0C7; " > 
                               <img src="../images/holidays-icon.svg" alt=""> باشر بعد التجاوز</a>
                                
                            </td>

                           </tr>

                           <tr>
                            <td>5</td>
                            <td>عبدالله</td>
                            <td>سنويه</td>
                            <td>12:00 PM - 06-24</td>
                            <td>12:00AM - 07-28</td>
                            <td>10 </td>
                            <td>2 </td>
                            <td>12:00 - 07-29 </td>
                            <td class="d-flex justify-content-center " >  
                                <a  class="btn btn-sm " style=" background-color:#C76530; " > 
                               <img src="../images/holidays-icon.svg" alt="">  قــطــع الاجــازة  <tr>
                            <td>6</td>
                            <td>احمد بكر</td>
                            <td>سنويه</td>
                            <td>12:00 PM - 06-24</td>
                            <td>12:00AM - 07-28</td>
                            <td>10 </td>
                            <td>متجاوز </td>
                            <td>12:00 - 07-29 </td>
                            <td class="d-flex justify-content-center " >  
                                <a  class="btn btn-sm" style=" background-color:#30B0C7; " > 
                               <img src="../images/holidays-icon.svg" alt=""> باشر بعد التجاوز</a>
                                
                            </td>

                           </tr></a>
                                
                            </td>

                           </tr>
                        </tbody>
                       
                    </table>
</div>
</div>
<!-- Modal -->
<!-- First Modal (Add to Group) -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <div class="title d-flex flex-row align-items-center">
                    <img src="../images/group-add-modal.svg" alt="">
                    <h5 class="modal-title">اضافة الي مجموعة</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
            </div>
            <div class="modal-body">
                <!-- First Modal Body -->
                <div id="firstModalBody" class="mb-3 mt-3 d-flex justify-content-center">
                    <div class="container" style="border: 0.2px solid rgb(166, 165, 165);">
                        <div class="form-group mt-4 mb-4">
                            <label class="d-flex justify-content-start pt-3 pb-2" for="name">اختر المجموعة</label>
                            <select class="w-100" name="" id="" style="border: 0.2px solid rgb(199, 196, 196);">
                                <option value="">المجموعة 1</option>
                                <option value="">المجموعة 2</option>
                                <option value="">المجموعة 3</option>
                            </select>
                        </div>
                        <div class="text-end d-flex justify-content-end mx-2 pb-4 pt-2">
                            <button type="button" class="btn-all mx-2 p-2" style="background-color: #274373; color: #ffffff;" id="openSecondModalBtn">
                                <img src="../images/white-add.svg" alt="img"> اضافة
                            </button>
                            <button type="submit" class="btn-all p-2" style="background-color: transparent; border: 0.5px solid rgb(188, 187, 187); color: rgb(218, 5, 5);" data-bs-dismiss="modal" aria-label="Close">
                                <img src="../images/red-close.svg" alt="img"> الغاء
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Second Modal Body (Initially Hidden) -->
                <div id="secondModalBody" class="d-none">
                    <div class="body-img-modal d-block">
                        <img src="../images/ordered.svg" alt="">
                        <p>تمت الاضافه بنجاح</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get elements
        var openSecondModalBtn = document.getElementById('openSecondModalBtn');
        var firstModalBody = document.getElementById('firstModalBody');
        var secondModalBody = document.getElementById('secondModalBody');

        // Add click event listener
        openSecondModalBtn.addEventListener('click', function () {
            // Hide the first modal body
            firstModalBody.classList.add('d-none');

            // Show the second modal body
            secondModalBody.classList.remove('d-none');
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.btn-all');
    
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove 'btn-active' class from all buttons
            buttons.forEach(btn => btn.classList.remove('btn-active'));
            
            // Add 'btn-active' class to the clicked button
            button.classList.add('btn-active');
        });
    });
});

</script>
</body>

</html>
