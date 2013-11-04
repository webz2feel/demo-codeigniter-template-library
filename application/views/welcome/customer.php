<table class="table">
	<thead>
    	<tr>
        	<th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($customers as $key => $value): ?>
        <tr>
            <td><?=$key?></td>
            <td><?=$value?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>