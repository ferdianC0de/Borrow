<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Map</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  </head>
  <body>
    <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="modal-body">

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

    <div class="col-md-6 offset-3">
      <table class="table table-bordered">
        <thead>
            <tr>
                <th> Nama Tempat</th>
            </tr>
        </thead>

        <tbody id="body-table">
        </tbody>

    </table>
    </div>
      <script src="https://code.jquery.com/jquery-3.4.1.js" ></script>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script type="text/javascript">
      $(document).ready( function() {
        var datass = [];
        $.getJSON('data.json', function(json) {

          $.each(json, function( index, value ) {

            var table_body = $('#body-table'),
                html = '<tr> <td> <button class="click-me-senpai" data-name='+index+'> '+value.nama_tempat+' </button> </td> </tr>';

            table_body.append(html);
            datass.push(value);
          });

        });
        console.log(datass);

        $(document).on('click', '.click-me-senpai', function() {
          var data = datass[$(this).data('name')];
          var modalBody = $('#modal-body'),
              html = `<h2>${data.nama_tempat}</h2>
                      <h5>Panjang Tempat : ${data.panjang_tempat}</h5>
                      <h5>Lebar Tempat : ${data.lebar_tempat}</h5>
                      <h5>Subcount : ${data.subcount}</h5>`;
              modalBody.html("");
              modalBody.append(html);
          $('#exampleModal').modal();
        })
      })

      </script>
    <script>
    function clicka() {
      alert("wow");
    }
    </script>
  </body>
</html>
