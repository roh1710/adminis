<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
    <script>

    $('.modal-global').click(function(event) {
        event.preventDefault();

        var url = $(this).attr('href');

        $("#modal-global").modal('show');

        $.ajax({
            url: {{ route('display') }}',,
            type: 'GET',
            dataType: 'html',
        })
        .done(function(response) {
            $("#modal-global").find('.modal-body').html(response);
        });

    });
    </script>