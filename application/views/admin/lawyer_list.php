<?php
$this->load->view('admin/header');?>
<link href="<?php echo base_url(); ?>admin_assests/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
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
                            <th> State </th>
                            <th> Country </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($lawyers as $l){
                                echo "<tr>";
                                echo "<td>".$l['name']['first_name']." ".$l['name']['last_name']."</td>";
                                echo "<td>".$l['email']."</td>";
                                echo "<td>".$l['phone_no']."</td>";
                                echo "<td>".$l['city']."</td>";
                                echo "<td>".$l['state']."</td>";
                                echo "<td>".$l['country']."</td>";
                                ?>
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
<script type="text/javascript">
    $(document).ready(function(){
                $('#lawyer_list').DataTable();
    });
</script>
<?php $this->load->view('admin/footer');?>
