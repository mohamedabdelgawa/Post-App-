<?php 

$posts = "SELECT `postid`, `header`, `content`, `calender`, `Clock` FROM `posts` ";
$result = mysqli_query($connection,$posts);
?>

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Header</th>
                <th>Content</th>
                <th>Date</th>
                <th>Time</th>
				<th>Edit</th>
				<th>Delete</th>
            </tr>
        </thead>
        <tbody>
			<?php while($arrseq = mysqli_fetch_array($result)){ 
         echo   "<tr>
                <td>$arrseq[1]</td>
                <td>$arrseq[2]</td>
                <td>$arrseq[3]</td>
                <td>$arrseq[4]</td>
                <td><a href='dashboard.php?page=edit.php&id=$arrseq[0]' class='glyphicon glyphicon-edit'></td>
                <td><a href='dashboard.php?page=delete.php&id=$arrseq[0]' class='glyphicon glyphicon-trash'></td>
            </tr>";
}
				?>
        </tbody>
        <tfoot>
            <tr>
                <th>Header</th>
                <th>Content</th>
                <th>Date</th>
                <th>Time</th>
				<th>Edit</th>
				<th>Delete</th>
            </tr>
        </tfoot>
    </table>

<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>