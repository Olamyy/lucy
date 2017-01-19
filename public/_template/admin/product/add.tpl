{include file="./addproductheader.tpl"}
{include file='../navmenu.tpl'}

<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar row">
            <div class="col-lg-6 col-md-4 col-sm-4">
                <h4 class="nav_top_align">
                    <i class="fa fa-plus"></i>
                    Add Product
                </h4>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-8">
                <ol class="breadcrumb float-xs-right nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="index.html">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{$BASE_URL}index.php/Product/view">Products</a>
                    </li>
                    <li class="breadcrumb-item active">New Product</li>
                </ol>
            </div>
        </div>
    </header>
    <div class="outer form_wizzards">
        <div class="inner bg-container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-white">
                            <i class="fa fa-file-text-o"></i>
                            New Product
                        </div>
                        <div class="card-block m-t-20">
                            <div id="rootwizard_no_val">
                                <ul class="nav nav-pills">
                                    <li class="nav-item user1 m-t-15">
                                        <a class="nav-link" href="#tab11" data-toggle="tab"><span
                                                    class="userprofile_tab">1</span>Basic Product Details</a>
                                    </li>
                                    <li class="nav-item user2 m-t-15">
                                        <a class="nav-link profile_details" href="#tab21"
                                           data-toggle="tab"><span class="profile_tab">2</span>Basic Features</a>
                                    </li>
                                    <li class="nav-item  m-t-15">
                                        <a class="nav-link " href="#tab31" data-toggle="tab"><span>3</span>Extra Features</a>
                                    </li>
                                    <li class="nav-item finish_tab m-t-15">
                                        <a class="nav-link " href="#tab41" data-toggle="tab"><span>4</span>Image</a>
                                    </li>
                                </ul>
                                <form method="post" action="{$BASE_URL}index.php/admin/product/add" id="add_product_form">
                                <div class="tab-content m-t-20">
                                    <div class="tab-pane" id="tab11">
                                        <div class="form-group">
                                            <label for="userName1" class="control-label">Product Name</label>
                                            <input id="userName1" name="product_name" type="text" placeholder="Enter the name of the product"
                                                   class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <h5>Product Description</h5>
                                            <textarea id="text4" class="form-control" cols="500" rows="15" name="product_description" placeholder="Product Description" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="userName1" class="control-label">Meta Tag Title</label>
                                            <input id="userName1" type="text" placeholder="Meta Tag Title" name="product_meta_title"
                                                   class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <h5>Meta Tag Description</h5>
                                            <textarea id="text4" class="form-control" name="product_meta_description" cols="500" rows="5" placeholder="Meta Tag Description" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <h5>Meta Tag Keywords</h5>
                                            <textarea id="text4" class="form-control" name="prodcut_meta_keywords" cols="500" rows="5" placeholder="Meta Tag Keywords" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <h5>Product Tags</h5>
                                            <input name="product_tags" id="tags" class="form-control"  placeholder="Separate tags with commas" required>
                                        </div>
                                        <ul class="pager wizard pager_a_cursor_pointer">
                                            <li class="previous previous_btn1"><a>Previous</a></li>
                                            <li class="next next_btn1"><a>Next</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="tab21">
                                        <div class="form-group">
                                            <label for="name" class="control-label">Model</label>
                                            <input id="name" name="product_model" placeholder="Model"
                                                   type="text" class="form-control required" >
                                        </div>
                                        <div class="form-group">
                                            <label for="surname" class="control-label">ISBN</label>
                                            <input id="surname" name="product_isbn" type="text"
                                                   placeholder="ISBN"
                                                   class="form-control required">
                                        </div>
                                        <div class="form-group">
                                            <label for="surname" class="control-label">MPN</label>
                                            <input id="surname" name="product_mpn" type="text"
                                                   placeholder="MPN"
                                                   class="form-control required" >
                                        </div>
                                        <div class="form-group">
                                            <label for="surname" class="control-label">Price</label>
                                            <input id="surname" name="product_price" type="text"
                                                   placeholder="Price"
                                                   class="form-control required">
                                        </div>
                                        <div class="form-group">
                                            <label for="surname" class="control-label">Quantity Available</label>
                                            <input id="surname" name="product_quantity" type="text"
                                                   placeholder="Quantity Available"
                                                   class="form-control required">
                                        </div>
                                        <div class="form-group">
                                            <label for="surname" class="control-label">Minimum Quantity</label>
                                            <input id="surname" name="product_min_quantity" type="text"
                                                   placeholder="Minimum Quantity"
                                                   class="form-control required">
                                        </div>
                                        <div class="form-group">
                                            <label>Out Of Stock Time Range</label>
                                            <select class="custom-select form-control"
                                                    title="Out Of Stock Time Range" name="out_of_stock_range">
                                                <option>2-3 days</option>
                                                <option>1 - 2week</option>
                                                <option>3 weeks - 1 month</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Requires Delivery</label>
                                            <select class="custom-select form-control"
                                                    title="Delivery" name="requires_delivery">
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="address1">Date Available</label>
                                            <input id="address1" type="text" class="form-control" name="date_available">
                                        </div>
                                        <div class="form-group">
                                            <label>Available</label>
                                            <select class="custom-select form-control"
                                                    title="Available" name="availability">
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                        <ul class="pager wizard pager_a_cursor_pointer">
                                            <li class="previous previous_btn2"><a>Previous</a></li>
                                            <li class="next next_btn2"><a>Next</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="tab31">
                                        <div class="form-group">
                                            <label>Manufacturer Name</label>
                                            <input type="text" class="form-control general_number" name="manufacture_name" placeholder="Manufacturer Name">
                                        </div>
                                        <div class="form-group">
                                            <h5>Categories</h5>
                                            <textarea id="text4" class="form-control" name="product_categories" cols="50" rows="5" placeholder="Separate categories with commas" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <h5>Search Filters</h5>
                                            <textarea id="text4" class="form-control" name="product_search_filters" cols="50" rows="5" placeholder="Separate filters with commas" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <h5>Related Products</h5>
                                            <textarea id="text4" class="form-control" name="related_products" cols="50" rows="5"  placeholder="Separate product names with commas" required></textarea>
                                        </div>
                                        <ul class="pager wizard pager_a_cursor_pointer">
                                            <li class="previous previous_btn3"><a>Previous</a></li>
                                            <li class="next"><a>Next</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="tab41">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="ca card file_input m-t-35">
                                                    <div class="card-header bg-white">
                                                        Upload Product Image
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-lg-12 m-t-35">
                                                                <h5>File Upload</h5>
                                                                <input id="input-fa" name="inputfa[]" type="file" multiple class="file-loading">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <ul class="pager wizard">
                                            <li class="previous previous_btn3"><a>Previous</a></li>
                                            <li class="next" id="finish"><a>Finish</a></li>
                                        </ul>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.inner -->
</div>

{include file="./addproductfooter.tpl"}

