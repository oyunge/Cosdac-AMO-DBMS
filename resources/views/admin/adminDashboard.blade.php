<html>
    <head>

    </head>
    <body>
        <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered table-hover table-responsive-sm users-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Joined</th>
                            <th>Action</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                  
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</body>
    </html>
    <script type="text/javascript">
  $(document).ready(function(){
    $('.users-table').DataTable({
      processing:true,
      serverSide:true,
      ajax:{
        url:"{{route('admin.users')}}",
      }, 
      columns:[
        {
          data: 'name',
          name: 'name'
        },
        {
          data: 'email',
          name: 'email'
        },
        {
          data: 'profession',
          name: 'profession'
        },
        {
          data: 'created_at',
          name: 'created_at'
        },
        {
          data: 'action',
          name: 'action',
          orderable:false
        }
      ]
    });
  });
</script>