<?php  
 $connect = mysqli_connect("localhost", "root", "", "books.toscrape");  
 $query ="SELECT * FROM data ORDER BY Title";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Books.toScrape | Datatables Jquery Plugin with Php MySql and Bootstrap</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3 align="center">Books.toScrape Data</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="booktable" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Title</td>  
                                    <td>Rating</td>  
                                    <td>Price</td>  
									<td>Stock</td>  
                                    <td>Description</td>  
                                    <td>Genre</td>
									<td>UPC</td> 
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["Title"].'</td>  
                                    <td>'.$row["Rating"].'</td>  
                                    <td>'.$row["Price"].'</td> 
									<td>'.$row["Stock"].'</td> 
                                    <td>'.$row["Description"].'</td> 
									<td>'.$row["Genre"].'</td>  
                                    <td>'.$row["UPC"].'</td>  
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#booktable').DataTable();  
 });  
 </script>  