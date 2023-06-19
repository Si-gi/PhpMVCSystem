<table>
<thead>
    <tr>
        <th>Id</th>
        <th>Email</th>
        <th>HashedPass</th>
    </tr>
</thead>
<tbody>
    <?php foreach($variables as $book) {?>
        <tr><?php echo $book->id ?></tr>
        <?php } ?>
</tbody>
</table>