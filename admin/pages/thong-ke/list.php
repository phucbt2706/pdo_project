<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Loại hàng</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Giá cao nhất</th>
            <th scope="col">Giá thấp nhất</th>
            <th scope="col"> Giá trung bình</th>
        </tr>
    </thead>
    
    <tbody>
        <?php
        if (!empty($item)) {
            foreach ($items as $item) {
                extract($item)?>
                <tr>
                    <td><?= ""?></td>
                    <td><?= "" ?></td>
                    <td><?= "" ?></td>
                    <td><?= "" ?></td>
                    <td><?= "" ?></td>
                </tr>
            <?php
            }
        }else{
            echo "Không có dữ liệu";
        }
        
        ?>
    </tbody>
</table>