<!-- Start Main Content -->
<div class="main-content">
  <h3><?= $text_h3_heading; ?></h3>

  <a class="btn btn-primary mb-4" href="/employee/add">
    <i class="fas fa-user-plus mx-1"></i>
    <?= $text_button_add_new; ?>
  </a>
  <!--<hr>-->
  <div class="table-responsive my-3">
    <table class="table table-bordered bg-white dataTable">
      <!-- Head -->
      <thead class="thead-dark">
        <tr>
          <th><?= $text_table_employee_name; ?></th>
          <th><?= $text_table_employee_age; ?></th>
          <th><?= $text_table_employee_salary; ?></th>
          <th><?= $text_table_employee_address; ?></th>
          <th><?= $text_table_employee_action; ?></th>
        </tr>
      </thead>
      <!-- Body -->
      <tbody>
        <!-- Records -->
        <?php
        // Check Records
        if(!empty($employeeRow)) {
          // Loop Through Records
          foreach($employeeRow as $row) {
            ?>
            <tr>
              <td><?= $row['name'] ?></td>
              <td><?= $row['age'] ?></td>
              <td><?= $row['salary'] ?> <?= $text_table_employee_salary_abbr; ?></td>
              <td><?= $row['address'] ?></td>
              <td class="control">
                <a class="mr-3" href="/employee/edit/<?= $row['id'] ?>">
                  <i class="fa fa-edit"></i>
                </a>
                <a href="/employee/delete/<?= $row['id'] ?>"
                   onclick="if(!confirm('<?= $text_table_employee_delete_confirm; ?>')) return false;">
                  <i class="fa fa-trash"></i>
                </a>
              </td>
            </tr>
            <?php
          }
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
<!-- Start Main Content -->
