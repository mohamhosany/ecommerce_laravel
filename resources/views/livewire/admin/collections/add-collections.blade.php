<div>


<div>
<div class="container-fluid">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Collection Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Collection Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Collection</h3>

              <!-- <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div> -->
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Title</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
              </div>

              <div class="form-group">
                <label for="inputStatus">Collection Status</label>
                <select class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option>active</option>
                  <option>draft</option>

                </select>
              </div>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary ">
            <div class="card-header">
              <h3 class="card-title">Media</h3>

              <!-- <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div> -->
            </div>
            <div class="card-body">
            <form class="md-form">
          <div class="file-field">
            <div class="z-depth-1-half mb-4">
              <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" class="img-fluid"
                alt="example placeholder">
            </div>
            <div class="d-flex justify-content-center">
              <div class="btn btn-primary ">
                <span>Choose image</span>
                <input type="file">
              </div>
            </div>
          </div>

        </form>
        </div>

            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Create new collection" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    </div>
</div>




</div>
