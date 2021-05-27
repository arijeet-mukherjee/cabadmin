<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>List Of Products</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Kufam:wght@400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="../public/css/dropzone.css">
    <link rel="stylesheet" href="../public/css/jquery.tag.css">
    <link rel="stylesheet" href="../public/css/jquery.tagsinput-revisited.css">
    <!-- Custom styles for this template -->
    <link href="../public/css/main.css" rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css"/>

</head>

<body class="shopping_add_products">

<div class="d-flex" id="wrapper">
    <?php
    $id = $_GET['id'];
    ?>
    <input type="hidden" id="driver-detail-id" value="<?php echo $id; ?>">

    <!-- Sidebar -->
     <?php
           include_once ('../sidebar_admin.php');
        ?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light  border-bottom">
            <!-- <button class="btn btn-primary" id="menu-toggle"><span><i class="fas fa-bars"></i></span></button> -->
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Search..." aria-label="Username"
                       aria-describedby="basic-addon1">
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <!-- <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span><i class="far fa-bell"></i></span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle user_name" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../public/image/person.jpg" alt="">
                            <div class="admin_name">
                                <h1>Austin Robertson</h1>
                                <h3>Marketing Administrator</h3>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <!--                ../framework/main_action.php?action_type=create&request_type=products&functionality_type=insert_add_products-->
            <form id="form-main"
                  action="../framework/main_action.php?action_type=update&request_type=products&functionality_type=update_products"
                  enctype="multipart/form-data" method="POST">
                <input type="hidden" id="getid" name="product_id" value="<?php echo $_GET['id']; ?>">
                <div class="page_name_candidate">
                    <div class="candidate_div">
                        <h1>Product List</h1>

                    </div>
                    <div class="select_sort_second">
                        <div class="sort_btn">
                            <button id="btn-submit" class="brand_btn_save" type="submit">save</button>
                            <!--                            <a href="#" type="submit" >Save</a>-->
                        </div>
                    </div>
                </div>

                <div class="row pt-4 addpro_main_row ">

                    <input type="hidden" id="random-no" name="random-no" value="<?= rand(1000, 2000); ?>">
                    <input type="hidden" id="cat-id" name="cat-id">
                    <input type="hidden" id="sub-cat-id" name="sub-cat-id">
                    <input type="hidden" id="child-cat-id" name="child-cat-id">
                    <input type="hidden" id="additional-pic" name="additional-pic[]">


                    <div class="col-xl-12">
                        <div class="card shopping_add_product_card">
                            <div class="card-body">
                                <div class="row  addpro_main_row ">
                                    <div class="col-xl-12 addpro_main_heading_first">
                                        <h4>Car Information</h4>
                                    </div>
                                    <div class="col-xl-12 ">
                                        <label for="pro" class="addpro_main-input-label txt-regular color-sec">Brand Name </label>
                                        <input type="text" id="pro" name="pro" placeholder="Enter Brand Name"
                                               class="addpro_main-input car_brand_name w-100"/>
                                    </div>

                                    <div class="col-xl-12 mt-2">
                                        <label for="pro" class="addpro_main-input-label txt-regular color-sec">Car Name </label>
                                        <input type="text" id="pro" name="pro" placeholder="Enter Car Name"
                                               class="addpro_main-input car_name w-100"/>
                                    </div>
                                    <div class="col-xl-12 mt-2">
                                        <label for="pro" class="addpro_main-input-label txt-regular color-sec">Color</label>
                                        <input type="text" id="pro" name="pro" placeholder="Enter Car Name"
                                               class="addpro_main-input car_color w-100"/>
                                    </div>
                                    <div class="col-xl-12 mt-2">
                                        <label for="pro" class="addpro_main-input-label txt-regular color-sec">Number Plate</label>
                                        <input type="text" id="pro" name="pro" placeholder="Enter Car Name"
                                               class="addpro_main-input car_number_plate w-100"/>
                                    </div>
                                    <div class="col-xl-12 mt-2">
                                        <label for="pro" class="addpro_main-input-label txt-regular color-sec">Car Type</label>
                                        <input type="text" id="pro" name="pro" placeholder="Enter Car Name"
                                               class="addpro_main-input car_type w-100"/>
                                    </div>
                                    <div class="col-xl-12 mt-2">
                                        <label for="pro" class="addpro_main-input-label txt-regular color-sec">Ride Category</label>
                                        <input type="text" id="pro" name="pro" placeholder="Enter Car Name"
                                               class="addpro_main-input car_ride_category w-100"/>
                                    </div>
                                    <div class="col-xl-12 addpro_main_hr">
                                        <hr/>
                                    </div>




                                    <div class="col-xl-12">
                                        <div class="addpro_main_head_second">
                                            <h4>Adtional Images</h4>

                                            <div class="uload-card">
                                                <!--<div id="myDropzone" class="dropzone">-->

                                                <!--<div class="fallback">
                                                    <input name="file" type="file" multiple/>
                                                </div>-->

                                                <div class="dropzone needsclick dz-clickable" id="myDropzone">


                                                    <div class="dz-message needsclick" id="dmessage">


                                                        <div class="card-body upload-card-body dz-button">
                                                            <div class="upload-img">
                                                                <img name="imagess" src="../public/image/upload.png"
                                                                     alt=""/>
                                                            </div>
                                                            <div class="upload-image-format">
                                                                <p>
                                                                    .PDF .JPG .PNG .DOC
                                                                </p>
                                                            </div>
                                                            <div class="upload-detail">
                                                                <h4
                                                                    style=" font-size: 14px; font-weight: 100; margin-top: -5px;">
                                                                    You can also upload files by
                                                                </h4>
                                                                <div class="upload-clicking class=" note needsclick
                                                                "">
                                                                <a href="#" class="">Clicking here</a>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                                <!--</div>-->
                                            </div>

                                        </div>


                                    </div>




                                </div>






                            </div>
                        </div>
                    </div>

                </div>


            </form>


        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
