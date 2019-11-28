
<?php  include ('header.php'); ?>

<div class='container' style='margin-top: 40px'>
<div class='table'>
<table>
<thead>
<tr>
<th>ID</th>
<th>Article Title</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>

<tbody>
<?php if(count($art)):?>
<?php foreach($art as $ar):?>
<tr>
<td>1</td>
<th><?= $ar->article_title;?></th>
<td><a href="#" class='btn btn-primary'>Edit</a></td>
<td><a href="#" class='btn btn-danger'>Delete</a></td>
</tr>
<?php endforeach ;?>
<?php else:?>
<tr>
<td colspan="3"> not data avalible</td>
</tr>
<?php endif ;?>
</tbody>
</table>
</div>
</div>
<?php  include ('footer.php'); ?>