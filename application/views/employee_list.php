<body>  
 <h3 class="text-center text-inverse"> Employee List</h3>
      <div class="container box" style="margin-left: 294px;">  
       <table id="user_data" class="table table-bordered table-striped">  
                     <thead>  
                          <tr>  
                               <th width="10%">Image</th>  
                               <th width="35%">Name</th>  
                               <th width="35%">Email</th>  
							   <th width="35%">Desigination</th> 
                               <th width="10%">Edit</th>  
                               <th width="10%">Delete</th>  
                          </tr>  
                     </thead>  
                </table>  
           
      </div>  
 </body>  
 </html>  
 
 <script type="text/javascript" language="javascript" >  
 $(document).ready(function(){  
    
      var dataTable = $('#user_data').DataTable({  
		"autoWidth": false,
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'Employee/ajaxlist'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 4, 5],  
                     "orderable":false,  
                },  
           ],  
      });  
    
      
 });  
 </script>  