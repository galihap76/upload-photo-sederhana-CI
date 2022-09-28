<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload Photo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>

  <body>
  
  <div class="container">
    <div class="row text-center">
        <div class="col">
          <!-- Tampilkan poto profile -->
                <img src="<?php echo base_url('uploads/programmer.png'); ?> " width="250" height="250"/>
            </div>
        </div>
    
      <div class="row text-center mt-5">
          <div class="col">
            <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Upload photo
            </button>

          </div>
      </div>
  </div>

  <?php
  //cek jika upload poto profile berhasil di upload
if(isset($upload_data)){
   //beri peringatan
   echo "<script>               
   swal('SUCCESS', 'Upload poto berhasil di unggah.', 'success');
   </script>
   ";
}
?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Photo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <?php echo $error;?>

        <?php echo form_open_multipart('upload/do_upload');?>

        <div class="mb-3">
          <label for="formFile" class="form-label">Upload Photo</label>
          <input class="form-control" type="file" id="formFile" name="userfile">
        </div>

        <br /><br />

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" value="upload">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
