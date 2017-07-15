<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
?>



            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url()?>">Dashboard</a></li>
                <li class="breadcrumb-item">Settings</li>
                <li class="breadcrumb-item active">Groups</li>
            </ol>
 

            <!-- Example Tables Card -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Admin Groups <a href="<?=base_url()?>settings/groups/add"><button class="btn btn-primary">+</button></a>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th> 
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th> 
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php foreach ($groups as $v) { ?>
                                <tr>
                                    <td><?=$v["id"]?></td>
                                    <td><?=$v["name"]?></td> 
                                    <td><form method="POST" action="" style="display:inline;"><input type="hidden" name="action" value="delete"><input type="hidden" name="id" value="<?=$v["id"]?>"><input type="submit" class="btn btn-primary" value="Delete"></form> <a href="<?=base_url()?>settings/groups/edit/<?=$v["id"]?>"><button class="btn btn-primary">Edit</button></a> </td>
                                </tr>
                            <?php } ?> 
                            </tbody>
                        </table>
                    </div>
                </div> 
            </div>