<!-- modals -->
<!-- catagories modal start -->
<form class="catagories_modal_from" id="modal-form" action="">
    <div class="modal fade" id="addproduct_catogories" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header mh">
                    <button type="button" class="close closmodel" data-dismiss="modal" aria-label="Close"
                            onclick="colsemodel()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mb">
                    <div>
                        <div class="cat-folder-img">
                            <i class="fa fa-folder" aria-hidden="true"></i>
                        </div>
                    </div>
                    <label for="cat-name-upload"
                           class="customer-add-input-label txt-regular upload-input-label">Category
                        Name</label>

                    <input type="text" id="addpro_cat" name="addpro_cat" placeholder="Woman Clothes" value=""
                           class="customer-add-input category_name w-100"/>
                    <div>
                        <div>
                            <div class="upload-text-heading">
                                <h5 class="coupon-code-main-heading txt-regular">
                                    Upload your attachments
                                </h5>
                            </div>
                            <div>
                                <p class="upload-main-paragraph txt-label2">
                                    Drag and drop your files here
                                </p>
                            </div>
                        </div>
                        <div class="card text-center uload-card">
                            <div class="file-upload">
                                <div class="image-upload-wrap">
                                    <input class="file-upload-input" type="file" onchange="readURL(this);"
                                           accept="image/*"/>
                                    <div class="drag-text">
                                        <div class="card-body upload-card-body">
                                            <div class="upload-img">
                                                <img src="../public/image/upload.png" alt=""/>
                                            </div>
                                            <div class="upload-image-format">
                                                <p>
                                                    .PDF .JPG .PNG .DOC
                                                </p>
                                            </div>
                                            <div class="upload-detail">
                                                <h4>You can also upload files by</h4>
                                                <div class="upload-clicking">
                                                    <a href="#" class="">Clicking here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="file-upload-content">
                                    <img class="file-upload-image" src="#" alt="your image"/>
                                    <div class="image-title-wrap">
                                        <button type="button" onclick="removeUpload()" class="btn remove-image">
                                            Remove
                                            <span class="image-title" style="display: none;">Uploaded
                                                        Image</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer mf">
                    <button type="button" onclick="addCategoryiesData()" class="btn btn-primary">
                        <img src="../public/image/tick (1).png" alt=""/>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- catagories modal end -->
<!-- subcatgory Modal start -->
<form action="" class="subcatgory_Modal_form">
    <div class="modal fade" id="addpro_subcategories" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header mh">
                    <button type="button" class="close closmodel" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mb">
                    <div>
                        <div class="cat-folder-img">
                            <i class="fa fa-folder" aria-hidden="true"></i>
                        </div>
                    </div>
                    <label for="addpro_subcatagory-add"
                           class="customer-add-input-label txt-regular upload-input-label">SubCategory
                        Name</label>

                    <input type="text" id="addpro_subcatagory-add" name="addpro_subcatagory-add"
                           placeholder="Woman Clothes" value=""
                           class="customer-add-input w-100 subcategory_name_class"/>

                </div>
                <div class="modal-footer mf">
                    <button type="button" onclick="addSubcategory()" class="btn btn-primary">
                        <img src="../public/image/tick (1).png" alt=""/>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- subcatgory Modal End -->

