<?php
$this->load->view('admin/header');?>
<div class="page-container">
    <?php $this->load->view('admin/slider');?>
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- PLACE CONTENT FOR ALL CHILD CODE -->
            <!-- <?php //print_r($lawyers);?> -->
            <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="lawyer_list">
                    <thead>
                        <tr>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Mobile </th>
                            <th> City </th>
                            <th> gender </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($users as $l){
                                echo "<tr>";
                                echo "<td>".$l['name']['first_name']." ".$l['name']['last_name']."</td>";
                                echo "<td>".$l['email']."</td>";
                                echo "<td>".$l['phone_no']."</td>";
                                echo "<td>".$l['city']."</td>"
                                //"</<!-- <?php //print_r($lawyers);?> -->
                                <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="lawyer_list">
                                        <thead>
                                            <tr>
                                                <th> Name </th>
                                                <th> Email </th>
                                                <th> Mobile </th>
                                                <th> City </th>
                                                <th> State </th>
                                                <th> Country </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach($clients as $l){
                                                    echo "<tr>";
                                                    echo "<td>".$l['name']['first_name']." ".$l['name']['last_name']."</td>";
                                                    echo "<td>".$l['email']."</td>";
                                                    echo "<td>".$l['phone_no']."</td>";
                                                    echo "<td>".$l['city']."</td>";
                                                    
                                                    ?>
                                                    <td>
                                                        <button class="btn btn-primary btn-xs">
                                                           <a href="<?php echo base_url('admin/lawyer/edit/'.$l['_id']) ; ?>"> <i class="fa fa-pencil"></i></a>
                                                        </button>
                                                        <button class="btn btn-danger btn-xs">
                                                           <a href="<?php echo base_url('admin/lawyer/delete/'.$l['_id'])?>"> <i class="fa fa-trash-o"></i></a>
                                                        </button>
                                                    </td>
                                                    <?php
                                                    echo "</tr>";
                                                }
                                            ?>
                                        </tbody>
                                </table>
                                <td>
                                    <button class="btn btn-primary btn-xs">
                                       <a href="<?php echo base_url('admin/lawyer/edit/'.$l['_id']) ; ?>"> <i class="fa fa-pencil"></i></a>
                                    </button>
                                    <button class="btn btn-danger btn-xs">
                                       <a href="<?php echo base_url('admin/lawyer/delete/'.$l['_id'])?>" <i class="fa fa-trash-o "></i></a>
                                    </button>
                                </td>
                                <?php
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>
<?php $this->load->view('admin/footer');?>