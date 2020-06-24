    @extends('admin.pages.back-end.master')

    @section('title')
    Edit Brand
    @endsection
    @section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Brand Form Edit
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Brand</a></li>
        <li class="active"> Edit</li>
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
              <h3 class="box-title"> Edit Brand </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Brand Title</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Title">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Brand Description</label>

                  <div class="col-sm-10">
                     <textarea class="form-control" rows="3" name="description" placeholder="Description ..."></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"> Brand Image Upload</label>

                  <div class="col-sm-10">
                   <input type="file" id="exampleInputFile" name="image">

                   <p class="help-block">Example block-level help text here.</p>
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