<!-- child catagories modal start -->
<form action="" id="child_catagories_modal_form">
    <div class="modal fade" id="addpro_childcatogories" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header mh">
                    <button type="button" class="close closmodel" data-dismiss="modal" aria-label="Close"
                            onclick="colsemodel()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mb">
                    <div>
                        <div class="cat-folder-img">
                            <i class="fa fa-folder" aria-hidden="true"></i>
                        </div>
                    </div>
                    <label for="addpro_child_cat_input"
                           class="customer-add-input-label txt-regular upload-input-label">Category
                        Name</label>

                    <input type="text" id="addpro_child_cat_input" name="addpro_child_cat_input"
                           placeholder="Woman Clothes" value="" class="customer-add-input child_name_class w-100"/>
                    <div>
                        <div>
                            <div class="upload-text-heading">
                                <h5 class="coupon-code-main-heading txt-regular">
                                    Upload your attachments
                                </h5>
                            </div>
                            <div>
                                <p class="upload-main-paragraph txt-label2">
                                    Drag and drop your files here
                                </p>
                            </div>
                        </div>
                        <div class="card text-center uload-card">
                            <div class="file-upload">
                                <div class="image-upload-wrap">
                                    <input class="file-upload-input" type="file" onchange="readURL(this);"
                                           accept="image/*"/>
                                    <div class="drag-text">
                                        <div class="card-body upload-card-body">
                                            <div class="upload-img">
                                                <img src="../public/image/upload.png" alt=""/>
                                            </div>
                                            <div class="upload-image-format">
                                                <p>
                                                    .PDF .JPG .PNG .DOC
                                                </p>
                                            </div>
                                            <div class="upload-detail">
                                                <h4>You can also upload files by</h4>
                                                <div class="upload-clicking">
                                                    <a href="#" class="">Clicking here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="file-upload-content">
                                    <img class="file-upload-image" src="#" alt="your image"/>
                                    <div class="image-title-wrap">
                                        <button type="button" onclick="removeUpload()" class="btn remove-image">
                                            Remove
                                            <span class="image-title" style="display: none;">Uploaded
                                                        Image</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer mf">
                    <button type="button" onclick="addChildData()" class="btn btn-primary">
                        <img src="../public/image/tick (1).png" alt=""/>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- child catagories modal end -->
<!-- add text for product modal start -->
<form class="add_text_for_product_modal_form">
    <div class="modal fade" id="addpro_product_input" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header mh">
                    <button type="button" class="close closmodel" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mb">
                    <div>
                        <div class="cat-folder-img">
                            <i class="fas fa-shopping-bag fsb"></i>
                        </div>
                    </div>
                    <label for="addpro_productfieldadd"
                           class="customer-add-input-label txt-regular upload-input-label">Add Product</label>

                    <input type="text" id="addpro_productfieldadd" name="addpro_subcatagory-add"
                           placeholder="Product Name" value="" class="customer-add-input w-100"/>

                </div>
                <div class="modal-footer mf">
                    <button type="button" onclick="productfieldadd()" class="btn btn-primary">
                        <img src="../public/image/tick (1).png" alt=""/>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- add text for product modal end -->

<!-- add text for edit modal start -->
<form action="" class="add_text_for_edit_modal_form">
    <div class="modal fade" id="addpro_product_input_edit" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header mh">
                    <button type="button" class="close closmodel" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mb">
                    <div>
                        <div class="cat-folder-img">
                            <i class="fas fa-shopping-bag fsb"></i>
                        </div>
                    </div>
                    <label for="addpro_productfilededit"
                           class="customer-add-input-label txt-regular upload-input-label">Add Product</label>

                    <input type="text" id="addpro_productfilededit" name="addpro_productfilededit"
                           placeholder="Product Name" value="" class="customer-add-input w-100"/>
                    <input type="hidden" id="addpro_productfilededit2" name="addpro_productfilededit2"
                           placeholder="Product Name" value="" class="customer-add-input w-100"/>

                </div>
                <div class="modal-footer mf">
                    <button type="button" onclick="" class="btn btn-primary updatefun">
                        <img src="../public/image/tick (1).png" alt=""/>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- add text for edit modal end -->
<!-- add text for add modal start -->
<form action="" id="addpro_addfieldtag_id" class="add_text_for_add_modal_form">
    <div class="modal fade" id="addpro_addfieldtag" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header mh">
                    <button type="button" class="close closmodel" data-dismiss="modal" aria-label="Close"
                            onclick="colsemodel()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mb">
                    <div>
                        <div class="cat-folder-img">
                            <i class="fas fa-shopping-bag fsb"></i>
                        </div>
                    </div>
                    <label for="addpro_addtag_input_name"
                           class="customer-add-input-label txt-regular addpro-input-label">Name</label>

                    <input type="text" id="addpro_addtag_input_name" name="addpro_addtag_input_name"
                           placeholder="Woman Clothes" value="" class="customer-add-input w-100"/>
                    <div style="margin-top: 11px;">
                        <p class="upload-main-paragraph txt-label2">
                            Upto 10 Character Allow
                        </p>
                    </div>
                    <label for="addpro_addtag_input_price" style="margin-top: 14px;"
                           class="customer-add-input-label txt-regular addpro-input-label">Price</label>

                    <input type="text" id="addpro_addtag_input_price" name="addpro_addtag_input_price"
                           placeholder="Woman Clothes" value="" class="customer-add-input w-100"/>
                    <div id="hideimage">
                        <div>
                            <div class="upload-text-heading">
                                <h5 class="coupon-code-main-heading txt-regular">
                                    Upload your attachments
                                </h5>
                            </div>
                            <div>
                                <p class="upload-main-paragraph" style="font-size:10px;">
                                    Drag and drop your files here
                                </p>
                            </div>
                        </div>
                        <div class="card text-center uload-card">
                            <div class="file-upload">
                                <div class="image-upload-wrap">
                                    <input class="file-upload-input" type="file" onchange="readURL(this);"
                                           accept="image/*"/>
                                    <div class="drag-text">
                                        <div class="card-body upload-card-body">
                                            <div class="upload-img">
                                                <img src="../public/image/upload.png" alt=""/>
                                            </div>
                                            <div class="upload-image-format">
                                                <p>
                                                    .PDF .JPG .PNG .DOC
                                                </p>
                                            </div>
                                            <div class="upload-detail">
                                                <h4>You can also upload files by</h4>
                                                <div class="upload-clicking">
                                                    <a href="#" class="">Clicking here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="file-upload-content">
                                    <img class="file-upload-image addpro_addimage_tag" src="#"
                                         alt="your image"/>
                                    <div class="image-title-wrap">
                                        <button type="button" onclick="removeUpload()" class="btn remove-image">
                                            Remove
                                            <span class="image-title" style="display: none;">Uploaded
                                                        Image</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-controlm custom-switchm">
                        <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                        <label class="custom-control-label" for="customSwitch4"></label>Required image
                    </div>
                </div>
                <div class="modal-footer mf">
                    <button type="button" onclick="addprotag()" class="btn btn-primary">
                        <img src="../public/image/tick (1).png" alt=""/>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- add text for add modal start -->
<!-- add tagupdate for modal start -->
<form action="" class="add_tagupdate_for_modal_form">
    <div class="modal fade" id="addpro_addfieldtag_update" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header mh">
                    <button type="button" class="close closmodel" data-dismiss="modal" aria-label="Close"
                            onclick="colsemodel()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mb">
                    <div>
                        <div class="cat-folder-img">
                            <i class="fas fa-shopping-bag fsb"></i>
                        </div>
                    </div>
                    <label for="addpro_addtag_input_name_update"
                           class="customer-add-input-label txt-regular addpro-input-label">Name</label>

                    <input type="text" id="addpro_addtag_input_name_update"
                           name="addpro_addtag_input_name_update" placeholder="Woman Clothes" value=""
                           class="customer-add-input w-100"/>
                    <div style="margin-top: 11px;">
                        <p class="upload-main-paragraph" style="font-size:10px;">
                            Upto 10 Character Allow
                        </p>
                    </div>
                    <input type="hidden" id="addpro_addtag_input_name_update2"
                           name="addpro_addtag_input_name_update2" placeholder="Woman Clothes" value=""
                           class="customer-add-input w-100"/>
                    <label for="addpro_addtag_input_price_update" style="margin-top: 14px;"
                           class="customer-add-input-label txt-regular addpro-input-label">Price</label>

                    <input type="text" id="addpro_addtag_input_price_update"
                           name="addpro_addtag_input_price_update" placeholder="Woman Clothes" value=""
                           class="customer-add-input w-100"/>

                    <div id="hideimage2">
                        <div>
                            <div class="upload-text-heading">
                                <h5 class="coupon-code-main-heading txt-regular">
                                    Upload your attachments
                                </h5>
                            </div>
                            <div>
                                <p class="upload-main-paragraph txt-label2">
                                    Drag and drop your files here
                                </p>
                            </div>
                        </div>
                        <div class="card text-center uload-card">
                            <div class="file-upload">
                                <div class="image-upload-wrap">
                                    <input class="file-upload-input" type="file" onchange="readURL(this);"
                                           accept="image/*"/>
                                    <div class="drag-text">
                                        <div class="card-body upload-card-body">
                                            <div class="upload-img">
                                                <img src="../public/image/upload.png" alt=""/>
                                            </div>
                                            <div class="upload-image-format">
                                                <p>
                                                    .PDF .JPG .PNG .DOC
                                                </p>
                                            </div>
                                            <div class="upload-detail">
                                                <h4>You can also upload files by</h4>
                                                <div class="upload-clicking">
                                                    <a href="#" class="">Clicking here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="file-upload-content">
                                    <img class="file-upload-image" src="#" alt="your image"/>
                                    <div class="image-title-wrap">
                                        <button type="button" onclick="removeUpload()" class="btn remove-image">
                                            Remove
                                            <span class="image-title" style="display: none;">Uploaded
                                                        Image</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-controlm custom-switchm">
                        <input type="checkbox" class="custom-control-input" id="customSwitch5" checked>
                        <label class="custom-control-label" for="customSwitch5"></label>Required image
                    </div>
                </div>
                <div class="modal-footer mf">
                    <button type="button" class="btn btn-primary updtag">
                        <img src="../public/image/tick (1).png" alt=""/>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- add tagupdate for modal start -->
