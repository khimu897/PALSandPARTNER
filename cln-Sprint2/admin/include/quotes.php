<!--    Hover Rows  -->
<div class="panel panel-default">
   <div class="panel-heading">
       Requested Quotes
   </div>
   <div class="panel-body">
       <div class="table-responsive">
           <table class="table table-striped table-bordered table-hover" id="dataTables-example">
               <thead>
                   <tr>
                       <th>SN</th>
                       <th>Name</th>
                       <th>Email</th>
                       <th>Phone</th>
                       <th>Area</th>
                       <th>Service</th>
                       <th>Frequency</th>
                   </tr>
               </thead>
               <tbody>
                 <?php
                   $result = getQuotes();
                   $sn=1;
                   while($row=mysqli_fetch_assoc($result)){
                   ?>
                   <tr>
                       <td><?php echo $sn?></td>
                       <td><?php echo $row['name']?></td>
                       <td><?php echo $row['email']?></td>
                       <td><?php echo $row['phone']?></td>
                       <td><?php echo $row['area']?> &#13217;</td>
                       <td><?php echo $row['service']?></td>
                       <td><?php echo $row['frequency']?></td>
                   </tr>
                 <?php
                   $sn++;
                   }
                 ?>


               </tbody>
           </table>
       </div>
   </div>
</div>
<!-- End  Hover Rows  -->
