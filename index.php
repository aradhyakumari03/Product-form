<form action="submit-product.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="product_title" class="col-sm-2 col-form-label">Product Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="product_title" name="product_title" required>
    </div>
  </div>

  <div class="form-group">
    <label for="product_description" class="col-sm-2 col-form-label">Product Description</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="product_description" name="product_description" rows="3" required></textarea>
    </div>
  </div>

  <div class="form-group">
    <label for="sale_price" class="col-sm-2 col-form-label">Sale Price</label>
    <div class="col-sm-10">
      <input type="number" step="0.01" class="form-control" id="sale_price" name="sale_price" min="0" required>
      <small id="salePriceHelp" class="form-text text-muted">Sale price should be less than regular price.</small>
    </div>
  </div>

  <div class="form-group">
    <label for="regular_price" class="col-sm-2 col-form-label">Regular Price</label>
    <div class="col-sm-10">
      <input type="number" step="0.01" class="form-control" id="regular_price" name="regular_price" min="0" required>
    </div>
  </div>

  <div class="form-group">
    <label for="status" class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-10">
      <select class="form-control" id="status" name="status" required>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="sku_code" class="col-sm-2 col-form-label">SKU Code</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="sku_code" name="sku_code" required>
    </div>
  </div>

  <div class="form-group">
    <label for="product_image" class="col-sm-2 col-form-label">Product Image</label>
    <div class="col-sm-10">
      <input type="file" class="form-control-file" id="product_image" name="product_image" required>
    </div>
  </div>

  <!-- Add more form fields as needed -->
</form>