<?php
$car_id = $_GET['carid'];
$cardoc_id = $_GET['cardoc_id'];

?>
<input type="hidden" id="carinput-pic-id" value="<?=$car_id?>">
<input type="hidden" id="cardocinput-pic-id" value="<?=$cardoc_id?>">

<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="../public/js/jquery.tag.js"></script>
<script src="../public/js/jquery.tagsinput-revisited.js"></script>
<script src="../public/js/dropzone.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="../public/js/customjs.js"></script>
<script src="../public/js/custom_request.js"></script>
<script src="../public/js/customPagination.js"></script>
<!-- Menu Toggle Script -->

<script>

    var dresult;
    // var parameter="";
    // console.log("yes this is"+$("#carinput-pic-id").val());
    // setTimeout(function(){
    //     parameter = $("#carinput-pic-id").val()
    // }, 1000);

    Dropzone.options.myDropzone = {
        url: '../framework/main_action.php?action_type=create&request_type=specific_captain&functionality_type=insert_picture&id=' + $("#carinput-pic-id").val(),
        autoProcessQueue: true,
        uploadMultiple: true,
        parallelUploads: 5,
        maxFiles: 5,
        maxFilesize: 1,
        addRemoveLinks: true,
        acceptedFiles: 'image/*',
        previewTemplate: `<div class="dz-preview dz-file-preview">

                      <div class="dz-image"><img data-dz-thumbnail /></div>
                      <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>

                      <div class="dz-error-message"><span data-dz-errormessage></span></div>
                      <div class="dz-error-message"><i class="fa fa-warning">&nbsp;</i><span data-dz-errormessage></span></div>
                      <div class="dz-filename"><span data-dz-name></span></div>
                      <div class="dz-progress">
                        <span class="dz-upload" data-dz-uploadprogress></span>
                      </div>
                      <div class="dz-remove">
                                <a href="javascript:undefined;" data-dz-remove=""style="color:red;" >Delete</a>
                            <div>

                            </div>
                       </div>
                    </div>
                        `,

        init: function () {

            dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

            // for Dropzone to process the queue (instead of default form behavior):
            /*document.getElementById("btn-submit").addEventListener("click", function(e) {
                // Make sure that the form isn't actually being sent.
                e.preventDefault();
                e.stopPropagation();
                dzClosure.processQueue();

            });*/

            var captains_id = $("#driver-detail-id").val();
            sendRequest("?action_type=retrieve&request_type=specific_captain&functionality_type=retrieve_specific_captain", {
                captain_id: captains_id,


            }, "POST")
                .then((data) => {
                    console.log("Product Picture = " + data)
                    var responseObject = JSON.parse(data);

                    // console.log("Last Insert ID = "+responseObject.id);
                    // console.log("Successfully Positioned " + data);
                    if (responseObject.code == "202") {
                        var result = responseObject.listOfData;
                        for (var i = 0; i < result.length; i++) {
                            var car_number_plate = result[i].car_number_plate;

                            var ride_type_name = result[i].ride_type_name;
                            var ride_category = result[i].ride_category;
                            var car_brand_name = result[i].car_brand_name;
                            var car_name = result[i].car_name;
                            var car_colour = result[i].car_colour;
                            var car_pic_id = result[i].car_pic_id;
                            $("#carinput-pic-id").val(car_pic_id);
                            // alert("this is car pic id"+ car_pic_id);
                            var car_docsments_id = result[i].car_docsments_id;
                            $("#cardocinput-pic-id").val(car_docsments_id);
                            $(".car_brand_name").val(car_brand_name);
                            $(".car_color").val(car_colour);
                            $(".car_name").val(car_name);
                            $(".car_type").val(ride_type_name);
                            $(".car_ride_category").val(ride_category);
                            $(".car_number_plate").val(car_number_plate);


                            var car_pictures = result[i].car_pictures;
                            for(var d_pic = 0; d_pic < car_pictures.length; d_pic++ ){
                                var n = car_pictures[d_pic].id;
                                var path = "../public/uploads/driver_detail_pic/"+car_pictures[d_pic].picture;
                                var mockFile = {
                                    name: name,
                                    id: n,
                                    type: 'image/jpeg',
                                    status: Dropzone.ADDED
                                };

                                ////let mockFile = { name: "Filename 2", size: 12345 };
                                dzClosure.displayExistingFile(mockFile, path);
                            }



                        }

                    }
                })
                .catch((error) => {
                    console.log(error)
                })

            dzClosure.on("success", function (file, response) {
                $("#dmessage").hide();

                var _this = this;
                console.log("sucesso" + response + " file  data:" + file.name);
                var data = JSON.parse(response);
                dresult = data.listOfData;
                console.log(dresult);


            });

            dzClosure.on("removedfile", function (file) {
                var numItems = $('.dz-preview').length;
                if(numItems == '0'){
                    $("#dmessage").show();
                }else {
                    $("#dmessage").hide();
                }



                // if ($("#myDropzone").find("dz-preview")) {
                //     $("#dmessage").hide();
                //
                // }



                console.log("File REmoved Successfully = " + file.name + " file = " + file.id);
                if (file.id == undefined) {


                    for (var i = 0; i < dresult.length; i++) {


                        var n = dresult[i].id;
                        var name = dresult[i].name;
                        if (file.name == name) {
                            console.log("Data  Id = " + dresult[i].id + " Name = " + dresult[i].name);
                            sendRequest("?action_type=delete&request_type=specific_captain&functionality_type=delete_car_pic", {
                                id: n,


                            }, "POST")
                                .then((data) => {
                                    console.log(data)
                                    var data = JSON.parse(data);
                                    console.log("Successfully Delete " + data);


                                })
                                .catch((error) => {
                                    console.log(error)
                                })

                        }


                    }

                }
                else {


                    sendRequest("?action_type=delete&request_type=specific_captain&functionality_type=delete_car_pic", {
                        id: file.id,


                    }, "POST")
                        .then((data) => {
                            console.log(data)
                            var data = JSON.parse(data);
                            console.log("Successfully Delete " + data);



                        })
                        .catch((error) => {
                            console.log(error)
                        })

                }


                ///$('#form-main').trigger('submit');
            });

        }

        //send all the form data along with the files:


    }

    


