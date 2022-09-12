<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/adminpage1.css">

  <form method="post" action="<?php echo URLROOT . 'pages/search' ?>">
    <div class="search">
      <div class="search1">
        <input id="input" type="text" placeholder="search " class="searchbox" name="search">
        <input type="submit" value="search" class="searchbox" id="searchbtn">
      </div>
  </form>
  <form method="post" action="<?php echo URLROOT . 'pages/logout' ?>">
    <input type="submit" name="admin" value="logout">
  </form>
  <form action="<?php echo URLROOT . 'pages/insert' ?>" method="post">
    <button>Add_data</button>
  </form>
  <div class="search3">
    <form action="<?php echo URLROOT . 'pages/viewdata' ?>" method="post">
      <button>view</button>
    </form>
  </div>
  </div>
  <?php
  if(isset($data['$error']))
  {
  print_r($data['$error']);
  }
?>
  <div class='v'>
  <table>
    <th>Emp_id</th>
    <th>Emp_fname</th>
    <th>Emp_lname</th>
    <th>Emp_email</th>
    <th>Emp_number</th>
    <th>Emp_street</th>
    <th>Emp_state</th>
    <th>Emp_country</th>
    <th>pincode</th>
    <th>image</th>
    <th>Action </th>
    <?php foreach ($data['posts'] as $post) : ?>
      <tr>
        <td><?= $post->Emp_id ?></td>
        <td><?= $post->Emp_fname ?></td>
        <td><?= $post->Emp_lname ?></td>
        <td><?= $post->Emp_email ?></td>
        <td><?= $post->Emp_number ?></td>
        <td><?= $post->Emp_street ?></td>
        <td><?= $post->Emp_state ?></td>
        <td><?= $post->Emp_country ?></td>
        <td><?= $post->pincode ?></td>
        <td> <img src='<?=  $post->image ?>' width="100px" height="100px"> </td>
        <td>
          <button><a class="btn" href="http://localhost/mvc/pages/delete/<?php echo $post->Emp_id; ?>">Delete</a></button>
          <button><a class="btn1" href="http://localhost/mvc/pages/edit/<?php echo $post->Emp_id; ?>">edit</a></button>
    
        </td>
      </tr>


    <?php endforeach ?>
  </table>
    </div>
    <br>
    <br>
  <button id="btnExport" onclick="exportReportToExcel(this)">EXPORT REPORT</button>
  <script>
    function exportReportToExcel() {
      let table = document.getElementsByTagName("table"); 
      // let csvData = table[0].getElementsByTagName('td');
      // for(let i=0; i< csvData.length; i++){
      //   if((i % 11) == 0) {
      //     if(csvData[i-2]){
      //       csvData[i-2] = csvData[i-2].getElementsByTagName('img')[0].src
      //     }
      //   }
      // }
      // table[0].innerHTML = "<table>"+csvData+"</table";
      TableToExcel.convert(table[0], { 
        name: `export.xlsx`, 
        sheet: {
          name: 'Sheet 1' 
        }
      });

    }
  </script>
  <script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>


</body>

</html>