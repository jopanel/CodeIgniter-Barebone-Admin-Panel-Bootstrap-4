<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url()?>">Dashboard</a></li>
                <li class="breadcrumb-item">Settings</li>
                <li class="breadcrumb-item"><a href="<?=base_url()?>settings/admins">Admins</a></li>
                <li class="breadcrumb-item active">Add Admin</li>
            </ol>

        <form method="POST" action="<?=base_url()?>settings/admins">
            <input type="hidden" name="action" value="add">
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Username</label>
              <div class="col-10">
                <input class="form-control" type="text" value="" placeholder="" name="username">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Password</label>
              <div class="col-10">
                <input class="form-control" type="password" value="" placeholder="" name="password">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Password Verify</label>
              <div class="col-10">
                <input class="form-control" type="password" value="" placeholder="" name="password2">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Email</label>
              <div class="col-10">
                <input class="form-control" type="email" value="" placeholder="" name="email">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Name</label>
              <div class="col-10">
                <input class="form-control" type="text" value="" placeholder="" name="name">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Address</label>
              <div class="col-10">
                <input class="form-control" type="text" value="" placeholder="" name="address">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Address 2 (Suite,Apt)</label>
              <div class="col-10">
                <input class="form-control" type="text" value="" placeholder="" name="address2">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">City</label>
              <div class="col-10">
                <input class="form-control" type="text" value="" placeholder="" name="city">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">State</label>
              <div class="col-10">
                <input class="form-control" type="text" value="" placeholder="" name="state">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Zip</label>
              <div class="col-10">
                <input class="form-control" type="text" value="" placeholder="" name="zip">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Admin Group</label>
              <div class="col-10">
                <select class="form-control" name="admin_group" required>
                <?php
                foreach ($admin_groups as $v) {
                  echo "<option value='".$v["id"]."'>".$v["name"]."</option>";
                } ?>
                </select>
              </div>
            </div> 
            <div class="form-group row"> 
              <div class="col-10">
                <input type="submit" class="btn btn-primary">
              </div>
            </div> 
            

        </form>