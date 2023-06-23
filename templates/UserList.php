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
        <tr>
            <td><?php echo $book->id ?></td>
            <td><?php echo $book->name ?></td>
            <td><?php echo $book->author ?></td>
    </tr>
        <?php } ?>
</tbody>
</table>