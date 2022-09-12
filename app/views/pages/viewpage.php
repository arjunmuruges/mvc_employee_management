<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/viewpage1.css">


<div class="guest">
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
  </th>

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
      <td> 
       <img src="<?= $post->image ?>" width="100px" height="100px">
      </td>
    </tr>


  <?php endforeach ?>
</table>
  </div>