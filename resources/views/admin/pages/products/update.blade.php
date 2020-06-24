    @extends('admin.pages.back-end.master')

    @section('title')
    Edit Product
    @endsection
    @section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product Form Edit
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Products</a></li>
        <li class="active">Edit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Products Edit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="category_id">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Brand Name</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="brand_id">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Title</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" id="inputEmail3" placeholder="Title">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Description</label>

                  <div class="col-sm-10">
                     <textarea class="form-control" rows="3" name="description" placeholder="Description ..."></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Slug</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="slug" placeholder="Slug">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Quantity</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="quantity" placeholder="Quantity">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Price</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="price" placeholder="Price">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"> Status</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="status">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Offer Price</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="offer_price" placeholder="Offer Price">
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">File input</label>

                  <div class="col-sm-10">
                   <input type="file" id="exampleInputFile">

                   <p class="help-block">Example block-level help text here.</p>
                 </div>
               </div> -->
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Admin ID</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="admin_id" placeholder="Admin ID">
                  </div>
                </div>
               <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label"></label>

                <div class="col-sm-10">
                 <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </div>

          </div>
          <!-- /.box-body -->             
        </form>
      </div>
      <!-- /.box -->

    </div>
    <!--/.col (left) -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection