<!-- Start Main Content -->
<div class="main-content">
  <h3><?= $text_h3_heading; ?></h3>
  <form method="post">
    <!-- Name Group -->
    <div class="form-group">
      <label for="name"><?= $text_form_name; ?></label>
      <input class="form-control"
             required
             type="text"
             name="name"
             id="name"
      >
    </div>
    <!-- Age Group -->
    <div class="form-group">
      <label for="age"><?= $text_form_age; ?></label>
      <input class="form-control"
             required
             type="number"
             name="age"
             id="age"
             min="20"
             max="60"
             step="1"
      >
    </div>
    <!-- Salary Group -->
    <div class="form-group">
      <label for="salary"><?= $text_form_salary; ?></label>
      <input class="form-control"
             required
             type="number"
             name="salary"
             id="salary"
             min="1500"
             max="9000"
             step="0.01"
      >
    </div>
    <!-- Address Group -->
    <div class="form-group">
      <label for="address"><?= $text_form_address; ?></label>
      <input class="form-control"
             required
             type="text"
             name="address"
             id="address"
      >
    </div>
    <!-- Submit Button -->
    <input class="btn btn-primary" type="submit" name="submit" value="<?= $text_form_save; ?>">
  </form>
</div>
<!-- End Main Content -->