</script>


<script>

    // $(document).ready(function () {
    //     retrieveallSpcificCaptain();
    //     // retrieve_specific_captain_rides();
    //     // var str = "foo/bar/test.html";
    //     // var lastSlash = str.lastIndexOf("/");
    //     // alert(str.substring(lastSlash+1));
    //
    //     function retrieveallSpcificCaptain() {
    //         var captains_id = $("#driver-detail-id").val();
    //         // alert(captains_id);
    //         sendRequest("?action_type=retrieve&request_type=specific_captain&functionality_type=retrieve_specific_captain", {
    //
    //             captain_id: captains_id,
    //             // country_id:country_id,
    //             // city_id:city_id,
    //             // status:0,
    //
    //         }, "POST")
    //             .then((data) => {
    //                 var data = JSON.parse(data);
    //                 if (data.code == "202") {
    //                     // $(".pagination").html(data.pagination);
    //                     // $("#captain-table-body-id").empty();
    //                     var list = data.listOfData;
    //
    //                     for (var i = 0; i < list.length; i++) {
    //
    //                         var n = list[i].id;
    //                         var name = list[i].name;
    //                         var cap_pic = list[i].cap_pic;
    //                         var email = list[i].email;
    //                         var phone = list[i].phone;
    //                         var address = list[i].address;
    //                         var car_number_plate = list[i].car_number_plate;
    //
    //                         var ride_type_name = list[i].ride_type_name;
    //                         var ride_category = list[i].ride_category;
    //                         var car_brand_name = list[i].car_brand_name;
    //                         var car_name = list[i].car_name;
    //
    //
    //
    //
    //                         var total_revenue = list[i].total_revenue;
    //                         var total_trips = list[i].total_trips;
    //                         var avg_rating = list[i].avg_rating;
    //                         var status = list[i].status;
    //                         var car_colour = list[i].car_colour;
    //                         var bank_id = list[i].bank_id;
    //
    //
    //                         var driving_license = list[i].driving_license;
    //                         var driving_license_picture = list[i].driving_license_picture;
    //                         var driving_license_status = list[i].driving_license_status;
    //                         var driving_license_registration_no = list[i].driving_license_registration_no;
    //                         var driving_license_date_of_issue = list[i].driving_license_date_of_issue;
    //                         var driving_license_date_of_expiry = list[i].driving_license_date_of_expiry;
    //
    //                         var national_identity_card = list[i].national_identity_card;
    //                         var national_identity_card_picture = list[i].national_identity_card_picture;
    //                         var national_identity_card_status = list[i].national_identity_card_status;
    //                         var national_identity_card_registration_no = list[i].national_identity_card_registration_no;
    //                         var national_identity_card_date_of_issue = list[i].national_identity_card_date_of_issue;
    //                         var national_identity_card_date_of_expiry = list[i].national_identity_card_date_of_expiry;
    //
    //                         var car_pictures_name = list[i].car_pictures_name;
    //                         var car_pictures = list[i].car_pictures;
    //                         var car_pictures_status = list[i].car_pictures_status;
    //
    //                         var car_documents = list[i].car_documents;
    //                         var car_documents_pictures = list[i].car_documents_pictures;
    //                         var car_documents_status = list[i].car_documents_status;
    //
    //
    //                         var bank_name = list[i].bank_name;
    //                         var branch_code = list[i].branch_code;
    //                         var account_holder_name = list[i].account_holder_name;
    //                         var account_no = list[i].account_no;
    //                         var iban_no = list[i].iban_no;
    //                         var cheque_picture = list[i].cheque_picture;
    //
    //                         var date_created = list[i].date_created;
    //                         var enable = list[i].enable;
    //
    //
    //
    //
    //                         $(".car_brand_name").text(car_brand_name);
    //                         $(".car_color").text(car_colour);
    //                         $(".car_name").text(car_name);
    //                         $(".car_type").text(ride_type_name);
    //                         $(".car_ride_category").text(ride_category);
    //                         $(".car_number_plate").text(car_number_plate);
    //                         // $("#cap-car-modal").text(car_brand_name+","+car_name);
    //
    //                         // // docnument info attachments
    //                         //
    //                         // var st_checked = "";
    //                         // if (driving_license_status == 0) {
    //                         //
    //                         //     st_checked = "";
    //                         // } else {
    //                         //
    //                         //     st_checked = "Style='background: red;'";
    //                         // }
    //                         //
    //                         // console.log(driving_license_picture[0].id);
    //                         // $(".doc_detail_attach").empty();
    //                         // for(var d_pic = 0; d_pic < driving_license_picture.length; d_pic++ ){
    //                         //     var d=driving_license_picture[d_pic];
    //                         //     var text=" <div class=\"first_attachment\" id=\"licence-pic-"+d.id+"\">\n" +
    //                         //         "                                       <a href=\"../public/uploads/driver_detail_pic/"+d.picture+"\" id=\"licence-path-"+d.id+"\" alt=\"Image description\" target=\"_blank\">  <span class=\"span_img\" "+st_checked+"><i class=\"fas fa-paperclip\"></i></span><span class=\"span_text\">"+d.picture+"</span></a>  <span class=\"span_icon\"  onclick=\"deleteDocments("+d.id+");\"><i class=\"fas fa-times\"></i></span>\n" +
    //                         //
    //                         //         "                                    </div>";
    //                         //     $(".doc_detail_attach ").append(text);
    //                         // }
    //                         //
    //                         // // Cnic info attachments
    //                         //
    //                         // var national_status = "";
    //                         // if (national_identity_card_status == 0) {
    //                         //
    //                         //     national_status = "";
    //                         // } else {
    //                         //
    //                         //     national_status = "Style='background: red;'";
    //                         // }
    //                         //
    //                         // console.log(national_identity_card_picture[0].picture);
    //                         // $(".cnic_attachment").empty();
    //                         // for(var d_pic = 0; d_pic < national_identity_card_picture.length; d_pic++ ){
    //                         //     var d=national_identity_card_picture[d_pic];
    //                         //     var text=" <div class=\"first_attachment\" id=\"cnic-pic-"+d.id+"\">\n" +
    //                         //         "                                      <a href=\"../public/uploads/driver_detail_pic/"+d.picture+"\" id=\"cnic-path-"+d.id+"\" alt=\"Image description\" target=\"_blank\">  <span class=\"span_img\" "+national_status+"><i class=\"fas fa-paperclip\"></i></span><span class=\"span_text\">"+d.picture+"</span></a>  <span class=\"span_icon\" onclick=\"deleteCnic("+d.id+");\"><i class=\"fas fa-times\"></i></span>\n" +
    //                         //         "                                    </div>";
    //                         //     $(".cnic_attachment ").append(text);
    //                         // }
    //                         //
    //                         // // Bank detail  attachments
    //                         // if(cheque_picture == null){
    //                         //     $(".bankdetail_attach").empty();
    //                         // }
    //                         // else {
    //                         //     $(".bankdetail_attach").empty();
    //                         //
    //                         //     // var d=national_identity_card_picture[d_pic];
    //                         //     var text="<div class=\"first_attachment\" id=\"licence\">\n" +
    //                         //         "                                        <a href=\"../public/uploads/driver_detail_pic/"+cheque_picture+"\" class=\"check_pic\" id=\"bank-detail-path-"+bank_id+"\" alt=\"Image description\" target=\"_blank\"> <span class=\"span_img\"><i class=\"fas fa-paperclip\"></i></span><span class=\"span_text\">"+cheque_picture+"</span></a>  <span class=\"span_icon\" onclick=\"deleteBankPic("+bank_id+")\"><i class=\"fas fa-times\"></i></span>\n" +
    //                         //         "                                    </div>";
    //                         //     $(".bankdetail_attach").append(text);
    //                         // }
    //                         //
    //                         //
    //                         //
    //                         //
    //                         //
    //                         // // Car info attachments
    //                         //
    //                         // var car_status = "";
    //                         // if (car_pictures_status == 0) {
    //                         //
    //                         //     car_status = "";
    //                         // } else {
    //                         //
    //                         //     car_status = "Style='background: red;'";
    //                         // }
    //                         //
    //                         // console.log(car_pictures[0].picture);
    //                         // $(".car_detail_Attachments").empty();
    //                         // for(var d_pic = 0; d_pic < car_pictures.length; d_pic++ ){
    //                         //     var d=car_pictures[d_pic];
    //                         //     var text="<div class=\"first_attachment\" id=\"car-pic-"+d.id+"\">\n" +
    //                         //         "                                       <a href=\"../public/uploads/driver_detail_pic/"+d.picture+"\" id=\"car-info-path-"+d.id+"\" alt=\"Image description\" target=\"_blank\">   <span class=\"span_img\" "+car_status+"><i class=\"fas fa-paperclip\"></i></span><span class=\"span_text\">"+d.picture+"</span> </a> <span class=\"span_icon\" onclick=\"deleteCardAtach("+d.id+");\"><i class=\"fas fa-times\"></i></span>\n" +
    //                         //         "                                    </div>";
    //                         //     $(".car_detail_Attachments ").append(text);
    //                         // }
    //                         //
    //                         //
    //                         // // Car doc info attachments
    //                         //
    //                         // var car_doc_status = "";
    //                         // if (car_documents_status == 0) {
    //                         //
    //                         //     car_doc_status = "";
    //                         // } else {
    //                         //
    //                         //     car_doc_status = "Style='background: red;'";
    //                         // }
    //                         //
    //                         // console.log(car_documents_pictures[0].picture);
    //                         // $(".car_doc").empty();
    //                         // for(var d_pic = 0; d_pic < car_documents_pictures.length; d_pic++ ){
    //                         //     var d=car_documents_pictures[d_pic];
    //                         //     var text="<div class=\"first_attachment\" id=\"car-doc-pic-"+d.id+"\">\n" +
    //                         //         "                                       <a href=\"../public/uploads/driver_detail_pic/"+d.picture+"\" id=\"car-doc-info-path-"+d.id+"\" alt=\"Image description\" target=\"_blank\">   <span class=\"span_img\" "+car_status+"><i class=\"fas fa-paperclip\"></i></span><span class=\"span_text\">"+d.picture+"</span> </a> <span class=\"span_icon\" onclick=\"deleteCardAtach("+d.id+");\"><i class=\"fas fa-times\"></i></span>\n" +
    //                         //         "                                    </div>";
    //                         //     $(".car_doc").append(text);
    //                         // }
    //
    //
    //
    //
    //                     }
    //
    //
    //
    //                 } else if (data.code == "206") {
    //                     console.log("Failed to Delete");
    //                 }
    //
    //             })
    //             .catch((error) => {
    //                 console.log(error)
    //             });
    //     }
    //
    //
    //
    // });
</script>


</body>

</html>
