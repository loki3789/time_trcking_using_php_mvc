


<table style="margin-top: 100px;">
                <tr>
                    <th>Working on</th>
                    <th>Category</th>
                    <th>Duration</th>
                    <th>Date</th>
                </tr>
              <?php foreach ($posts as $post): ?>  
                <tr>
                    <td><?php echo $post['working_on']; ?></td>
                    <td><?php echo $post['category']; ?></td>
                    <td><?php echo $post['time']; ?></td>
                    <td><?php echo $post['date']; ?></td>
                </tr>
                <?php endforeach;?>
            </table>

        </div>

    </body>
</html>

